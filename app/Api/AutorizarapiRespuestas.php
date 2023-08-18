<?php


namespace  App\Api;

use GuzzleHttp\Client;
trait AutorizarapiRespuestas
{

    public function concederAutorizacion(&$queryParams, &$formParams, &$headers)
    {
        $autorizarToken = $this->concederAcesoToken();
        $headers['Accept'] = 'application/json, text/plain, */*';
        $headers['Authorization'] = $autorizarToken;
        $headers['Content-Type'] = 'application/json;charset=utf-8';
    }

    public function concederAcesoToken()
    {
        return 'Basic OVNrMWJyS3h6NzlUZVAwcEZzcnlQZnd5bHZrYVlwNHpsVnJXSU5NTzpTbW5RMk15RmE1MkJGTjE5ZmVvdXRnTkFVeFhOR2JHZ0p3bTlyOW5NVFlib2t6ZXNZM2w2VmdFakM1QUdUQWhTTkZrSm5jS2FZRkNyTHBDTDBuWWFsak41ODZXcllSTjU2OFI0QWdrdjJqQ3I0cm05WEN4ME9VNXNmM1k3djAyVg==';
    }
}

