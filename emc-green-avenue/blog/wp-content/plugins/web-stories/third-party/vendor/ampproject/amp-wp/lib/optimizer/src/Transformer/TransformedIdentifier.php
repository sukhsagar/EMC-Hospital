<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Optimizer\Transformer;

use Google\Web_Stories_Dependencies\AmpProject\Dom\Document;
use Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration\TransformedIdentifierConfiguration;
use Google\Web_Stories_Dependencies\AmpProject\Optimizer\ErrorCollection;
use Google\Web_Stories_Dependencies\AmpProject\Optimizer\Transformer;
use Google\Web_Stories_Dependencies\AmpProject\Optimizer\TransformerConfiguration;
/**
 * Transformer applying the transformed identifier transformations to the HTML input.
 *
 * This is ported from the NodeJS optimizer while verifying against the Go version.
 *
 * NodeJS:
 * @version 2ca65a94b77130c91ac11fcc32c94b93cbd2b7a0
 * @link    https://github.com/ampproject/amp-toolbox/blob/2ca65a94b77130c91ac11fcc32c94b93cbd2b7a0/packages/optimizer/lib/transformers/AddTransformedFlag.js
 *
 * Go:
 * @version b26a35142e0ed1458158435b252a0fcd659f93c4
 * @link    https://github.com/ampproject/amppackager/blob/b26a35142e0ed1458158435b252a0fcd659f93c4/transformer/transformers/transformedidentifier.go
 *
 * @package ampproject/optimizer
 */
final class TransformedIdentifier implements \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Transformer
{
    /**
     * Attribute name of the "transformed" identifier.
     *
     * @var string
     */
    const TRANSFORMED_ATTRIBUTE = 'transformed';
    /**
     * Origin to use for the "transformed" identifier.
     *
     * @var string
     */
    const TRANSFORMED_ORIGIN = 'self';
    /**
     * Configuration store to use.
     *
     * @var TransformerConfiguration
     */
    private $configuration;
    /**
     * Instantiate a TransformedIdentifier object.
     *
     * @param TransformerConfiguration $configuration Configuration store to use.
     */
    public function __construct(\Google\Web_Stories_Dependencies\AmpProject\Optimizer\TransformerConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }
    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    public function transform(\Google\Web_Stories_Dependencies\AmpProject\Dom\Document $document, \Google\Web_Stories_Dependencies\AmpProject\Optimizer\ErrorCollection $errors)
    {
        $document->html->setAttribute(self::TRANSFORMED_ATTRIBUTE, $this->getOrigin());
    }
    /**
     * Get the origin that transformed the AMP document.
     *
     * @return string Origin of the transformation.
     */
    private function getOrigin()
    {
        $version = $this->configuration->get(\Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration\TransformedIdentifierConfiguration::VERSION);
        $origin = self::TRANSFORMED_ORIGIN;
        if ($version > 0) {
            $origin .= ";v={$version}";
        }
        return $origin;
    }
}
