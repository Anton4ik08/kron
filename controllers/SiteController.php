<?php
/**
 *
 * @author anton
 */
class SiteController {
    //put your code here
    public function actionIndex()
    {
       
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/index.php');
    }
    
    public function actionDistributor()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/distributor.php');
    }   
    
    public function actionDistributorRegistr()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/distributorRegistr.php');
    }
    
    public function actionNews()
    {
        
        require_once (ROOT . '/views/site/news.php');
    }
    
    
}
