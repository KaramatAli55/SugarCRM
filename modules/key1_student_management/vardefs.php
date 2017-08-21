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

$dictionary['key1_student_management'] = array(
    'table' => 'key1_student_management',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'student_rolllno' =>
  array (
    'required' => true,
    'name' => 'student_rolllno',
    'vname' => 'LBL_STUDENT_ROLLLNO',
    'type' => 'int',
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
    'enable_range_search' => false,
    'disable_num_format' => '',
    'max' => false,
  ),
  'contacts' =>
  array (
  'name'          => 'contacts',
  'type'          => 'link',
  'relationship'  => 'conatctNumber_students',
  'module'        => 'key1_contact_management',
  'bean_name'     => 'key1_contact_management',
  'source'        => 'non-db',
  'vname'         => 'LBL_SUBSCRIBERS',
),
  'student_name' =>
  array (
    'required' => true,
    'name' => 'student_name',
    'vname' => 'LBL_STUDENT_NAME',
    'type' => 'varchar',
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
  ),
  'student_address_street' =>
  array (
    'required' => false,
    'name' => 'student_address_street',
    'vname' => 'LBL_STUDENT_ADDRESS_STREET',
    'type' => 'text',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 150,
    'size' => '20',
    'group' => 'student_address',
    'dbType' => 'varchar',
  ),
  'student_address_city' =>
  array (
    'required' => false,
    'name' => 'student_address_city',
    'vname' => 'LBL_STUDENT_ADDRESS_CITY',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'group' => 'student_address',
  ),
  'student_address_state' =>
  array (
    'required' => false,
    'name' => 'student_address_state',
    'vname' => 'LBL_STUDENT_ADDRESS_STATE',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'group' => 'student_address',
  ),
  'student_address_postalcode' =>
  array (
    'required' => false,
    'name' => 'student_address_postalcode',
    'vname' => 'LBL_STUDENT_ADDRESS_POSTALCODE',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 20,
    'size' => '20',
    'group' => 'student_address',
  ),
  'student_address_country' =>
  array (
    'required' => false,
    'name' => 'student_address_country',
    'vname' => 'LBL_STUDENT_ADDRESS_COUNTRY',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'group' => 'student_address',
  ),

),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('key1_student_management','key1_student_management', array('basic','team_security','assignable','taggable'));
