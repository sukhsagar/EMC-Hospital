<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception;

use Google\Web_Stories_Dependencies\AmpProject\Optimizer\Error\ElementDump;
use DomainException;
use DOMElement;
/**
 * Exception thrown when an invalid HTML attribute was detected.
 *
 * @package ampproject/optimizer
 */
final class InvalidHtmlAttribute extends \DomainException implements \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\AmpOptimizerException
{
    /**
     * Instantiate an InvalidHtmlAttribute exception for an invalid attribute value.
     *
     * @param string     $attributeName Name of the attribute.
     * @param DOMElement $element       Element that contains the invalid attribute.
     * @return self
     */
    public static function fromAttribute($attributeName, \DOMElement $element)
    {
        $message = "Invalid value detected for attribute '{$attributeName}': " . new \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Error\ElementDump($element);
        return new self($message);
    }
}
