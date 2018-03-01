<?php
/**
 *
 * @author anton
 */
class SiteController {
    //put your code here
    public function actionIndex($idCategory = 1)
    {
        $idCategory = 1;
       
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/index.php');
        
        return true;
    }
    
    public function actionDistributor()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/distributor.php');
        
        return true;
    }   
    
    public function actionDistributorRegistr()
    {
        $categories =array();
        $categories = Category::GetCategoriesList();
        
        if(User::checkLogget()){
            $dateUser = User::checkUserById($_SESSION['user']);
        }
        require_once (ROOT . '/views/site/distributorRegistr.php');
        
        return true;
    }
    
    public function actionNews($idCategory = 4)
    {
        $idCategory = 4;
        
        $categories =array();
        
        $categories = Category::GetCategoriesList();
        
        $getNews = News::getNews();
        
        require_once (ROOT . '/views/site/news.php');
        
        return true;
    }
    public function actionTextNews($id,$idCategory = 4){
        
        $idCategory = 4;
        
        $categories =array();
        
        $categories = Category::GetCategoriesList();
        
        $getNews = News::getNewsById($id);
        
        require_once (ROOT . '/views/site/bodyNews.php');
        
        return true;
        
    }
    
    
}
