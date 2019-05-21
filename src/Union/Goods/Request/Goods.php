<?php


namespace JingDongLeague\Union\Goods\Request;


use JingDongLeague\Union\Kernel\BaseClient;


class Goods extends BaseClient
{
    
    protected $method = 'jd.union.open.goods.query';
    protected $pre_req = 'goodsReqDTO';
    
}
