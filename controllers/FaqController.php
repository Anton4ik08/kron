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
        $subject ='';
       
        
        if(filter_input(INPUT_POST, 'submit')){
            
            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $subject = filter_input(INPUT_POST, 'subject');
            $message = filter_input(INPUT_POST, 'message');
            $compliance = filter_input(INPUT_POST, '$checkbox');
            
            $errors =array();
            
            if($compliance !== '1'){
                $errors[] = 'Для отправки сообщения нужно согласится на обработку персональных данных';
            }
            if($errors == false){
//                echo 'ok';
//                echo '<pre>';
//                print_r($_POST);
                $result = Faq::saveMessageBd($name,$email,$subject,$message,$compliance);
                
                if($result == true){
                    
                    $to = "admin@antontester.ru"; //Почта получателя, через запятую можно указать сколько угодно адресов
                    $messageHeader = "
                                        <html>
                                            <head>
                                                <title>" . $subject . "</title>
                                            </head>
                                            <body>
                                                <p>Имя: " . $name . "</p>   
                                                <p>E-mail:" . $email . " </p>    
                                                <p>Вопрос пользователя:" . $message . " </p>                 
                                            </body>
                                        </html>"; //Текст нащего сообщения можно использовать HTML теги
                    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
                    $headers .= "From: Отправитель <admin@resumeanton.ru>\r\n"; //Наименование и почта отправителя
                    mail($to, $subject, $messageHeader, $headers); //Отправка письма с помощью функции mail
                    
                }
            }  
        }
        
        require_once (ROOT . '/views/faq/index.php');
        
        return true;
    }
}
