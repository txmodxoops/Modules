<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * TXMod Themes - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) txmod (http://www.txmodxoops.org/)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       txmod (http://www.txmodxoops.org/)
 * @license         GNU GPL
 * @package         TXMod Themes
 * @author 	    txmod (webmaster@txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */

include "../../mainfile.php"; 
global $xoopsModule;
include_once XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar('dirname')."/class/pards.php";
include XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar('dirname')."/include/configs.php";
include XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar('dirname')."/include/functions.php";
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';

$myts =& MyTextSanitizer::getInstance();
$style = "modules/".$xoopsModule->getVar('dirname')."/include/style.css";

$pardsHandler =& xoops_getModuleHandler("partads_pards", "partads");

?>