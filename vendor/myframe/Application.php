<?php
namespace vendor\myframe;
class Application
{
    public $defaultController = 'SiteController';
    public $defaultFunction = 'index';
    private $id = null;
    public function run()
    {
        $uri =  $_SERVER['REQUEST_URI'];
        $data = explode('/', trim($uri, '/') );
        if ($uri === '' || $uri === '/' || $uri === '/index.php'){
            $classname = "controllers\\" . $this->defaultController;
            $functionName = $this->defaultFunction;

        }else{
        $index = 0;
        if ($data[0] !== 'index.php'){

            $index = 1;
        }
        $classname = ucfirst($data[1 - $index]) . "Controller";
        $classname = "controllers\\" . $classname;

        if(strpos($data[2 - $index], '?')){
           $params =  explode('?', $data[2 - $index]);
            $functionName = $params[0];
        }else{
            $functionName = $data[2 - $index];

        }
        if (isset($data[3 - $index])){
           $this->id = $data[3 - $index];
        }
        }
        $obj = new $classname();
        if (is_null($this->id)) {
            $obj->{$functionName}();
        }else{
            $obj->{$functionName}($this->id);
        }
}

}