<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Servico
{

    private ?string $codigo;
    private ?string $idIntegracao;
    private ?string $discriminacao;
    private ?string $codigoTributacao;
    private ?string $cnae;
    private ?string $codigoCidadeIncidencia;
    private ?string $descricaoCidadeIncidencia;
    private ?string $unidade;
    private ?int $quantidade;
    private ?ServicoISS $iss;
    private ?ServicoObra $obra;
    private ?ServicoValor $valor;
    private ?ServicoDeducao $deducao;
    private ?ServicoRetencao $retencao;
    private ?bool $tributavel;
    private ?ServicoIbpt $ibpt;
    private ?int $responsavelRetencao;

    /**
     * @param string|null $codigo
     * @param string|null $idIntegracao
     * @param string|null $discriminacao
     * @param string|null $codigoTributacao
     * @param string|null $cnae
     * @param string|null $codigoCidadeIncidencia
     * @param string|null $descricaoCidadeIncidencia
     * @param string|null $unidade
     * @param int|null $quantidade
     * @param ServicoISS|null $iss
     * @param ServicoObra|null $obra
     * @param ServicoValor|null $valor
     * @param ServicoDeducao|null $deducao
     * @param ServicoRetencao|null $retencao
     * @param bool|null $tributavel
     * @param ServicoIbpt|null $ibpt
     * @param int|null $responsavelRetencao
     */
    public function __construct(?string $codigo = null, ?string $idIntegracao = null, ?string $discriminacao = null, ?string $codigoTributacao = null, ?string $cnae = null, ?string $codigoCidadeIncidencia = null, ?string $descricaoCidadeIncidencia = null, ?string $unidade = null, ?int $quantidade = null, ?ServicoISS $iss = null, ?ServicoObra $obra = null, ?ServicoValor $valor = null, ?ServicoDeducao $deducao = null, ?ServicoRetencao $retencao = null, ?bool $tributavel = null, ?ServicoIbpt $ibpt = null, ?int $responsavelRetencao = null)
    {
        $this->codigo = $codigo;
        $this->idIntegracao = $idIntegracao;
        $this->discriminacao = $discriminacao;
        $this->codigoTributacao = $codigoTributacao;
        $this->cnae = $cnae;
        $this->codigoCidadeIncidencia = $codigoCidadeIncidencia;
        $this->descricaoCidadeIncidencia = $descricaoCidadeIncidencia;
        $this->unidade = $unidade;
        $this->quantidade = $quantidade;
        $this->iss = $iss;
        $this->obra = $obra;
        $this->valor = $valor;
        $this->deducao = $deducao;
        $this->retencao = $retencao;
        $this->tributavel = $tributavel;
        $this->ibpt = $ibpt;
        $this->responsavelRetencao = $responsavelRetencao;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(?string $codigo): Servico
    {
        $this->codigo = $codigo;
        return $this;
    }

    public function getIdIntegracao(): ?string
    {
        return $this->idIntegracao;
    }

    public function setIdIntegracao(?string $idIntegracao): Servico
    {
        $this->idIntegracao = $idIntegracao;
        return $this;
    }

    public function getDiscriminacao(): ?string
    {
        return $this->discriminacao;
    }

    public function setDiscriminacao(?string $discriminacao): Servico
    {
        $this->discriminacao = $discriminacao;
        return $this;
    }

    public function getCodigoTributacao(): ?string
    {
        return $this->codigoTributacao;
    }

    public function setCodigoTributacao(?string $codigoTributacao): Servico
    {
        $this->codigoTributacao = $codigoTributacao;
        return $this;
    }

    public function getCnae(): ?string
    {
        return $this->cnae;
    }

    public function setCnae(?string $cnae): Servico
    {
        $this->cnae = $cnae;
        return $this;
    }

    public function getCodigoCidadeIncidencia(): ?string
    {
        return $this->codigoCidadeIncidencia;
    }

    public function setCodigoCidadeIncidencia(?string $codigoCidadeIncidencia): Servico
    {
        $this->codigoCidadeIncidencia = $codigoCidadeIncidencia;
        return $this;
    }

    public function getDescricaoCidadeIncidencia(): ?string
    {
        return $this->descricaoCidadeIncidencia;
    }

    public function setDescricaoCidadeIncidencia(?string $descricaoCidadeIncidencia): Servico
    {
        $this->descricaoCidadeIncidencia = $descricaoCidadeIncidencia;
        return $this;
    }

    public function getUnidade(): ?string
    {
        return $this->unidade;
    }

    public function setUnidade(?string $unidade): Servico
    {
        $this->unidade = $unidade;
        return $this;
    }

    public function getQuantidade(): ?int
    {
        return $this->quantidade;
    }

    public function setQuantidade(?int $quantidade): Servico
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getIss(): ?ServicoISS
    {
        return $this->iss;
    }

    public function setIss(?ServicoISS $iss): Servico
    {
        $this->iss = $iss;
        return $this;
    }

    public function getObra(): ?ServicoObra
    {
        return $this->obra;
    }

    public function setObra(?ServicoObra $obra): Servico
    {
        $this->obra = $obra;
        return $this;
    }

    public function getValor(): ?ServicoValor
    {
        return $this->valor;
    }

    public function setValor(?ServicoValor $valor): Servico
    {
        $this->valor = $valor;
        return $this;
    }

    public function getDeducao(): ?ServicoDeducao
    {
        return $this->deducao;
    }

    public function setDeducao(?ServicoDeducao $deducao): Servico
    {
        $this->deducao = $deducao;
        return $this;
    }

    public function getRetencao(): ?ServicoRetencao
    {
        return $this->retencao;
    }

    public function setRetencao(?ServicoRetencao $retencao): Servico
    {
        $this->retencao = $retencao;
        return $this;
    }

    public function isTributavel(): ?bool
    {
        return $this->tributavel;
    }

    public function setTributavel(?bool $tributavel): Servico
    {
        $this->tributavel = $tributavel;
        return $this;
    }

    public function getIbpt(): ?ServicoIbpt
    {
        return $this->ibpt;
    }

    public function setIbpt(?ServicoIbpt $ibpt): Servico
    {
        $this->ibpt = $ibpt;
        return $this;
    }

    public function getResponsavelRetencao(): ?int
    {
        return $this->responsavelRetencao;
    }

    public function setResponsavelRetencao(?int $responsavelRetencao): Servico
    {
        $this->responsavelRetencao = $responsavelRetencao;
        return $this;
    }

    public function toArray(): array
    {

        $ret = get_object_vars($this);

        if (!empty($this->iss)) {
            $ret['iss'] = $this->iss->toArray();
        }

        if (!empty($this->obra)) {
            $ret['obra'] = $this->obra->toArray();
        }

        if (!empty($this->valor)) {
            $ret['valor'] = $this->valor->toArray();
        }

        if (!empty($this->deducao)) {
            $ret['deducao'] = $this->deducao->toArray();
        }

        if (!empty($this->retencao)) {
            $ret['retencao'] = $this->retencao->toArray();
        }

        if (!empty($this->ibpt)) {
            $ret['ibpt'] = $this->ibpt->toArray();
        }

        return array_filter($ret);
    }
}