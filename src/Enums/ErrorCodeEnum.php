<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB\Enums;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
enum ErrorCodeEnum: string
{
    case SUCCESSFUL = '00';
    case FAILED = '06';
    case NO_DATA_UPLOADED = '16';
    case ERROR_WHILE_PROCESSING = '22';
    case NO_DATA_FOUND = '25';
    case DATA_INVALID = '35';
    case INVALID_REQUEST_IP = '70';
    case WRONG_CREDENTIAL = '60';
    case FAILED_WHILE_CREATING_BATCH = '96';
    case EMPTY_TRANSACTIONS_LIST = '65';
    case EMPTY_TRANSACTIONS_LIST2 = '170';
    case EMPTY_BULK_DEBIT_REFERENCE = '150';
    case CANNOT_VALIDATE_RRR = '2290';
    case CONNECTION_ERROR = 'D20';
    case AUTH_SYSTEM_NOT_AVAILABLE = 'D29';
}
