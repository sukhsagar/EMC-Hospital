<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Optimizer;

use Google\Web_Stories_Dependencies\AmpProject\Dom\Document;
use Google\Web_Stories_Dependencies\AmpProject\RemoteGetRequest;
use Google\Web_Stories_Dependencies\AmpProject\RemoteRequest\CurlRemoteGetRequest;
use ReflectionClass;
use ReflectionException;
/**
 * Transformation engine that accepts HTML and returns optimized HTML.
 *
 * @package ampproject/optimizer
 */
final class TransformationEngine
{
    /**
     * Internal storage for the configuration settings.
     *
     * @var Configuration
     */
    private $configuration;
    /**
     * Transport to use for remote requests.
     *
     * @var RemoteGetRequest
     */
    private $remoteRequest;
    /**
     * Collection of transformers that were initialized.
     *
     * @var Transformer[]
     */
    private $transformers;
    /**
     * Instantiate a TransformationEngine object.
     *
     * @param Configuration|null    $configuration Optional. Configuration data to use for setting up the transformers.
     * @param RemoteGetRequest|null $remoteRequest Optional. Transport to use for remote requests. Defaults to the
     *                                     CurlRemoteGetRequest implementation shipped with the library.
     */
    public function __construct(\Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration $configuration = null, \Google\Web_Stories_Dependencies\AmpProject\RemoteGetRequest $remoteRequest = null)
    {
        $this->configuration = isset($configuration) ? $configuration : new \Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration();
        $this->remoteRequest = isset($remoteRequest) ? $remoteRequest : new \Google\Web_Stories_Dependencies\AmpProject\RemoteRequest\CurlRemoteGetRequest();
        $this->initializeTransformers();
    }
    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     * @return void
     */
    public function optimizeDom(\Google\Web_Stories_Dependencies\AmpProject\Dom\Document $document, \Google\Web_Stories_Dependencies\AmpProject\Optimizer\ErrorCollection $errors)
    {
        foreach ($this->transformers as $transformer) {
            $transformer->transform($document, $errors);
        }
    }
    /**
     * Apply transformations to the provided string of HTML markup.
     *
     * @param string          $html   HTML markup to apply the transformations to.
     * @param ErrorCollection $errors Collection of errors that are collected during transformation.
     * @return string Optimized HTML string.
     */
    public function optimizeHtml($html, \Google\Web_Stories_Dependencies\AmpProject\Optimizer\ErrorCollection $errors)
    {
        $dom = \Google\Web_Stories_Dependencies\AmpProject\Dom\Document::fromHtml($html);
        $this->optimizeDom($dom, $errors);
        return $dom->saveHTML();
    }
    /**
     * Initialize the array of transformers to use.
     */
    private function initializeTransformers()
    {
        $this->transformers = [];
        foreach ($this->configuration->get(\Google\Web_Stories_Dependencies\AmpProject\Optimizer\Configuration::KEY_TRANSFORMERS) as $transformerClass) {
            $this->transformers[$transformerClass] = new $transformerClass(...$this->getTransformerDependencies($transformerClass));
        }
    }
    /**
     * Get the dependencies of a transformer and put them in the correct order.
     *
     * @param string $transformerClass Class of the transformer to get the dependencies for.
     * @return array Array of dependencies in the order as they appear in the transformer's constructor.
     * @throws ReflectionException If the transformer could not be reflected upon.
     */
    private function getTransformerDependencies($transformerClass)
    {
        $constructor = (new \ReflectionClass($transformerClass))->getConstructor();
        if ($constructor === null) {
            return [];
        }
        $dependencies = [];
        foreach ($constructor->getParameters() as $parameter) {
            $dependencyType = null;
            // The use of `ReflectionParameter::getClass()` is deprecated in PHP 8, and is superseded
            // by `ReflectionParameter::getType()`. See https://github.com/php/php-src/pull/5209.
            if (\PHP_VERSION_ID >= 70100) {
                if ($parameter->getType()) {
                    /** @var \ReflectionNamedType $returnType */
                    $returnType = $parameter->getType();
                    $dependencyType = new \ReflectionClass($returnType->getName());
                }
            } else {
                $dependencyType = $parameter->getClass();
            }
            if ($dependencyType === null) {
                // No type provided, so we pass `null` in the hopes that the argument is optional.
                $dependencies[] = null;
                continue;
            }
            if (\is_a($dependencyType->name, \Google\Web_Stories_Dependencies\AmpProject\Optimizer\TransformerConfiguration::class, \true)) {
                $dependencies[] = $this->configuration->getTransformerConfiguration($transformerClass);
                continue;
            }
            if (\is_a($dependencyType->name, \Google\Web_Stories_Dependencies\AmpProject\RemoteGetRequest::class, \true)) {
                $dependencies[] = $this->remoteRequest;
                continue;
            }
            // Unknown dependency type, so we pass `null` in the hopes that the argument is optional.
            $dependencies[] = null;
        }
        return $dependencies;
    }
}
