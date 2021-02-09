<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Retorno padrão em formato de JSON
     * 
     * @param       string      $message        Mensagem do retorno
     * @param                   $data           Dados a serem retornados
     * @param       string      $status         SUCCESS ou ERROR
     * @param       int         $statusCode     Código HTTP do retorno
     * 
     * @return      string                      Retorno padrão em JSON        
     */
    public function returnJson(string $message, $data = null, string $status = 'success', int $statusCode = 200)
    {
        $response = (object) array(
            "status"    => strtoupper($status),
            "message"   => $message,
            "data"      => $data
        );

        $response = json_encode($response);

        return response($response, $statusCode);
    }
}
