<?php


namespace JingDongLeague\OpenAuthPlatForm\PromotionSite\Request;

use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;
use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;

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
    public function __construct(ServiceContainer $app)
    {
        parent::__construct($app);
        $this->callback = function($response){
            if(isset($response['jingdong_service_promotion_createPromotionSiteBatch_responce'])){
                $result = json_decode($response['jingdong_service_promotion_createPromotionSiteBatch_responce']['create_promotion_site_result'],true);
                $data['status'] = $result['code'];
                if(is_array($result)){
                    if(isset($result['message']) && $data['status']<>200){
                        $data['errorMsg'] = $result['message'];

                    }elseif(isset($result['data'])){
                        $data['original'] = $data['items'] = $result['data']['resultList'];
                    }
                }
                return $data;
            }else{
                return [];
            }

        };
    }


}
