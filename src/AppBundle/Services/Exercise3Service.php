<?php

namespace AppBundle\Services;

/**
 * Class Exercise3Service
 */
class Exercise3Service
{
    /**
     * @var array
     */
    private $recordList;

    /**
     * Exercise3Service constructor.
     */
    public function __construct()
    {
        $this->recordList = [];
    }


    /**
     * @param $record
     */
    public function addRecord($record)
    {
        $this->recordList[] = $record;
    }

    /**
     * @return int
     */
    public function getRecordCount()
    {
        return count($this->recordList);
    }

    /**
     * @return array
     */
    public function dumpRecords()
    {
        $recordList = $this->recordList;
        $this->recordList = [];
        return $recordList;
    }
}
