<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * partads - MODULE FOR XOOPS AND IMPRESS CMS
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
 * @package         partads
 * @author 	    txmod (webmaster@txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
if( ! defined( 'XOOPS_ROOT_PATH' ) ) exit ;

$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
global $xoopsConfig , $xoopsDB , $xoopsUser ;

// module information
$mod_url = XOOPS_URL . "/modules/$mydirname";
$mod_path = XOOPS_ROOT_PATH . "/modules/$mydirname";
$mod_img = XOOPS_URL . "/modules/$mydirname/images/pards_logo.png";
$mod_admin = "<a href='".$mod_url."/admin/index.php'><strong>Admin</strong></a>";
$mod_copyright = "<a href='http://www.txmodxoops.org/' target='_new'>
                    <img src='".$mod_url."/images/txmod_logo.png' alt='TXMod Xoops' /></a>";

// global language file
$language = $xoopsConfig['language'] ;
if ( file_exists( "$mod_path/language/$language/main.php" ) ) {
	include_once "$mod_path/language/$language/main.php" ;
} else {
	include_once "$mod_path/language/english/main.php" ;
	$language = "english" ;
}
?>