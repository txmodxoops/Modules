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
 * @version         $Id: 1.25 week.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */ 
include_once 'header.php';
// Template
$xoopsOption['template_main'] = 'meteoit_week.html';
include_once XOOPS_ROOT_PATH . '/header.php';
$page = meteoit_CleanVars( $_REQUEST, 'page', 1);
$seo_enabled = xoops_getModuleOption('seo_enable', METEOIT_DIRNAME);
// Include Metas
$keywords = xoops_getModuleOption('keywords', $dirname);
$keywords = substr($keywords, 0);
$xoTheme->addMeta('meta', 'keywords', $keywords.", week");
$xoTheme->addMeta('meta', 'description', _MA_METEOIT_DETAILS_DESC); 
// Include Styles
$xoTheme->addStylesheet($style);
// Include Scripts
$xoTheme->addScript($jqtabs);
// Toolbar
$xoopsTpl->assign('mtoolbar', mit_toolbar(basename(__FILE__, '.php')));
$xoopsTpl->assign('ads300x250', xoops_getModuleOption('ads300x250', $dirname));
$xoopsTpl->assign('xoops_mpageurl', METEOIT_URL . '/week.php');
// Urls
$seo_path = '';
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_ONEDAY);
$xoopsTpl->assign('url1', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 1, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_TWODAY);
$xoopsTpl->assign('url2', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 2, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_THREEDAY);
$xoopsTpl->assign('url3', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 3, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_FOURDAY);
$xoopsTpl->assign('url4', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 4, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_FIVEDAY);
$xoopsTpl->assign('url5', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 5, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_SIXDAY);
$xoopsTpl->assign('url6', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 6, $seo_path));

$width = '350'; $height = '390';

switch( $page ) {
    default:
	case 1:		
		$xoopsTpl->assign('page', array('image' => 1, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DAI1_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 1, $seo_path));
		break;
	case 2:		
		$xoopsTpl->assign('page', array('image' => 2, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DAI2_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 2, $seo_path));
		break;
	case 3:	   
		$xoopsTpl->assign('page', array('image' => 3, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DAI3_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 3, $seo_path));
		break;
	case 4:		
		$xoopsTpl->assign('page', array('image' => 4, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DAI4_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 4, $seo_path));
		break;
	case 5:		
		$xoopsTpl->assign('page', array('image' => 5, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DAI5_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 5, $seo_path));
		break;
	case 6:		
		$xoopsTpl->assign('page', array('image' => 6, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DAI6_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_WEEK, 6, $seo_path));
		break;
}
include_once 'footer.php';