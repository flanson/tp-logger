<?php

namespace AppBundle\Services;

/**
 * Class Exercise2Service
 */
class Exercise2Service
{
    /**
     * @return string
     */
    public function getMachineName()
    {
        $remote_addr = $_SERVER['REMOTE_ADDR'];
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $machineName = [
            'remote' => $remote_addr,
            'hostname' => $hostname,
        ];
        return $machineName;
    }
}
