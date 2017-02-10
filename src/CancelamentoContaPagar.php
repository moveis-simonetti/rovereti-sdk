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
    protected $codEmpresa;

    /**
     * Código da Filial
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
     * Código da conta a pagar
     * @var string
     */
    protected $codIntegracaoContaPagar;

    /**
     * Descrição do motivo de cancelamento
     * @var string
     */
    protected $dscMotivoCancelamento;


    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Cancelamento de Conta a Pagar
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->codEmpresa = $data->codEmpresa;
        $this->codIntegracaoFilial = $data->codIntegracaoFilial;
        $this->codIntegracaoContaPagar = $data->codIntegracaoContaPagar;
        $this->dscMotivoCancelamento = $data->dscMotivoCancelamento;
    }

    /**
     * @return int
     */
    public function getCodEmpresa(): int
    {
        return $this->codEmpresa;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoFilial(): string
    {
        return $this->codIntegracaoFilial;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoContaPagar(): string
    {
        return $this->codIntegracaoContaPagar;
    }

    /**
     * @return string
     */
    public function getDscMotivoCancelamento(): string
    {
        return $this->dscMotivoCancelamento;
    }
}