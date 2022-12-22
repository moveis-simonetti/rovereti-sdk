<?php

namespace Simonetti\Rovereti;

class BuscarDisponibilidadeFinanceira extends AbstractSendRequest
{
    private function getDisponibilidadeFromResponse(Response $response)
    {
        $data = $response->getBodyContentsAsArray();
        if (empty($data['disponibilidadeFinanceira'])) {
            return null;
        }

        $disponibilidade = new DisponibilidadeFinanceira();
        $disponibilidade->populate((object) $data['disponibilidadeFinanceira']);

        return $disponibilidade;
    }

    public function execute(string $uri, int $codEmpresa, \DateTime $data, array $centroCusto = [])
    {
        $parameters = [
            'CodEmpresa' => $codEmpresa,
            'AnoMes' => $data->format('Ym'),
            'CentrosCusto' => $centroCusto,
            'Key' => ':Key',
            'Token' => ':Token',
            'DscIdentificacaoUsuario' => ':DscIdentificacaoUsuario',
        ];

        $uri .= '?filtro=' . json_encode($parameters);

        $response = $this->send(self::GET_METHOD, $uri);

        return new SearchResponse(
            $response,
            $this->getDisponibilidadeFromResponse($response)
        );
    }
}
