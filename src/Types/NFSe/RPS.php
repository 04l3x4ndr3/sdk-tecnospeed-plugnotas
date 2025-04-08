<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class RPS
{
    private ?string $competencia;
    private ?string $dataEmissao;
    private ?string $dataVencimento;
    private ?string $serie;
    private ?int $numero;

    /**
     * @param string|null $competencia
     * @param string|null $dataEmissao
     * @param string|null $dataVencimento
     * @param string|null $serie
     * @param int|null $numero
     */
    public function __construct(?string $competencia = null,
                                ?string $dataEmissao = null,
                                ?string $dataVencimento = null,
                                ?string $serie = null,
                                ?int    $numero = null)
    {
        $this->competencia = $competencia;
        $this->dataEmissao = $dataEmissao;
        $this->dataVencimento = $dataVencimento;
        $this->serie = $serie;
        $this->numero = $numero;
    }

    public function getCompetencia(): ?string
    {
        return $this->competencia;
    }

    public function setCompetencia(?string $competencia): RPS
    {
        $this->competencia = $competencia;
        return $this;
    }

    public function getDataEmissao(): ?string
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao(?string $dataEmissao): RPS
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }

    public function getDataVencimento(): ?string
    {
        return $this->dataVencimento;
    }

    public function setDataVencimento(?string $dataVencimento): RPS
    {
        $this->dataVencimento = $dataVencimento;
        return $this;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(?string $serie): RPS
    {
        $this->serie = $serie;
        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): RPS
    {
        $this->numero = $numero;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }

}