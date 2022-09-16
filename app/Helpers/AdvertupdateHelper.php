<?php 
    namespace App\Helpers;

    use App\Models\Advertisment;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Auth;

    


    class AdvertupdateHelper{


        static function updateAdvert($request, $user_id){

            $advert = Advertisment::where('id', $request->form_id)->first();

            // dd($advert);
            if(isset($request->image))
            {
                $request->image->store('/public/avatars');

                $imageName = $request->image->hashName(); 
            }
            if($advert != null)
            {
				$advert->title = $request->title;
				$advert->price = $request->price;
				$advert->region_id = $request->region;
				$advert->category_id = $request->category;
                $advert->user_id = $user_id;
                $advert->description = $request->content;
                if(isset($request->image)){
                    $advert->image = $imageName;  
                }
				return $advert->save();
			}
			else
            {
				return false;
			}
        }
    }
?>