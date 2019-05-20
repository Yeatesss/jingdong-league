<?php



namespace JingDongLeague\Union\Kernel\Http;



use Ixudra\Curl\Facades\Curl;
use JingDongLeague\Exception\UnionException;

class Api
{
    const URL = 'https://router.jd.com/api';
    
    private $appKey;
    private $appSecret;
    private $timestamp;
    private $v;
    private $method;
    private $signMethod;
    private $requestParams;
    
    public function __construct($appKey, $appSecret)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->timestamp = date('Y-m-d H:i:s', time());
        $this->v='1.0';
        $this->signMethod = 'md5';
    }
    
    public function makeParams():array {
        $systemParameter = array(
            'app_key' => $this->appKey,
            'format' => 'json',
            'v' => $this->v,
            'timestamp' => $this->timestamp,
            'method' => $this->method,
            'sign_method' => $this->signMethod,
            'param_json' => json_encode($this->requestParams)
        );
        $sign = $this->getStringToSign($systemParameter);
        $parameter = array_merge($systemParameter, ['sign' => $sign]);
        ksort($parameter);
        return $parameter;
    }
    
    /**
     * 生成签名
     * @param $parameter
     * @return string
     */
    protected function getStringToSign($parameter)
    {
        ksort($parameter);
        $str = '';
        foreach ($parameter as $key => $value) {
            if (!empty($value)) {
                $str .= ($key) . ($value);
            }
        }
        
        $str = $this->appSecret . $str . $this->appSecret;
        
        $signature = strtoupper(md5($str));
        
        return $signature;
    }
    
    public function post($method,$requestParams=[]){
        $this->method = $method;
        $this->requestParams = $requestParams;
        $data = $this->makeParams();
        $response = Curl::to(self::URL)
            ->withData($data)
            ->asJsonResponse(true)
            ->post();
        if(isset($response['errorResponse'])){
            throw new UnionException(json_encode($response));
        }
        $response = isset(current($response)['result'])?current($response)['result']:'';
        $response && $response = json_decode($response,true);
        if(isset($response) && $response['code']==200){
            return $response['data'];
        }else{
            if(isset($response['message'])){
                throw new UnionException($response['message']);
            }else{
                throw new UnionException(json_encode($response));
            }
        }
    }
    
    public function get($method,$requestParams){
        $this->method = $method;
        $this->requestParams = $requestParams;
        $data = $this->makeParams();
        $response = Curl::to(self::URL)
            ->withData($data)
            ->asJsonResponse(true)
            ->get();
        $response = isset(current($response)['result'])?current($response)['result']:'';
        $response && $response = json_decode($response,true);
        if(isset($response) && $response['code']==200){
            return $response['data'];
        }else{
            if(isset($response['message'])){
                throw new UnionException($response['message']);
            }else{
                throw new UnionException(json_encode($response));
            }
        }
    
    
    }


}
