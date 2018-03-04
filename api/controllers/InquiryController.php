<?php


class InquiryController {
    
    public function actionRegistr($name,$surName,$patronymic,$phone,$email,$password)
    {
       
        
       $errors =false;
        //проверяем E-mail на уникальность 
        if(!User::checkForUniqueness($email)){
            $errors[] = "Поьзователь с таким адресом электронной почты уже зарегистрирован!";
        }
        //Проверяем E-mail на правильность
        if(!User::checkEmail($email)){
            $errors[] = "E-MAIL указан не верно";
        }
        if(User::checkPassword($password)){
            //Хэшируем пароль
            $password = password_hash($password, PASSWORD_DEFAULT);
        }else{
            $errors[] = 'Пароль должен быть не менее 6 символов';
        }
        if(!User::checkPhone($phone)){
            $errors[] = 'Номер телефона должен содержать как минимум 9 цифр';
        }
        if($errors == false){
            //создаём уникальный токен
            $remember_token = self::randomToken();
            
            $registration = User::register($name,$surName,$patronymic,$phone,$email,$password,$remember_token);
            if($registration){
                
                $url = "http://" ;

                $context = stream_context_create([
                    'http' => [
                        'method' => 'POST',
                        'user_agen' => 'apiApple',
                        'content' => http_build_query([
                           'remember_token' => $remember_token,
                        ])
                    ]
                ]);

               return file_get_contents($url, false, $context);
               
            }
        }
        foreach ($errors as $key => $error){
            echo $error;
        }
        return true;
    }/**
     * Возвращает сгенерированный токе
     * @return string
     */
    public function randomToken() {
            $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','@','$','/','-','#'];
            for ($i = 0; $i < 20; $i++) {
                $n = rand(0, count($alphabet));
                $pass[$i] = $alphabet[$n];
            }
            $remember_token = implode($pass);
            if(!testToken::testTokenBd($remember_token)){
                self::randomToken();
            }
            return $remember_token;
    }
    
    public function actionGet($id){
            
        echo $userDataJson = User::getData($id);
        
       return true;
   }

}
