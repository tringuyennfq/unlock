<?php

namespace Tringuyen\Unlock\Helper;

use Tringuyen\Unlock\Model\Duck;

class jsonFormat
{
    public function formatJsonDuck(Duck $duck)
    {
        return json_encode($duck->getWeight());
    }
}