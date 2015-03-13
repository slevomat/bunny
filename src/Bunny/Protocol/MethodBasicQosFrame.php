<?php
namespace Bunny\Protocol;

use Bunny\Constants;

class MethodBasicQosFrame extends MethodFrame
{

    /** @var int */
    public $prefetchSize = 0;

    /** @var int */
    public $prefetchCount = 0;

    /** @var boolean */
    public $global = false;

    public function __construct()
    {
        parent::__construct(Constants::CLASS_BASIC, Constants::METHOD_BASIC_QOS);
    }

}
