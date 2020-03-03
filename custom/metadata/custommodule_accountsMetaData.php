<?php
// created: 2020-03-03 14:12:08
$dictionary["custommodule_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'custommodule_accounts' => 
    array (
      'lhs_module' => 'CustomModule',
      'lhs_table' => 'custommodule',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custommodule_accounts_c',
      'join_key_lhs' => 'custommodule_accountscustommodule_ida',
      'join_key_rhs' => 'custommodule_accountsaccounts_idb',
    ),
  ),
  'table' => 'custommodule_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'custommodule_accountscustommodule_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custommodule_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custommodule_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custommodule_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custommodule_accountscustommodule_ida',
        1 => 'custommodule_accountsaccounts_idb',
      ),
    ),
  ),
);