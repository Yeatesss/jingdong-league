<?php



namespace JingDongLeague\OpenAuthPlatForm\Kernel\Http;


use JingDongLeague\Kernel\Http;

class Api extends OpenApiIterator
{
    private $url = '';
    private $http;
    private $status;
    public function __construct()
    {
        if(!$this->http){
            $this->http = new Http();
        }
    }
    
    public function get($requestParams){
        $this->url = call_user_func_array('sprintf',array_merge(['url'=>$this->url],$requestParams));
        dd($this->url);
        $response = call_user_func_array([$this->http,'get'],[$this->url]);
        dd($response);
        $this->status = $response->status;
        $content = $response->content;
//        if(isset($content['errorResponse'])){
//            throw new UnionException(json_encode($content));
//        }
//        array_walk_recursive ($content,function($value,$key){
//
//            if($key=='result'){
//
//                $result = json_decode($value,true);
//                $this->items = isset($result) && isset($result['data'])?$result['data']:[];
//                $this->hasNext = isset($result) && isset($result['hasMore'])?$result['hasMore']:false;
//
//                if($result['code']!=200) throw new UnionException($result['message']);
//            }
//        });
//        return $this;
        
        dd($response);
    }
    
    public function post($requestParams){
    
    }
    public function request($requset_type,$requestParams=[]){
        call_user_func_array([$this,$requset_type],array($requestParams));
        return $this;
        
    }
    
    public function toArray(){
        return $this->items;
    }
    public  function isEmpty(){
        if($this->items){
            return false;
        }
        return true;
    
    }
    
    public function setUrl($url){
        $this->url = $url;
        return $this;
    }
    
    public function __get($name)
    {
        if(isset($this->items[$name])) return $this->items[$name];
        throw new \ErrorException(sprintf('Undefined property: %s::$%s',__CLASS__,$name));
    }
    
    
}
