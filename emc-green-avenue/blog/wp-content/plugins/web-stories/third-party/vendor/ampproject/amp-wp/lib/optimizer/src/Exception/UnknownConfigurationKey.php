<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception;

use InvalidArgumentException;
/**
 * Exception thrown when an unknown configuration key was requested.
 *
 * @package ampproject/optimizer
 */
final class UnknownConfigurationKey extends \InvalidArgumentException implements \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\AmpOptimizerException
{
    /**
     * Instantiate an UnknownConfigurationKey exception for an unknown key.
     *
     * @param string $key Key that was unknown.
     * @return self
     */
    public static function fromKey($key)
    {
        $message = "The configuration does not contain the requested key '{$key}'.";
        return new self($message);
    }
    /**
     * Instantiate an UnknownConfigurationKey exception for an unknown transformer configuration key.
     *
     * @param string $transformer Transformer class or identifier.
     * @param string $key         Key that was unknown.
     * @return self
     */
    public static function fromTransformerKey($transformer, $key)
    {
        $parts = \explode('\\', $transformer);
        $transformer = \array_pop($parts);
        $message = "The configuration of the transformer '{$transformer}' does not contain '\n                       . 'the requested key '{$key}'.";
        return new self($message);
    }
}
