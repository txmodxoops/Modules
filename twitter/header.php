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
 
include "../../mainfile.php";
global $xoopsConfig, $xoopsModule;
include XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar('dirname')."/include/configs.php";
include XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar('dirname')."/include/functions.php";
$myts =& MyTextSanitizer::getInstance(); 
$style = "modules/".$xoopsModule->getVar('dirname')."/css/style.css";
if(file_exists($style)); {return true;}
?>