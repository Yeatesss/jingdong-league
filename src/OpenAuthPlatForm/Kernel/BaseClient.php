<?php


namespace JingDongLeague\OpenAuthPlatForm\Kernel;




use JingDongLeague\Exception\OpenAuthPlatFormException;
use JingDongLeague\OpenAuthPlatForm\Kernel\Http\Api;
use JingDongLeague\Kernel\Http;

abstract class BaseClient
{
    
    protected $method;
    protected $http;
    protected $url;
    protected $param;
    protected $callback;
    protected $const_param=[];
    protected $request_type;
    protected $response;
    protected $app;
    
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $http = new Http($app,$this->method);
        $this->http = new Api($http);
    }
    
    public function callback(){
        return $this->response;
    }
    

    public function request($query=[])
    {
        $this->param = $query =  $this->checkParam($this->param,$query);
        $this->url();

        $this->response = $this->http->setUrl($this->url)->request($this->request_type,$query,$this->callback);
        return $this->callback();
    }
    
    
    public function checkParam($param,$query){
        $diff = array_diff_key($query,$param);
        if($diff) throw new OpenAuthPlatFormException(sprintf('Parameter filling error:%s',implode(',',array_keys($diff))));
        return array_merge($param,$query,$this->const_param);
    }
    
    public function url(){
        $this->url = call_user_func_array('sprintf',array_merge(['url'=>$this->url],$this->param));
        
        return $this->url;
    }
    
    
    
    
}
