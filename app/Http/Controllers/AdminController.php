<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $template = 'admin';

    public function indexAction()
    {
        $template = $this->template;


        return view('pages.admin.index', compact('template'));

    }
}
