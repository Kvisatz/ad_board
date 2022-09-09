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
use App\Helpers\CheckuserHelper;



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
        if(isset($request->avatar))
        {
            $request->avatar->store('/public/avatars');

		    $avatarName = $request->avatar->hashName(); 
        }
                                     
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
    public function testAction()
    {
        $template = $this->template;

        // $bootstrap = true;

        return view('pages.test', compact('template'));
        

    }
    
}
