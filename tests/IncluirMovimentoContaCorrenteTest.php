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
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient());
        $incluirMovCC->execute('', $movimentoCC);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient(401));
        $incluirMovCC->execute('ContaPagar/IncluirMovtoContaCorrente', $movimentoCC);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient(404));
        $incluirMovCC->execute('ContaPagar/IncluirMovtoContaCorrente', $movimentoCC);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $movimentoCC = $this->getMovimentoContaCorrente();

        $incluirMovCC = new IncluirMovimentoContaCorrente($this->getClient());
        $response = $incluirMovCC->execute('ContaPagar/IncluirMovtoContaCorrente', $movimentoCC);

        $this->assertEquals(200, $response->getStatusCode());
    }
    
    private function getMovimentoContaCorrente()
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

        $movimentoCC->populate((object)$data);

        return $movimentoCC;
    }
}
