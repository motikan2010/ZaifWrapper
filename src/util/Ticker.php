<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\CommonConst;

class Ticker extends RequestCreator
{
    public function __construct()
    {
        parent::__construct(CommonConst::API_TYPE_TICKER);
    }

}