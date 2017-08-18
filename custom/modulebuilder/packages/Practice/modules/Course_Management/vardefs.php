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
$vardefs = array (
  'fields' => 
  array (
    'course_id' => 
    array (
      'required' => true,
      'name' => 'course_id',
      'vname' => 'LBL_COURSE_ID',
      'type' => 'int',
      'massupdate' => false,
      'default' => '0',
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
      'min' => false,
      'max' => false,
    ),
    'course_name' => 
    array (
      'required' => true,
      'name' => 'course_name',
      'vname' => 'LBL_COURSE_NAME',
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
    'credit_hours' => 
    array (
      'required' => true,
      'name' => 'credit_hours',
      'vname' => 'LBL_CREDIT_HOURS',
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
      'min' => false,
      'max' => false,
    ),
    'teacher_name' => 
    array (
      'required' => true,
      'name' => 'teacher_name',
      'vname' => 'LBL_TEACHER_NAME',
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
  ),
  'relationships' => 
  array (
  ),
);