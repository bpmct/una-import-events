<?php 
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

$aConfig = array(
	/**
	 * Main Section.
	 */
	'type' => BX_DOL_MODULE_TYPE_MODULE,
    'name' => 'vnd_import_events',
	'title' => 'Import Events',
    'note' => 'Import Events as a CSV',
	'version' => '0.0.1',
	'vendor' => 'Ben Potter',
    'product_url' => 'https://github.com/bpmct/una-import-events',
	'update_url' => '',
	
	'compatible_with' => array(
        '8.0.x'
    ),

    /**
	 * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
	 */
	'home_dir' => 'vendor/import_events/',
	'home_uri' => 'test',
	
	'db_prefix' => 'vnd_import_events',
	'class_prefix' => 'VndImportEvents',

	/**
	 * Category for language keys.
	 */
	'language_category' => 'Events',

	/**
	 * Installation/Uninstallation Section.
	 */
	'install' => array(
		'execute_sql' => 1,
		'update_languages' => 1,
	),
	'uninstall' => array (
		'execute_sql' => 1,
		'update_languages' => 1,
    ),
    'enable' => array(
        'execute_sql' => 1,
        'recompile_global_paramaters' => 1,
        'clear_db_cache' => 1,
    ),
    'disable' => array(
        'execute_sql' => 1,
        'recompile_global_paramaters' => 1,
        'clear_db_cache' => 1,
    ),

    /**
	 * Dependencies Section
	 */
	'dependencies' => array('bx_events'),
);

/** @} */

