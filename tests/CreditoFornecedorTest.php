<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\CreditoFornecedor;

class CreditoFornecedorTest extends \PHPUnit\Framework\TestCase
{
    public function testPopulate()
    {
        $parametros = json_decode(
            '{
                "CodEmpresa":72,
                "NumCpfCnpjFornecedor":"75069849000110",
                "NomFornecedor":"' . utf8_encode("DEMOBILE - INDUSTRIA DE MOVEIS") . '",	
                "DatCredito":"22/05/2017",
                "VlrCredito":"15000,01",
                "CodTipoMovtoCredito":"201",	
                "CodIntegracaoCreditoFornecedor":"INTEG-123457",	
                "DscObservacao":"' . utf8_encode("OBSERVAÇÃO 12344435 FFFFF") . '"
            }'
        );

        $creditoFornecedor = new CreditoFornecedor();
        $creditoFornecedor->populate($parametros);

        $this->assertEquals($parametros->CodEmpresa, $creditoFornecedor->getCodEmpresa());
        $this->assertEquals($parametros->NumCpfCnpjFornecedor, $creditoFornecedor->getNumCpfCnpjFornecedor());
        $this->assertEquals($parametros->NomFornecedor, $creditoFornecedor->getNomFornecedor());
        $this->assertEquals($parametros->DatCredito, $creditoFornecedor->getDatCredito());
        $this->assertEquals($parametros->VlrCredito, $creditoFornecedor->getVlrCredito());
        $this->assertEquals($parametros->CodTipoMovtoCredito, $creditoFornecedor->getCodTipoMovtoCredito());
        $this->assertEquals($parametros->CodIntegracaoCreditoFornecedor,
            $creditoFornecedor->getCodIntegracaoCreditoFornecedor());
        $this->assertEquals($parametros->DscObservacao, $creditoFornecedor->getDscObservacao());
    }

    public function testToArray()
    {
        $parametros = json_decode(
            '{
                "CodEmpresa":72,
                "NumCpfCnpjFornecedor":"75069849000110",
                "NomFornecedor":"' . utf8_encode("DEMOBILE - INDUSTRIA DE MOVEIS") . '",	
                "DatCredito":"22/05/2017",
                "VlrCredito":"15000,01",
                "CodTipoMovtoCredito":"201",	
                "CodIntegracaoCreditoFornecedor":"INTEG-123457",	
                "DscObservacao":"' . utf8_encode("OBSERVAÇÃO 12344435 FFFFF") . '"
            }', true
        );

        $creditoFornecedor = new CreditoFornecedor();
        $creditoFornecedor->populate((object)$parametros);

        $this->assertEquals($parametros, $creditoFornecedor->toArray());
    }
}
