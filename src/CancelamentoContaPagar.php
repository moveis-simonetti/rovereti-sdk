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
     * @var int
     */
    protected $codEmpresa;

    /**
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
     * @var string
     */
    protected $codIntegracaoContaPagar;

    /**
     * @var string
     */
    protected $dscMotivoCancelamento;


    /**
     * CancelamentoContaPagar constructor.
     * @param int $codEmpresa
     * @param string $codIntegracaoFilial
     * @param string $codIntegracaoContaPagar
     * @param string $dscMotivoCancelamento
     */
    public function __construct(
        int $codEmpresa,
        string $codIntegracaoFilial,
        string $codIntegracaoContaPagar,
        string $dscMotivoCancelamento
    ) {
        $this->codEmpresa = $codEmpresa;
        $this->codIntegracaoFilial = $codIntegracaoFilial;
        $this->codIntegracaoContaPagar = $codIntegracaoContaPagar;
        $this->dscMotivoCancelamento = $dscMotivoCancelamento;
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