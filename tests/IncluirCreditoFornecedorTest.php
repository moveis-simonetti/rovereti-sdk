<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\CreditoFornecedor;
use Simonetti\Rovereti\IncluirCreditoFornecedor;

class IncluirCreditoFornecedorTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient());
        $incluirPJ->execute('', $creditoFornecedor);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient(401));
        $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $creditoFornecedor);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient(404));
        $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $creditoFornecedor);
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $creditoFornecedor = $this->getCreditoFornecedor();

        $incluirPJ = new IncluirCreditoFornecedor($this->getClient());
        $response = $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $creditoFornecedor);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getCreditoFornecedor(): CreditoFornecedor
    {
        $creditoFornecedor = new CreditoFornecedor();
        $creditoFornecedor->populate(json_decode(
            '{
                "CodEmpresa":72,
                "NumCpfCnpjFornecedor":"75069849000110",
                "NomFornecedor":"' . utf8_encode('DEMOBILE - INDUSTRIA DE MOVEIS') . '",	
                "DatCredito":"22/05/2017",
                "VlrCredito":"15000,01",
                "CodTipoMovtoCredito":"201",	
                "CodIntegracaoCreditoFornecedor":"INTEG-123457",	
                "DscObservacao":"' . utf8_encode('OBSERVAÇÃO 12344435 FFFFF') . '"
            }'
        ));

        return $creditoFornecedor;
    }
}
