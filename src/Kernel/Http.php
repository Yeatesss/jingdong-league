<?php



namespace JingDongLeague\Kernel;



use Carbon\Carbon;
use Ixudra\Curl\Facades\Curl;
use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;

class Http
{
    protected $publi_param;
    public function __construct(ServiceContainer $app,$method)
    {
        if($method){
            $method = ['method'=>$method];
        }else{
            $method = [];
    
        }
        $this->publi_param = array_merge(['timestamp'=>Carbon::now()->toDateTimeString()],$app->config(),$method);
    }
    
    public function post($url, array $form = []){
        $formData = $this->makeParams($form);
        $curlService = new \Ixudra\Curl\CurlService();

        $response = $curlService->to($url)
            ->withData($formData)
            ->asJsonResponse(true)
            ->returnResponseObject()
    
            ->post();
        return $response;
    }
    
    public function get($url){
        $curlService = new \Ixudra\Curl\CurlService();

        $response = $curlService->to($url)
            ->asJsonResponse(true)
            ->returnResponseObject()
            ->get();
        return $response;
    }
    
    
    
    public function makeParams($param):array {
        $this->publi_param['360buy_param_json'] = json_encode($param);
        
        $sign = $this->getStringToSign();
        $parameter = array_merge($this->publi_param, ['sign' => $sign]);
        ksort($parameter);
        return $parameter;
    }
    
    /**
     * 生成签名
     * @param $parameter
     * @return string
     */
    protected function getStringToSign()
    {
        $parameter = $this->publi_param;
        ksort($parameter);
        $str = '';
        foreach ($parameter as $key => $value) {
            if (!empty($value)) {
                $str .= ($key) . ($value);
            }
        }
        
        $str = $this->publi_param['app_secret'] . $str . $this->publi_param['app_secret'];
        
        $signature = strtoupper(md5($str));
        
        return $signature;
    }
 
    
    
}
