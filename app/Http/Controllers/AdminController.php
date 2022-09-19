<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use App\Models\Advertisment;
use App\Models\Region;
use App\Validators\NewadvertValidator;
use App\Helpers\AdvertupdateHelper;



class AdminController extends Controller
{
    private $template = 'admin';

    public function indexAction()
    {
        $template = $this->template;

        $adverts = Advertisment::get();

        return view('pages.admin.index', compact('template', 'adverts'));

    }

    public function profileAction()
    {
        $template = $this->template;


        return view('pages.admin.profile', compact('template'));

    }

    public function logoutAction(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function comingsoonAction()
    {
        $template = $this->template;


        return view('pages.admin.comingsoon', compact('template'));

    }

    public function categoriesAction()
    {
        $template = $this->template;


        return view('pages.admin.categories', compact('template'));

    }

    public function usersAction()
    {
        $template = $this->template;


        return view('pages.admin.users', compact('template'));

    }

    public function advertsAction()
    {
        $template = $this->template;

        $adverts = Advertisment::paginate(10);

        $categories = Category::get();

        $regions = Region::get();


        return view('pages.admin.adverts', compact('template', 'adverts', 'categories', 'regions'));

    }

    // компоненты

    public function alertsAction()
    {
        $template = $this->template;


        return view('pages.admin.alerts', compact('template'));

    }

    public function badgesAction()
    {
        $template = $this->template;


        return view('pages.admin.badges', compact('template'));

    }


    public function buttonsAction()
    {
        $template = $this->template;


        return view('pages.admin.buttons', compact('template'));

    }

    public function cardsAction()
    {
        $template = $this->template;


        return view('pages.admin.cards', compact('template'));

    }

    public function carouselsAction()
    {
        $template = $this->template;


        return view('pages.admin.carousels', compact('template'));

    }

    public function listsAction()
    {
        $template = $this->template;


        return view('pages.admin.lists', compact('template'));

    }

    public function modalsAction()
    {
        $template = $this->template;


        return view('pages.admin.modals', compact('template'));

    }

    public function navigationsAction()
    {
        $template = $this->template;


        return view('pages.admin.navigations', compact('template'));

    }
    
    public function deleteadvertAction(Request $request){
			
        $validator = NewadvertValidator::deleteValidator($request);

        if($validator->fails()) {
            
            return redirect()->route('adverts')->withErrors($validator)->withInput();
        }
        
        $d = Advertisment::where('id', $request->advert_id)->delete();
        
        return redirect()->route('adverts')->with('success', 'Ок! Обьявление успешно удалено')->withInput();
    }

    public function changeadvertAction($id)
    {
        $template = $this->template;

        $myadvert = Advertisment::where('id', $id)->first();

        $categories = Category::where('parent_id', null)->get();

        $regions = Region::get();

        return view('pages.admin.changeadvert', compact('template', 'myadvert', 'regions', 'categories'));

    }

    public function changeadvertrequestAction(Request $request)
    {
        $validator = NewadvertValidator::adminadvertValidator($request);
                           
        
            if($validator->fails()) {
                return redirect()->route('adverts')->withErrors($validator)->withInput();
            }

            $newadvert = AdvertupdateHelper::updateAdvert($request, $request->user_id);

            return redirect()->route('adverts')->with('success', 'Обьявление успешно отредактировано')->withInput(); 

    }
    
    
    
    
    
}
