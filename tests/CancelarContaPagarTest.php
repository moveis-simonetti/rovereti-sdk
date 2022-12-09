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
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient());
        $cancelarContaPagar->execute('', $cancContaPagar);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient(401));
        $cancelarContaPagar->execute('ContaPagar/CancelarContaPagar', $cancContaPagar);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient(404));
        $cancelarContaPagar->execute('ContaPagar/CancelarContaPagar', $cancContaPagar);
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $cancContaPagar = $this->getCancelamentoContaPagar();

        $cancelarContaPagar = new CancelarContaPagar($this->getClient());
        $response = $cancelarContaPagar->execute('ContaPagar/CancelarContaPagar', $cancContaPagar);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getCancelamentoContaPagar(): CancelamentoContaPagar
    {
        $cancelamento = new CancelamentoContaPagar();

        $data = [
            'codEmpresa' => 1,
            'codIntegracaoFilial' => 54,
            'codIntegracaoContaPagar' => 12,
            'dscMotivoCancelamento' => 'A vida é bela',
        ];

        $cancelamento->populate((object) $data);

        return $cancelamento;
    }
}
