<?php


namespace JingDongLeague\OpenAuthPlatForm\Kernel;




use JingDongLeague\Exception\OpenAuthPlatFormException;
use JingDongLeague\OpenAuthPlatForm\Kernel\Http\Api;

abstract class BaseClient
{
    

    protected $http;
    protected $url;
    protected $param;
    protected $request_type;
    
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->http = new Api();
    }
    

    public function request($query=[])
    {
        $query = $this->checkParam($this->param,$query);
        return $this->http->setUrl($this->url)->request($this->request_type,$query);
    }
    
    
    public function checkParam($param,$query){
        $diff = array_diff_key($query,$param);
        if($diff) throw new OpenAuthPlatFormException(sprintf('Parameter filling error:%s',implode(',',array_keys($diff))));
        return array_merge($param,$query);
    }
    
    
    
    
}
