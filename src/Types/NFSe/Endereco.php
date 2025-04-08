<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Endereco
{
    private ?string $bairro;
    private ?string $cep;
    private ?string $codigoCidade;
    private ?string $estado;
    private ?string $logradouro;
    private ?string $numero;
    private ?string $tipoLogradouro;
    private ?string $codigoPais = '1058';
    private ?string $complemento;
    private ?string $descricaoCidade;
    private ?string $descricaoPais;
    private ?string $tipoBairro;

    /**
     * @param string|null $bairro
     * @param string|null $cep
     * @param string|null $codigoCidade
     * @param string|null $estado
     * @param string|null $logradouro
     * @param string|null $numero
     * @param string|null $tipoLogradouro
     * @param string|null $codigoPais
     * @param string|null $complemento
     * @param string|null $descricaoCidade
     * @param string|null $descricaoPais
     * @param string|null $tipoBairro
     */
    public function __construct(?string $logradouro = null,
                                ?string $tipoLogradouro = null,
                                ?string $numero = null,
                                ?string $complemento = null,
                                ?string $bairro = null,
                                ?string $tipoBairro = null,
                                ?string $cep = null,
                                ?string $codigoCidade = null,
                                ?string $descricaoCidade = null,
                                ?string $estado = null,
                                ?string $codigoPais = null,
                                ?string $descricaoPais = null)
    {
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->codigoCidade = $codigoCidade;
        $this->estado = $estado;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->tipoLogradouro = $tipoLogradouro;
        $this->codigoPais = $codigoPais;
        $this->complemento = $complemento;
        $this->descricaoCidade = $descricaoCidade;
        $this->descricaoPais = $descricaoPais;
        $this->tipoBairro = $tipoBairro;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): Endereco
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): Endereco
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCodigoCidade(): ?string
    {
        return $this->codigoCidade;
    }

    public function setCodigoCidade(?string $codigoCidade): Endereco
    {
        $this->codigoCidade = $codigoCidade;
        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): Endereco
    {
        $this->estado = $estado;
        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(?string $logradouro): Endereco
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): Endereco
    {
        $this->numero = $numero;
        return $this;
    }

    public function getTipoLogradouro(): ?string
    {
        return $this->tipoLogradouro;
    }

    public function setTipoLogradouro(?string $tipoLogradouro): Endereco
    {
        $this->tipoLogradouro = $tipoLogradouro;
        return $this;
    }

    public function getCodigoPais(): ?string
    {
        return $this->codigoPais;
    }

    public function setCodigoPais(?string $codigoPais): Endereco
    {
        $this->codigoPais = $codigoPais;
        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): Endereco
    {
        $this->complemento = $complemento;
        return $this;
    }

    public function getDescricaoCidade(): ?string
    {
        return $this->descricaoCidade;
    }

    public function setDescricaoCidade(?string $descricaoCidade): Endereco
    {
        $this->descricaoCidade = $descricaoCidade;
        return $this;
    }

    public function getDescricaoPais(): ?string
    {
        return $this->descricaoPais;
    }

    public function setDescricaoPais(?string $descricaoPais): Endereco
    {
        $this->descricaoPais = $descricaoPais;
        return $this;
    }

    public function getTipoBairro(): ?string
    {
        return $this->tipoBairro;
    }

    public function setTipoBairro(?string $tipoBairro): Endereco
    {
        $this->tipoBairro = $tipoBairro;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }
}