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
 * @version         $Id: 1.25 seo.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */ 

if (!defined("XOOPS_ROOT_PATH")) {
	die("XOOPS root path not defined");
}

$seoOp = @$_GET['seoOp'];
$seoArg = @$_GET['seoArg'];
//trigger_error('out', E_USER_ERROR);
if ( empty($seoOp) && @$_SERVER['PATH_INFO'] ) {
	//SEO mode is path-info
	//
	//	Sample URL for path-info
	//	http://localhost/modules/xnews/index.php/articles.1/seo-is-active.html
	//
	$data = explode("/", $_SERVER['PATH_INFO']);
	
	$seoParts = explode('.', $data[1]);
	if ( count($seoParts) == 2 ) { 
		$seoOp = $seoParts[0];
		$seoArg = $seoParts[1];
	}
	if ( count($seoParts) == 3 ) { 
		$seoOp = $seoParts[1];
		$seoArg = $seoParts[2];
	}  
	
	// for multi-argument modules, where stroyid and topic_id both are required.
	// $seoArg = substr($data[1], strlen($seoOp) +1);
}

$seoMap = array(
		//_MA_METEOIT_SEO_INDEX => 'index.php',
		_MA_METEOIT_SEO_TODAY => 'today.php',
		_MA_METEOIT_SEO_WEEK => 'week.php',
		_MA_METEOIT_SEO_DETAILS => 'details.php',
		_MA_METEOIT_SEO_FLASH => 'flash.php',
		_MA_METEOIT_SEO_WORLD => 'world.php',
		_MA_METEOIT_SEO_VIDEO => 'videos.php'		
);

if ( !empty($seoOp) && !empty($seoMap[$seoOp]) )
{
	//module specific dispatching logic, other module must implement as 
	//per their requirements.
	$url_arr = explode('/modules/', $_SERVER['PHP_SELF']);
	$newUrl = $url_arr[0] . '/modules/' . METEOIT_DIRNAME . '/' . $seoMap[$seoOp];
	
	$_ENV['PHP_SELF'] = $newUrl;
	$_SERVER['SCRIPT_NAME'] = $newUrl;
	$_SERVER['PHP_SELF'] = $newUrl;
	switch ($seoOp) {		
		//case _MA_METEOIT_SEO_INDEX:
		case _MA_METEOIT_SEO_TODAY:
		case _MA_METEOIT_SEO_WEEK:
		case _MA_METEOIT_SEO_DETAILS:
		case _MA_METEOIT_SEO_FLASH:
		case _MA_METEOIT_SEO_WORLD:
		case _MA_METEOIT_SEO_VIDEO:
		default:
			$_SERVER['REQUEST_URI'] = $newUrl . '?page=' . $seoArg;
			$_GET['page'] = $seoArg;
			break;
	}	
			
	include ( $seoMap[$seoOp] );
	exit;
	//trigger_error('out', E_USER_WARNING);
}