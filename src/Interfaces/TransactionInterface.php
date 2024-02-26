<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB\Interfaces;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
interface TransactionInterface
{
    public function getReference(): string;
    public function getAmount(): float;
    public function getRecipientName(): string;
    public function getRecipientBankCode(): string;
    public function getRecipientBankAccount(): string;
    public function getDueDate(): \DateTime;
}
