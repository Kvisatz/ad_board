<?php 
    namespace App\Helpers;

    use App\Models\User;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Auth;


    class CheckuserHelper{


        static function changeuser($field, $request){

            $user = User::where('id', $field)->first();

            if($user != null)
            {
				$user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                if(isset($request->avatar)){
                    $user->avatar = $avatarName;  
                }
				return $user->save();;
			}
			else
            {
				return false;
			}
        }
    }
?>