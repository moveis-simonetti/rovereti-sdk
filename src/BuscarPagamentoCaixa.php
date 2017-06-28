<?php

namespace Simonetti\Rovereti;

/**
 * Class BuscarPagamentoCaixa
 * @package Simonetti\Rovereti
 */
class BuscarPagamentoCaixa extends AbstractSendRequest
{
    /**
     * @param array $pagamentoCaixaArray
     * @return PagamentoCaixa
     */
    private function getPagamentoCaixaFromArray(array $pagamentoCaixaArray)
    {
        $pagamentoCaixa = new PagamentoCaixa();
        $pagamentoCaixa->populate((object)$pagamentoCaixaArray);

        return $pagamentoCaixa;
    }

    /**
     * @param Response $response
     * @return array
     */
    private function getResultsFromResponse(Response $response): array
    {
        $map = function (array $pagamentoCaixaArray) {
            return $this->getPagamentoCaixaFromArray($pagamentoCaixaArray);
        };

        $results = $response->getBodyContentsAsArray();
        if (!empty($results['pagamentosCaixa'])) {
            $results['pagamentosCaixa'] = array_map(
                $map, $results['pagamentosCaixa']
            );
        }

        return $results;
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