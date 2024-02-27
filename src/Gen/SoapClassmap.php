<?php

namespace BrokeYourBike\ZenithBankCIB\Gen;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use BrokeYourBike\ZenithBankCIB\Gen\Type;

class SoapClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('SendRequest', Type\SendRequest::class),
            new ClassMap('SendRequestResponse', Type\SendRequestResponse::class),
            new ClassMap('FetchBulkDebitRequest', Type\FetchBulkDebitRequest::class),
            new ClassMap('FetchBulkDebitRequestResponse', Type\FetchBulkDebitRequestResponse::class),
            new ClassMap('FetchRequest', Type\FetchRequest::class),
            new ClassMap('FetchRequestResponse', Type\FetchRequestResponse::class),
            new ClassMap('SendRequestForProcessing', Type\SendRequestForProcessing::class),
            new ClassMap('UploadData', Type\UploadData::class),
            new ClassMap('User', Type\User::class),
            new ClassMap('ArrayOfTransaction', Type\ArrayOfTransaction::class),
            new ClassMap('Transaction', Type\Transaction::class),
            new ClassMap('Response', Type\Response::class),
            new ClassMap('ArrayOfTransDetail', Type\ArrayOfTransDetail::class),
            new ClassMap('TransDetail', Type\TransDetail::class),
            new ClassMap('QueryReq', Type\QueryReq::class),
            new ClassMap('ArrayOfTransQuery', Type\ArrayOfTransQuery::class),
            new ClassMap('TransQuery', Type\TransQuery::class),
        );
    }
}

