<?php


namespace JingDongLeague\OpenAuthPlatForm\OAuth\Request;

use JingDongLeague\Exception\OpenAuthPlatFormException;

class GenerateCode
{
    
    protected $url = 'https://open-oauth.jd.com/oauth2/to_login?app_key=%s&response_type=code&redirect_uri=%s&state=%s&scope=%s';
    protected $param = [
        'app_key'=>'',
        'redirect_uri'=>'',
        'state'=>'20190521',
        'scope'=>'snsapi_base'
    ];
    
    public function url($query){
        $diff = array_diff_key($query,$this->param);
        if($diff) throw new OpenAuthPlatFormException(sprintf('Parameter filling error:%s',implode(',',array_keys($diff))));
        $this->param = array_merge($this->param,$query);
        $this->url = call_user_func_array('sprintf',array_merge(['url'=>$this->url],$this->param));
    
        return $this->url;
    }
    
}
