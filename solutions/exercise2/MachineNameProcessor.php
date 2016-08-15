<?php

//The realNameSpace should be `AppBundle\Services`.
//I purposely change the Namespace in order to avoid multiples class detection during the exercise
namespace Solutions\AppBundle\Services;

/**
 * Class MachineNameProcessor
 */
class MachineNameProcessor
{
    /**
     * @var Exercise2Service
     */
    protected $exercise2Service;

    /**
     * MachineNameProcessor constructor.
     * @param Exercise2Service $exercise2Service
     */
    public function __construct(Exercise2Service $exercise2Service)
    {
        $this->exercise2Service = $exercise2Service;
    }

    /**
     * @param array $record
     * @return string
     */
    public function gattai(array $record)
    {
        $machineName = $this->exercise2Service->getMachineName();
        $record['context']['machineName'] = $machineName;
        return $record;
    }
}
