<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Deducao
{
    private ?int $forma;
    private ?int $tipo;
    private ?string $numeroNFReferencia;
    private ?string $dataNFReferencia;
    private ?float $valorTotalReferencia;
    private ?float $percentualDeduzir;
    private ?float $valorDeduzir;
    private ?string $razaoSocialReferencia;
    private ?string $cpfCnpjReferencia;
    private ?array $itens;

    /**
     * @param int|null $forma
     * @param int|null $tipo
     * @param string|null $numeroNFReferencia
     * @param string|null $dataNFReferencia
     * @param float|null $valorTotalReferencia
     * @param float|null $percentualDeduzir
     * @param float|null $valorDeduzir
     * @param string|null $razaoSocialReferencia
     * @param string|null $cpfCnpjReferencia
     * @param array|null $itens Array de DeducaoItem
     */
    public function __construct(?int    $forma = null,
                                ?int    $tipo = null,
                                ?string $numeroNFReferencia = null,
                                ?string $dataNFReferencia = null,
                                ?float  $valorTotalReferencia = null,
                                ?float  $percentualDeduzir = null,
                                ?float  $valorDeduzir = null,
                                ?string $razaoSocialReferencia = null,
                                ?string $cpfCnpjReferencia = null,
                                ?array  $itens = null)
    {
        $this->forma = $forma;
        $this->tipo = $tipo;
        $this->numeroNFReferencia = $numeroNFReferencia;
        $this->dataNFReferencia = $dataNFReferencia;
        $this->valorTotalReferencia = $valorTotalReferencia;
        $this->percentualDeduzir = $percentualDeduzir;
        $this->valorDeduzir = $valorDeduzir;
        $this->razaoSocialReferencia = $razaoSocialReferencia;
        $this->cpfCnpjReferencia = $cpfCnpjReferencia;
        $this->itens = $itens;
    }

    public function getForma(): ?int
    {
        return $this->forma;
    }

    public function setForma(?int $forma): Deducao
    {
        $this->forma = $forma;
        return $this;
    }

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(?int $tipo): Deducao
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getNumeroNFReferencia(): ?string
    {
        return $this->numeroNFReferencia;
    }

    public function setNumeroNFReferencia(?string $numeroNFReferencia): Deducao
    {
        $this->numeroNFReferencia = $numeroNFReferencia;
        return $this;
    }

    public function getDataNFReferencia(): ?string
    {
        return $this->dataNFReferencia;
    }

    public function setDataNFReferencia(?string $dataNFReferencia): Deducao
    {
        $this->dataNFReferencia = $dataNFReferencia;
        return $this;
    }

    public function getValorTotalReferencia(): ?float
    {
        return $this->valorTotalReferencia;
    }

    public function setValorTotalReferencia(?float $valorTotalReferencia): Deducao
    {
        $this->valorTotalReferencia = $valorTotalReferencia;
        return $this;
    }

    public function getPercentualDeduzir(): ?float
    {
        return $this->percentualDeduzir;
    }

    public function setPercentualDeduzir(?float $percentualDeduzir): Deducao
    {
        $this->percentualDeduzir = $percentualDeduzir;
        return $this;
    }

    public function getValorDeduzir(): ?float
    {
        return $this->valorDeduzir;
    }

    public function setValorDeduzir(?float $valorDeduzir): Deducao
    {
        $this->valorDeduzir = $valorDeduzir;
        return $this;
    }

    public function getRazaoSocialReferencia(): ?string
    {
        return $this->razaoSocialReferencia;
    }

    public function setRazaoSocialReferencia(?string $razaoSocialReferencia): Deducao
    {
        $this->razaoSocialReferencia = $razaoSocialReferencia;
        return $this;
    }

    public function getCpfCnpjReferencia(): ?string
    {
        return $this->cpfCnpjReferencia;
    }

    public function setCpfCnpjReferencia(?string $cpfCnpjReferencia): Deducao
    {
        $this->cpfCnpjReferencia = $cpfCnpjReferencia;
        return $this;
    }

    public function getItens(): ?array
    {
        return $this->itens;
    }

    public function setItens(?array $itens): Deducao
    {
        $this->itens = $itens;
        return $this;
    }

    public function addItem(DeducaoItem $item): Deducao
    {
        $this->itens[] = $item;
        return $this;
    }

    public function toArray(): array
    {
        $ret = get_object_vars($this);

        if (!empty($this->itens)) {
            foreach ($this->itens as $key => $item) {
                $ret['itens'][$key] = $item->toArray();
            }
        }

        return array_filter($ret);
    }
}