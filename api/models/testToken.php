<?php


/**
 * Подключается к БД и проверяет Токен на уникальность
 *
 * @author anton
 */
class testToken {
    //put your code here
    public function testTokenBd($remember_token)
    {
        $db = Db::getConnection();
        $sql = 'SELECT remember_token FROM users WHERE remember_token = :remember_token';
        $result = $db ->prepare($sql);
        $result -> bindParam(':remember_token',$remember_token,PDO::PARAM_STR);
        return $result->execute();
    }
}
    