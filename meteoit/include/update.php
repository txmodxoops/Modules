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
 * @version         $Id: 1.25 update.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
function xoops_module_update_meteoit(&$xoopsModule) 
{
	include_once XOOPS_ROOT_PATH . '/modules/meteoit/include/functions.php';
		
	$module_id = $xoopsModule->getVar('mid');
	$module_name = $xoopsModule->getVar('name');
	$module_dirname = $xoopsModule->getVar('dirname');
	$module_version = $xoopsModule->getVar('version');
	
	global $xoopsDB;	
	return true;
}
