<?php


Namespace  App\Api;

use GuzzleHttp\Client;

trait ConsumirServiciosExternos{

    public function makeRequest($method, $requestUri,$queryParams=[],$formParams=[],$headers=[]){

        $client =  new Client([
        
            'base_uri' => $this->baseUri,
            
        ]);
        if (method_exists($this, 'concederAutorizacion')) {

            $this->concederAutorizacion($queryParams, $formParams, $headers); 
        }

        $response = $client->request($method, $requestUri,[
            'query' => $queryParams,
            'form_param' => $formParams,
            'headers' => $headers,
        ]);
        $response = $response->getBody()->getContents();
        if (method_exists($this, 'decodeResponse')) {
            
            $response = $this->decodeResponse($response);
        }
        if (method_exists($this,'checkIfErrorResponse')) {
            $this->checkIfErrorResponse($response);
        }
        return $response;
    }
}