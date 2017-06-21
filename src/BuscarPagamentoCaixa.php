<?php

namespace Simonetti\Rovereti;

/**
 * Class BuscarPagamentoCaixa
 * @package Simonetti\Rovereti
 */
class BuscarPagamentoCaixa extends AbstractSendRequest
{

    /**
     * @param Response $response
     * @return array
     */
    private function getResultsFromResponse(Response $response): array
    {
        return array_map(
            function ($pagCaixaArray) {
                ($pagCaixa = new PagamentoCaixa())
                    ->populate($pagCaixaArray);

                return $pagCaixa;
            },
            $response->getBodyContentsAsArray()
        );
    }

    /**
     * @param string $uri
     * @param int $codEmpresa
     * @param \DateTime $datPagamento
     * @return SearchResponse
     * @throws \Exception
     */
    public function execute(string $uri, int $codEmpresa, \DateTime $datPagamento): SearchResponse
    {
        if (empty($uri)) {
            throw new \Exception("URI não informada!");
        }
        if ($codEmpresa < 1) {
            throw new \Exception("codEmpresa inválido!");
        }

        $response = $this->send(
            self::GET_METHOD, "{$uri}/{$codEmpresa}/{$datPagamento->format('d-m-Y')}"
        );

        $results = $this->getResultsFromResponse($response);

        return new SearchResponse($response, $results);
    }
}