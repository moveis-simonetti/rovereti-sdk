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
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovimentoCaixa = new IncluirMovimentoCaixa($this->getClient());
        $incluirMovimentoCaixa->execute('', $movimentoCaixa);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovimentoCaixa = new IncluirMovimentoCaixa($this->getClient(401));
        $incluirMovimentoCaixa->execute('ContaPagar/IncluirMovimentoCaixa', $movimentoCaixa);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovimentoCaixa = new IncluirMovimentoCaixa($this->getClient(404));
        $incluirMovimentoCaixa->execute('ContaPagar/IncluirMovimentoCaixa', $movimentoCaixa);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $movimentoCaixa = $this->getMovimentoCaixa();

        $incluirMovimentoCaixa = new IncluirMovimentoCaixa($this->getClient());
        $response = $incluirMovimentoCaixa->execute('ContaPagar/IncluirMovimentoCaixa', $movimentoCaixa);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function getMovimentoCaixa()
    {
        $movimentoCaixa = new MovimentoCaixa();

        $data = [
            'codEmpresa' => 21,
            'codIntegracaoFilial' => 12,
            'codTipoMovto' => 12,
            'datMovimento' => new \DateTime('now'),
            'vlrMovimento' => 150.02,
            'dscComplemento' => 'fsdgfasgfsagsa',
            'codIntegracaoTipoMovtoCx' => 212,
            'codIntegracaoMovtoCx' => 121,
        ];

        $movimentoCaixa->populate((object)$data);

        return $movimentoCaixa;
    }
}
