<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    protected $template = 'wolf';
    private $vars = [];

    public function __get($name)
    {
    	return $this->vars[$name];
    }

    public function __set($name, $value)
    {
    	$this->vars[$name] = $value;
    }

    protected function fire()
    {
    	// dd([$this->template, $this->vars]);
    	return view($this->template)->with($this->vars);
    }
}
