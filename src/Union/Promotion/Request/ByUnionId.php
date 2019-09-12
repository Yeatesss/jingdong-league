<?php



namespace JingDongLeague\Union\Promotion\Request;


use JingDongLeague\Union\Kernel\BaseClient;


class ByUnionId extends BaseClient
{
    protected $method = 'jd.union.open.promotion.byunionid.get';
    protected $pre_req = 'promotionCodeReq';
}
