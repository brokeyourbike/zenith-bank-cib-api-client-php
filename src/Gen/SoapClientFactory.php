<?php

namespace BrokeYourBike\ZenithBankCIB\Gen;

use BrokeYourBike\ZenithBankCIB\Gen\SoapClient;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class SoapClientFactory
{
    public static function factory(string $wsdl) : \BrokeYourBike\ZenithBankCIB\Gen\SoapClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(SoapClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new SoapClient($engine, $eventDispatcher);
    }
}

