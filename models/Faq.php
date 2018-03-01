<?php


/**
 * Description of Faq
 *
 * @author anton
 */
class Faq {
    
    public static function saveMessageBd($name,$email,$subject,$message,$compliance)
    {
        $db =Db::getConnection();
        
        $sql = "INSERT INTO issues (name,email,subject,message,compliance) VALUES (:name,:email,:subject,:message,:compliance)";
        $result = $db ->prepare($sql);
        $result -> bindParam(':name',$name,PDO::PARAM_STR);
        $result -> bindParam(':email',$email,PDO::PARAM_STR);
        $result -> bindParam(':subject',$subject,PDO::PARAM_STR);
        $result -> bindParam(':message',$message,PDO::PARAM_STR);
        $result -> bindParam(':compliance',$compliance,PDO::PARAM_STR);
        
        return $result->execute();
    }
}
