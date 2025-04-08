<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class CargaTributaria
{

    public ?string $fonte;
    public ?float $percentual;
    public ?float $valor;

    /**
     * @param string|null $fonte
     * @param float|null $percentual
     * @param float|null $valor
     */
    public function __construct(?string $fonte = null,
                                ?float  $percentual = null,
                                ?float  $valor = null)
    {
        $this->fonte = $fonte;
        $this->percentual = $percentual;
        $this->valor = $valor;
    }

    public function getFonte(): ?string
    {
        return $this->fonte;
    }

    public function setFonte(?string $fonte): CargaTributaria
    {
        $this->fonte = $fonte;
        return $this;
    }

    public function getPercentual(): ?float
    {
        return $this->percentual;
    }

    public function setPercentual(?float $percentual): CargaTributaria
    {
        $this->percentual = $percentual;
        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): CargaTributaria
    {
        $this->valor = $valor;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }

}