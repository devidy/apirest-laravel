<?php

namespace App\Exceptions\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

trait ApiException {

    /**
     * Trata as exceções da API
     *
     * @param [type] $request
     * @param [type] $e
     * @return void
     */
    public function getJsonException($request, $e)
    {
        if ($e instanceof ModelNotFoundException) {
            return $this->notFoundException();
        }

        if ($e instanceof HttpException) {
            return $this->httpException($e);
        }

        return $this->genericException();
    }

    /**
     * Retorna o erro 404
     *
     * @return void
     */
    public function notFoundException()
    {
        return $this->getResponse(
            "Recurso não encontrado",
            "01",
            404
        );
    }

    /**
     * Retorna o erro 500
     *
     * @return void
     */
    public function genericException()
    {
        return $this->getResponse(
            "Erro interno no servidor",
            "02",
            500
        );
    }

    /**
     * Retorna o erro de http
     *
     * @return void
     */
    protected function httpException($e)
    { 
      return $this->getResponse(
        'Verbo Http não é permitido',
        '03',
        $e->getStatusCode()
      );
    }

    /**
     * Monta a resposta em json
     *
     * @param [type] $message
     * @param [type] $code
     * @param [type] $status
     * @return void
     */
    public function getResponse($message, $code, $status)
    {
        return response()->json([
            "errors" => [
                [
                    "status" => $status,
                    "code" => $code,
                    "message" => $message
                ]
            ]
        ], $status);
    }
}