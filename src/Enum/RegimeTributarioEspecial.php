<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Enum;

enum RegimeTributarioEspecial: int
{
    case NENHUM = 0;
    case MICRO_EMPRESA_MUNICIPAL = 1;
    case ESTIMATIVA = 2;
    case SOCIEDADE_DE_PROFISSIONAIS = 3;
    case COOPERATIVA = 4;
    case MEI = 5;
    case ME_EPP = 6;
    case LUCRO_REAL = 7;
    case LUCRO_PRESUMIDO = 8;
    case TRIBUTAÇÃO_NORMAL = 9;
    case SIMPLES_NACIONAL_EXCESSO = 10;
    case EMPRESA_DE_RESPONSABILIDADE_LIMITADA = 11;
}
