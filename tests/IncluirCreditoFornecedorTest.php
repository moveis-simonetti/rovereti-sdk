<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\CreditoFornecedor;
use Simonetti\Rovereti\IncluirCreditoFornecedor;

class IncluirCreditoFornecedorTest extends AbstractClientTestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient());
        $incluirPJ->execute('', $creditoFornecedor);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient(401));
        $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $creditoFornecedor);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient(404));
        $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $creditoFornecedor);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient());
        $response = $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $creditoFornecedor);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @return CreditoFornecedor
     */
    private function getCreditoFornecedor()
    {
        $creditoFornecedor = new CreditoFornecedor();
        $creditoFornecedor->populate(json_decode(
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
        ));

        return $creditoFornecedor;
    }
}
