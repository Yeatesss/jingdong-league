<?php


namespace JingDongLeague\OpenAuthPlatForm\OAuth\Request;

use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;

class RefreshAccessToken extends BaseClient
{
    
    protected $url = 'https://open-oauth.jd.com/oauth2/refresh_token?app_key=%s&app_secret=%s&grant_type=%s&refresh_token=%s';
    protected $request_type = 'get';
    protected $param = [
        'app_key'=>'',
        'app_secret'=>'',
        'grant_type'=>'refresh_token',
        'refresh_token'=>''
    ];
    
   
    
}
