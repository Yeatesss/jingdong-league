<?php



namespace JingDongLeague\Union\Promotion\Request;


use JingDongLeague\Union\Kernel\BaseClient;



class Common extends BaseClient
{
    
    protected $method = 'jd.union.open.promotion.common.get';
    public function get($query=[]){
        return $this->httpPost(['promotionCodeReq'=>$query]);
    }
}
