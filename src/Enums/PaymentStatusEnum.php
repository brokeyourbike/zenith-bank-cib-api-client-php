<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB\Enums;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
enum PaymentStatusEnum: string
{
    case PROCESSED = 'processed';
    case PENDING = 'pending';
    case FAILED = 'Failed';
}