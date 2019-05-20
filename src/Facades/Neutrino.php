<?php

namespace Khatfield\LaravelNeutrino\Facades;

use Illuminate\Support\Facades\Facade;
use NeutrinoAPILib\Controllers\DataTools;
use NeutrinoAPILib\Controllers\ECommerce;
use NeutrinoAPILib\Controllers\Geolocation;
use NeutrinoAPILib\Controllers\Imaging;
use NeutrinoAPILib\Controllers\SecurityAndNetworking;
use NeutrinoAPILib\Controllers\Telephony;
use NeutrinoAPILib\Controllers\WWW;

/**
 * Class Neutrino
 * @package Khatfield\LaravelNeutrino\Facades
 *
 * @method static WWW getWWW()
 * @method static Imaging getImaging()
 * @method static Telephony getTelephone()
 * @method static ECommerce getECommerce()
 * @method static Geolocation getGeolocation()
 * @method static SecurityAndNetworking getSecurityAndNetworking()
 * @method static DataTools getDataTools()
 */
class Neutrino extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'neutrino';
    }
}