# DataResourceInstructors Structure

## Concepts :
- Query design : it is a container that holds some query components to instruct the DataResource how must it compose the query wanted to be executed .
- OperationContainer payload : it is the query components those hold to represent the desired query design , such as :
    - the aggregation operations will be executed on their columns.
    - the columns the result will be grouped by .
    - the columns the result will be ordered by .
    - the columns will be selected (selected for data processing only ... not in the final result array ).
    - the applied conditions (where conditions + having conditions) .

## OperationContainers
- The main purpose of this DataResourceInstructors structure is to design the query wanted to be implemented by DataResources , and here is the container will represent the query ,
and will hold the query components to instruct the DataResource what must it do .
- Each OperationContainer mainly represents a table and contains payload of query components to represent <b>the query design part that related to this table  </b>. 

### OperationContainers types :
- There are mainly two types of OperationContainers :
  - OperationGroup : is the main OperationContainer in any query designing ..... even if there is a relationship to join it will be loaded on the OperationGroup .
    it - as an OperationContainer - holds its payload (operations , columns , conditions .... etc.) <br>
    And also , <br>
    It can interact with RelationshipLoader typed OperationContainers objects to combine their payloads (operations , columns , conditions .... etc.)
    <b> To allow us to get one container for all query components in the final query design </b> .
  - RelationshipLoader : is a container for holding relationship joining query components ... it serves as an OperationContainer and has payload to represent its query .  
