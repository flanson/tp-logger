<?php

namespace SolutionsFull\AppBundle\Services;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class Exercise1Service
 */
class Exercise1Service
{
    /**
     * @var RequestStack
     */
    protected $requestStack;
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Exercise1Service constructor.
     * @param RequestStack $requestStack
     * @param LoggerInterface $logger
     */
    public function __construct(RequestStack $requestStack, LoggerInterface $logger = null)
    {
        $this->requestStack = $requestStack;
        $this->logger = $logger ? $logger : new NullLogger();
    }

    /**
     * @return string
     */
    public function getFooQueryString()
    {
        $request = $this->requestStack->getCurrentRequest();
        $fooQueryString = $request->get('foo');
        if ($fooQueryString) {
            $this->logger->error(
                'This is an error message for the exercise 1',
                ['fooQueryString' => $fooQueryString]
            );
        }
        return $fooQueryString;
    }


}
