<?php

//The realNameSpace should be `AppBundle\Services`.
//I purposely change the Namespace in order to avoid multiples class detection during the exercise
namespace SolutionsFull\AppBundle\Services;

use Monolog\Formatter\FormatterInterface;

/**
 * Class LeetFormatter
 * @package AppBundle\Services
 */
class LeetFormatter implements FormatterInterface
{
    /**
     * @var Exercise4Service
     */
    protected $exercise4Service;

    /**
     * MachineNameProcessor constructor.
     * @param Exercise4Service $exercise4Service
     */
    public function __construct(Exercise4Service $exercise4Service)
    {
        $this->exercise4Service = $exercise4Service;
    }

    /**
     * Formats a log record.
     *
     * @param  array $record A record to format
     * @return mixed The formatted record
     */
    public function format(array $record)
    {
        $message = $record['message'];
        return $this->exercise4Service->encode($message);
    }

    /**
     * Formats a set of log records.
     *
     * @param  array $records A set of records to format
     * @return mixed The formatted set of records
     */
    public function formatBatch(array $records)
    {
        $message = '';
        foreach ($records as $record) {
            $message .= $this->format($record);
        }
        return $message;
    }
}
