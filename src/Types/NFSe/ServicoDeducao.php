<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class ServicoDeducao
{
    private ?int $tipo;
    private ?string $descricao;

    /**
     * @param int|null $tipo
     * @param string|null $descricao
     */
    public function __construct(?int    $tipo = null,
                                ?string $descricao = null)
    {
        $this->tipo = $tipo;
        $this->descricao = $descricao;
    }

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(?int $tipo): ServicoDeducao
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): ServicoDeducao
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }
}