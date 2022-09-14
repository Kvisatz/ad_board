<?php 
    namespace App\Helpers;

    use App\Models\Advertisment;
    use App\Models\Image;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Auth;


    class NewadvertaddHelper{


        static function addImage($advert, $request){

				if(isset($request->image))
				{
					$request->image->store('/public/images');

					$imageName = $request->image->hashName(); 
				}


				$advert = new Advertisment;
				$advert->title = $request->title;
				$advert->price = $request->price;
				$advert->region_id = $request->region;
				$advert->category_id = $request->category;
				$advert->user_id = $request->user_id;
				$advert->description = $request->content;
				return $advert->save();
			}
			else
			{
				return false;
			}
        }
    }
?>