<?php


namespace JingDongLeague\Union\Kernel;



use JingDongLeague\Union\Kernel\Http\Api;

class BaseClient
{
    

    protected $request;
    protected $method;
    
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->request = new Api($app->app_key,$app->app_secret);
    }
    

    public function httpGet($query=[])
    {
        return $this->request->get($this->method,$query);
    }
    
   
    public function httpPost($query=[])
    {
        return $this->request->post($this->method,$query);
    }
    
}
