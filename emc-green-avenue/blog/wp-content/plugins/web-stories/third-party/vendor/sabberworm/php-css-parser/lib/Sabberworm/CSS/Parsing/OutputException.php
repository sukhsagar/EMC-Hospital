<?php

namespace Google\Web_Stories_Dependencies\Sabberworm\CSS\Parsing;

/**
* Thrown if the CSS parsers attempts to print something invalid
*/
class OutputException extends \Google\Web_Stories_Dependencies\Sabberworm\CSS\Parsing\SourceException
{
    public function __construct($sMessage, $iLineNo = 0)
    {
        parent::__construct($sMessage, $iLineNo);
    }
}
