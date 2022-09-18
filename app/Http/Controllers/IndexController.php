<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Validators\LoginValidator;
use App\Validators\UserinfoValidator;
use App\Validators\NewadvertValidator;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use App\Models\Advertisment;
use App\Models\Region;
use App\Helpers\CheckuserHelper;
use App\Helpers\NewadvertaddHelper;
use App\Helpers\RegisteruserHelper;
use App\Helpers\AdvertupdateHelper;
use App\Http\Requests\SearchRequest;
use App\Http\Filters\AdvertismentFilter;



class IndexController extends Controller
{
    private $template = 'default';

    public function indexAction()
    {
        $template = $this->template;

        $categories = Category::get();

        $adverts = Advertisment::get();
        
        $vipAdverts = Advertisment::where('vip', true)->take(5)->get();
        
        $regions = Region::get();
        
        $flag = true;

        return view('pages.index', compact('template', 'categories', 'regions', 'flag', 'adverts','vipAdverts'));

    }
    public function categoryAction($id)
    {
        $template = $this->template;

        $category = Category::where('id', $id)->first();

        if(!$category){
            abort(404);
        }

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

    public function registerAction()
    {
        $template = $this->template;

        return view('pages.register', compact('template'));

    }

    public function registerexecutionAction()
    {
        $template = $this->template;

        return view('pages.registerexecute', compact('template'));

    }
    

    public function registerrequestAction(Request $request)
    {

        $validator = UserinfoValidator::userinfoValidator($request);        
                                     
        if($validator->fails())
        {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        $registerHelper = RegisteruserHelper::registerUser($request);
        
        if(!$registerHelper){
            return redirect()->route('register')->with('fail', 'Логин или email уже используются')->withInput();
        }
        

        return redirect()->route('register-execution')->with('success', 'Пользователь зарегистрирован')->withInput();
                

    }
    
    
    // добавление обьявления авторизованным пользователем из кабинета
    public function newadvertrequestAction(Request $request)
    {
        $validator = NewadvertValidator::advertValidator($request);
                           
        // if($validator->fails()) {
        //     return redirect()->route('new-advert')->withErrors($validator)->withInput();
        // }
        if($request->form_id != 'add'){
            //маршрутизация для редактирования обьявления
            if($validator->fails()) {
                return redirect()->route('new-advert')->withErrors($validator)->withInput();
            }

            $newadvert = AdvertupdateHelper::updateAdvert($request, Auth::user()->id);

            return redirect()->route('myadverts')->with('success', 'Обьявление успешно отредактировано')->withInput(); 

        }
        else{
            //маршрутизация для добавления нового обьявления

            if($validator->fails()) {
                return redirect()->route('new-advert')->withErrors($validator)->withInput();
            }

            $newadvert = NewadvertaddHelper::addadvert('title', $request);

            return redirect()->route('myadverts')->with('success', 'Обьявление успешно размещено')->withInput(); 
        }
        
              

    }

    // удаление обьявления авторизованным пользователем из кабинета
    public function deleteadvertAction(Request $request){
			
        $validator = NewadvertValidator::deleteValidator($request);

        // dd($request->advert_id);

        if($validator->fails()) {
            return redirect()->route('myadverts')->withErrors($validator)->withInput();
        }

        Advertisment::where('id', $request->advert_id)->delete();

        return redirect()->route('myadverts')->with('success', 'Ок! Обьявление успешно удалено')->withInput();
    }

    public function updateadvertAction($id)
    {
        $template = $this->template;

        $user = User::where('id', Auth::user()->id)->first();

        $categories = Category::where('parent_id', null)->get();

        $regions = Region::get();

        $myadvert = Advertisment::where('id', $id)->first();

        return view('pages.cabinetnewadvert', compact('template', 'user', 'categories', 'regions', 'myadvert'));
        

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

        $user = User::where('id', Auth::user()->id)->first();

        return view('pages.cabinet', compact('template', 'user'));

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

    //страница добавления нового обьвления авторизованным пользователем через кабинет
    public function newadvertAction()
    {
        $template = $this->template;

        $user = User::where('id', Auth::user()->id)->first();

        $categories = Category::where('parent_id', null)->get();

        $regions = Region::get();
        // dd($category);

        return view('pages.cabinetnewadvert', compact('template', 'user', 'categories', 'regions'));
        

    }
    //страница добавления нового обьвления неавторизованным пользователем с регистрацией

    public function addnewadvertAction()
    {
        $template = $this->template;

        $categories = Category::where('parent_id', null)->get();

        $regions = Region::get();
        // dd($category);

        return view('pages.addnewadvert', compact('template', 'categories', 'regions'));     

    }


    public function registerandaddadvertrequestAction(Request $request)
    {
        $validator = UserinfoValidator::userinfoValidator($request);
        if($validator->fails()) {
            return redirect()->route('add-new-advert')->withErrors($validator)->withInput();
        }
        $validator = NewadvertValidator::advertValidator($request);
                           
        if($validator->fails()) {
            return redirect()->route('add-new-advert')->withErrors($validator)->withInput();
        }

        $registerHelper = RegisteruserHelper::registerUser($request);
        
        if(!$registerHelper){
            return redirect()->route('add-new-advert')->with('fail', 'Логин или email уже используются')->withInput();
        }

        $newadvert = NewadvertaddHelper::addadvert('title', $request, $registerHelper);
        // dd($newadvert);
        return redirect()->route('register-execution')->with('success', 'Поздравлям Вы успешно подали свое первое обьявление и зарегистрировались')->withInput();       

    }

    // поиск
    
    public function searchAction(SearchRequest $request)
    {   
        // dd($request);
        $template = $this->template;

        $categories = Category::get();

        $regions = Region::get();

        $data = $request->validated();
        // dd($data);

        $search = $data['search'];

        $filter = app()->make(AdvertismentFilter::class, ['queryParams' => array_filter($data)]);
        // dd($filter);

        $adverts = Advertisment::filter($filter)->paginate(10);
        // dd($adverts);


        return view('pages.search', compact('template', 'categories', 'regions', 'adverts', 'data'));     

    }

    


    
    
    
    
}
