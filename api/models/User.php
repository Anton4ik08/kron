<?php


/**
 * Description of registration
 *
 * @author anton
 */
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
    public static function checkForUniqueness($email)
    {
        $db = Db::getConnection();
        $sql = 'SELECT id FROM users WHERE email = :email';
        $result = $db ->prepare($sql);
        $result -> bindParam(':email',$email,PDO::PARAM_STR);
        $result -> execute();
        $id = $result -> fetch();
        if($id){
            return false;
        }else{
            return true;
        }  
    }
    public static function checkEmail($email)
        {
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
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
    public static function checkPhone($phone)
        {
            if(strlen($phone)>= 9 ){
                return true;
            }
                return false;
        }
        public static function getData($id)
        {
            $db = Db::getConnection();
            
            $sql = 'SELECT * FROM users WHERE id = :id';
            $result = $db ->prepare($sql);
            $result -> bindParam(':id',$id,PDO::PARAM_INT);
            $result->execute();
            $userData =  $result ->fetch(PDO::FETCH_ASSOC);
            return $userDataJson = json_encode($userData);
        }
}
