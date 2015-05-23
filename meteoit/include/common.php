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
 * @version         $Id: 1.25 common.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */if( ! defined( "XOOPS_ROOT_PATH" ) ) exit ;
if (!defined('METEOIT_MODULE_PATH')) {
	define('METEOIT_DIRNAME', 'meteoit');
	define('METEOIT_PATH', XOOPS_ROOT_PATH.'/modules/'.METEOIT_DIRNAME);
	define('METEOIT_URL', XOOPS_URL.'/modules/'.METEOIT_DIRNAME);	
	define('METEOIT_UPLOAD_PATH', XOOPS_UPLOAD_PATH.'/'.METEOIT_DIRNAME);
	define('METEOIT_UPLOAD_URL', XOOPS_UPLOAD_URL.'/'.METEOIT_DIRNAME);
	define('METEOIT_IMAGE_PATH', METEOIT_PATH.'/images');
	define('METEOIT_IMAGE_URL', METEOIT_URL.'/images/');
	define('METEOIT_ADMIN', METEOIT_URL . '/admin/index.php');
	$local_logo = METEOIT_IMAGE_URL . '/txmodxoops_logo.png';
	if(is_dir(METEOIT_IMAGE_PATH) && file_exists($local_logo)) {
		$logo = $local_logo;
	} else {
		$pathIcon32 = $xoopsModule->getInfo('icons32');
		$logo = $pathIcon32.'/xoopsmicrobutton.gif';
	}
	define('METEOIT_AUTHOR_LOGOIMG', $logo);
}
// module information
$copyright = "<a href='http://www.txmodxoops.org' title='TXMod Xoops' target='_blank'>
                     <img src='".METEOIT_AUTHOR_LOGOIMG."' alt='TXMod Xoops' /></a>";