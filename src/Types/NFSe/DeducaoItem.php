<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class DeducaoItem
{
    private ?string $idItem;
    private ?string $descricao;
    private ?string $idUnidade;
    private ?string $unidade;
    private ?float $quantidade;
    private ?float $valor;

    /**
     * @param string|null $idItem
     * @param string|null $descricao
     * @param string|null $idUnidade
     * @param string|null $unidade
     * @param float|null $quantidade
     * @param float|null $valor
     */
    public function __construct(?string $idItem = null,
                                ?string $descricao = null,
                                ?string $idUnidade = null,
                                ?string $unidade = null,
                                ?float  $quantidade = null,
                                ?float  $valor = null)
    {
        $this->idItem = $idItem;
        $this->descricao = $descricao;
        $this->idUnidade = $idUnidade;
        $this->unidade = $unidade;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }

    public function getIdItem(): ?string
    {
        return $this->idItem;
    }

    public function setIdItem(?string $idItem): DeducaoItem
    {
        $this->idItem = $idItem;
        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): DeducaoItem
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getIdUnidade(): ?string
    {
        return $this->idUnidade;
    }

    public function setIdUnidade(?string $idUnidade): DeducaoItem
    {
        $this->idUnidade = $idUnidade;
        return $this;
    }

    public function getUnidade(): ?string
    {
        return $this->unidade;
    }

    public function setUnidade(?string $unidade): DeducaoItem
    {
        $this->unidade = $unidade;
        return $this;
    }

    public function getQuantidade(): ?float
    {
        return $this->quantidade;
    }

    public function setQuantidade(?float $quantidade): DeducaoItem
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): DeducaoItem
    {
        $this->valor = $valor;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }

}