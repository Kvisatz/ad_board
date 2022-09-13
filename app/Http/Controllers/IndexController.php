<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Validators\LoginValidator;
use App\Validators\UserinfoValidator;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use App\Models\Advertisment;
use App\Helpers\CheckuserHelper;



class IndexController extends Controller
{
    private $template = 'default';

    public function indexAction()
    {
        $template = $this->template;

        $categories = Category::get();

        $adverts = Advertisment::get();
        // dd($adverts);
        $vipAdverts = Advertisment::where('vip', true)->take(5)->get();
        // dd($vipAdverts);


        $flag = true;

        return view('pages.index', compact('template', 'categories', 'flag', 'adverts','vipAdverts'));

    }
    public function categoryAction($id)
    {
        $template = $this->template;
        $category = Category::where('id', $id)->first();
        return view('pages.category', compact('template', 'category'));

    }

    public function loginAction()
    {
        $template = $this->template;

        return view('pages.login', compact('template'));

    }

    public function loginrequestAction(Request $request)
    {
        $validator = LoginValidator::loginValidator($request);
                              
        if($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('cabinet');
        }
        else{
            return redirect()->route('login');
        }        

    }

    public function datarequestAction(Request $request)
    {

        $validator = UserinfoValidator::userinfoValidator($request);
        
                                     
        if($validator->fails())
        {
            return redirect()->route('cabinet')->withErrors($validator)->withInput();
        }
        CheckuserHelper::changeuser(Auth::user()->id, $request);
        

        return redirect()->route('cabinet')->with('success', 'Информация измеена')->withInput();
                

    }
    

    public function logoutAction(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function cabinetAction()
    {
        $template = $this->template;

        

        return view('pages.cabinet', compact('template'));

    }


    public function favoriteAction()
    {
        $template = $this->template;

       $user = User::where('id', Auth::user()->id)->first();

        return view('pages.cabinetfavorite', compact('template', 'user'));
        

    }

    public function myadvertsAction()
    {
        $template = $this->template;

       $user = User::where('id', Auth::user()->id)->first();

        return view('pages.myadverts', compact('template', 'user'));
        

    }

    public function advertAction($id)
    {
        $template = $this->template;

        $advert = Advertisment::where('id', $id)->first();

        // dd($advert);

        return view('pages.advert', compact('template', 'advert'));
        

    }
    
    
}
