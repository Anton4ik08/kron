<?php


class User {
    //put your code here
    public static function register($name,$surName,$patronymic,$phone,$email,$password,$remember_token)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO users (name,surName,patronymic,phone,email,password,remember_token) VALUES (:name,:surName,:patronymic,:phone,:email,:password,:remember_token)';
        $result = $db ->prepare($sql);
        $result -> bindParam(':name',$name,PDO::PARAM_STR);
        $result -> bindParam(':surName',$surName,PDO::PARAM_STR);
        $result -> bindParam(':patronymic',$patronymic,PDO::PARAM_STR);
        $result -> bindParam(':phone',$phone,PDO::PARAM_STR);
        $result -> bindParam(':email',$email,PDO::PARAM_STR);
        $result -> bindParam(':password',$password,PDO::PARAM_STR);
        $result -> bindParam(':remember_token',$remember_token,PDO::PARAM_STR);
        
        return $result->execute();
    }
    public static function update($name,$surName,$patronymic,$phone,$email,$created_at,$updated_at,$id)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE users SET name = :name ,surName = :surName ,patronymic = :patronymic ,phone = :phone ,email = :email ,created_at = :created_at ,updated_at = :updated_at WHERE id = :id";
        
        $result = $db -> prepare($sql);
        $result -> bindParam(':id',$id,PDO::PARAM_INT);
        $result -> bindParam(':name',$name,PDO::PARAM_STR);
        $result -> bindParam(':surName',$surName,PDO::PARAM_STR);
        $result -> bindParam(':patronymic',$patronymic,PDO::PARAM_STR);
        $result -> bindParam(':phone',$phone,PDO::PARAM_STR);
        $result -> bindParam(':email',$email,PDO::PARAM_STR);
        $result -> bindParam(':created_at',$created_at,PDO::PARAM_STR);
        $result -> bindParam(':updated_at',$updated_at,PDO::PARAM_STR);
        
        return $result->execute();
    }
    public static function checkPhone($phone)
        {
            if(strlen($phone)>= 9 ){
                return true;
            }
                return false;
        }
        
    public static function checkName($name)
        {
            if(strlen($name)>= 2){
                return true;
            }
            return false;
        }
     
    public static function checkEmail($email)
        {
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;
        }
        
    public static function checkEmailExists($email)
        {
            $db = Db::getConnection();
            
            $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
            $result = $db ->prepare($sql);
            $result -> bindParam(':email',$email,PDO::PARAM_STR);
            $result -> execute();
            
            if($result ->fetchColumn()){
                return true;
            }
            return false;
        }
        
    public static function checkPassword($password)
        {
            if(strlen($password)>= 6){
                return true;
            }
            return false;
        }
        
    public static function testPassword($password,$password2)
        {
            if (strcmp($password, $password2) == 0){
                return true;
            }
            return false;
        }
        /**
         * Сравнивает введенные данные с БД Авторизация
         * @param type $email
         * @param type $password
         * @return boolean
         */
    public static function checkUserData($email,$password)
    {
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM users WHERE email = :email';
        $result = $db ->prepare($sql);
        $result -> bindParam(':email',$email,PDO::PARAM_STR);
        $result -> execute();
        
        $user = $result ->fetch();
        
        if($user){
            
            $result = password_verify($password,$user['password']);
            
            if($result){
              return $user['remember_token'];
            }
        }
            return $user;
    }
    /**
     * Записывает пользователя в сессию для аунтификации
     * @param type $userId
     */
    public static function auth($userToken)
    {
        
        $_SESSION['user'] = $userToken;
    }
    /**
     * Возвращает Token пользователя из сессии
     * @return userID
     */
    public static function checkLogget()
    {
        
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
    }
    /**
     * Проверяет есть ли записанный пользователь в сессии
     * @return boolean
     */
    public static function isGuest()
    {
        
        if(isset($_SESSION["user"])){
            return false;
        } else {
            return true;
        }
    }
    /**
     * Возвращает данные пользователя по его Token
     * @param type $tokenUser
     * @return boolean
     */
    public static function checkUserById($tokenUser)
    {
        if($tokenUser){
            
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM users WHERE remember_token = :remember_token ';
        $result = $db ->prepare($sql);
        $result -> bindParam(':remember_token',$tokenUser,PDO::PARAM_STR);
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $result ->execute();
        
        return $result ->fetch();
        } else {
            return false;
        }
    }
    
    public static function Edit($id,$name,$password)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE user SET name = :name , password = :password WHERE id = :id";
        $result = $db ->prepare($sql);
        $result -> bindParam(':id',$id,PDO::PARAM_INT);
        $result -> bindParam(':name',$name,PDO::PARAM_STR);
        $result -> bindParam(':password',$password,PDO::PARAM_STR);
        return $result ->execute();
    }
    
    public static function testTokenBd($remember_token)
    {
        $db = Db::getConnection();
        $sql = 'SELECT remember_token FROM users WHERE remember_token = :remember_token';
        $result = $db ->prepare($sql);
        $result -> bindParam(':remember_token',$remember_token,PDO::PARAM_STR);
        return $result->execute();
    }
}
