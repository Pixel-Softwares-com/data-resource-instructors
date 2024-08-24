<?php

namespace DataResourceInstructors\OperationComponents\OperationConditions\WhereConditions\WhereConditionTypes\BuilderWhereMethodTypes\WhereInMethod;

use DataResourceInstructors\OperationComponents\OperationConditions\WhereConditions\WhereConditionTypes\WhereCondition;
use DataResourceInstructors\OperationComponents\OperationConditions\WhereConditions\WhereConditionTypes\WhereMethod;

abstract class WhereInMethod extends WhereMethod
{

    protected bool $columnValueNotInArray = false;

    public function MustNotBeIn() : self
    {
        $this->column = true;
        return $this;
    }
    public function MustBeIn() : self
    {
        $this->column = false;
        return $this;
    }
    public function getMethodName(): string
    {
        return "WhereIn";
    }

    public function getMethodParams(): array
    {
        return [
            $this->getConditionColumn()->getColumnName() ,
            $this->getConditionColumnValue() ,
            $this->getConditionType() ,
            $this->columnValueNotInArray
        ];
    }
}
