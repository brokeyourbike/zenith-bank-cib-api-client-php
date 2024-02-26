<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB\Tests;

use GuzzleHttp\Client as GuzzleHttpClient;
use BrokeYourBike\ZenithBankCIB\Interfaces\ConfigInterface;
use BrokeYourBike\ZenithBankCIB\Client;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class ClientTest extends TestCase
{
    /** @test */
    public function it_implemets_http_client_interface(): void
    {
        $mockedConfig = $this->getMockBuilder(ConfigInterface::class)->getMock();
        $mockedConfig->method('getWsdl')->willReturn('https://example.com?wsdl');

        /** @var ConfigInterface $mockedConfig */
        $api = new Client($mockedConfig, new GuzzleHttpClient());

        $this->assertSame($mockedConfig, $api->getConfig());
    }
}
