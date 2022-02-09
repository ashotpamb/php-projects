<?php
class Router
{
    private $routers;
    public function __construct()
    {
        $routerPath = ROOT.'/config/routers.php';
        $this->routers = include($routerPath);
    }

    private function getUrl() {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],"/");
        }
    }
    public function run() {
        $url = $this->getUrl();
        foreach ($this->routers as $roter => $path) {
            if(preg_match("~$roter~",$url)){
                $segments = explode("/",$path);
                $controllerName = ucfirst(array_shift($segments)."Controller");
                $actionName = 'action'.ucfirst(array_shift($segments));
                $controllerFile = ROOT."/controllers/".$controllerName.".php";
                if(file_exists($controllerFile)) {
                    require_once($controllerFile);
                }
                $controllerObj = new $controllerName;
                $result = $controllerObj->$actionName();
                if($result == true) {
                    die();
                }
            }
        }
    }
}
