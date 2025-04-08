<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe;

class Telefone
{
    private ?string $numero;
    private ?string $DDD;

    /**
     * @param string|null $numero
     * @param string|null $ddd
     */
    public function __construct(?string $numero = null,
                                ?string $ddd = null)
    {
        $this->numero = $numero;
        $this->DDD = $ddd;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): Telefone
    {
        $this->numero = $numero;
        return $this;
    }

    public function getDDD(): ?string
    {
        return $this->DDD;
    }

    public function setDDD(?string $DDD): Telefone
    {
        $this->DDD = $DDD;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this));
    }
}