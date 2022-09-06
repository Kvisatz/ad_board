<?php
    namespace App\Validators;

    use Illuminate\Support\Facades\Validator;

    class LoginValidator{

        static function loginValidator($request){
            return Validator::make($request->all(), [
                                                        'email' => 'required|email:rfc,dns',
                                                        'password' => 'required|min:3|max:20',
                                                    ],
                                                    [
                                                        'email.required' => 'Введите свой email',
                                                        'email.email' => 'Введите корректный формат email',
                                                        'password.required' => 'Введите пароль',
                                                        'password.min' => 'Минимальная длина пароля 3 символа',
                                                        'password.max' => 'Маскимальная длина пароля 20 символов',
                                                    ]);
        }
    }
    
?>