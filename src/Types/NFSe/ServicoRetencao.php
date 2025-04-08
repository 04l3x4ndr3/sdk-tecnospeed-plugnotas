<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class ServicoRetencao
{
    private ?Retencao $pis;
    private ?Retencao $cofins;
    private ?Retencao $csll;
    private ?Retencao $inss;
    private ?Retencao $irrf;
    private ?Retencao $cpp;
    private ?float $outrasRetencoes;

    /**
     * @param Retencao|null $pis
     * @param Retencao|null $cofins
     * @param Retencao|null $csll
     * @param Retencao|null $inss
     * @param Retencao|null $cpp
     * @param float|null $outrasRetencoes
     */
    public function __construct(?Retencao $pis = null,
                                ?Retencao $cofins = null,
                                ?Retencao $csll = null,
                                ?Retencao $inss = null,
                                ?Retencao $irrf = null,
                                ?Retencao $cpp = null,
                                ?float    $outrasRetencoes = null)
    {
        $this->pis = $pis;
        $this->cofins = $cofins;
        $this->csll = $csll;
        $this->inss = $inss;
        $this->irrf = $irrf;
        $this->cpp = $cpp;
        $this->outrasRetencoes = $outrasRetencoes;
    }

    public function getPis(): ?Retencao
    {
        return $this->pis;
    }

    public function setPis(?Retencao $pis): ServicoRetencao
    {
        $this->pis = $pis;
        return $this;
    }

    public function getCofins(): ?Retencao
    {
        return $this->cofins;
    }

    public function setCofins(?Retencao $cofins): ServicoRetencao
    {
        $this->cofins = $cofins;
        return $this;
    }

    public function getCsll(): ?Retencao
    {
        return $this->csll;
    }

    public function setCsll(?Retencao $csll): ServicoRetencao
    {
        $this->csll = $csll;
        return $this;
    }

    public function getInss(): ?Retencao
    {
        return $this->inss;
    }

    public function setInss(?Retencao $inss): ServicoRetencao
    {
        $this->inss = $inss;
        return $this;
    }

    public function getIrrf(): ?Retencao
    {
        return $this->irrf;
    }

    public function setIrrf(?Retencao $irrf): ServicoRetencao
    {
        $this->irrf = $irrf;
        return $this;
    }

    public function getCpp(): ?Retencao
    {
        return $this->cpp;
    }

    public function setCpp(?Retencao $cpp): ServicoRetencao
    {
        $this->cpp = $cpp;
        return $this;
    }

    public function getOutrasRetencoes(): ?float
    {
        return $this->outrasRetencoes;
    }

    public function setOutrasRetencoes(?float $outrasRetencoes): ServicoRetencao
    {
        $this->outrasRetencoes = $outrasRetencoes;
        return $this;
    }

    public function toArray(): array
    {
        $ret = get_object_vars($this);

        if (!empty($this->pis)) {
            $ret['pis'] = $this->pis->toArray();
        }
        if (!empty($this->cofins)) {
            $ret['cofins'] = $this->cofins->toArray();
        }
        if (!empty($this->csll)) {
            $ret['csll'] = $this->csll->toArray();
        }
        if (!empty($this->inss)) {
            $ret['inss'] = $this->inss->toArray();
        }
        if (!empty($this->irrf)) {
            $ret['irrf'] = $this->irrf->toArray();
        }
        if (!empty($this->cpp)) {
            $ret['cpp'] = $this->cpp->toArray();
        }

        return array_filter($ret);
    }
}