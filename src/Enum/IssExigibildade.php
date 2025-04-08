<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Enum;

enum IssExigibildade: int
{
    case EXIGIVEL = 1;
    case NAO_INCIDENCIA = 2;
    case ISENCAO = 3;
    case EXPORTACAO = 4;
    case IMUNIDADE = 5;
    case SUPENSO_POR_AÇAO_JUDICIAL = 6;
    case SUSPENSO_POR_ACAO_ADMINISTRATIVA = 7;
}