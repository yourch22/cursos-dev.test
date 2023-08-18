<?php


namespace  App\Api;

use GuzzleHttp\Client;

trait InteractuarconelapiRespuestas
{

    public function decodeResponse($response)
    {

        $decodedResponse = json_decode($response);

        return $decodedResponse->data ?? $decodedResponse;
    }
    public function checkIfErrorResponse($response)
    {

        if (isset($response->error)) {
            throw new \Exception("Someting fail: {$response->error}");
        }
    }
}