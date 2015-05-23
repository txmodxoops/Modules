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
 * @version         $Id: 1.25 world.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */  
include_once 'header.php';
// Template
$xoopsOption['template_main'] = 'meteoit_world.html';
include_once XOOPS_ROOT_PATH . '/header.php'; 
$page = meteoit_CleanVars( $_REQUEST, 'page', 1);
$seo_enabled = xoops_getModuleOption('seo_enable', METEOIT_DIRNAME);
// Include Metas
$keywords = xoops_getModuleOption('keywords', $dirname);
$keywords = substr($keywords, 0);
$xoTheme->addMeta('meta', 'keywords', $keywords . ", world");
$xoTheme->addMeta('meta', 'description', _MA_METEOIT_WORLD_DESC);
// Include Styles
$xoTheme->addStylesheet($style);
// Include Scripts
$xoTheme->addScript($jqtabs);
// Toolbar
$xoopsTpl->assign('mtoolbar', mit_toolbar(basename(__FILE__, '.php')));
$xoopsTpl->assign('ads120x240', xoops_getModuleOption('ads120x240', $dirname));
$xoopsTpl->assign('xoops_mpageurl', METEOIT_URL . '/world.php');
// Urls
$seo_path = '';
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_EST);
$xoopsTpl->assign('url1', meteoit_getUrl(_MA_METEOIT_SEO_WORLD, 1, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_WEST);
$xoopsTpl->assign('url2', meteoit_getUrl(_MA_METEOIT_SEO_WORLD, 2, $seo_path));

$width = '450'; $height = '420';
if( $page == 1 ) {
	$xoopsTpl->assign('page', array('image' => 'euro-africasat', 'width' => $width, 'height' => $height));
	$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WORLD, 1, $seo_path));
} elseif ( $page == 2 ) {
    $xoopsTpl->assign('page', array('image' => 'goesdisk', 'width' => $width, 'height' => $height));
	$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WORLD, 2, $seo_path));
}
include_once 'footer.php';	