<?php

namespace Simonetti\Rovereti;

/**
 * Class ContaPagar
 * @package Simonetti\Rovereti
 */
class ContaPagar implements ToArrayInterface
{
    use ObjectDataUtil;

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
     * Descrição da conta a pagar
     * @var string
     */
    protected $DscContaPagar;

    /**
     * CPF / CNPJ do Fornecedor (sem formatação)
     * @var string
     */
    protected $NumCpfCnpj;

    /**
     * Nome do Fornecedor
     * @var string
     */
    protected $NomFornecedor;

    /**
     * Nº do documento
     * @var string
     */
    protected $NumDocumento;

    /**
     * Data de emissão
     * @var string
     */
    protected $DatEmissao;

    /**
     * Data de vencimento
     * @var string
     */
    protected $DatVencimento;

    /**
     * Valor da conta
     * @var float
     */
    protected $VlrConta;

    /**
     * Valor da multa por atraso
     * @var float
     */
    protected $VlrMultaAtraso;

    /**
     * valor do juros por dia de atraso
     * @var float
     */
    protected $VlrJurosAtrasoDia;

    /**
     * valor do desconto para pagamento até uma data limite
     * @var float
     */
    protected $VlrDesconto;

    /**
     * Data limite para pagamento com desconto
     * @var string
     */
    protected $DatLimiteDesconto;

    /**
     * Ano / mês de competência no formato YYYYMM (caso não informado usará o ano mês do vencimento
     * @var string
     */
    protected $NumAnoMesCompetencia;

    /**
     * Indicador (S/N) se a conta deve ser reconhecida
     * @var string
     */
    protected $IndContaReconhecida;

    /**
     * Código da classificação contábil
     * @var string
     */
    protected $CodIntegracaoAcaoContabil;

    /**
     * Código da classificação gerencial
     * @var string
     */
    protected $CodIntegracaoClassGerencial;

    /**
     * Código do centro de custo
     * @var string
     */
    protected $CodIntegracaoCentroCusto;

    /**
     * Observação sobre a conta
     * @var string
     */
    protected $DscObservacao;

    /**
     * Código da conta a pagar
     * @var string
     */
    protected $CodIntegracaoContaPagar;

    /**
     * Dados Bancarios - Nome do favorecido
     * @var string
     */
    protected $NomFavorecido;

    /**
     * Dados Bancarios - CPF/CNPJ Favorecido
     * @var string
     */
    protected $NumCpfCnpjFavorecido;

    /**
     * Dados Bancarios - Número do Banco
     * @var int
     */
    protected $NumBanco;

    /**
     * Dados Bancarios - Número da Agência
     * @var int
     */
    protected $NumAgencia;

    /**
     * Dados Bancarios - Número da Conta Corrente
     * @var int
     */
    protected $NumContaCorrente;

    /**
     * Dados Bancarios - Número Digito COnta COrrente
     * @var int
     */
    protected $NumDigitoContaCorrente;

    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Conta a Pagar
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->CodIntegracaoFilial = $data->codIntegracaoFilial;
        $this->DscContaPagar = $data->dscContaPagar;
        $this->NumCpfCnpj = $data->numCpfCnpj;
        $this->NomFornecedor = $data->nomFornecedor;
        $this->DatVencimento = $data->datVencimento;
        $this->VlrConta = $data->vlrConta;
        $this->IndContaReconhecida = $data->indContaReconhecida;
        $this->CodIntegracaoContaPagar = $data->codIntegracaoContaPagar;

        $this->NumDocumento = (isset($data->numDocumento)) ? $data->numDocumento : null;
        $this->DatEmissao = (isset($data->datEmissao)) ? $data->datEmissao : null;
        $this->VlrMultaAtraso = (isset($data->vlrMultaAtraso)) ? $data->vlrMultaAtraso : null;
        $this->VlrJurosAtrasoDia = (isset($data->vlrJurosAtrasoDia)) ? $data->vlrJurosAtrasoDia : null;
        $this->VlrDesconto = (isset($data->vlrDesconto)) ? $data->vlrDesconto : null;
        $this->DatLimiteDesconto = (isset($data->datLimiteDesconto)) ? $data->datLimiteDesconto : null;
        $this->NumAnoMesCompetencia = (isset($data->numAnoMesCompetencia)) ? $data->numAnoMesCompetencia : null;
        $this->CodIntegracaoAcaoContabil = (isset($data->codIntegracaoAcaoContabil)) ? $data->codIntegracaoAcaoContabil : null;
        $this->CodIntegracaoClassGerencial = (isset($data->codIntegracaoClassGerencial)) ? $data->codIntegracaoClassGerencial : null;
        $this->CodIntegracaoCentroCusto = (isset($data->codIntegracaoCentroCusto)) ? $data->codIntegracaoCentroCusto : null;
        $this->DscObservacao = (isset($data->dscObservacao)) ? $data->dscObservacao : null;
        $this->NomFavorecido = (isset($data->nomFavorecido)) ? $data->nomFavorecido : null;
        $this->NumCpfCnpjFavorecido = (isset($data->numCpfCnpjFavorecido)) ? $data->numCpfCnpjFavorecido : null;
        $this->NumBanco = (isset($data->numBanco)) ? $data->numBanco : null;
        $this->NumAgencia = (isset($data->numAgencia)) ? $data->numAgencia : null;
        $this->NumContaCorrente = (isset($data->numContaCorrente)) ? $data->numContaCorrente : null;
        $this->NumDigitoContaCorrente = (isset($data->numDigitoContaCorrente)) ? $data->numDigitoContaCorrente : null;
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
    public function getDscContaPagar(): string
    {
        return $this->DscContaPagar;
    }

    /**
     * @return string
     */
    public function getNumCpfCnpj(): string
    {
        return $this->NumCpfCnpj;
    }

    /**
     * @return string
     */
    public function getNomFornecedor(): string
    {
        return $this->NomFornecedor;
    }

    /**
     * @return string
     */
    public function getNumDocumento(): string
    {
        return $this->NumDocumento;
    }

    /**
     * @return string
     */
    public function getDatEmissao(): string
    {
        return $this->DatEmissao;
    }

    /**
     * @return string
     */
    public function getDatVencimento(): string
    {
        return $this->DatVencimento;
    }

    /**
     * @return float
     */
    public function getVlrConta(): float
    {
        return $this->VlrConta;
    }

    /**
     * @return float
     */
    public function getVlrMultaAtraso(): float
    {
        return $this->VlrMultaAtraso;
    }

    /**
     * @return float
     */
    public function getVlrJurosAtrasoDia(): float
    {
        return $this->VlrJurosAtrasoDia;
    }

    /**
     * @return float
     */
    public function getVlrDesconto(): float
    {
        return $this->VlrDesconto;
    }

    /**
     * @return string
     */
    public function getDatLimiteDesconto(): string
    {
        return $this->DatLimiteDesconto;
    }

    /**
     * @return string
     */
    public function getNumAnoMesCompetencia(): string
    {
        return $this->NumAnoMesCompetencia;
    }

    /**
     * @return string
     */
    public function getIndContaReconhecida(): string
    {
        return $this->IndContaReconhecida;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoAcaoContabil(): string
    {
        return $this->CodIntegracaoAcaoContabil;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoClassGerencial(): string
    {
        return $this->CodIntegracaoClassGerencial;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoCentroCusto(): string
    {
        return $this->CodIntegracaoCentroCusto;
    }

    /**
     * @return string
     */
    public function getDscObservacao(): string
    {
        return $this->DscObservacao;
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
    public function getNomFavorecido(): string
    {
        return $this->NomFavorecido;
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFavorecido(): string
    {
        return $this->NumCpfCnpjFavorecido;
    }

    /**
     * @return int
     */
    public function getNumBanco(): int
    {
        return $this->NumBanco;
    }

    /**
     * @return int
     */
    public function getNumAgencia(): int
    {
        return $this->NumAgencia;
    }

    /**
     * @return int
     */
    public function getNumContaCorrente(): int
    {
        return $this->NumContaCorrente;
    }

    /**
     * @return int
     */
    public function getNumDigitoContaCorrente(): int
    {
        return $this->NumDigitoContaCorrente;
    }
}