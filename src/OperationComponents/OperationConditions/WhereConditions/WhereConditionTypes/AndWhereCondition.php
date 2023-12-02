<?php

namespace DataResourceInstructors\OperationComponents\OperationConditions\WhereConditions\WhereConditionTypes;

class AndWhereCondition extends WhereCondition
{

    public function getConditionType() : string
    {
        return "and";
    }
}
