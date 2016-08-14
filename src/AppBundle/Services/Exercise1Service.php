<?php

namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class Exercise1Service
 */
class Exercise1Service
{
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
    public function getTotoQueryString()
    {
        $request = $this->requestStack->getCurrentRequest();
        $totoQueryString = $request->get('toto');
        return $totoQueryString;
    }


}
