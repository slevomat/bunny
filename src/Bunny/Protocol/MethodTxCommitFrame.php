<?php
namespace Bunny\Protocol;

use Bunny\Constants;

class MethodTxCommitFrame extends MethodFrame
{

    public function __construct()
    {
        parent::__construct(Constants::CLASS_TX, Constants::METHOD_TX_COMMIT);
    }

}
