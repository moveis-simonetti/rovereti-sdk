<?php

namespace Simonetti\Rovereti;

/**
 * Class ContaPagar
 * @package Simonetti\Rovereti
 */
class ContaPagar implements ToArrayInterface
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
    protected $dscContaPagar;

    /**
     * @var string
     */
    protected $numCpfCnpj;

    /**
     * @var string
     */
    protected $nomFornecedor;

    /**
     * @var string
     */
    protected $numDocumento;

    /**
     * @var string
     */
    protected $datEmissao;

    /**
     * @var string
     */
    protected $datVencimento;

    /**
     * @var float
     */
    protected $vlrConta;

    /**
     * @var float
     */
    protected $vlrMultaAtraso;

    /**
     * @var float
     */
    protected $vlrJurosAtrasoDia;

    /**
     * @var float
     */
    protected $vlrDesconto;

    /**
     * @var string
     */
    protected $datLimiteDesconto;

    /**
     * @var string
     */
    protected $numAnoMesCompetencia;

    /**
     * @var string
     */
    protected $indContaReconhecida;

    /**
     * @var string
     */
    protected $codIntegracaoAcaoContabil;

    /**
     * @var string
     */
    protected $codIntegracaoClassGerencial;

    /**
     * @var string
     */
    protected $codIntegracaoCentroCusto;

    /**
     * @var string
     */
    protected $dscObservacao;

    /**
     * @var string
     */
    protected $codIntegracaoContaPagar;

    /**
     * @var Banco
     */
    protected $dadosBancarios;

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->codEmpresa = $data->codEmpresa;
        $this->codIntegracaoFilial = $data->codIntegracaoFilial;
        $this->dscContaPagar = $data->dscContaPagar;
        $this->numCpfCnpj = $data->numCpfCnpj;
        $this->nomFornecedor = $data->nomFornecedor;
        $this->datVencimento = $data->datVencimento;
        $this->vlrConta = $data->vlrConta;
        $this->indContaReconhecida = $data->indContaReconhecida;
        $this->codIntegracaoContaPagar = $data->codIntegracaoContaPagar;

        $this->numDocumento = (isset($data->numDocumento)) ? $data->numDocumento : null;
        $this->datEmissao = (isset($data->datEmissao)) ? $data->datEmissao : null;
        $this->vlrMultaAtraso = (isset($data->vlrMultaAtraso)) ? $data->vlrMultaAtraso : null;
        $this->vlrJurosAtrasoDia = (isset($data->vlrJurosAtrasoDia)) ? $data->vlrJurosAtrasoDia : null;
        $this->vlrDesconto = (isset($data->vlrDesconto)) ? $data->vlrDesconto : null;
        $this->datLimiteDesconto = (isset($data->datLimiteDesconto)) ? $data->datLimiteDesconto : null;
        $this->numAnoMesCompetencia = (isset($data->numAnoMesCompetencia)) ? $data->numAnoMesCompetencia : null;
        $this->codIntegracaoAcaoContabil = (isset($data->codIntegracaoAcaoContabil)) ? $data->codIntegracaoAcaoContabil : null;
        $this->codIntegracaoClassGerencial = (isset($data->codIntegracaoClassGerencial)) ? $data->codIntegracaoClassGerencial : null;
        $this->codIntegracaoCentroCusto = (isset($data->codIntegracaoCentroCusto)) ? $data->codIntegracaoCentroCusto : null;
        $this->dscObservacao = (isset($data->dscObservacao)) ? $data->dscObservacao : null;

        if (isset($data->dadosBancarios)) {
            $this->dadosBancarios = new Banco(
                $data->dadosBancarios->nomFavorecido,
                $data->dadosBancarios->numCpfCnpjFavorecido,
                $data->dadosBancarios->numBanco,
                $data->dadosBancarios->numAgencia,
                $data->dadosBancarios->numContaCorrente,
                $data->dadosBancarios->numDigitoContaCorrente
            );
        }
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
    public function getDscContaPagar(): string
    {
        return $this->dscContaPagar;
    }

    /**
     * @return string
     */
    public function getNumCpfCnpj(): string
    {
        return $this->numCpfCnpj;
    }

    /**
     * @return string
     */
    public function getNomFornecedor(): string
    {
        return $this->nomFornecedor;
    }

    /**
     * @return string
     */
    public function getNumDocumento(): string
    {
        return $this->numDocumento;
    }

    /**
     * @return string
     */
    public function getDatEmissao(): string
    {
        return $this->datEmissao;
    }

    /**
     * @return string
     */
    public function getDatVencimento(): string
    {
        return $this->datVencimento;
    }

    /**
     * @return float
     */
    public function getVlrConta(): float
    {
        return $this->vlrConta;
    }

    /**
     * @return float
     */
    public function getVlrMultaAtraso(): float
    {
        return $this->vlrMultaAtraso;
    }

    /**
     * @return float
     */
    public function getVlrJurosAtrasoDia(): float
    {
        return $this->vlrJurosAtrasoDia;
    }

    /**
     * @return float
     */
    public function getVlrDesconto(): float
    {
        return $this->vlrDesconto;
    }

    /**
     * @return string
     */
    public function getDatLimiteDesconto(): string
    {
        return $this->datLimiteDesconto;
    }

    /**
     * @return string
     */
    public function getNumAnoMesCompetencia(): string
    {
        return $this->numAnoMesCompetencia;
    }

    /**
     * @return string
     */
    public function getIndContaReconhecida(): string
    {
        return $this->indContaReconhecida;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoAcaoContabil(): string
    {
        return $this->codIntegracaoAcaoContabil;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoClassGerencial(): string
    {
        return $this->codIntegracaoClassGerencial;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoCentroCusto(): string
    {
        return $this->codIntegracaoCentroCusto;
    }

    /**
     * @return string
     */
    public function getDscObservacao(): string
    {
        return $this->dscObservacao;
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
    public function getNomFavorecido()
    {
        return $this->dadosBancarios->getNomFavorecido();
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFavorecido()
    {
        return $this->dadosBancarios->getNumCpfCnpjFavorecido();
    }

    /**
     * @return int
     */
    public function getNumBanco()
    {
        return $this->dadosBancarios->getNumBanco();
    }

    /**
     * @return int
     */
    public function getNumAgencia()
    {
        return $this->dadosBancarios->getNumAgencia();
    }

    /**
     * @return int
     */
    public function getNumContaCorrente()
    {
        return $this->dadosBancarios->getNumContaCorrente();
    }

    /**
     * @return string
     */
    public function getNumDigitoContaCorrente()
    {
        return $this->dadosBancarios->getNumDigitoContaCorrente();
    }

}