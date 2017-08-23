<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/key1_student_management/Ext/Vardefs/sugarfield_working_experiwnce_c.php

 // created: 2017-08-23 12:26:02
$dictionary['key1_student_management']['fields']['working_experiwnce_c']['labelValue']='working experience';
$dictionary['key1_student_management']['fields']['working_experiwnce_c']['enforced']='';
$dictionary['key1_student_management']['fields']['working_experiwnce_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/key1_student_management/Ext/Vardefs/sugarfield_cities_c.php

 // created: 2017-08-23 14:40:34
$dictionary['key1_student_management']['fields']['cities_c']['labelValue']='cities';
$dictionary['key1_student_management']['fields']['cities_c']['dependency']='';
$dictionary['key1_student_management']['fields']['cities_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/key1_student_management/Ext/Vardefs/sugarfield_villages_c.php

 // created: 2017-08-23 14:59:47
$dictionary['key1_student_management']['fields']['villages_c']['labelValue']='villages';
$dictionary['key1_student_management']['fields']['villages_c']['visibility_grid']=array (
  'trigger' => 'cities_c',
  'values' => 
  array (
    'lahore' => 
    array (
      0 => 'Qanchi',
      1 => 'gulberg',
      2 => 'Dha',
    ),
    'muridke' => 
    array (
      0 => 'bhatianwala',
      1 => 'Arra',
      2 => 'shezadTown',
    ),
    'kasur' => 
    array (
      0 => 'Kanna',
      1 => 'Kaccha',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/key1_student_management/Ext/Vardefs/sugarfield_company_name_c.php

 // created: 2017-08-23 15:07:21
$dictionary['key1_student_management']['fields']['company_name_c']['labelValue']='company name';
$dictionary['key1_student_management']['fields']['company_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['key1_student_management']['fields']['company_name_c']['enforced']='';

 
?>
