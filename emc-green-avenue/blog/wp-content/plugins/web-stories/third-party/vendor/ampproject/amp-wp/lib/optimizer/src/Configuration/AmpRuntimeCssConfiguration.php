<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration;

use Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use Google\Web_Stories_Dependencies\AmpProject\Optimizer\Transformer\AmpRuntimeCss;
use Google\Web_Stories_Dependencies\AmpProject\RuntimeVersion;
/**
 * Configuration for the AmpRuntimeCss transformer.
 *
 * @property string  $version Version string to use. Defaults to an empty string.
 * @property boolean $canary  Whether to use the canary version or not. Defaults to false.
 *
 * @package ampproject/optimizer
 */
final class AmpRuntimeCssConfiguration extends \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration\BaseTransformerConfiguration
{
    /**
     * Configuration key that holds the version number to use.
     *
     * If the version is not provided, the latest runtime version is fetched from cdn.ampproject.org.
     *
     * @var string
     */
    const VERSION = 'version';
    /**
     * Configuration key that holds the actual runtime CSS styles to use.
     *
     * If the styles are not provided, the latest runtime styles are fetched from cdn.ampproject.org.
     *
     * @var string
     */
    const STYLES = 'styles';
    /**
     * Configuration key that holds the flag for the canary version of the runtime style.
     *
     * @var string
     */
    const CANARY = \Google\Web_Stories_Dependencies\AmpProject\RuntimeVersion::OPTION_CANARY;
    /**
     * Get the associative array of allowed keys and their respective default values.
     *
     * The array index is the key and the array value is the key's default value.
     *
     * @return array Associative array of allowed keys and their respective default values.
     */
    protected function getAllowedKeys()
    {
        return [self::VERSION => '', self::STYLES => '', self::CANARY => \false];
    }
    /**
     * Validate an individual configuration entry.
     *
     * @param string $key   Key of the configuration entry to validate.
     * @param mixed  $value Value of the configuration entry to validate.
     * @return mixed Validated value.
     */
    protected function validate($key, $value)
    {
        switch ($key) {
            case self::VERSION:
                if (!\is_string($value)) {
                    throw \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\InvalidConfigurationValue::forInvalidSubValueType(self::class, self::VERSION, 'string', \gettype($value));
                }
                $value = \trim($value);
                break;
            case self::STYLES:
                if (!\is_string($value)) {
                    throw \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\InvalidConfigurationValue::forInvalidSubValueType(self::class, self::STYLES, 'string', \gettype($value));
                }
                $value = \trim($value);
                break;
            case self::CANARY:
                if (!\is_bool($value)) {
                    throw \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\InvalidConfigurationValue::forInvalidSubValueType(self::class, self::CANARY, 'boolean', \gettype($value));
                }
                break;
        }
        return $value;
    }
}
