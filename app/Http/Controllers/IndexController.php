<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class IndexController extends Controller
{
    private $template = 'default';

    public function indexAction()
    {
        $template = $this->template;
        $categories = Category::get();
        $flag = true;

        return view('pages.index', compact('template', 'categories', 'flag'));

    }
    public function categoryAction($id)
    {
        $template = $this->template;
        $category = Category::where('id', $id)->first();
        return view('pages.category', compact('template', 'category'));

    }
}
