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

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'key1',
  'author' => 'karamat',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Practice',
  'published_date' => '2017-08-15 12:54:25',
  'type' => 'module',
  'version' => 1502801666,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Practice',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'key1_Course_Management',
      'class' => 'key1_Course_Management',
      'path' => 'modules/key1_Course_Management/key1_Course_Management.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'key1_Student_Management',
      'class' => 'key1_Student_Management',
      'path' => 'modules/key1_Student_Management/key1_Student_Management.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/key1_Course_Management',
      'to' => 'modules/key1_Course_Management',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/key1_Student_Management',
      'to' => 'modules/key1_Student_Management',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);