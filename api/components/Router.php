<?php
/**
 * Клас Router извлекает переданные данные и определяет controller и action для дальнейшего выполнения
 */
class Router {
    
    private $routes;
    
    public function __construct() {
        $RoutPach = ROOT . '/config/routes.php';
        $this -> routes = include ($RoutPach);
    }
    private function getURI(){
        if(!empty($_REQUEST)){
            $data = array();
            
            foreach ($_REQUEST as $method => $parmeters){
                $data['method'] = $method;
                $data['parmeters'] = $parmeters;
            }
            return $data;
        }
    }
    
    public function run(){
        //Сохраняет REMOTE_ADDR
        $clientAddres = $_SERVER[REMOTE_ADDR];

        $data = $this ->getURI();
        foreach ($this -> routes as $keyRoutes => $valueRoutes){
            
            if(preg_match("~$keyRoutes~", $data['method'])){
                
                $internalRouter = preg_replace("~$keyRoutes~", $valueRoutes, $data['method']);
               
                
                $segments = explode('/', $internalRouter);
                
                $controllerName = array_shift($segments). 'Controller';
                
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action' . ucfirst(array_shift($segments));
                
                $parametrs = json_decode($data['parmeters'],TRUE);
                
                $name = $parametrs['name'];
                $surName = $parametrs['surName'];
                $patronymic = $parametrs['patronymic'];
                $phone = $parametrs['phone'];
                $email = $parametrs['email'];
                $password = $parametrs['password'];
               //Подключаем файл класса контроллера
                
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                
                if(file_exists($controllerFile)) {
                    include_once($controllerFile);
                    
                    $controllerObject = new $controllerName;
                    $result = $controllerObject->actionRegistr($name,$surName,$patronymic,$phone,$email,$password,$clientAddres);
                    
                    if($result != NULL) {
                        break;
                    }
                }
            } else {
                echo 'rout не найден!';
            }
        }
    }
}
