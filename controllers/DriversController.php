<?php
 
/**
 * Description of DriversController
 *
 * @author anton
 */
class DriversController {
    
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
            $remember_token = self::randomToken();
            
            
            $errors = false;
            $result = false;
            
            if(!Driver::checkName($name)){
               $errors[] = 'Имя не должно быть короче 2-х символов!';
            }
            if(!Driver::checkEmail($email)){
                $errors[] = 'Неправильный E-mail';
            }
            if(!Driver::checkPhone($phone)){
               $errors[] = 'Номер телефона указан не верно!';
            }
            if(!Driver::checkPassword($password)){
                $errors[] = 'Пароль не должно быть короче 6-х символов!';
            }else{
                $password = password_hash($password, PASSWORD_DEFAULT);
            }
            if(Driver::checkEmailExists($email)){
                $errors[] = 'Пользователь с таким E-mail уже существует!';
            }
            if($errors == false){
               
                $result = Driver::register($name,$surName,$patronymic,$phone,$email,$password,$remember_token);
                
                $result = Driver::registerCar($remember_token);
                
                if($result == true){
                    header('location: /logPart');
                }
                
            }
        }
        
        require_once (ROOT . '/views/driver/register.php');
        
        return true;
    }
    
    public function actionEdit()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        $tokenDrive = Driver::checkLogget();
        
        $dateUser = Driver::checkUserById($tokenDrive);
        
        if(filter_input(INPUT_POST, 'edit')){
            
            $tokenDrive = Driver::checkLogget();
        
            $name = filter_input(INPUT_POST,'name');
            $surName = filter_input(INPUT_POST,'surName');
            $patronymic = filter_input(INPUT_POST,'patronymic');
            $phone = filter_input(INPUT_POST,'phone');
            $email = filter_input(INPUT_POST,'email');
//            $password = filter_input(INPUT_POST, 'password');
//            $password2 = filter_input(INPUT_POST, 'password2');
            $created_at = filter_input(INPUT_POST,'created_at');
            $updated_at = date("Y-m-d H:i:s");
            $brand = filter_input(INPUT_POST,'brand');
            $model = filter_input(INPUT_POST,'model');
            $color = filter_input(INPUT_POST,'color');
            $number = filter_input(INPUT_POST,'number');
            $places = filter_input(INPUT_POST,'places');
            
            $errors = false;
            $result = false;
            
            if(!Driver::checkName($name)){
               $errors[] = 'Имя не должно быть короче 2-х символов!';
            }
            if(!Driver::checkEmail($email)){
                $errors[] = 'Неправильный E-mail';
            }
            if(!Driver::checkPhone($phone)){
               $errors[] = 'Номер телефона указан не верно!';
            }
//            if(!Driver::checkPassword($password)){
//                $errors[] = 'Пароль не должно быть короче 6-х символов!';
//            }
//            if(!Driver::testPassword($password,$password2)){
//                $errors[] = 'Введённые пароли не совпадают!';
//            }
            
            if($errors == false){
//                $password = password_hash($password, PASSWORD_DEFAULT);
                
                $result = Driver::update($name,$surName,$patronymic,$phone,$email,$created_at,$updated_at,$tokenDrive);
                
                if($result){
                    //print_r($_FILES);die;
                    //проверяем загрузился ли файл нормально
                    if(is_uploaded_file($_FILES["image"]["tmp_name"])){
                        //перемещаем файл из временной папки по указанному нами пути в постоянную папку
                        move_uploaded_file($_FILES["image"]["tmp_name"],$_SERVER['DOCUMENT_ROOT'] . "/template/img/driver/{$tokenDrive}.jpg");
                        
                        
                    }
                    header("Location: /profPart");
                }
            }
        }
        
        require_once (ROOT . '/views/driver/edit.php');
        
        return true;
        
    }
    public function actionEditcar()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        $tokenDrive = Driver::checkLogget();
        
        $dateUser = Driver::checkUserCarById($tokenDrive);
        
        $dateUserCar = Driver::checkUserCarById($tokenDrive);
        
        if(filter_input(INPUT_POST, 'edit')){
            
            $tokenDrive = Driver::checkLogget();
        
            $brand = filter_input(INPUT_POST,'brand');
            $model = filter_input(INPUT_POST,'model');
            $color = filter_input(INPUT_POST,'color');
            $number = filter_input(INPUT_POST,'number');
            $places = filter_input(INPUT_POST,'places');
            
            $errors = false;
            $result = false;
            
            if($errors == false){
//                
                $result = Driver::updateCars($brand,$model,$color,$number,$places,$tokenDrive);
                
                if($result){
                    //print_r($_FILES);die;
                    //проверяем загрузился ли файл нормально
                    if(is_uploaded_file($_FILES["image"]["tmp_name"])){
                        //перемещаем файл из временной папки по указанному нами пути в постоянную папку
                         move_uploaded_file($_FILES["image"]["tmp_name"],$_SERVER['DOCUMENT_ROOT'] . "/template/img/driver/auto/{$tokenDrive}.jpg");
                        
                    }
                    header("Location: /profPart");
                }
            }
        }
        
        require_once (ROOT . '/views/driver/edit_car.php');
        
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
            
            if(!Driver::checkEmail($email)){
                $errors[] = 'Неправильный E-mail';
            }
            if(!Driver::checkPassword($password)){
                $errors[] = 'Пароль не должно быть короче 6-х символов!';
            }
            
            $driverToken = Driver::checkUserData($email, $password);
            
            
            if($driverToken == false){
                $errors[] = 'Неправильные данные для входа на сайт! ';
            } else {
                Driver::auth($driverToken);
                
                header("Location: /profPart");
            }
        }
        
        
        require_once (ROOT . '/views/driver/login.php');
        
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
        
        $driverToken = Driver::checkLogget();
        
        $dateUser = Driver::checkUserById($driverToken);
        
        $dateUserCar = Driver::checkUserCarById($driverToken);
        
        
        require_once (ROOT . '/views/driver/profile.php');
        
        return true;
    }
    
    public function randomToken() {
            $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','@','$','-','#'];
            for ($i = 0; $i < 20; $i++) {
                $n = rand(0, count($alphabet));
                $pass[$i] = $alphabet[$n];
            }
            
            $remember_token = implode($pass);
            
            if(!Driver::testTokenBd($remember_token)){
                self::randomToken();
            }
            return $remember_token;
    }
    /**
     * Определяет Текстовое значение цвета
     * принемает значение цвета в формате FFFFFF
     * 
     * return string
     */
    public function colorCars($color){
        
        $arrayColor =['ffffff' => 'Белый','e1e9ed'=>'Сурубряный','000000'=>'Чорный','696a6f'=>'Серый','2b60e0'=>'Синий','e02121'=>'Красный','43a946'=>'Зеленый','f9d311'=>'Жолтый','774f2b'=>'Коричневый','e56947'=>'Оранжевый',];
        
        foreach ($arrayColor as $colorKey => $colorVal ){
            if($colorKey == $color){
                return $color = $colorVal;
            }
        }
        
    }
}
