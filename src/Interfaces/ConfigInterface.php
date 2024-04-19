<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB\Interfaces;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
interface ConfigInterface
{
    public function getWsdl(): string;
    public function getCompanyCode(): string;
    public function getUsername(): string;
    public function getPassword(): string;
    public function getDebitAccount(): string;
    public function getDebitAccountCurrency(): string;
}
