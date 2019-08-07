<?php



namespace JingDongLeague\Union\Kernel\Http;



use Ixudra\Curl\Facades\Curl;

class Http
{

    
    public function post($url, array $form = []){
        $curlService = new \Ixudra\Curl\CurlService();

        $response = $curlService->to($url)
            ->withData($form)
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
            ->post();
        return $response;
    }
    
    
    
}
