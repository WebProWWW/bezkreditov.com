<?php

namespace app\components;

use Sendpulse\RestApi\ApiClient;

/**
 * Class SendpulseApi
 * @package app\components
 */
class SendpulseApi extends ApiClient
{
    const BOOK = 1075435;

    public function __construct()
    {
        parent::__construct('dbfac1281991f1e3e4f6a069ed592d27', '2de1513fb979132484cad375f018e67c', new SendpulseStorage());
    }

}