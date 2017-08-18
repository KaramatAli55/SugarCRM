<?php
// created: 2017-08-15 15:29:22
$dictionary["key1_Student_Management"]["fields"]["key1_course_management_key1_student_management"] = array (
  'name' => 'key1_course_management_key1_student_management',
  'type' => 'link',
  'relationship' => 'key1_course_management_key1_student_management',
  'source' => 'non-db',
  'module' => 'key1_Course_Management',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_KEY1_COURSE_MANAGEMENT_KEY1_STUDENT_MANAGEMENT_FROM_KEY1_STUDENT_MANAGEMENT_TITLE',
  'id_name' => 'key1_cours3ce6agement_ida',
  'link-type' => 'one',
);
$dictionary["key1_Student_Management"]["fields"]["key1_course_management_key1_student_management_name"] = array (
  'name' => 'key1_course_management_key1_student_management_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KEY1_COURSE_MANAGEMENT_KEY1_STUDENT_MANAGEMENT_FROM_KEY1_COURSE_MANAGEMENT_TITLE',
  'save' => true,
  'id_name' => 'key1_cours3ce6agement_ida',
  'link' => 'key1_course_management_key1_student_management',
  'table' => 'key1_course_management',
  'module' => 'key1_Course_Management',
  'rname' => 'name',
);
$dictionary["key1_Student_Management"]["fields"]["key1_cours3ce6agement_ida"] = array (
  'name' => 'key1_cours3ce6agement_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_KEY1_COURSE_MANAGEMENT_KEY1_STUDENT_MANAGEMENT_FROM_KEY1_STUDENT_MANAGEMENT_TITLE_ID',
  'id_name' => 'key1_cours3ce6agement_ida',
  'link' => 'key1_course_management_key1_student_management',
  'table' => 'key1_course_management',
  'module' => 'key1_Course_Management',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
