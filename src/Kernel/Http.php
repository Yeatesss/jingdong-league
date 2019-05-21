<?php



namespace JingDongLeague\Kernel;



use Ixudra\Curl\Facades\Curl;
use JingDongLeague\Exception\UnionException;

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
