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
 * @version         $Id: 1.25 menu.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
$dirname = basename( dirname( dirname( __FILE__ ) ) ) ;
$module_handler =& xoops_gethandler('module');
$xoopsModule =& XoopsModule::getByDirname($dirname);
$moduleInfo =& $module_handler->get($xoopsModule->getVar('mid'));
$pathIcon32 = $moduleInfo->getInfo('icons32');
$adminmenu = array(); 
$i = 1;
$adminmenu[$i]['title'] = _MI_METEOIT_ADMENU1;
$adminmenu[$i]['link'] = 'admin/index.php';
$adminmenu[$i]['icon'] = $pathIcon32.'/home.png';
$i++;
$adminmenu[$i]['title'] = _MI_METEOIT_ADMENU2;
$adminmenu[$i]['link']  = 'admin/about.php';
$adminmenu[$i]['icon'] = $pathIcon32.'/about.png';
unset( $i );