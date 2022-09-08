<?php
    namespace App\Validators;

    use Illuminate\Support\Facades\Validator;

    class UserinfoValidator{

        static function userinfoValidator($request){
            return Validator::make($request->all(), [
                                                        'name' => 'required|min:5|max:20',
                                                        'avatar' => 'mimes:jpeg,jpg,png,pdf|max:20000',
                                                        'email' => 'required|email:rfc,dns',
                                                        'password' => 'required|min:3|max:20',
                                                    ],
                                                    [
                                                        'name.required' => 'Введите имя',
                                                        'name.min' => 'Длина имени должна быть больше 5 символов',
                                                        'name.max' => 'Длина имени должна быть меньше 20 символов',
                                                        'avatar.mimes' => 'Некорректный формат картинки',
                                                        'avatar.max' => 'Файл картинки не должен превышать 20МБ',
                                                        'email.required' => 'Введите свой email',
                                                        'email.email' => 'Введите корректный формат email',
                                                        'password.required' => 'Введите пароль',
                                                        'password.min' => 'Минимальная длина пароля 3 символа',
                                                        'password.max' => 'Маскимальная длина пароля 20 символов',
                                                    ]);
        }
    }
    
?>