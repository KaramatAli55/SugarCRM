<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/account_name.php


$dictionary['Case']['fields']['account_type'] = array (
      'required'  => false,
      'source'    => 'non-db',
      'name'      => 'account_type',
      'vname'     => 'LBL_ACCOUNT_TYPE',
      'type'      => 'relate',
      'rname'     => 'name',
      'id_name'   => 'acc_id',
      'link'      => 'Accounts_link',
      'isnull'    => 'true',
    );
$dictionary['Case']['fields']['acc_id'] = array (
      'name'              => 'acc_id',
      'vname'             => 'LBL_ACC_ID',
      'type'              => 'id',
      'isnull'            => 'true',
      'dbType'            => 'id',
      'reportable'        => false,
      'massupdate'        => false,
      'duplicate_merge'   => 'disabled',
      'link'      => 'Accounts_link',
    );
      $dictionary['Case']['fields']['Accounts_link'] =array (
  	'name'          => 'Accounts_link',
    'type'          => 'link',
    'relationship'  => 'Accounts_Cases',
    'module'        => 'Accounts',
    'bean_name'     => 'Accounts',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
  );

    $dictionary['Case']['relationships']['Accounts_Cases'] =array (
    'lhs_module'		=> 'Cases',
    'lhs_table'			=> 'cases',
    'lhs_key'			=> 'acc_id',
    'rhs_module'		=> 'Accounts',
    'rhs_table'			=> 'accounts',
    'rhs_key'			=> 'account_type',
    'relationship_type'	=> 'one-to-many',
  );

?>
