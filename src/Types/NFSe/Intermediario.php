<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Intermediario
{

    private ?string $cpfCnpj;
    private ?string $razaoSocial;
    private ?string $inscricaoMunicipal;
    private ?Endereco $endereco;

    /**
     * @param string|null $cpfCnpj
     * @param string|null $razaoSocial
     * @param string|null $inscricaoMunicipal
     * @param Endereco|null $endereco
     */
    public function __construct(?string   $cpfCnpj = null,
                                ?string   $razaoSocial = null,
                                ?string   $inscricaoMunicipal = null,
                                ?Endereco $endereco = null)
    {
        $this->cpfCnpj = $cpfCnpj;
        $this->razaoSocial = $razaoSocial;
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        $this->endereco = $endereco;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(?string $cpfCnpj): Intermediario
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): Intermediario
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    public function setInscricaoMunicipal(?string $inscricaoMunicipal): Intermediario
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        return $this;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(?Endereco $endereco): Intermediario
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function toArray(): array
    {
        $ret = get_object_vars($this);
        if (!empty($this->endereco)) {
            $ret['endereco'] = $this->endereco->toArray();
        }
        return array_filter($ret);
    }

}