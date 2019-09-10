<?php



namespace JingDongLeague\Union\Pid\Request;


use JingDongLeague\Union\Kernel\BaseClient;



class PositionCreate extends BaseClient
{
    protected $method = 'jd.union.open.position.create';
    protected $pre_req = 'positionReq';
    
    
}


