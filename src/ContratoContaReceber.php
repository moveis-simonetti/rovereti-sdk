<?php

namespace Simonetti\Rovereti;

/**
 * Class ContratoContaReceber
 * @package Simonetti\Rovereti
 */
class ContratoContaReceber implements ToArrayInterface
{
    use ObjectDataUtil;

    /*
     * Código da Empresa no RovereTi ERP
     * @var int
     */
    protected $CodEmpresa;

    /**
     * Código da Filial
     * @var string
     */
    protected $CodIntegracaoFilial;

    /**
     * Descrição do Contrato
     * @var string
     */
    protected $DscContrato;

    /**
     * Tipo do Contrato
     * @var string
     */
    protected $TipoContrato;

    /**
     * Número do Contrato
     * @var string
     */
    protected $NumContrato;

    /**
     * Código da Integração do Contrato
     * @var string
     */
    protected $CodIntegracaoContrato;

    /**
     * Data do Contrato
     * @var string
     */
    protected $DatContrato;

    /**
     * Data do Faturamento
     * @var string
     */
    protected $DatFaturamento;

    /**
     * Número da Nota Fiscal
     * @var int
     */
    protected $NumNotaFiscal;

    /**
     * Número de Série da Nota Fiscal
     * @var int
     */
    protected $NumSerieNotaFiscal;

    /**
     * Valor do Contrato
     * @var string
     */
    protected $VlrContrato;

    /**
     * Valor Total do Contrato
     * @var string
     */
    protected $VlrTotalContrato;

    /**
     * Descrição da Observação
     * @var string
     */
    protected $DscObservacao;

    /**
     * Número do CPF / CNPJ do Cliente
     * @var int
     */
    protected $NumCpfCnpjCliente;

    /**
     * Nome do Cliente
     * @var string
     */
    protected $NomCliente;

    /**
     * Número do CNPJ da Financeira
     * @var int
     */
    protected $NumCnpjFinanciador;

    /**
     * Razão Social da Financeira
     * @var string
     */
    protected $NomFinanciador;

    /**
     * Código de Integração Contábil
     * @var string
     */
    protected $CodIntegracaoAcaoContabil;

    /**
     * Código de Integração Gerencial
     * @var string
     */
    protected $CodIntegracaoClassGerencial;

    /**
     * Parcelas do contrato
     * @var Parcela[]
     */
    protected $Parcelas;

    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Contrato Conta a Receber
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->CodIntegracaoFilial = $data->codIntegracaoFilial;
        $this->DscContrato = $data->dscContrato;
        $this->TipoContrato = $data->tipoContrato;
        $this->NumContrato = $data->numContrato;
        $this->CodIntegracaoContrato = $data->codIntegracaoContrato;
        $this->DatContrato = $data->datContrato;
        $this->DatFaturamento = $data->datFaturamento;
        $this->VlrContrato = $data->vlrContrato;
        $this->VlrTotalContrato = $data->vlrTotalContrato;
        $this->NumCpfCnpjCliente = $data->numCpfCnpjCliente;
        $this->NomCliente = $data->nomCliente;
        $this->NumCnpjFinanciador = $data->numCnpjFinanciador;
        $this->NomFinanciador = $data->nomFinanciador;

        $this->NumNotaFiscal = isset($data->numNotaFiscal) ? $data->numNotaFiscal : null;
        $this->NumSerieNotaFiscal = isset($data->numSerieNotaFiscal) ? $data->numSerieNotaFiscal : null;
        $this->DscObservacao = isset($data->dscObservacao) ? $data->dscObservacao : null;
        $this->CodIntegracaoAcaoContabil = isset($data->codIntegracaoAcaoContabil) ? $data->codIntegracaoAcaoContabil : null;
        $this->CodIntegracaoClassGerencial = isset($data->codIntegracaoClassGerencial) ? $data->codIntegracaoClassGerencial : null;

        if (isset($data->parcelas)) {
            foreach ($data->parcelas as $parcela) {
                $this->Parcelas[] = new Parcela($parcela->numParcela, $parcela->datVencimento, $parcela->vlrParcela);
            }
        }
    }

    /**
     * @return int
     */
    public function getCodEmpresa() :int
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
    public function getDscContrato(): string
    {
        return $this->DscContrato;
    }

    /**
     * @return string
     */
    public function getTipoContrato(): string
    {
        return $this->TipoContrato;
    }

    /**
     * @return string
     */
    public function getNumContrato(): string
    {
        return $this->NumContrato;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoContrato(): string
    {
        return $this->CodIntegracaoContrato;
    }

    /**
     * @return string
     */
    public function getDatContrato(): string
    {
        return $this->DatContrato;
    }

    /**
     * @return string
     */
    public function getDatFaturamento(): string
    {
        return $this->DatFaturamento;
    }

    /**
     * @return int
     */
    public function getNumNotaFiscal(): int
    {
        return $this->NumNotaFiscal;
    }

    /**
     * @return int
     */
    public function getNumSerieNotaFiscal(): int
    {
        return $this->NumSerieNotaFiscal;
    }

    /**
     * @return string
     */
    public function getVlrContrato(): string
    {
        return $this->VlrContrato;
    }

    /**
     * @return string
     */
    public function getVlrTotalContrato(): string
    {
        return $this->VlrTotalContrato;
    }

    /**
     * @return string
     */
    public function getDscObservacao(): string
    {
        return $this->DscObservacao;
    }

    /**
     * @return int
     */
    public function getNumCpfCnpjCliente(): int
    {
        return $this->NumCpfCnpjCliente;
    }

    /**
     * @return string
     */
    public function getNomCliente(): string
    {
        return $this->NomCliente;
    }

    /**
     * @return int
     */
    public function getNumCnpjFinanciador(): int
    {
        return $this->NumCnpjFinanciador;
    }

    /**
     * @return string
     */
    public function getNomFinanciador(): string
    {
        return $this->NomFinanciador;
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
     * @return Parcela[]
     */
    public function getParcelas(): array
    {
        return $this->Parcelas;
    }
}