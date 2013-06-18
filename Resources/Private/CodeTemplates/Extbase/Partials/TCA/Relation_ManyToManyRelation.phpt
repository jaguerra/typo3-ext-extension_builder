'type' => 'select',
'foreign_table' => '{property.foreignDatabaseTableName}',
'foreign_table_where' => 'AND ({property.foreignDatabaseTableName}.pid = ###CURRENT_PID### or {property.foreignDatabaseTableName}.pid = ###STORAGE_PID### or {property.foreignDatabaseTableName}.pid IN (###PAGE_TSCONFIG_IDLIST###)) ORDER BY {property.foreignDatabaseTableName}.{f:if(condition:property.foreignModel.sorting, then:'sorting', else:'name')}',
'MM' => '{property.relationTableName}',
'size' => 10,
'autoSizeMax' => 30,
'maxitems' => 9999,
'multiple' => 0,
