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
 * @version         $Id: 1.25 footer.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
// Date
$formatdate = xoops_getModuleOption('formatdate', METEOIT_DIRNAME);
$xoopsTpl->assign('date', date($formatdate));  
// Config Main
$GLOBALS['xoopsTpl']->assign('meteoit_url', METEOIT_URL);
// Socials
$GLOBALS['xoopsTpl']->assign('bookmarks', xoops_getModuleOption('bookmarks', METEOIT_DIRNAME));
$GLOBALS['xoopsTpl']->assign('fbcomments', xoops_getModuleOption('fbcomments', METEOIT_DIRNAME)); 
// Admin
$GLOBALS['xoopsTpl']->assign('admin', METEOIT_ADMIN);
$GLOBALS['xoopsTpl']->assign('copyright', $copyright);
include $GLOBALS['xoops']->path('footer.php');