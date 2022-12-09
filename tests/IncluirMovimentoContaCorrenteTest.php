<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\IncluirMovimentoContaCorrente;
use Simonetti\Rovereti\MovimentoContaCorrente;

/**
 * Class IncluirMovimentoContaCorrenteTest
 * @package Simonetti\Rovereti\Tests
 */
class IncluirMovimentoContaCorrenteTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient());
        $incluirMovCC->execute('', $movimentoCC);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient(401));
        $incluirMovCC->execute('ContaPagar/IncluirMovtoContaCorrente', $movimentoCC);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient(404));
        $incluirMovCC->execute('ContaPagar/IncluirMovtoContaCorrente', $movimentoCC);
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient());
        $response = $incluirMovCC->execute('ContaPagar/IncluirMovtoContaCorrente', $movimentoCC);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getMovimentoContaCorrente(): MovimentoContaCorrente
    {
        $data = [
            'codEmpresa' => 10,
            'codIntegracaoContaCorrente' => 112,
            'codTipoMovto' => 1200,
            'datMovimento' => '01/01/2017',
            'vlrMovimento' => 101.12,
            'dscComplemento' => 'fdsafgsgassagh',
            'codIntegracaoTipoMovtoCc' => 12,
            'codIntegracaoMovtoCc' => 13,
            'codIntegracaoFilial' => 2,
        ];

        $movimentoCC = new MovimentoContaCorrente();

        $movimentoCC->populate((object) $data);

        return $movimentoCC;
    }
}
