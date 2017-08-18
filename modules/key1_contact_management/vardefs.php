<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['key1_contact_management'] = array(
    'table' => 'key1_contact_management',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (

      'contact_number' =>
      array (
        'required' => true,
        'name' => 'contact_number',
        'vname' => 'LBL_contact_number',
        'type' => 'phone',
        'massupdate' => false,
        'default' => '',
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'enabled',
        'duplicate_merge_dom_value' => '1',
        'audited' => false,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'full_text_search' =>
        array (
          'enabled' => '0',
          'boost' => '1',
          'searchable' => false,
        ),
        'calculated' => false,
        'len' => '255',
        'size' => '20',
        'dbType' => 'varchar',
      ),
      'student_name' =>
      array (
      'required'  => false,
      'source'    => 'non-db',
      'name'      => 'student_name',
      'vname'     => 'LBL_student_name',
      'type'      => 'relate',
      'rname'     => 'name',
      'id_name'   => 'student_id',
      'join_name' => 'key1_student_management',
      'link'      => 'students',
      'table'     => 'key1_student_management',
      'isnull'    => 'true',
      'module'    => 'key1_student_management',
    ),
      'student_id' =>
      array (
      'name'              => 'student_id',
      'rname'             => 'id',
      'vname'             => 'LBL_student_id',
      'type'              => 'id',
      'table'             => 'key1_student_management',
      'isnull'            => 'true',
      'module'            => 'key1_student_management',
      'dbType'            => 'id',
      'reportable'        => false,
      'massupdate'        => false,
      'duplicate_merge'   => 'disabled',
    ),
      'students' =>
      array (
  	'name'          => 'students',
    'type'          => 'link',
    'relationship'  => 'conatctNumber_students',
    'module'        => 'key1_student_management',
    'bean_name'     => 'key1_student_management',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
  ),

),
    'relationships' => array (
      'conatctNumber_students' =>
      array (
    'lhs_module'		=> 'key1_contact_management',
    'lhs_table'			=> 'key1_contact_management',
    'lhs_key'			=> 'student_id',
    'rhs_module'		=> 'key1_student_management',
    'rhs_table'			=> 'key1_student_management',
    'rhs_key'			=> 'student_rolllno',
    'relationship_type'	=> 'one-to-many',
  ),

),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('key1_contact_management','key1_contact_management', array('basic','team_security','assignable','taggable'));
