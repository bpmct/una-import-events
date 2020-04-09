<?php defined('BX_DOL') or die('hack attempt');
/**
 * 
 * @defgroup    import_events
 * @ingroup     VendorModules
 *
 * @{
 */

require_once(BX_DIRECTORY_PATH_INC . "design.inc.php");

check_logged();

bx_import('BxDolRequest');
BxDolRequest::processAsAction($GLOBALS['aModule'], $GLOBALS['aRequest']);

/** @} */