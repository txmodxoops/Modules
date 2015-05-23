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
 * @version         $Id: 1.25 index.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
include_once 'header.php';
$xoopsOption['template_main'] = 'meteoit_index.html';
include_once XOOPS_ROOT_PATH.'/header.php';
// Define Stylesheet
$xoTheme->addStylesheet( $style );
// keywords
meteoit_meta_keywords(xoops_getModuleOption('keywords', $dirname));
// description
meteoit_meta_description(_MA_METEOIT_DESC);
//
$xoopsTpl->assign('mtoolbar', mit_toolbar(basename(__FILE__, '.php')));
$GLOBALS['xoopsTpl']->assign('xoops_mpageurl', METEOIT_URL.'/index.php'); 
$GLOBALS['xoopsTpl']->assign('meteoit_url', METEOIT_URL);
$GLOBALS['xoopsTpl']->assign('adv', xoops_getModuleOption('advertise', $dirname));
//
$GLOBALS['xoopsTpl']->assign('bookmarks', xoops_getModuleOption('bookmarks', $dirname));
$GLOBALS['xoopsTpl']->assign('fbcomments', xoops_getModuleOption('fbcomments', $dirname)); 
//
$GLOBALS['xoopsTpl']->assign('admin', METEOIT_ADMIN);
$GLOBALS['xoopsTpl']->assign('copyright', $copyright);
//
include_once 'footer.php';	