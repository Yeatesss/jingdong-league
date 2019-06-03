<?php



namespace JingDongLeague\OpenAuthPlatForm\Kernel\Http;


use function foo\func;
use JingDongLeague\Exception\OpenAuthPlatFormException;
use JingDongLeague\Kernel\Http;

class Api extends OpenApiIterator
{
    private $url = '';
    private $http;
    private $status;
    private $errorMsg;

    
    public function __construct(Http $http)
    {
        if(!$this->http){
            $this->http = $http;
        }
    }
    
    public function get($requestParams){
        $this->url = call_user_func_array('sprintf',array_merge(['url'=>$this->url],$requestParams));
        $response = call_user_func_array([$this->http,'get'],[$this->url]);
        $content = $response->content;
        return $content;

    }
    
    public function post($requestParams){
        $response = call_user_func_array([$this->http,'post'],[$this->url,$requestParams]);
        $content = $response->content;
        if(isset($content['error_response'])){
            throw new OpenAuthPlatFormException(json_encode($content));
        }
        return $content;
//        $result = current($content);
//        if($result['code']==0){
//            unset($result['code']);
//            $this->result = json_decode(current($result),true);
//        }
    }
    public function request($requset_type,$requestParams=[],$callback=''){
        $response = call_user_func_array([$this,$requset_type],array($requestParams));
        empty($callback) && $callback = function($response){
            $data['original'] = $data['items'] = $response;
        };
        $data = $callback($response);
        array_walk($data,function($value,$pron){
            $this->$pron = $value;
        });

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


    public function status(){
        return $this->status;
    }
    public function __get($name)
    {
        if(isset($this->items[$name])) return $this->items[$name];
        throw new \ErrorException(sprintf('Undefined property: %s::$%s',__CLASS__,$name));
    }
    
    
}
