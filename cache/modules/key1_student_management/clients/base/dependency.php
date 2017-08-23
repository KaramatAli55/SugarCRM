<?php
$clientCache['key1_student_management']['base']['dependency'] = array (
  '_hash' => '40cd750bba9870f18aada2478b24840a',
  'dependencies' => 
  array (
    0 => 
    array (
      'name' => 'villages_cDDD',
      'hooks' => 
      array (
        0 => 'all',
      ),
      'trigger' => 'true',
      'triggerFields' => 
      array (
        0 => 'cities_c',
      ),
      'onload' => true,
      'actions' => 
      array (
        0 => 
        array (
          'action' => 'SetOptions',
          'params' => 
          array (
            'target' => 'villages_c',
            'keys' => 'getListWhere($cities_c, enum(enum("lahore", enum("Qanchi","gulberg","Dha")),enum("muridke", enum("bhatianwala","Arra","shezadTown")),enum("kasur", enum("Kanna","Kaccha"))))',
            'labels' => '"villages_list"',
          ),
        ),
      ),
      'notActions' => 
      array (
      ),
    ),
  ),
);

