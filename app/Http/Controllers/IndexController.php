<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Validators\LoginValidator;


class IndexController extends Controller
{
    private $template = 'default';
    public function indexAction()
    {
        $template = $this->template;
        return view('pages.index', compact('template'));

    }

    public function loginAction()
    {
        $template = $this->template;

        return view('pages.login', compact('template'));

    }

    public function loginrequestAction(Request $request)
    {
        // dd($request);
        $validator = LoginValidator::loginValidator($request);
        
        // dd($validator);                               
        if($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }
        return redirect()->route('cabinet');

    }

    public function cabinetAction()
    {
        $template = $this->template;

        return view('pages.cabinet', compact('template'));

    }
    
    
}
