<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class ServicoISS
{
    private ?int $tipoTributacao;
    private ?int $exigibilidade;
    private ?bool $retido;
    private ?float $aliquota;
    private ?float $valor;
    private ?float $valorRetido;
    private ?string $processoSuspensao;
    private ?int $situacaoTributaria;

    /**
     * @param int|null $tipoTributacao
     * @param int|null $exigibilidade
     * @param bool|null $retido
     * @param float|null $aliquota
     * @param float|null $valor
     * @param float|null $valorRetido
     * @param string|null $processoSuspensao
     * @param int|null $situacaoTributaria
     */
    public function __construct(?int    $tipoTributacao = null,
                                ?int    $exigibilidade = null,
                                ?bool   $retido = null,
                                ?float  $aliquota = null,
                                ?float  $valor = null,
                                ?float  $valorRetido = null,
                                ?string $processoSuspensao = null,
                                ?int    $situacaoTributaria = null)
    {
        $this->tipoTributacao = $tipoTributacao;
        $this->exigibilidade = $exigibilidade;
        $this->retido = $retido;
        $this->aliquota = $aliquota;
        $this->valor = $valor;
        $this->valorRetido = $valorRetido;
        $this->processoSuspensao = $processoSuspensao;
        $this->situacaoTributaria = $situacaoTributaria;
    }

    public function getTipoTributacao(): ?int
    {
        return $this->tipoTributacao;
    }

    public function setTipoTributacao(?int $tipoTributacao): ServicoISS
    {
        $this->tipoTributacao = $tipoTributacao;
        return $this;
    }

    public function getExigibilidade(): ?int
    {
        return $this->exigibilidade;
    }

    public function setExigibilidade(?int $exigibilidade): ServicoISS
    {
        $this->exigibilidade = $exigibilidade;
        return $this;
    }

    public function getRetido(): ?bool
    {
        return $this->retido;
    }

    public function setRetido(?bool $retido): ServicoISS
    {
        $this->retido = $retido;
        return $this;
    }

    public function getAliquota(): ?float
    {
        return $this->aliquota;
    }

    public function setAliquota(?float $aliquota): ServicoISS
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): ServicoISS
    {
        $this->valor = $valor;
        return $this;
    }

    public function getValorRetido(): ?float
    {
        return $this->valorRetido;
    }

    public function setValorRetido(?float $valorRetido): ServicoISS
    {
        $this->valorRetido = $valorRetido;
        return $this;
    }

    public function getProcessoSuspensao(): ?string
    {
        return $this->processoSuspensao;
    }

    public function setProcessoSuspensao(?string $processoSuspensao): ServicoISS
    {
        $this->processoSuspensao = $processoSuspensao;
        return $this;
    }

    public function getSituacaoTributaria(): ?int
    {
        return $this->situacaoTributaria;
    }

    public function setSituacaoTributaria(?int $situacaoTributaria): ServicoISS
    {
        $this->situacaoTributaria = $situacaoTributaria;
        return $this;
    }

    public function toArray(): array{
        return array_filter(get_object_vars($this));
    }
}