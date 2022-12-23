<?php

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    
    public function __construct(){
        $url = $this->getUrl();
        if(!empty($url)){
            if(file_exists('../app/controller/' .ucfirst($url[0]) .'.php')) {
                // if exists, set as controller
                $this->currentController = ucfirst($url[0]);
    
                // unsetting the url array's first index
                unset($url[0]);
            }
        }

        // require the controller
        require_once('../app/controller/' . $this->currentController . '.php');

        // instantiate controller class
        $this->currentController = new $this->currentController;

        if(isset($url[1])){
            // checking if the method exists in our controller
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                // unsetting the array's second index
                unset($url[1]);
            }
        }

        // getting parameters
        $this->params = $url ? array_values($url) : [];

        // call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            // removing / at the end of the url
            $url = rtrim($_GET['url'], '/'); 
            // a security line, it protect our website form cross-plateform scriptinh (XSS)
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // removing all / and turning it into an array
            $url = explode('/', $url);
            return $url;
        }
    }
}