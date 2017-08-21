<?php

$dictionary['Accounts']['fields']['case_link'] = array (
  	'name'          => 'case_link',
    'type'          => 'link',
    'relationship'  => 'Accounts_Cases',
    'module'        => 'Cases',
    'bean_name'     => 'Cases',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
  );
