<?php

namespace Tringuyen\Unlock\Helper;

use Tringuyen\Unlock\Model\Duck;

class JsonFormat
{
    public function formatJsonDuck(Duck $duck): bool|string
    {
        return json_encode($duck->speak());
    }
}