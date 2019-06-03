<?php


namespace JingDongLeague\OpenAuthPlatForm\PromotionSite\Request;

use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;

class Create extends BaseClient
{
    protected $url = 'https://api.jd.com/routerjson';
    protected $method = 'jingdong.service.promotion.createPromotionSiteBatch';
    protected $request_type = 'post';
    protected $param = [
        'unionId'=>'',
        'key'=>'',
        'unionType'=>'1',
        'siteId'=>'',
        'type'=>'',     //1网站推广位2.APP推广位3.社交媒体推广位4.聊天工具推广位5.二维码推广
        'spaceName'=>''
    ];
    
    public function callback(){
        $result = $this->response->result();
        if($result['code'] == '200'){
            return [
                'success'=>true,
                'items'=>$result['data']['resultList'],
            ];
        }else{
            return [
                'success'=>false,
                'msg'=>$result['message'],
            ];
        }
    }
    
}
