<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocController extends Controller
{
    public function doc()
    {
        return view('wolf.page.doc');
    }

    public function navbar()
    {
        return view('wolf.page.navbar');
    }

    public function button()
    {
        return view('wolf.page.button');
    }

    public function typography()
    {
        return view('wolf.page.typography');
    }

    public function table()
    {
        return view('wolf.page.table');
    }

    public function form()
    {
        return view('wolf.page.form');
    }

    public function nav()
    {
        return view('wolf.page.nav');
    }

    public function indicator()
    {
        return view('wolf.page.indicator');
    }

    public function progress()
    {
        return view('wolf.page.progress');
    }

    public function container()
    {
        return view('wolf.page.container');
    }

    public function dialog()
    {
        return view('wolf.page.dialog');
    }
}
