<?php

namespace app\services;

use Yii;
use yii\httpclient\Client;

class CepValidatorService
{
    /**
     * Valida o CEP usando a API BrasilAPI.
     *
     * @param string $cep O CEP a ser validado
     * @return array|null Dados do CEP ou null se inválido
     */
    public static function validateCep($cep)
    {
        // Verificação simples para garantir que o CEP seja um formato válido
        if (!preg_match('/^\d{8}$/', $cep)) {
            Yii::error('CEP inválido: ' . $cep);
            return null;
        }

        try {
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://brasilapi.com.br/api/cep/v1/' . $cep)
                ->send();

            if ($response->isOk) {
                return $response->data;
            } else {
                Yii::error('Erro ao validar CEP: ' . $response->statusCode . ' - ' . $response->content);
                return null;
            }
        } catch (\yii\httpclient\Exception $e) {
            // Captura erros relacionados à requisição HTTP
            Yii::error('Erro de requisição HTTP ao validar CEP: ' . $e->getMessage());
            return null;
        } catch (\Exception $e) {
            // Captura outros erros
            Yii::error('Erro inesperado ao validar CEP: ' . $e->getMessage());
            return null;
        }
    }
}
