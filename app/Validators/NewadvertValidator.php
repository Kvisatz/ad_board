<?php
    namespace App\Validators;

    use Illuminate\Support\Facades\Validator;

    class NewadvertValidator{

        static function advertValidator($request)
        {
            return Validator::make($request->all(), [
                                                        'price' => 'required|integer|max:200000000',
                                                        'password' => 'required|min:3|max:20',
                                                        'title' => 'required|min:3|max:100',
                                                        'image' => 'mimes:jpg,bmp,png',
                                                        'content' => 'required|min:5|max:2000',
                                                        'category' => 'required'
                                                    ],
                                                    [
                                                        'price.required' => 'Введите цену',
                                                        'price.integer' => 'Цена может содержать только целые числа',
                                                        'price.max' => 'Маскимальная ценf 200000000',
                                                        'password.required' => 'Введите пароль',
                                                        'password.min' => 'Минимальная длина пароля 3 символа',
                                                        'password.max' => 'Маскимальная длина пароля 20 символов',
                                                        'title.required' => 'Введите заголовок',
                                                        'title.min' => 'Минимальная длина названия 3 символа',
                                                        'title.max' => 'Маскимальная длина названия 100 символов',
                                                        'content.required' => 'Введите описание',
                                                        'content.min' => 'Минимальная длина описания 5 символов',
                                                        'content.max' => 'Маскимальная длина описания 2000 символов',
                                                        'category.required' => 'Выберите категорию',

                                                    ]);
        }

        static function adminadvertValidator($request)
        {
            return Validator::make($request->all(), [
                                                        'price' => 'required|integer|max:200000000',
                                                        
                                                        'title' => 'required|min:3|max:100',
                                                        'image' => 'mimes:jpg,bmp,png',
                                                        'content' => 'required|min:5|max:2000',
                                                        'category' => 'required'
                                                    ],
                                                    [
                                                        'price.required' => 'Введите цену',
                                                        'price.integer' => 'Цена может содержать только целые числа',
                                                        'price.max' => 'Маскимальная ценf 200000000',
                                                        'password.required' => 'Введите пароль',
                                                        'password.min' => 'Минимальная длина пароля 3 символа',
                                                        'password.max' => 'Маскимальная длина пароля 20 символов',
                                                        'title.required' => 'Введите заголовок',
                                                        'title.min' => 'Минимальная длина названия 3 символа',
                                                        'title.max' => 'Маскимальная длина названия 100 символов',
                                                        'content.required' => 'Введите описание',
                                                        'content.min' => 'Минимальная длина описания 5 символов',
                                                        'content.max' => 'Маскимальная длина описания 2000 символов',
                                                        'category.required' => 'Выберите категорию',

                                                    ]);
        }


        static function deleteValidator($request){
            return Validator::make($request->all(), [
                                                        'advert_id' => 'required'
                                                    ],
                                                    [
                                                        'advert_id.required' => 'Ошибка',
                                                    ]);
        }
    }
    
?>