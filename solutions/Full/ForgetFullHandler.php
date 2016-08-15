<?php

//The realNameSpace should be `AppBundle\Services`.
//I purposely change the Namespace in order to avoid multiples class detection during the exercise
namespace SolutionsFull\AppBundle\Services;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

/**
 * Class ForgetFullHandler
 * @package AppBundle\Services
 */
class ForgetFullHandler extends RotatingFileHandler
{
    /**
     * @var array
     */
    private $forgottenLog;

    /**
     * {@inheritdoc}
     */
    public function __construct(
        $filename,
        $maxFiles = 0,
        $bubble = true,
        $filePermission = null,
        $useLocking = false
    ) {
        parent::__construct($filename, $maxFiles, Logger::INFO, $bubble, $filePermission, $useLocking);
        $this->forgottenLog = [];
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array $record)
    {
        if ($record['channel'] === 'channel_ex1'
            || $record['channel'] === 'channel_ex2'
            || $record['channel'] === 'channel_ex4'
            || $record['channel'] === 'channel_ex5'
            || $record['channel'] === 'security'
            || $record['channel'] === 'request') {
            return false;
        }

        if ($record['level_name'] !== 'INFO') {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function write(array $record)
    {
        $this->forgottenLog[] = $record;
        if (count($this->forgottenLog) >= 3) {
            $inverseLogs = array_reverse($this->forgottenLog);
            foreach ($inverseLogs as $log) {
                parent::write($log);
            }
            $this->forgottenLog = [];
        }
    }
}
