<?php



namespace JingDongLeague\Union\Order\Request;


use JingDongLeague\Union\Kernel\BaseClient;



class Order extends BaseClient
{
    
    protected $method = 'jd.union.open.order.query';
    protected $pre_req = 'orderReq';
    
    
}


