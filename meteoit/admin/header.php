<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * meteoit module for xoops
 *
 * @copyright       The TXMod XOOPS Project http://sourceforge.net/projects/thmod/
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GPL 2.0 or later
 * @package         meteoit
 * @since           2.5.5
 * @author          TXMod Xoops <support@txmodxoops.org> - <http://www.txmodxoops.org>
 * @version         $Id: 1.25 header.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/include/cp_header.php';
$dirname = basename(dirname(dirname(__FILE__)));
$thisPath = dirname(dirname(__FILE__));
include_once $thisPath.'/include/common.php';
include_once $thisPath.'/include/functions.php';

$thisModule = $GLOBALS['xoopsModule']->getVar('dirname');

$pathIcon16 = '../' . $xoopsModule->getInfo('icons16');
$pathIcon32 = '../' . $xoopsModule->getInfo('icons32');
$pathModuleAdmin = $GLOBALS['xoopsModule']->getInfo('dirmoduleadmin');


$myts =& MyTextSanitizer::getInstance();
if (!isset($xoopsTpl) || !is_object($xoopsTpl)) {
	include_once(XOOPS_ROOT_PATH."/class/template.php");
	$xoopsTpl = new XoopsTpl();
}

$xoopsTpl->assign('pathIcon16', $pathIcon16);
$xoopsTpl->assign('pathIcon32', $pathIcon32);
//Load languages
xoops_loadLanguage('admin', $thisModule);
xoops_loadLanguage('modinfo', $thisModule);
xoops_loadLanguage('main', $thisModule);
// Local admin menu class
if ( file_exists($GLOBALS['xoops']->path($pathModuleAdmin.'/moduleadmin.php'))){
	include_once $GLOBALS['xoops']->path($pathModuleAdmin.'/moduleadmin.php');
}else{
	redirect_header("../../../admin.php", 5, _AM_MODULEADMIN_MISSING, false);
}
xoops_cp_header();
$adminMenu = new ModuleAdmin();	