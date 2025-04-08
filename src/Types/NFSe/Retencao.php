<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Retencao
{
    private ?string $baseCalculo;
    private ?bool $retido;
    private ?float $aliquota;
    private ?float $valor;

    /**
     * @param string|null $baseCalculo
     * @param bool|null $retido
     * @param float|null $aliquota
     * @param float|null $valor
     */
    public function __construct(?string $baseCalculo = null, ?bool $retido = null, ?float $aliquota = null, ?float $valor = null)
    {
        $this->baseCalculo = $baseCalculo;
        $this->retido = $retido;
        $this->aliquota = $aliquota;
        $this->valor = $valor;
    }

    public function getBaseCalculo(): ?string
    {
        return $this->baseCalculo;
    }

    public function setBaseCalculo(?string $baseCalculo): Retencao
    {
        $this->baseCalculo = $baseCalculo;
        return $this;
    }

    public function getRetido(): ?bool
    {
        return $this->retido;
    }

    public function setRetido(?bool $retido): Retencao
    {
        $this->retido = $retido;
        return $this;
    }

    public function getAliquota(): ?float
    {
        return $this->aliquota;
    }

    public function setAliquota(?float $aliquota): Retencao
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): Retencao
    {
        $this->valor = $valor;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }

}