<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Despesa
{
    private ?string $data;
    private ?float $valor;
    private ?string $descricao;

    /**
     * @param string|null $data
     * @param float|null $valor
     * @param string|null $descricao
     */
    public function __construct(?string $data = null,
                                ?float  $valor = null,
                                ?string $descricao = null)
    {
        $this->data = $data;
        $this->valor = $valor;
        $this->descricao = $descricao;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): Despesa
    {
        $this->data = $data;
        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): Despesa
    {
        $this->valor = $valor;
        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): Despesa
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }

}