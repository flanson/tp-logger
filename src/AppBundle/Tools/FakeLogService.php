<?php

namespace AppBundle\Tools;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Class FakeLogService
 */
class FakeLogService
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var string
     */
    protected $exerciseName;

    /**
     * Exercise1Service constructor.
     * @param string $exerciseName
     * @param LoggerInterface $logger
     */
    public function __construct($exerciseName, LoggerInterface $logger = null)
    {
        $this->exerciseName = $exerciseName;
        $this->logger = $logger ? $logger : new NullLogger();
    }

    /**
     * @return string
     */
    public function createFakeErrorLog()
    {
        $message = sprintf('This is an error message for %s', $this->exerciseName);
        $this->fakeErrorLog($message);
    }

    /**
     * @return string
     */
    public function createFakeLogs()
    {
        $message = sprintf('This is an error message for %s', $this->exerciseName);
        $count = 1;
        while ($count <= 10) {
            $this->fakeErrorLog($message . ' : ' . $count);
            $this->fakeInfoLog($message . ' : ' . $count);
            $count++;
        }
    }

    /**
     * @param $message
     */
    private function fakeInfoLog($message)
    {
        $this->logger->info($message);
    }
    /**
     * @param $message
     */
    private function fakeErrorLog($message)
    {
        $this->logger->error($message);
    }
}
