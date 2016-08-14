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
        $hostIp = $_SERVER['HTTP_CLIENT_IP'];
        $machineName = [
            'remote' => $remote_addr,
            'hostname' => $hostname,
            'ip' => $hostIp,
        ];
        return $machineName;
    }
}
