<?php
// +----------------------------------------------------------------------
// | CoolePHP [ A LITE PHP AUTOLOAD FRAMEWORK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2020 CoolePHP All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 582167246 <582167246@gmail.com>
// +----------------------------------------------------------------------
namespace Coole\CoolePHP;
use Coole\CoolePHP\Coole;
//----------------------------------
// CoolePHP公共入口文件
//----------------------------------
// 记录开始运行时间
$GLOBALS['BeginTime'] = microtime(true);
// 记录内存初始使用
define('MEMORY_GET_USAGE', function_exists('memory_get_usage'));
if (MEMORY_GET_USAGE) {
    $GLOBALS['_startUseMems'] = memory_get_usage();
}
const COOLE_SYSTEM_VERSION = 'V 0.1.5';
//定义系统常量
defined('COOLE_PATH') or define('COOLE_PATH', __DIR__ . '/');
defined('LIB_PATH') or define('LIB_PATH', 'Library/');
defined('APP_PATH') or define('APP_PATH', 'app/');
defined('COM_PATH') or define('COM_PATH', 'common/');
defined('CONF_PATH') or define('CONF_PATH', APP_PATH.'conf/');
defined('TPL_PATH') or defined('TPL_PATH',APP_PATH.'view');
const CONTROLLER = 'controller';



// 类文件后缀
const EXT = '.php';
require LIB_PATH.'Coole'.EXT;
require_once COM_PATH.'function'.EXT;

Coole::router();
