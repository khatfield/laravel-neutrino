<?php

namespace Khatfield\LaravelNeutrino;

use Illuminate\Support\Collection;
use NeutrinoAPILib\NeutrinoAPIClient;

class Neutrino
{
    protected $client;

    /**
     * Neutrino constructor.
     *
     * @param Collection $config
     */
    public function __construct($config)
    {
        $user_id = $config->get('neutrino.user_id');
        $api_key = $config->get('neutrino.api_key');

        $this->client = new NeutrinoAPIClient($user_id, $api_key);

    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->client, $method], $args);
    }
}