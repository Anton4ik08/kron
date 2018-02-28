<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomersController
 *
 * @author Anton
 */
class CustomersController {
    public function actionIndex($idCategory = 2) {
        $idCategory = 2;
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/customers.php');
        return true;
    }
}
