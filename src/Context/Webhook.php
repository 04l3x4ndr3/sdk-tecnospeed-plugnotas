<?php

namespace O4l3x4ndr3\SdkTecnospeedPlugNotas\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkTecnospeedPlugNotas\Configuration;
use O4l3x4ndr3\SdkTecnospeedPlugNotas\Utils\HTTPClient;

class Webhook extends HTTPClient
{
    private string $cnpj;
    private ?string $url;
    private ?string $method;
    private ?array $queryString;
    private ?array $headers;
    private ?array $nfse;

    public function __construct(string $cnpj, ?Configuration $configuration = null)
    {
        parent::__construct($configuration);
        $this->cnpj = $cnpj;
        $this->url = null;
        $this->method = null;
        $this->queryString = null;
        $this->headers = null;
        $this->nfse = null;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): Webhook
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Webhook
    {
        $this->url = $url;
        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): Webhook
    {
        $this->method = $method;
        return $this;
    }

    public function getQueryString(): ?array
    {
        return $this->queryString;
    }

    public function setQueryString(?array $queryString): Webhook
    {
        $this->queryString = $queryString;
        return $this;
    }

    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    public function setHeaders(?array $headers): Webhook
    {
        $this->headers = $headers;
        return $this;
    }

    public function getNfse(): ?array
    {
        return $this->nfse;
    }

    public function setNfse(?array $nfse): Webhook
    {
        $this->nfse = $nfse;
        return $this;
    }


    /**
     * @return object
     * @throws GuzzleException
     */
    public function cadastrar(): object
    {
        $endpoint = "{$this->cnpj}/webhook";
        $data = array_filter($this->toArray());
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function alterar(): object
    {
        $endpoint = "{$this->cnpj}/webhook";
        $data = array_filter($this->toArray());
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function consultar(): object
    {
        $endpoint = "{$this->cnpj}/webhook";
        return $this->call('GET', $endpoint);
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function remover(): object
    {
        $endpoint = "{$this->cnpj}/webhook";
        return $this->call('DELETE', $endpoint);
    }

    /**
     * @return mixed|object
     * @throws GuzzleException
     */
    public function testar(): object
    {
        $endpoint = "{$this->cnpj}/webhook/verify";
        return $this->call('POST', $endpoint);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}