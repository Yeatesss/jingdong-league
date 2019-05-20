<?php


namespace JingDongLeague\Union\Goods\Request;


use JingDongLeague\Union\Kernel\BaseClient;


class JingfenGoods extends BaseClient
{
    
    protected $method = 'jd.union.open.goods.jingfen.query';
    public function get($query){
        return $this->httpPost(['goodsReq'=>$query]);
    }
}
