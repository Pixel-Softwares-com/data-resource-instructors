# DataResourceInstructors Structure
### Operation Components - Conditions:

- There are some condition types can be used to set conditions on the OperationContainer :

1 - OperationCondition
  - AggregationConditions : it the same "having" conditions found in sql .
  - WhereConditions : is the normal where clause used in sql .

2 - JoinConditions : used in RelationshipLoader OperationContainer . 


#### OperationCondition : is an abstract type for AggregationConditions & WhereConditions and contains the common functionality.
