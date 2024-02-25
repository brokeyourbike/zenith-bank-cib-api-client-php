<?php

// Copyright (C) 2023 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\ZenithBankCIB\Responses;

use BrokeYourBike\DataTransferObject\JsonResponse;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class AccountResponse extends JsonResponse
{
    public string $responseCode;
    public string $responseMessage;
    public ?string $accountStatus;
    public ?string $accountName;
    public ?string $accountNumber;
    public ?float $availableBalance;
}
