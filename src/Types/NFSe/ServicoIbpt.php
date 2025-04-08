<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class ServicoIbpt
{

    private ?object $simplificado;
    private ?object $detalhado;

    /**
     * @param object|null $simplificado
     * @param object|null $detalhado
     */
    public function __construct(?object $simplificado = null, ?object $detalhado = null)
    {
        $this->simplificado = $simplificado;
        $this->detalhado = $detalhado;
    }

    public function getSimplificado(): ?object
    {
        return $this->simplificado;
    }

    public function setSimplificado(?object $simplificado): ServicoIbpt
    {
        $this->simplificado = $simplificado;
        return $this;
    }

    public function getDetalhado(): ?object
    {
        return $this->detalhado;
    }

    public function setDetalhado(?object $detalhado): ServicoIbpt
    {
        $this->detalhado = $detalhado;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }


}