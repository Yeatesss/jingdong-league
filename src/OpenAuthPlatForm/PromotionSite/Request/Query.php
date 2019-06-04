<?php


namespace JingDongLeague\OpenAuthPlatForm\PromotionSite\Request;

use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;
use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;

class Query extends BaseClient
{
    public function __construct(ServiceContainer $app)
    {
        parent::__construct($app);
        $this->callback = function($response){
            if(isset($response['jingdong_service_promotion_queryPromotionSite_responce'])){
                $result = json_decode($response['jingdong_service_promotion_queryPromotionSite_responce']['querypromotionsite_result'],true);
                $data['status'] = $result['code'];
                $data['hasMore'] = false;
                if(is_array($result)){
                    if(isset($result['message']) && $data['status']<>200){
                        $data['errorMsg'] = $result['message'];

                    }elseif(isset($result['data'])){
                        $data['original'] = $data['items'] = $result['data']['result'];
                        if($result['data']['pageSize']*$result['data']['pageNo'] <= $result['data']['total']){
                            $data['hasMore'] = true;
                        }
                    }
                }
                return $data;
            }else{
                return [];
            }

        };
    }

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
    

    
}
