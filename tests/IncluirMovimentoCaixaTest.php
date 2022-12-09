<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\IncluirMovimentoCaixa;
use Simonetti\Rovereti\MovimentoCaixa;

/**
 * Class IncluirMovimentoCaixaTest
 * @package Simonetti\Rovereti\Tests
 */
class IncluirMovimentoCaixaTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovCaixa = new IncluirMovimentoCaixa($this->getClient());
        $incluirMovCaixa->execute('', $movimentoCaixa);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovCaixa = new IncluirMovimentoCaixa($this->getClient(401));
        $incluirMovCaixa->execute('ContaPagar/IncluirMovimentoCaixa', $movimentoCaixa);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovCaixa = new IncluirMovimentoCaixa($this->getClient(404));
        $incluirMovCaixa->execute('ContaPagar/IncluirMovimentoCaixa', $movimentoCaixa);
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovCaixa = new IncluirMovimentoCaixa($this->getClient());
        $response = $incluirMovCaixa->execute('ContaPagar/IncluirMovimentoCaixa', $movimentoCaixa);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function getMovimentoCaixa(): MovimentoCaixa
    {
        $movimentoCaixa = new MovimentoCaixa();

        $data = [
            'codEmpresa' => 21,
            'codIntegracaoFilial' => 12,
            'codTipoMovto' => 12,
            'datMovimento' => '01/01/2017',
            'vlrMovimento' => 150.02,
            'dscComplemento' => 'fsdgfasgfsagsa',
            'codIntegracaoTipoMovtoCx' => 212,
            'codIntegracaoMovtoCx' => 121,
        ];

        $movimentoCaixa->populate((object) $data);

        return $movimentoCaixa;
    }
}
