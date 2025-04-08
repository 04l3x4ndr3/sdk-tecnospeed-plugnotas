<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkTecnospeedPlugNotas\Configuration;
use O4l3x4ndr3\SdkTecnospeedPlugNotas\Types\NFSe\NfseRequest;
use O4l3x4ndr3\SdkTecnospeedPlugNotas\Utils\HTTPClient;

class NFSe extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

    }

    /**
     * @throws GuzzleException
     */
    public function emitir(NfseRequest $nfseReq): object
    {
        $endpoint = 'nfse/emitir';
        $data = array_filter($nfseReq->toArray());
        return $this->call('POST', $endpoint, $data);
    }

}
