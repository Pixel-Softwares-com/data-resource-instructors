<?php

namespace DataResourceInstructors\OperationComponents\OperationConditions\WhereConditions\WhereCallbackComponents;

abstract class WhereCallbackComponent
{
    protected $callback;
    protected array $exclusiveDataResourceTypes = [];

    public function __construct(callable $callback)
    {
        $this->setCallback($callback);
    }

    public static function create(callable $callback) : self
    {
        return new static($callback);
    }

    abstract public function getConditionGroupType() : string;

    public function setCallback(callable $callback) : void
    {
        $this->callback = $callback;
    }

    public function callExclusivelyForDataResourceTypes(array $dataResourceTypes) : self
    {
        $this->exclusiveDataResourceTypes = $dataResourceTypes;
        return $this;
    }

    public function callExclusivelyForDataResourceType(string $dataResourceType) : self
    {
        $this->exclusiveDataResourceTypes[$dataResourceType] = $dataResourceType;
        return $this; 
    }

}