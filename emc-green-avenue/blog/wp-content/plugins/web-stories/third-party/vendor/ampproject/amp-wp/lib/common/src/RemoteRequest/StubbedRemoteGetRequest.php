<?php

namespace Google\Web_Stories_Dependencies\AmpProject\RemoteRequest;

use Google\Web_Stories_Dependencies\AmpProject\Exception\FailedRemoteRequest;
use Google\Web_Stories_Dependencies\AmpProject\RemoteGetRequest;
use Google\Web_Stories_Dependencies\AmpProject\Response;
use LogicException;
/**
 * Stub for simulating remote requests.
 *
 * @package ampproject/common
 */
final class StubbedRemoteGetRequest implements \Google\Web_Stories_Dependencies\AmpProject\RemoteGetRequest
{
    /**
     * Associative array of data for mapping between arguments and returned results.
     *
     * @var array
     */
    private $argumentMap;
    /**
     * Instantiate a StubbedRemoteGetRequest object.
     *
     * @param array $argumentMap Associative array of data for mapping between arguments and returned results.
     */
    public function __construct($argumentMap)
    {
        $this->argumentMap = $argumentMap;
    }
    /**
     * Do a GET request to retrieve the contents of a remote URL.
     *
     * @param string $url URL to get.
     * @return Response Response for the executed request.
     * @throws FailedRemoteRequest If retrieving the contents from the URL failed.
     */
    public function get($url)
    {
        if (!\array_key_exists($url, $this->argumentMap)) {
            throw new \LogicException("Trying to stub a remote request for an unknown URL: {$url}.");
        }
        return new \Google\Web_Stories_Dependencies\AmpProject\RemoteRequest\RemoteGetRequestResponse($this->argumentMap[$url]);
    }
}
