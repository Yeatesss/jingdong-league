<?php



namespace JingDongLeague\OpenAuthPlatForm\Promotion\Request;


use JingDongLeague\OpenAuthPlatForm\Kernel\BaseClient;


class ByUnionId extends BaseClient
{
    protected $url = 'https://api.jd.com/routerjson';
    protected $method = 'jingdong.service.promotion.wxsq.getCodeByUnionId';
    protected $request_type = 'post';
    protected $param = [
        'proCont'=>1,
        'materialIds'=>'',
        'unionId'=>'1',
        'positionId'=>'',
        'pid'=>''
    ];
    
    public function callback(){

        $result = $this->response->result();
        dd($this->response->result());
        $this->response->result = ['items'=>current($result['urlList'])];
        return $this;

    }
}
