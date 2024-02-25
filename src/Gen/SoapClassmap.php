<?php

namespace BrokeYourBike\ZenithBankCIB\Gen;

use BrokeYourBike\ZenithBankCIB\Gen\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class SoapClassmap
{
    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('UploadData', Type\UploadData::class),
            new ClassMap('GenericUploadData', Type\GenericUploadData::class),
            new ClassMap('User', Type\User::class),
            new ClassMap('ArrayOfTransaction', Type\ArrayOfTransaction::class),
            new ClassMap('Transaction', Type\Transaction::class),
            new ClassMap('Response', Type\Response::class),
            new ClassMap('ArrayOfTransDetail', Type\ArrayOfTransDetail::class),
            new ClassMap('TransDetail', Type\TransDetail::class),
            new ClassMap('QueryReq', Type\QueryReq::class),
            new ClassMap('ArrayOfTransQuery', Type\ArrayOfTransQuery::class),
            new ClassMap('TransQuery', Type\TransQuery::class),
            new ClassMap('FXUploadData', Type\FXUploadData::class),
            new ClassMap('ArrayOfFXTransaction', Type\ArrayOfFXTransaction::class),
            new ClassMap('FXTransaction', Type\FXTransaction::class),
            new ClassMap('MT103Response', Type\MT103Response::class),
            new ClassMap('ArrayOfMT103Detail', Type\ArrayOfMT103Detail::class),
            new ClassMap('MT103Detail', Type\MT103Detail::class),
            new ClassMap('SendRequest', Type\SendRequest::class),
            new ClassMap('SendRequestResponse', Type\SendRequestResponse::class),
            new ClassMap('SendRemitaRequest', Type\SendRemitaRequest::class),
            new ClassMap('SendRemitaRequestResponse', Type\SendRemitaRequestResponse::class),
            new ClassMap('FetchRemitaRequest', Type\FetchRemitaRequest::class),
            new ClassMap('FetchRemitaRequestResponse', Type\FetchRemitaRequestResponse::class),
            new ClassMap('SendFXRequest', Type\SendFXRequest::class),
            new ClassMap('SendFXRequestResponse', Type\SendFXRequestResponse::class),
            new ClassMap('FetchMT103Advise', Type\FetchMT103Advise::class),
            new ClassMap('FetchMT103AdviseResponse', Type\FetchMT103AdviseResponse::class),
            new ClassMap('FetchBulkDebitRequest', Type\FetchBulkDebitRequest::class),
            new ClassMap('FetchBulkDebitRequestResponse', Type\FetchBulkDebitRequestResponse::class),
            new ClassMap('FetchRequest', Type\FetchRequest::class),
            new ClassMap('FetchRequestResponse', Type\FetchRequestResponse::class),
            new ClassMap('SendRequestForProcessing', Type\SendRequestForProcessing::class),
        ]);
    }
}

