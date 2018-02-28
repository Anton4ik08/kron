<?php

/**
 * Description of FaqController
 *
 * @author anton
 */
class FaqController {
    
    public function actionIndex($idCategory = 5)
    {
        
        $idCategory = 5;
        
        $errors = false;
        $result = false;
        
        $categories = Category::GetCategoriesList();
        
        $name = '';
        $email = '';
        $message = '';
       
        
        if(filter_input(INPUT_POST, 'submit')){
            
            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $message = filter_input(INPUT_POST, 'message');
            $checkbox = filter_input(INPUT_POST, '$checkbox');
            
            $errors =array();
            
            if($checkbox !== '1'){
                $errors[] = 'Для отправки сообщения нужно согласится на обработку персональных данных';
            }
            if($errors == false){
                echo 'ok';
            }  
        }
        
        require_once (ROOT . '/views/faq/index.php');
        
        return true;
    }
}
