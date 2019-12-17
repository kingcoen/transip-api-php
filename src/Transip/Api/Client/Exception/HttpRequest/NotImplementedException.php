<?php

namespace Transip\Api\Client\Exception\HttpRequest;

use Transip\Api\Client\Exception\HttpBadResponseException;

class NotImplementedException extends HttpBadResponseException
{
    const STATUS_CODE = 501;
}
