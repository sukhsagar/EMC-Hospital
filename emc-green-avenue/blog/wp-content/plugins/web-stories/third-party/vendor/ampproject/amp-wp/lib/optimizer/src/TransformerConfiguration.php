<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Optimizer;

use Google\Web_Stories_Dependencies\AmpProject\Optimizer\Exception\UnknownConfigurationKey;
/**
 * Interface for a configuration that validates and stores configuration settings for an individual transformer.
 *
 * @package ampproject/optimizer
 */
interface TransformerConfiguration
{
    /**
     * Get the value for a given key.
     *
     * The key is assumed to exist and will throw an exception if it can't be retrieved.
     * This means that all configuration entries should come with a default value.
     *
     * @param string $key Key of the configuration entry to retrieve.
     * @return mixed Value stored under the given configuration key.
     * @throws UnknownConfigurationKey If an unknown key was provided.
     */
    public function get($key);
}
