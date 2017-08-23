<?php

$dictionary['Opportunitie_Tasks'] = array (
    'table' => 'Opportunitie_Tasks',
    'fields' => array (
        'id' => array (
            'name' => 'id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'task_id' => array (
            'name' => 'task_id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'opportunitie_id' => array (
            'name' => 'opportunitie_id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'date_modified' => array (
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        'deleted' => array (
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'required' => false,
            'default' => '0',
        ),
    ),
    'indices' => array (
        array (
            'name' =>'Opportunitie_tasks_pk',
            'type' =>'primary',
            'fields'=>array ('id'),
        ),
        array (
            'name' => 'idndex_opportunitie',
            'type'=>'index',
            'fields'=>array ('opportunitie_id'),
        ),
        array (
            'name' => 'idnex_task',
            'type'=>'index',
            'fields'=>array ('task_id'),
        ),
    ),
    'relationships' => array (
        'Opportunitie_Task' => array (
            'lhs_module' => 'Tasks',
            'lhs_table' => 'tasks',
            'lhs_key' => 'id',
            'rhs_module' => 'Opportunities',
            'rhs_table' => 'opportunities',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'Opportunities_Tasks',
            'join_key_lhs' => 'task_id',
            'join_key_rhs' => 'opportunitie_id',
        ),
    ),
);
