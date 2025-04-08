<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class ServicoObra
{
    private ?string $art;
    private ?string $codigo;
    private ?string $cei;
    private ?Endereco $endereco;

    /**
     * @param string|null $art
     * @param string|null $codigo
     * @param string|null $cei
     * @param Endereco|null $endereco
     */
    public function __construct(?string   $art = null,
                                ?string   $codigo = null,
                                ?string   $cei = null,
                                ?Endereco $endereco = null)
    {
        $this->art = $art;
        $this->codigo = $codigo;
        $this->cei = $cei;
        $this->endereco = $endereco;
    }

    public function getArt(): ?string
    {
        return $this->art;
    }

    public function setArt(?string $art): ServicoObra
    {
        $this->art = $art;
        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(?string $codigo): ServicoObra
    {
        $this->codigo = $codigo;
        return $this;
    }

    public function getCei(): ?string
    {
        return $this->cei;
    }

    public function setCei(?string $cei): ServicoObra
    {
        $this->cei = $cei;
        return $this;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(?Endereco $endereco): ServicoObra
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