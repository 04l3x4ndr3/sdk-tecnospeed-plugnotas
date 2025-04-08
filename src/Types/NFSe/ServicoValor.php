<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class ServicoValor
{
    private ?float $valor;
    private ?float $baseCalculo;
    private ?float $deducoes;
    private ?float $descontoCondicionado;
    private ?float $descontoIncondicionado;
    private ?float $liquido;
    private ?float $unitario;

    /**
     * @param float|null $valor
     * @param float|null $baseCalculo
     * @param float|null $deducoes
     * @param float|null $descontoCondicionado
     * @param float|null $descontoIncondicionado
     * @param float|null $liquido
     * @param float|null $unitario
     */
    public function __construct(?float $valor = null,
                                ?float $baseCalculo = null,
                                ?float $deducoes = null,
                                ?float $descontoCondicionado = null,
                                ?float $descontoIncondicionado = null,
                                ?float $liquido = null,
                                ?float $unitario = null)
    {
        $this->valor = $valor;
        $this->baseCalculo = $baseCalculo;
        $this->deducoes = $deducoes;
        $this->descontoCondicionado = $descontoCondicionado;
        $this->descontoIncondicionado = $descontoIncondicionado;
        $this->liquido = $liquido;
        $this->unitario = $unitario;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): ServicoValor
    {
        $this->valor = $valor;
        return $this;
    }

    public function getBaseCalculo(): ?float
    {
        return $this->baseCalculo;
    }

    public function setBaseCalculo(?float $baseCalculo): ServicoValor
    {
        $this->baseCalculo = $baseCalculo;
        return $this;
    }

    public function getDeducoes(): ?float
    {
        return $this->deducoes;
    }

    public function setDeducoes(?float $deducoes): ServicoValor
    {
        $this->deducoes = $deducoes;
        return $this;
    }

    public function getDescontoCondicionado(): ?float
    {
        return $this->descontoCondicionado;
    }

    public function setDescontoCondicionado(?float $descontoCondicionado): ServicoValor
    {
        $this->descontoCondicionado = $descontoCondicionado;
        return $this;
    }

    public function getDescontoIncondicionado(): ?float
    {
        return $this->descontoIncondicionado;
    }

    public function setDescontoIncondicionado(?float $descontoIncondicionado): ServicoValor
    {
        $this->descontoIncondicionado = $descontoIncondicionado;
        return $this;
    }

    public function getLiquido(): ?float
    {
        return $this->liquido;
    }

    public function setLiquido(?float $liquido): ServicoValor
    {
        $this->liquido = $liquido;
        return $this;
    }

    public function getUnitario(): ?float
    {
        return $this->unitario;
    }

    public function setUnitario(?float $unitario): ServicoValor
    {
        $this->unitario = $unitario;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }
}