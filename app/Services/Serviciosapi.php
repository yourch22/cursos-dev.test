<?php

namespace App\Services;

use App\Api\ConsumirServiciosExternos;
use App\Api\AutorizarapiRespuestas;
use App\Api\InteractuarconelapiRespuestas;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;
use PhpParser\Builder\Function_;

class Serviciosapi{

    use ConsumirServiciosExternos, InteractuarconelapiRespuestas, AutorizarapiRespuestas;

    protected $baseUri;

    public function __construct(){

        $this->baseUri = config('services.apiudemy.base_uri');

    }

    public function getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering)
    {

        $autorizacion = base64_encode(config('services.apiudemy.client_id') . ':' . config('services.apiudemy.client_secret'));
        try {
            $client = new Client();
            $autorizacion = base64_encode(config('services.apiudemy.client_id') . ':' . config('services.apiudemy.client_secret'));
            $response = $client->request('GET', "https://www.udemy.com/api-2.0/courses/?fields[course]=title,headline,price,image_240x135,avg_rating,url,published_title,visible_instructors&page=" . $page . "&page_size=" . $page_size . "&" . $type . "=" . $category . "&price=" . $price . "&is_affiliate_agreed=True&is_fixed_priced_deals_agreed=True&is_percentage_deals_agreed=True&language=" . $language . "&ordering=" . $ordering, [
                'headers' => [
                    'Accept'  => 'application/json, text/plain, */*',
                    'Authorization'  => 'Basic ' . $autorizacion,
                    'Content-Type'  => 'application/json;charset=utf-8',
                ]
            ]);
            if (200 == $response->getStatusCode()) {
                $response = $response->getBody();
                $result = json_decode($response);
                return $result;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function getCourses($idcurso)
    {
        try {
            $client = new Client();
            $autorizacion = base64_encode(config('services.apiudemy.client_id') . ':' . config('services.apiudemy.client_secret'));
            $response = $client->request('GET', "https://www.udemy.com/api-2.0/courses/" . $idcurso . "/?fields[course]=@all", [
                'headers' => [
                    'Accept'  => 'application/json, text/plain, */*',
                    'Authorization'  => 'Basic ' . $autorizacion,
                    'Content-Type'  => 'application/json;charset=utf-8',
                ]
            ]);
            if (200 == $response->getStatusCode()) {
                $response = $response->getBody();
                $result = json_decode($response);
                return $result;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getCoursesFree($idcurso)
    {
        try {
            $client = new Client();
            $autorizacion = base64_encode(config('services.apiudemy.client_id') . ':' . config('services.apiudemy.client_secret'));
            $response = $client->request('GET', "https://www.udemy.com/get /api-2.0/courses/?page=1&page_size=15&price=price-free&is_affiliate_agreed=True&language=es&ordering=relevance", [
                'headers' => [
                    'Accept'  => 'application/json, text/plain, */*',
                    'Authorization'  => 'Basic ' . $autorizacion,
                    'Content-Type'  => 'application/json;charset=utf-8',
                ]
            ]);
            if (200 == $response->getStatusCode()) {
                $response = $response->getBody();
                $result = json_decode($response);
                return $result;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getLanguages($language)
    {
        $response = App::setlocale($language);
        return $response;
    }

}