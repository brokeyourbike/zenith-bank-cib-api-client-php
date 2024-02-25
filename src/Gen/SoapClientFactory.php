<?php

namespace BrokeYourBike\ZenithBankCIB\Gen;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClient;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClassmap;

class SoapClientFactory
{
    public static function factory(string $wsdl) : \BrokeYourBike\ZenithBankCIB\Gen\SoapClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(SoapClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new SoapClient($caller);
    }
}

