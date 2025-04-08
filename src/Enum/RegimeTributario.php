<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Enum;

enum RegimeTributario: int
{
    case NENHUM = 0;
    case SIMPLES_NACIONAL = 1;
    case SIMPLES_NACIONAL_EXCESSO = 2;
    case LUCRO_PRESUMIDO = 3;
    case LUCRO_REAL = 4;
    case MEI = 5;
}
