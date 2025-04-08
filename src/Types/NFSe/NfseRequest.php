<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class NfseRequest
{
    private ?string $idIntegracao;
    private ?DadosEmpresa $prestador;
    private ?TomadorNfse $tomadorNfse;
    private ?array $servicos;
    private ?bool $envioPrioritario;
    private ?array $deducao;
    private ?CargaTributaria $cargaTributaria;
    private ?Endereco $cidadePrestacao;
    private ?bool $enviarEmail;
    private ?string $informacoesComplementares;
    private ?Intermediario $intermediario;
    private ?int $naturezaTributacao;
    private ?RPS $rps;
    private ?array $parcelas;
    private ?array $despesas;
    private ?array $camposPrefeitura;
    private ?array $camposExtras;
    private ?array $impressao;

    /**
     * @param string|null $idIntegracao
     * @param DadosEmpresa|null $prestador
     * @param TomadorNfse|null $tomadorNfse
     * @param array|null $servicos
     * @param bool|null $envioPrioritario
     * @param array|null $deducao
     * @param CargaTributaria|null $cargaTributaria
     * @param Endereco|null $cidadePrestacao
     * @param bool|null $enviarEmail
     * @param string|null $informacoesComplementares
     * @param Intermediario|null $intermediario
     * @param int|null $naturezaTributacao
     * @param RPS|null $rps
     * @param array|null $parcelas
     * @param array|null $despesas
     * @param array|null $camposPrefeitura
     * @param array|null $camposExtras
     * @param array|null $impressao
     */
    public function __construct(?string          $idIntegracao = null,
                                ?DadosEmpresa    $prestador = null,
                                ?TomadorNfse     $tomadorNfse = null,
                                ?array           $servicos = null,
                                ?bool            $envioPrioritario = null,
                                ?array           $deducao = null,
                                ?CargaTributaria $cargaTributaria = null,
                                ?Endereco        $cidadePrestacao = null,
                                ?bool            $enviarEmail = null,
                                ?string          $informacoesComplementares = null,
                                ?Intermediario   $intermediario = null,
                                ?int             $naturezaTributacao = null,
                                ?RPS             $rps = null,
                                ?array           $parcelas = null,
                                ?array           $despesas = null,
                                ?array           $camposPrefeitura = null,
                                ?array           $camposExtras = null,
                                ?array           $impressao = null
    )
    {
        $this->idIntegracao = $idIntegracao;
        $this->prestador = $prestador;
        $this->tomadorNfse = $tomadorNfse;
        $this->servicos = $servicos;
        $this->envioPrioritario = $envioPrioritario;
        $this->deducao = $deducao;
        $this->cargaTributaria = $cargaTributaria;
        $this->cidadePrestacao = $cidadePrestacao;
        $this->enviarEmail = $enviarEmail;
        $this->informacoesComplementares = $informacoesComplementares;
        $this->intermediario = $intermediario;
        $this->naturezaTributacao = $naturezaTributacao;
        $this->rps = $rps;
        $this->parcelas = $parcelas;
        $this->camposPrefeitura = $camposPrefeitura;
        $this->camposExtras = $camposExtras;
        $this->impressao = $impressao;
    }

    public function getIdIntegracao(): ?string
    {
        return $this->idIntegracao;
    }

    public function setIdIntegracao(?string $idIntegracao): NfseRequest
    {
        $this->idIntegracao = $idIntegracao;
        return $this;
    }

    public function getPrestador(): ?DadosEmpresa
    {
        return $this->prestador;
    }

    public function setPrestador(?DadosEmpresa $prestador): NfseRequest
    {
        $this->prestador = $prestador;
        return $this;
    }

    public function getTomadorNfse(): ?TomadorNfse
    {
        return $this->tomadorNfse;
    }

    public function setTomadorNfse(?TomadorNfse $tomadorNfse): NfseRequest
    {
        $this->tomadorNfse = $tomadorNfse;
        return $this;
    }

    public function getServicos(): ?array
    {
        return $this->servicos;
    }

    public function setServicos(?array $servicos): NfseRequest
    {
        $this->servicos = $servicos;
        return $this;
    }

    public function addServicos(Servico $servico): NfseRequest
    {
        $this->servicos[] = $servico;
        return $this;
    }

    public function isEnvioPrioritario(): ?bool
    {
        return $this->envioPrioritario;
    }

    public function setEnvioPrioritario(?bool $envioPrioritario): NfseRequest
    {
        $this->envioPrioritario = $envioPrioritario;
        return $this;
    }

    public function getDeducao(): ?array
    {
        return $this->deducao;
    }

    public function setDeducao(?array $deducao): NfseRequest
    {
        $this->deducao = $deducao;
        return $this;
    }

    public function getCargaTributaria(): ?CargaTributaria
    {
        return $this->cargaTributaria;
    }

    public function setCargaTributaria(?CargaTributaria $cargaTributaria): NfseRequest
    {
        $this->cargaTributaria = $cargaTributaria;
        return $this;
    }

    public function getCidadePrestacao(): ?Endereco
    {
        return $this->cidadePrestacao;
    }

    public function setCidadePrestacao(?Endereco $cidadePrestacao): NfseRequest
    {
        $this->cidadePrestacao = $cidadePrestacao;
        return $this;
    }

    public function getEnviarEmail(): ?bool
    {
        return $this->enviarEmail;
    }

    public function setEnviarEmail(?bool $enviarEmail): NfseRequest
    {
        $this->enviarEmail = $enviarEmail;
        return $this;
    }

    public function getInformacoesComplementares(): ?string
    {
        return $this->informacoesComplementares;
    }

    public function setInformacoesComplementares(?string $informacoesComplementares): NfseRequest
    {
        $this->informacoesComplementares = $informacoesComplementares;
        return $this;
    }

    public function getIntermediario(): ?Intermediario
    {
        return $this->intermediario;
    }

    public function setIntermediario(?Intermediario $intermediario): NfseRequest
    {
        $this->intermediario = $intermediario;
        return $this;
    }

    public function getNaturezaTributacao(): ?int
    {
        return $this->naturezaTributacao;
    }

    public function setNaturezaTributacao(?int $naturezaTributacao): NfseRequest
    {
        $this->naturezaTributacao = $naturezaTributacao;
        return $this;
    }

    public function getRps(): ?RPS
    {
        return $this->rps;
    }

    public function setRps(?RPS $rps): NfseRequest
    {
        $this->rps = $rps;
        return $this;
    }

    public function getParcelas(): ?array
    {
        return $this->parcelas;
    }

    public function setParcelas(?array $parcelas): NfseRequest
    {
        $this->parcelas = $parcelas;
        return $this;
    }

    public function getDespesas(): ?array
    {
        return $this->despesas;
    }

    public function setDespesas(?array $despesas): NfseRequest
    {
        $this->despesas = $despesas;
        return $this;
    }

    public function addDespesa(Despesa $despesa)
    {
        $this->despesas[] = $despesa;
    }

    public function getCamposPrefeitura(): ?array
    {
        return $this->camposPrefeitura;
    }

    public function setCamposPrefeitura(?array $camposPrefeitura): NfseRequest
    {
        $this->camposPrefeitura = $camposPrefeitura;
        return $this;
    }

    public function getCamposExtras(): ?array
    {
        return $this->camposExtras;
    }

    public function setCamposExtras(?array $camposExtras): NfseRequest
    {
        $this->camposExtras = $camposExtras;
        return $this;
    }

    public function getImpressao(): ?array
    {
        return $this->impressao;
    }

    public function setImpressao(?array $impressao): NfseRequest
    {
        $this->impressao = $impressao;
        return $this;
    }

    public function toArray(): array
    {
        $ret = get_object_vars($this);

        if (!empty($this->prestador)) {
            $ret['prestador'] = $this->prestador->toArray();
        }

        if (!empty($this->tomadorNfse)) {
            $ret['tomadorNfse'] = $this->tomadorNfse->toArray();
        }

        if (!empty($this->servicos)) {
            foreach ($this->servicos as $servico) {
                $ret['servicos'] = $servico->toArray();
            }
        }

        if (!empty($this->cargaTributaria)) {
            $ret['$this->cargaTributaria'] = $this->cargaTributaria->toArray();
        }

        if (!empty($this->cidadePrestacao)) {
            $ret['cidadePrestacao'] = $this->cidadePrestacao->toArray();
        }

        if (!empty($this->intermediario)) {
            $ret['$this->intermediario'] = $this->intermediario->toArray();
        }

        if (!empty($this->rps)) {
            $ret['rps'] = $this->rps->toArray();
        }

        if (!empty($this->despesas)) {
            foreach ($this->despesas as $despesa) {
                $ret['despesas'] = $despesa->toArray();
            }
        }

        return array_filter($ret);
    }

}