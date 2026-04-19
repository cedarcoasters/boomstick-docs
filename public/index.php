<?php
/**    ____                       _____ __  _      __
 *    / __ )____  ____  ____ ___ / ___// /_(_)____/ /__
 *   / __  / __ \/ __ \/ __ `__ \\__ \/ __/ / ___/ //_/
 *  / /_/ / /_/ / /_/ / / / / / /__/ / /_/ / /__/ ,<
 * /_____/\____/\____/_/ /_/ /_/____/\__/_/\___/_/|_|
 *
 * BoomStick.com - A framework for high explosive performance
 * Copyright 2012 - <?=date('Y');?>, BlazePHP.com
 *
 * Licensed under The MIT License
 * Any redistribution of this file's contents, both
 * as a whole, or in part, must retain the above information
 *
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @copyright     Copyright 2012 - <?=date('Y');?>, BlazePHP.com
 * @link          http://blazePHP.com
 */
namespace EntryDocs;

define('MODULE_ROOT', dirname(__DIR__));
define('MODULE_NAMESPACE', 'EntryDocs' );
define('SESSION_ENABLED', true);
define('SESSION_TYPE', 'local' );

if(file_exists(dirname(__DIR__).'/composer-docs/vendor/autoload.php')) { require_once( dirname(__DIR__).'/composer-docs/vendor/autoload.php' ); }

require(dirname(dirname(dirname(__DIR__))).'/init/http.init.php');