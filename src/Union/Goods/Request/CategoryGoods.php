<?php


namespace JingDongLeague\Union\Goods\Request;


use JingDongLeague\Union\Kernel\BaseClient;


class CategoryGoods extends BaseClient
{
    protected $method = 'jd.union.open.category.goods.get';
    public function get($query){
        return $this->httpPost(['req'=>$query]);
    }
    
}
