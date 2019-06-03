<?php


namespace JingDongLeague\OpenAuthPlatForm\PromotionSite\Request;

use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;

class Query extends BaseClient
{
    protected $url = 'https://api.jd.com/routerjson';
    protected $method = 'jingdong.service.promotion.queryPromotionSite';
    protected $request_type = 'post';
    protected $param = [
        'unionId'=>'',
        'key'=>'',
        'unionType'=>'1',
        'pageNo'=>'',
        'pageSize'=>''
    ];
    
    public function callback(){
        $result = $this->response->result();
        if($result['message'] == 'success'){
            return [
                'success'=>true,
                'items'=>$result['data']['result'],
                'total'=>$result['data']['total']
            ];
        }else{
            return [
                'success'=>false,
                'items'=>[],
                'total'=>0
            ];
        }
    }
    
}
