<?php

namespace DataResourceInstructors\OperationComponents\OperationConditions\WhereConditions\WhereConditionTypes;

class OrWhereCondition extends WhereCondition
{
    public function getConditionType() : string
    {
        return "or";
    }
}
