<?php


namespace JingDongLeague\Union\Kernel;



use JingDongLeague\Union\Kernel\Http\Api;

abstract class BaseClient
{
    

    protected $http;
    protected $method;
    protected $pre_req;
    
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->http = new Api($app->app_key,$app->app_secret);
    }
    

    public function request($query=[])
    {
        return $this->http->request($this->method,[$this->pre_req=>$query]);
    }
    
    
}
