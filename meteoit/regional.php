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
 * @version         $Id: 1.25 regional.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */ 
include_once 'header.php';
// Template
$xoopsOption['template_main'] = 'meteoit_regional.html';
include_once XOOPS_ROOT_PATH . '/header.php';
$rvalue = meteoit_CleanVars($_REQUEST, 'value', 'ABR', 'string');
// Include Metas
$keywords = xoops_getModuleOption('keywords', $dirname);
$keywords = substr($keywords, 0);
$xoTheme->addMeta('meta', 'keywords', $keywords. ', regional');
$xoTheme->addMeta('meta', 'description', _MA_METEOIT_REGIONAL_DESC);
// Include Styles
$xoTheme->addStylesheet($style);
$xoTheme->addScript('modules/meteoit/js/tabs.js');

$xoopsTpl->assign('rvalue', $rvalue);
$xoopsTpl->assign('meteoit_url', METEOIT_URL);
// Toolbar
$xoopsTpl->assign('mtoolbar', mit_toolbar(basename(__FILE__, '.php')));
$xoopsTpl->assign('ads300x250', xoops_getModuleOption('ads300x250', $dirname));
$xoopsTpl->assign('xoops_mpageurl', METEOIT_URL . '/regional.php');
include_once 'footer.php';	