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
 * @version         $Id: 1.25 details.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */ 
include_once 'header.php';
// Template
$xoopsOption['template_main'] = 'meteoit_details.html';
include_once XOOPS_ROOT_PATH . '/header.php';
$page = meteoit_CleanVars( $_REQUEST, 'page', 1);
$seo_enabled = xoops_getModuleOption('seo_enable', METEOIT_DIRNAME);
// Include Metas
$keywords = xoops_getModuleOption('keywords', $dirname);
$keywords = substr($keywords, 0);
$xoTheme->addMeta('meta', 'keywords', $keywords.", details");
$xoTheme->addMeta('meta', 'description', _MA_METEOIT_DETAILS_DESC); 
// Include Styles
$xoTheme->addStylesheet($style);
// Include Scripts
$xoTheme->addScript($jqtabs);
// Toolbar
$xoopsTpl->assign('mtoolbar', mit_toolbar(basename(__FILE__, '.php')));
$xoopsTpl->assign('ads120x240', xoops_getModuleOption('ads120x240', $dirname));
$xoopsTpl->assign('xoops_mpageurl', METEOIT_URL . '/detail.php');
// Urls
$seo_path = '';
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_WEEK);
$xoopsTpl->assign('url1', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 1, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_ANIMATED);
$xoopsTpl->assign('url2', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 2, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_TIMEBANDS);
$xoopsTpl->assign('url3', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 3, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_THREEHOURS);
$xoopsTpl->assign('url4', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 4, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_WINDSANDSEAS);
$xoopsTpl->assign('url5', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 5, $seo_path));
if ( $seo_enabled != 0 ) $seo_path = meteoit_remove_accents(_MA_METEOIT_WEATHERDAY);
$xoopsTpl->assign('url6', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 6, $seo_path));

switch( $page ) {
    default:
	case 1:		
	    $width = '400'; $height = '259';
		$xoopsTpl->assign('page', array('image' => 1, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DETAIL1_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 1, $seo_path));
		break;
	case 2:
        $width = '450'; $height = '338';	
		$xoopsTpl->assign('page', array('image' => 2, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DETAIL2_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 2, $seo_path));
		break;
	case 3:	   
		$width = '450'; $height = '408';
		$xoopsTpl->assign('page', array('image' => 3, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DETAIL3_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 3, $seo_path));
		break;
	case 4:	
        $width = '500'; $height = '510';	
		$xoopsTpl->assign('page', array('image' => 4, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DETAIL4_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 4, $seo_path));
		break;
	case 5:	
        $width = '500'; $height = '510';	
		$xoopsTpl->assign('page', array('image' => 5, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DETAIL5_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 5, $seo_path));
		break;
	case 6:		
	    $width = '400'; $height = '250';
		$xoopsTpl->assign('page', array('image' => 6, 'width' => $width, 'height' => $height, 'description' => _MA_METEOIT_DETAIL6_DESC ));
		$xoopsTpl->assign('xoops_mpageurl', meteoit_getUrl(_MA_METEOIT_SEO_DETAILS, 6, $seo_path));
		break;
}
include_once 'footer.php';