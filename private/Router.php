<?php
class Router{
    private $controller;
    private $method;
    private $parameters;
    private $cmp;
    function __construct(){
        
    }
    
    protected function uriProcess($uri){
        $cmp=explode('/',filter_var(trim($uri),FILTER_SANITIZE_URL));
        return $cmp;
        
    }
    //TODO whitspace added 
    public function respond($uri){
         $cmp=Self::uriProcess($uri);
         $this->cmp=array_chunk($cmp,3);
         $this->controller=$cmp[1][0];
         if (count($cmp[1])>1){
            $this->method=$cmp[1][1];
         }
         $this->parameters=[];
         if (count($cmp[1])>2){
            $this->parameters=array_chunk($cmp[1],2)[1];
        }
        call_user_func_array([$this->controller.'Controller', $this->method],$this->parameters);
    }
    public function getTitle(){
        return $this->cmp[1][0];
    }
}
//TODO improve
