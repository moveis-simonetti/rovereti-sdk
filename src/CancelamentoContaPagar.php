<?php
namespace Simonetti\Rovereti;

/**
 * Class CancelamentoContaPagar
 * @package Simonetti\Rovereti
 */
class CancelamentoContaPagar implements ToArrayInterface
{
    use ObjectToArray;

    /**
     * Código da empresa no Rovereti ERP
     * @var int
     */
    protected $CodEmpresa;

    /**
     * Código da Filial
     * @var string
     */
    protected $CodIntegracaoFilial;

    /**
     * Código da conta a pagar
     * @var string
     */
    protected $CodIntegracaoContaPagar;

    /**
     * Descrição do motivo de cancelamento
     * @var string
     */
    protected $DscMotivoCancelamento;


    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Cancelamento de Conta a Pagar
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->CodIntegracaoFilial = $data->codIntegracaoFilial;
        $this->CodIntegracaoContaPagar = $data->codIntegracaoContaPagar;
        $this->DscMotivoCancelamento = $data->dscMotivoCancelamento;
    }

    /**
     * @return int
     */
    public function getCodEmpresa(): int
    {
        return $this->CodEmpresa;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoFilial(): string
    {
        return $this->CodIntegracaoFilial;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoContaPagar(): string
    {
        return $this->CodIntegracaoContaPagar;
    }

    /**
     * @return string
     */
    public function getDscMotivoCancelamento(): string
    {
        return $this->DscMotivoCancelamento;
    }
}