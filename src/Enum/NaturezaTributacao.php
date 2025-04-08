<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Enum;

enum NaturezaTributacao: int
{
    case SIMPLES_NACIONAL = 1;
    case FIXO = 2;
    case DEPOSITO_EM_JUÍZO = 3;
    case EXIGIBILIDADE_SUSPENSA_POR_DECISAO_JUDICIAL = 4;
    case EXIGIBILIDADE_SUSPENSA_POR_PROCEDIMENTO_ADMINISTRATIVO = 5;
    case ISENCAO_PARCIAL = 6;
}
