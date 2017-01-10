<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\CancelamentoContaPagar;
use Simonetti\Rovereti\CancelarContaPagar;

/**
 * Class CancelarContaPagarTest
 * @package Simonetti\Rovereti\Tests
 */
class CancelarContaPagarTest extends AbstractClientTestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient());
        $cancelarContaPagar->execute('', $cancContaPagar);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient(401));
        $cancelarContaPagar->execute('ContaPagar/CancelarContaPagar', $cancContaPagar);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient(404));
        $cancelarContaPagar->execute('ContaPagar/CancelarContaPagar', $cancContaPagar);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient());
        $response = $cancelarContaPagar->execute('ContaPagar/CancelarContaPagar', $cancContaPagar);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getCancelamentoContaPagar()
    {
        return new CancelamentoContaPagar(1, 1, 1, 'test');
    }
}
