<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Enum;

enum TipoTributacao: int
{
    case NAO_DEFINIDO = 0;
    case ISENTO_DE_ISS = 1;
    case IMUNE = 2;
    case NAO_INCIDENCIA_NO_MUNICIPIO = 3;
    case NAO_TRIBUTAVEL = 4;
    case RETIDO = 5;
    case TRIBUTAVEL_DENTRO_DO_MUNICÍPIO = 6;
    case TRIBUTAVEL_FORA_DO_MUNICIPIO = 7;
    case TRIBUTAVEL_DENTRO_DO_MUNICIPIO_PELO_TOMADOR = 8;
}
