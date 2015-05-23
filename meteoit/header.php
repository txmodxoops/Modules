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
require_once dirname(dirname(dirname(__FILE__))) . '/mainfile.php';
$dirname = $GLOBALS['xoopsModule']->getVar('dirname');
$pathname = XOOPS_ROOT_PATH. '/modules/'.$dirname;
include_once $pathname . '/include/common.php';
include_once $pathname . '/include/functions.php';
$myts =& MyTextSanitizer::getInstance(); 
$style = METEOIT_URL . '/css/style.css';
$jqtabs = METEOIT_URL . '/js/tabs.js';
if(file_exists($style) || file_exists($jqtabs)) { return true; }

if ( xoops_getModuleOption( 'seo_enable', METEOIT_DIRNAME ) != 0 ) 
{
	include_once METEOIT_PATH . '/seo.php';
}

xoops_loadLanguage('modinfo', $dirname);
xoops_loadLanguage('main', $dirname);