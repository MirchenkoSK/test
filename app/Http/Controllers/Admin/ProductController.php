<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Helpers\ImageBuilder;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->template .= '.product.';
        $this->active = 'product';
    }

    public function index()
    {
        $this->products = Product::all();
        $this->template .= 'index';
        return $this->fire();
    }

    public function create()
    {
        $this->template .= 'create';
        return $this->fire();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'image' => 'required|image',
            'price' => 'required|numeric|min:0|max:999999999.99'
        ]);

        $imageBuilder = new ImageBuilder($request->image);

        $product = new Product();
        $product->name = $request->name;
        $product->image = $imageBuilder->create();
        if ($product->save()) {
            $product->price()->create($this->getPrice($request->price));
            return redirect()->route('admin.product')->with('status', 'Created Product.');
        }

        return back()->with('status', 'Whoops, looks like something went wrong.');
    }

    public function show($id)
    {
        if (!$this->product = Product::find($id)) {
            return back()->with('status', 'Product Not Found');
        }
        $this->template .= 'show';
        return $this->fire();
    }

    public function edit($id)
    {
        if (!$this->product = Product::find($id)) {
            return back()->with('status', 'Product Not Found');
        }
        $this->template .= 'edit';
        return $this->fire();
    }

    public function update(Request $request, $id)
    {
        if (!$product = Product::find($id)) {
            return back()->with('status', 'Product Not Found');
        }

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'image' => 'nullable|image',
            'price' => 'required|numeric|min:0|max:999999999.99'
        ]);

        if ($request->hasFile('image')) {
            $imageBuilder = new ImageBuilder($request->image);
            $product->image = $imageBuilder->create();
        }

        $product->name = $request->name;
        if ($product->save()) {
            $price = $product->price;
            $price->fill($this->getPrice($request->price));
            $price->save();
            // dd($price);
            return redirect()->route('admin.product.show', $product->id)->with('status', 'Updated Product.');
        }

        return back()->with('status', 'Whoops, looks like something went wrong.');
    }

    public function destroy($id)
    {
        if (!$product = Product::find($id)) {
            return back()->with('status', 'Product Not Found');
        }
        if ($product->delete()) {
            return redirect()->route('admin.product')->with('status', 'Deleted Product.');
        }
        return back()->with('status', 'Whoops, looks like something went wrong.');
    }

    public function getPrice($price)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11');
        $obj = json_decode($response->getBody());

        $price = $price * 100;

        $arr = [];
        $arr['UAH'] = (int) $price;
        foreach ($obj as $cur) {
            $sale = $cur->sale * 100;
            $arr[$cur->ccy] = (int) $sale;
        }

        $result['uah'] = $arr['UAH'] / 100;
        $result['usd'] = $price / $arr['USD'];
        $result['eur'] = $price / $arr['EUR'];

        // dd($result);

        return $result;
    }
}
