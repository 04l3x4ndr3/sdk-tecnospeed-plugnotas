<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Enum;

enum TipoDeducao: int
{
    case SEM_DEDUCOES = 0;
    case MATERIAIS = 1;
    case SUBEMPREITADA_DE_MAO_DE_OBRA = 2;
    case SERVICOS = 3;
    case PRODUCAO_EXTERNA = 4;
    case ALIMENTACAO_E_BEBIDAS = 5;
    case REEMBOLSO_DE_DESPESAS = 6;
    case REPASSE_CONSORCIADO = 7;
    case REPASSE_PLANO_DE_SAUDE = 8;
    case  OUTRAS_DEDUCOES = 99;
}
