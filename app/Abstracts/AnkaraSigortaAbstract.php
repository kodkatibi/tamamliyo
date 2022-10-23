<?php

namespace App\Abstracts;

abstract class AnkaraSigortaAbstract
{
    public array $credentials = [];

    public function __construct()
    {
        $this->credentials = config('soap.clients.laravel_soap.with_basic_auth', []);
    }

    /**
     * @return array
     */
    public function getCredentials(): array
    {
        return $this->credentials;
    }
}
