<?php


namespace JingDongLeague\OpenAuthPlatForm\OAuth\Request;

use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;
use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;

class AccessToken extends BaseClient
{
    public function __construct(ServiceContainer $app)
    {
        parent::__construct($app);
        $this->callback = function($response){
            $data['status'] = $response['code'];
            isset($response['msg']) && $data['errorMsg'] = $response['msg'];
            unset($response['code'],$response['msg']);
            $data['original'] = $data['items'] = $response;
            return $data;
        };
    }

    protected $url = 'https://open-oauth.jd.com/oauth2/access_token?app_key=%s&app_secret=%s&grant_type=%s&code=%s';
    protected $request_type = 'get';
    protected $param = [
        'app_key'=>'',
        'app_secret'=>'',
        'grant_type'=>'authorization_code',
        'code'=>''
    ];


    
   
    
}
