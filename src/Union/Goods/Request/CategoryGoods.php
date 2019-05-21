<?php


namespace JingDongLeague\Union\Goods\Request;


use JingDongLeague\Union\Kernel\BaseClient;


class CategoryGoods extends BaseClient
{
    protected $method = 'jd.union.open.category.goods.get';
    protected $pre_req = 'req';
    
    
}
