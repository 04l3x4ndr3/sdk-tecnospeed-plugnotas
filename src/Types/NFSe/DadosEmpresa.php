<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class DadosEmpresa
{
    private ?string $cpfCnpj;
    private ?string $codigoEstrangeiro;
    private ?Endereco $endereco;
    private ?string $email;
    private ?bool $incentivadorCultural;
    private ?bool $incentivoFiscal;
    private ?string $inscricaoEstadual;
    private ?string $inscricaoMunicipal;
    private ?string $nomeFantasia;
    private ?string $razaoSocial;
    private ?int $regimeTributario;
    private ?int $regimeTributarioEspecial;
    private ?bool $simplesNacional;
    private ?Telefone $telefone;
    private ?int $codigoDistrito;

    /**
     * @param string|null $cpfCnpj
     * @param string|null $codigoEstrangeiro
     * @param Endereco|null $endereco
     * @param string|null $email
     * @param bool|null $incentivadorCultural
     * @param bool|null $incentivoFiscal
     * @param string|null $inscricaoEstadual
     * @param string|null $inscricaoMunicipal
     * @param string|null $nomeFantasia
     * @param string|null $razaoSocial
     * @param int|null $regimeTributario
     * @param int|null $regimeTributarioEspecial
     * @param bool|null $simplesNacional
     * @param Telefone|null $telefone
     * @param int|null $codigoDistrito
     */
    public function __construct(?string $cpfCnpj = null, ?string $codigoEstrangeiro = null, ?Endereco $endereco = null, ?string $email = null, ?bool $incentivadorCultural = null, ?bool $incentivoFiscal = null, ?string $inscricaoEstadual = null, ?string $inscricaoMunicipal = null, ?string $nomeFantasia = null, ?string $razaoSocial = null, ?int $regimeTributario = null, ?int $regimeTributarioEspecial = null, ?bool $simplesNacional = null, ?Telefone $telefone = null, ?int $codigoDistrito = null)
    {
        $this->cpfCnpj = $cpfCnpj;
        $this->codigoEstrangeiro = $codigoEstrangeiro;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->incentivadorCultural = $incentivadorCultural;
        $this->incentivoFiscal = $incentivoFiscal;
        $this->inscricaoEstadual = $inscricaoEstadual;
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        $this->nomeFantasia = $nomeFantasia;
        $this->razaoSocial = $razaoSocial;
        $this->regimeTributario = $regimeTributario;
        $this->regimeTributarioEspecial = $regimeTributarioEspecial;
        $this->simplesNacional = $simplesNacional;
        $this->telefone = $telefone;
        $this->codigoDistrito = $codigoDistrito;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(?string $cpfCnpj): DadosEmpresa
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getCodigoEstrangeiro(): ?string
    {
        return $this->codigoEstrangeiro;
    }

    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): DadosEmpresa
    {
        $this->codigoEstrangeiro = $codigoEstrangeiro;
        return $this;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(?Endereco $endereco): DadosEmpresa
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): DadosEmpresa
    {
        $this->email = $email;
        return $this;
    }

    public function getIncentivadorCultural(): ?bool
    {
        return $this->incentivadorCultural;
    }

    public function setIncentivadorCultural(?bool $incentivadorCultural): DadosEmpresa
    {
        $this->incentivadorCultural = $incentivadorCultural;
        return $this;
    }

    public function getIncentivoFiscal(): ?bool
    {
        return $this->incentivoFiscal;
    }

    public function setIncentivoFiscal(?bool $incentivoFiscal): DadosEmpresa
    {
        $this->incentivoFiscal = $incentivoFiscal;
        return $this;
    }

    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricaoEstadual;
    }

    public function setInscricaoEstadual(?string $inscricaoEstadual): DadosEmpresa
    {
        $this->inscricaoEstadual = $inscricaoEstadual;
        return $this;
    }

    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    public function setInscricaoMunicipal(?string $inscricaoMunicipal): DadosEmpresa
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        return $this;
    }

    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(?string $nomeFantasia): DadosEmpresa
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): DadosEmpresa
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getRegimeTributario(): ?int
    {
        return $this->regimeTributario;
    }

    public function setRegimeTributario(?int $regimeTributario): DadosEmpresa
    {
        $this->regimeTributario = $regimeTributario;
        return $this;
    }

    public function getRegimeTributarioEspecial(): ?int
    {
        return $this->regimeTributarioEspecial;
    }

    public function setRegimeTributarioEspecial(?int $regimeTributarioEspecial): DadosEmpresa
    {
        $this->regimeTributarioEspecial = $regimeTributarioEspecial;
        return $this;
    }

    public function getSimplesNacional(): ?bool
    {
        return $this->simplesNacional;
    }

    public function setSimplesNacional(?bool $simplesNacional): DadosEmpresa
    {
        $this->simplesNacional = $simplesNacional;
        return $this;
    }

    public function getTelefone(): ?Telefone
    {
        return $this->telefone;
    }

    public function setTelefone(?Telefone $telefone): DadosEmpresa
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getCodigoDistrito(): ?int
    {
        return $this->codigoDistrito;
    }

    public function setCodigoDistrito(?int $codigoDistrito): DadosEmpresa
    {
        $this->codigoDistrito = $codigoDistrito;
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