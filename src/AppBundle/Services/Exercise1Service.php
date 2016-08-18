<?php

namespace AppBundle\Services;

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
     * Exercise1Service constructor.
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @return string
     */
    public function getFooQueryString()
    {
        $request = $this->requestStack->getCurrentRequest();
        $fooQueryString = $request->get('foo');
        return $fooQueryString;
    }
}
