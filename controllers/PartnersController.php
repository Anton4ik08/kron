<?php


/**
 * Description of PartnersController
 *
 * @author anton
 */
class PartnersController {
    //put your code here
    public function actionIndex($idCategory =3) {
        
        $idCategory =3;
        
        $categories =array();
        
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/partners.php');
        
        return true;
    }
}
