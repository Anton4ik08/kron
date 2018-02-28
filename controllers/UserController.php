<?php


 class UserController {
    //put your code here
    public function actionRegister()
    {
        $name ='';
        $surName ='';
        $patronymic = '';
        $email ='';
        $password ='';
        $phone ='';
        
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(filter_input(INPUT_POST, 'registre')){
            
            $name = filter_input(INPUT_POST, 'name');
            $surName = filter_input(INPUT_POST, 'surName');
            $patronymic = filter_input(INPUT_POST, 'patronymic');
            $phone = filter_input(INPUT_POST, 'phone');
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            
            $errors = false;
            $result = false;
            
            if(!User::checkName($name)){
               $errors[] = 'Имя не должно быть короче 2-х символов!';
            }
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный E-mail';
            }
            if(!User::checkPhone($phone)){
               $errors[] = 'Номер телефона указан не верно!';
            }
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль не должно быть короче 6-х символов!';
            }else{
                $password = password_hash($password, PASSWORD_DEFAULT);
            }
            if(User::checkEmailExists($email)){
                $errors[] = 'Пользователь с таким E-mail уже существует!';
            }
            if($errors == false){
               
                $remember_token = self::randomToken();
                
                $result = User::register($name,$surName,$patronymic,$phone,$email,$password,$remember_token);
                
                header('location: /login');
            }
        }
        
        require_once (ROOT . '/views/user/register.php');
        
        return true;
    }
    
    public function actionEdit()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        $tokenUser = User::checkLogget();
        
        $dateUser = User::checkUserById($tokenUser);
        
        if(filter_input(INPUT_POST, 'edit')){
            
            $tokenUser = User::checkLogget();
        
            $dateUser = User::checkUserById($tokenUser);
        
            $id = $dateUser['id'];
            $name = filter_input(INPUT_POST,'name');
            $surName = filter_input(INPUT_POST,'surName');
            $patronymic = filter_input(INPUT_POST,'patronymic');
            $phone = filter_input(INPUT_POST,'phone');
            $email = filter_input(INPUT_POST,'email');
//            $password = filter_input(INPUT_POST, 'password');
//            $password2 = filter_input(INPUT_POST, 'password2');
            $created_at = filter_input(INPUT_POST,'created_at');
            $updated_at = date("Y-m-d H:i:s");
            
            $errors = false;
            $result = false;
            
            if(!User::checkName($name)){
               $errors[] = 'Имя не должно быть короче 2-х символов!';
            }
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный E-mail';
            }
            if(!User::checkPhone($phone)){
               $errors[] = 'Номер телефона указан не верно!';
            }
//            if(!User::checkPassword($password)){
//                $errors[] = 'Пароль не должно быть короче 6-х символов!';
//            }
//            if(!User::testPassword($password,$password2)){
//                $errors[] = 'Введённые пароли не совпадают!';
//            }
            
            if($errors == false){
//                $password = password_hash($password, PASSWORD_DEFAULT);
                
                $result = User::update($name,$surName,$patronymic,$phone,$email,$created_at,$updated_at,$id);
                
                if($result){
                    //проверяем загрузился ли файл нормально
                    if(is_uploaded_file($_FILES["image"]["tmp_name"])){
                        //перемещаем файл из временной папки по указанному нами пути в постоянную папку
                        move_uploaded_file($_FILES["image"]["tmp_name"],$_SERVER['DOCUMENT_ROOT'] . "/template/img/user/{$id}.jpg");
                        
                        
                    }
                    header("Location: /profile");
                }
            }
        }
        
        require_once (ROOT . '/views/user/edit.php');
        
        return true;
        
    }
    public function actionLogin()
    {
        $email = '';
        $password = '';
        
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(filter_input(INPUT_POST, 'submit')){
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            
            $errors = false;
            
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный E-mail';
            }
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль не должно быть короче 6-х символов!';
            }
            
            $userToken = User::checkUserData($email, $password);
            
            
            if($userToken == false){
                $errors[] = 'Неправильные данные для входа на сайт! ';
            } else {
                User::auth($userToken);
                
                header("Location: /profile");
            }
        }
        
        
        require_once (ROOT . '/views/user/login.php');
        
        return true;
    }
    
    public function actionLogout()
    {
        
        unset($_SESSION["user"]);
        header("Location: /");
    }
    
    public function actionProfile()
    {
        $categories =array();
        
        $categories = Category::GetCategoriesList();
        
        $tokenUser = User::checkLogget();
        
        $dateUser = User::checkUserById($tokenUser);
        
        
        require_once (ROOT . '/views/user/profile.php');
        return true;
    }
    
    public function randomToken() {
            $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','@','$','/','-','#'];
            for ($i = 0; $i < 20; $i++) {
                $n = rand(0, count($alphabet));
                $pass[$i] = $alphabet[$n];
            }
            $remember_token = implode($pass);
            if(!User::testTokenBd($remember_token)){
                self::randomToken();
            }
            return $remember_token;
        }
}
