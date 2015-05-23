<?php   
/**
 * ****************************************************************************
 *       - Original Copyright (TDM)
 *       - TDMCreate By TDM - TEAM DEV MODULE FOR XOOPS
 *       - Licence GPL Copyright (c) (http://www.tdmxoops.net)
 *       - Developers TEAM TDMCreate Xoops - (http://www.xoops.org)
 * ****************************************************************************
 *       TWITTER - MODULE FOR XOOPS
 *        Copyright (c) 2007 - 2012
 *       TXMod Xoops (http://www.txmodxoops.org)
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  ------------------------------------------------------------------------
 *
 * @copyright       TXMod Xoops (http://www.txmodxoops.org)
 * @license         GPL see LICENSE
 * @package         twitter
 * @author          TXMod Xoops (info@txmodxoops.org)
 *
 * Version : 1.01 Mon 2012/03/05 18:12:44 : Timgno Exp $
 * ****************************************************************************
 */
 

$dirname = basename( dirname( dirname( __FILE__ ) ) ) ;

$module_handler =& xoops_gethandler("module");
$xoopsModule =& XoopsModule::getByDirname($dirname);
$moduleInfo =& $module_handler->get($xoopsModule->getVar("mid"));
$pathImageAdmin = $moduleInfo->getInfo("icons32");	
	
$adminmenu = array(); 

$i = 1;
$adminmenu[$i]["title"] = _MI_TWITTER_ADMENU1;
$adminmenu[$i]["link"] = "admin/index.php";
//$adminmenu[$i]["desc"] = _MI_TWITTER_ADMENU1_DESC; 
$adminmenu[$i]["icon"] = "../../".$pathImageAdmin."/home.png";
$i++;
$adminmenu[$i]["title"] = _MI_TWITTER_ADMENU2;
$adminmenu[$i]["link"]  = "admin/about.php";
//$adminmenu[$i]["desc"] = _MI_TWITTER_ADMENU2_DESC;
$adminmenu[$i]["icon"] = "../../".$pathImageAdmin."/about.png";
unset( $i );
?>