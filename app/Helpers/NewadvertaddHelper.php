<?php 
    namespace App\Helpers;

    use App\Models\Advertisment;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Auth;
    use App\Models\Image;



    class NewadvertaddHelper{


        static function addadvert($field, $request){

            $adverts = Advertisment::where($field, $request->name)->get();
            if(count($adverts) == 0)
			{
			
				$advert = new Advertisment;
				if(isset($request->image))
				{
					$request->image->store('/public/images');

					$imageName = $request->image->hashName(); 
				}
				$advert->title = $request->title;
				$advert->price = $request->price;
				$advert->region_id = $request->region;
				$advert->category_id = $request->category;
				$advert->user_id = $request->user_id;
				$advert->description = $request->content;
				if(isset($request->image))
				{
					$advert->save();
					$image = new Image;
                    $image->name = $imageName;  
                    $image->advertisment_id = $advert->id;  
					return $image->save();
                }
				else
				{
					return $advert->save();
				}
				
			}
			else
			{
				return false;
			}
        }
    }
?>