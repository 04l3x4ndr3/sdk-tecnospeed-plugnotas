<?php
/**
 * Copyright (c) 2025.
 * @authorAlexandre G R Alves
 * Author GitHub: https://github.com/04l3x4ndr3
 * Project GitHub:  https://github.com/04l3x4ndr3/sdk-tecnospeed-plugnotas
 */

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas;

class Configuration
{
    private array $URL_ENVIRONMENT = [
        "sandbox" => ' https://api.sandbox.plugnotas.com.br',
        "production" => 'https://api.plugnotas.com.br',
    ];

    private ?string $apiKey;
    private ?string $enviroment;
    private ?array $httpHeader;

    public function __construct(?string $api_key = null, $env = 'production')
    {
        $this->apiKey = $api_key ?? $_SERVER['PLUGNOTAS_API_KEY'];
        $this->enviroment = $this->URL_ENVIRONMENT[$env ?? $_SERVER['PLUGNOTAS_ENVIROMENT']];
        $this->httpHeader = [];
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return void
     */
    public function setApiKey(string $apiKey): Configuration
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnviroment(): ?string
    {
        return $this->enviroment;
    }

    /**
     * @param string|null $enviroment
     * @return void
     */
    public function setEnviroment(?string $enviroment): void
    {
        $this->enviroment = $enviroment;
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     */
    public function setHttpHeader(array $httpHeader): Configuration
    {
        $this->httpHeader = $httpHeader;
        return $this;
    }
}
