<?php



namespace JingDongLeague\Union\Order\Request;


use JingDongLeague\Union\Kernel\BaseClient;



class pid extends BaseClient
{
    #todo 测试
    protected $method = 'jd.union.open.user.pid.get';
    protected $pre_req = 'pidReq';
    
    
}


