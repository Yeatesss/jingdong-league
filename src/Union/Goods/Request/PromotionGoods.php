<?php


namespace JingDongLeague\Union\Goods\Request;


use JingDongLeague\Union\Kernel\BaseClient;


class PromotionGoods extends BaseClient
{
    
    protected $method = 'jd.union.open.goods.promotiongoodsinfo.query';
    protected $pre_req = '';
    
}
