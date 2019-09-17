<?php



namespace JingDongLeague\OpenAuthPlatForm\Order\Request;


use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;
use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;


class WithKey extends BaseClient
{
    public function __construct(ServiceContainer $app)
    {
        parent::__construct($app);
        $this->const_param = [
            'unionId'=>config('jingdong.tool_param.union_id',''),
        ];
        $this->callback = function($response){
            if(isset($response['jingdong_UnionService_queryOrderListWithKey_responce'])){
                $data['status'] = $response['jingdong_UnionService_queryOrderListWithKey_responce']['code'];
                $result = json_decode($response['jingdong_UnionService_queryOrderListWithKey_responce']['result'],true);
                $data['hasMore'] = false;
                if(is_array($result)){
                    if(isset($result['msg'])){
                        $data['errorMsg'] = $result['msg'];

                    }elseif(isset($result['data'])){
                        $data['original'] = $data['items'] = $result['data'];
                        $data['hasMore'] = $result['hasMore'];
                    }

                }
                return $data;
            }else{
                return [];
            }

        };
    }
    protected $url = 'https://api.jd.com/routerjson';
    protected $method = 'jingdong.UnionService.queryOrderListWithKey';
    protected $request_type = 'post';
    protected $param = [
        'unionId'=>'',
        'key'=>'',
        'time'=>'',
        'pageIndex'=>1,
        'pageSize'=>'50'
    ];
    

}
