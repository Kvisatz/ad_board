<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $template = 'default';
    public function indexAction()
    {
        $template = $this->template;
        return view('pages.index', compact('template'));

    }
}
