<?php
// created: 2017-08-15 18:10:33
$dictionary["key1_course_management_key1_student_management"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'key1_course_management_key1_student_management' => 
    array (
      'lhs_module' => 'key1_Course_Management',
      'lhs_table' => 'key1_course_management',
      'lhs_key' => 'id',
      'rhs_module' => 'key1_student_management',
      'rhs_table' => 'key1_student_management',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'key1_course_management_key1_student_management_c',
      'join_key_lhs' => 'key1_cours3ce6agement_ida',
      'join_key_rhs' => 'key1_cours91e4agement_idb',
    ),
  ),
  'table' => 'key1_course_management_key1_student_management_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'key1_cours3ce6agement_ida' => 
    array (
      'name' => 'key1_cours3ce6agement_ida',
      'type' => 'id',
    ),
    'key1_cours91e4agement_idb' => 
    array (
      'name' => 'key1_cours91e4agement_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'key1_course_management_key1_student_managementspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'key1_course_management_key1_student_management_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'key1_cours3ce6agement_ida',
        1 => 'key1_cours91e4agement_idb',
      ),
    ),
  ),
);