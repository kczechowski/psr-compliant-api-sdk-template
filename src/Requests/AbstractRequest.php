<?php

namespace SDK\Requests;

use Nyholm\Psr7\MessageTrait;
use Nyholm\Psr7\RequestTrait;
use Psr\Http\Message\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{

    use MessageTrait;
    use RequestTrait;

}