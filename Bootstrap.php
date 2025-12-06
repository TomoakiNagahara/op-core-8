<?php
/**	op-core:/Bootstrap.php
 *
 * @created    2015-12-10   op-core(5)
 * @updated    2016-06-09   op-core(7)
 * @rebirth    2025-06-11   op-core(8)
 * @license    Apache-2.0
 * @package    op-core
 * @copyright  (C) 2015 Tomoaki Nagahara
 */

/**	Checking PHP version.
 *
 */
if( version_compare(PHP_VERSION, '8.0.0') < 0 ){
	exit('<p>The onepiece-framework does not support PHP version '.PHP_VERSION.'. Please use PHP 8.0 or higher.</p>');
}

/**	Include defines.
 *
 */
require_once(__DIR__.'/include/Define.php');

/**	Register autoloader.
 *
 */
require_once(__DIR__.'/include/Autoloader.php');

/**	Include Error handler.
 *
 */
require_once(__DIR__.'/include/Error.php');

/**	Include OP CORE.
 *
 */
require_once(__DIR__.'/trait/OP_CORE.php');

/**	Include OP Class.
 *
 */
require_once(__DIR__.'/class/OP.class.php');

/**	Include OP function.
 *
 */
require_once(__DIR__.'/function/OP.php');

/**	Include D function.
 *
 */
require_once(__DIR__.'/function/D.php');
