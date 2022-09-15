<?php 
    namespace App\Helpers;

    use App\Models\User;
    use Illuminate\Support\Facades\Redirect;
    


    class RegisteruserHelper{


        static function registerUser($request){

            $user = User::where('name', $request->name)->get();
            if(isset($request->avatar))
            {
                $request->avatar->store('/public/avatars');

                $avatarName = $request->avatar->hashName(); 
            }
            if(count($user) == 0)
            {
                $user = User::where('email', $request->email)->get();
                if(count($user) == 0)
                {
                    $user = new User;
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = bcrypt($request->password);
                    $user->role_id = 2;
                    if(isset($request->avatar)){
                        $user->avatar = $avatarName;  
                    }
                    $user->save();
                    return $user->id;
                }
                else
                {
                    return false;
                }   
			}
			else
            {
				return false;
			}
        }
    }
?>