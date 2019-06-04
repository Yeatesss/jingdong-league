<?php



namespace JingDongLeague\OpenAuthPlatForm\Promotion\Request;


use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;
use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;


class ByUnionId extends BaseClient
{
    public function __construct(ServiceContainer $app)
    {
        parent::__construct($app);
        $this->const_param = [
            'proCont'=>1,
        ];
        $this->callback = function($response){
            if(isset($response['jingdong_service_promotion_wxsq_getCodeByUnionId_responce'])){
                $result = json_decode($response['jingdong_service_promotion_wxsq_getCodeByUnionId_responce']['getcodebysubunionid_result'],true);
                if(is_array($result)){
                    $data['status'] = $result['resultCode'];
                    if(isset($result['resultMessage']) && $result['resultCode']<>0){
                        $data['errorMsg'] = $result['resultMessage'];

                    }elseif(isset($result['urlList'])){
                        $data['original'] = $data['items'] = $result['urlList'];
                    }

                }
                return $data;
            }else{
                return [];
            }

        };
    }
    protected $url = 'https://api.jd.com/routerjson';
    protected $method = 'jingdong.service.promotion.wxsq.getCodeByUnionId';
    protected $request_type = 'post';
    protected $param = [
        'materialIds'=>'',
        'unionId'=>'',
        'positionId'=>'',
        'pid'=>''
    ];
    

}
