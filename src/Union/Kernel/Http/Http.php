<?php



namespace JingDongLeague\Union\Kernel\Http;



use Ixudra\Curl\Facades\Curl;

class Http
{
    
    
    public function post($url, array $form = []){
        
        $response = Curl::to($url)
            ->withData($form)
            ->asJsonResponse(true)
            ->returnResponseObject()
            
            ->post();
        return $response;
    }
    
    public function get($url){
        
        $response = Curl::to($url)
            ->asJsonResponse(true)
            ->returnResponseObject()
            ->post();
        return $response;
    }
    
    
    
}
