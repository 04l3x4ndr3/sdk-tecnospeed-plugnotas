<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class TomadorNfse
{

    private ?string $cpfCnpj;
    private ?string $razaoSocial;
    private ?Endereco $endereco;
    private ?string $email;
    private ?string $inscricaoEstadual;
    private ?string $inscricaoMunicipal;
    private ?string $nomeFantasia;
    private ?bool $orgaoPublico;
    private ?Telefone $telefone;
    private ?string $codigoEstrangeiro;
    private ?int $naoNif;

    /**
     * @param string|null $cpfCnpj
     * @param string|null $razaoSocial
     * @param Endereco|null $endereco
     * @param string|null $email
     * @param string|null $inscricaoEstadual
     * @param string|null $inscricaoMunicipal
     * @param string|null $nomeFantasia
     * @param bool|null $orgaoPublico
     * @param Telefone|null $telefone
     * @param string|null $codigoEstrangeiro
     * @param int|null $naoNif
     */
    public function __construct(?string $cpfCnpj = null, ?string $razaoSocial = null, ?Endereco $endereco = null, ?string $email = null, ?string $inscricaoEstadual = null, ?string $inscricaoMunicipal = null, ?string $nomeFantasia = null, ?bool $orgaoPublico = null, ?Telefone $telefone = null, ?string $codigoEstrangeiro = null, ?int $naoNif = null)
    {
        $this->cpfCnpj = $cpfCnpj;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->inscricaoEstadual = $inscricaoEstadual;
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        $this->nomeFantasia = $nomeFantasia;
        $this->orgaoPublico = $orgaoPublico;
        $this->telefone = $telefone;
        $this->codigoEstrangeiro = $codigoEstrangeiro;
        $this->naoNif = $naoNif;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(?string $cpfCnpj): TomadorNfse
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): TomadorNfse
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(?Endereco $endereco): TomadorNfse
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): TomadorNfse
    {
        $this->email = $email;
        return $this;
    }

    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricaoEstadual;
    }

    public function setInscricaoEstadual(?string $inscricaoEstadual): TomadorNfse
    {
        $this->inscricaoEstadual = $inscricaoEstadual;
        return $this;
    }

    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    public function setInscricaoMunicipal(?string $inscricaoMunicipal): TomadorNfse
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        return $this;
    }

    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(?string $nomeFantasia): TomadorNfse
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function getOrgaoPublico(): ?bool
    {
        return $this->orgaoPublico;
    }

    public function setOrgaoPublico(?bool $orgaoPublico): TomadorNfse
    {
        $this->orgaoPublico = $orgaoPublico;
        return $this;
    }

    public function getTelefone(): ?Telefone
    {
        return $this->telefone;
    }

    public function setTelefone(?Telefone $telefone): TomadorNfse
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getCodigoEstrangeiro(): ?string
    {
        return $this->codigoEstrangeiro;
    }

    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): TomadorNfse
    {
        $this->codigoEstrangeiro = $codigoEstrangeiro;
        return $this;
    }

    public function getNaoNif(): ?int
    {
        return $this->naoNif;
    }

    public function setNaoNif(?int $naoNif): TomadorNfse
    {
        $this->naoNif = $naoNif;
        return $this;
    }

    public function toArray(): array
    {
        $ret = get_object_vars($this);

        if (!empty($this->endereco)) {
            $ret['endereco'] = $this->endereco->toArray();
        }

        if (!empty($this->telefone)) {
            $ret['telefone'] = $this->telefone->toArray();
        }

        return array_filter($ret);
    }
}