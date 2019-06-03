<?php



namespace JingDongLeague\Union\Pid\Request;


use JingDongLeague\Union\Kernel\BaseClient;



class PositionQuery extends BaseClient
{
    protected $method = 'jd.union.open.position.query';
    protected $pre_req = 'positionReq';
    
    
}


