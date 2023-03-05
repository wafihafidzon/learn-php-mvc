<?php

class App
{
    // default value / route default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            // digunakan untuk membersihkan / pada kanan string
            $url = rtrim($_GET['url'], '/');
            //pembersihan url dari ilegal character
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // pemecahan url method & controller
            $url = explode('/', $url);
            return $url;
        }
    }

    public function __construct() {
        $url = $this->parseURL();
        // untuk controller
        if ($url == NULL) {
            $url = [$this->controller];
        }
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
                // var_dump($url);
            }
        }
        // params / parameter
        if(!empty($url)){
            $this->params = array_values($url);
        }
            call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
