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
 * @version         $Id: 1.25 xoops_version.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$dirname = basename( dirname( __FILE__ ) );
$modversion = array(
    'name' => _MI_METEOIT_NAME,
	'version' => 1.25,
	'description' => _MI_METEOIT_DESC,
	'author' => "TXMod Xoops",
	'author_mail' => "support@txmodxoops.org",
	'author_website_url' => "http://www.txmodxoops.org",
	'author_website_name' => "TXMod Xoops",
	'credits' => "Timgno",
	'license' => "GPL 2.0 or later",
	'help' => "page=help",
	'license' => "GNU GPL 2.0",
	'license_url' => "www.gnu.org/licenses/gpl-2.0.html/",

	'release_info' => "Change Log",
	'release_file' => XOOPS_URL."/modules/{$dirname}/docs/changelog.txt",
	'release_date' => "2013/06/12",

	'manual' => "Installation",
	'manual_file' => XOOPS_URL."/modules/{$dirname}/docs/install.txt",
	'min_php' => "5.3",
	'min_xoops' => "2.5.5",
	'min_admin' => "1.1",
	'min_db' => array('mysql' => '5.0.7', 'mysqli' => '5.0.7'),
	'image' => "images/meteoit_slogo.png",
	'dirname' => "{$dirname}",
    //Frameworks
	'dirmoduleadmin' => "Frameworks/moduleclasses/moduleadmin",
    'icons16' => "../../Frameworks/moduleclasses/icons/16",
	'icons32' => "../../Frameworks/moduleclasses/icons/32",
	//About
	'demo_site_url' => "http://www.txmodxoops.org",
	'demo_site_name' => "Meteo TXMod Xoops",
	'support_url' => "http://xoops.org/modules/newbb",
	'support_name' => "Support Forum",
	'module_website_url' => "www.txmodxoops.org",
	'module_website_name' => "TXMod Xoops",
	'release' => "2013/06/06",
	'module_status' => "Beta 1",
    // Admin system menu
	'system_menu' => 1,
	// Admin things
	'hasAdmin' => 1,	
	'adminindex' => "admin/index.php",
	'adminmenu' => "admin/menu.php",
    // Menu
	'hasMain' => 1,
	// Scripts to run upon installation or update
	'onInstall' => "include/install.php",
	'onUpdate' => "include/update.php"	
);

// Submenu
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU1, 'url' => "today.php");
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU2, 'url' => "week.php");
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU3, 'url' => "details.php");
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU4, 'url' => "flash.php");
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU5, 'url' => "world.php");
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU6, 'url' => "videos.php");
$modversion['sub'][] = array('name' => _MI_METEOIT_SMENU7, 'url' => "regional.php");

// Templates
$modversion['templates'][] = array('file' => "meteoit_breadcrumbs.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_header.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_index.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_today.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_week.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_flash.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_details.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_videos.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_world.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_regional.html", 'description' => "");
$modversion['templates'][] = array('file' => "meteoit_footer.html", 'description' => "");

//Blocs
$i = 1;
$modversion['blocks'][] = array( 
	'file' => "blocks.php",
	'name' => _MI_METEOIT_BLOCK_ITALY,
	'description' => _MI_METEOIT_BLOCK_ITALY_DESC,
	'show_func' => "b_meteoit_show",
	'edit_func' => "b_meteoit_edit",
	'options' => "italy|150|400",
	'template' => "meteoit_block_italy.html");

$modversion['blocks'][] = array( 
	'file' => "blocks.php",
	'name' => _MI_METEOIT_BLOCK_EUROPE,
	'description' => _MI_METEOIT_BLOCK_EUROPE_DESC,
	'show_func' => "b_meteoit_show",
	'edit_func' => "b_meteoit_edit",
	'options' => "europe|150|400",
	'template' => "meteoit_block_europe.html");

$modversion['blocks'][] = array( 
	'file' => "blocks.php",
	'name' => _MI_METEOIT_BLOCK_WORLD,
	'description' => _MI_METEOIT_BLOCK_WORLD_DESC,
	'show_func' => "b_meteoit_show",
	'edit_func' => "b_meteoit_edit",
	'options' => "world|150|400",
	'template' => "meteoit_block_world.html");

// Config
xoops_load('xoopseditorhandler');
$editor_handler = XoopsEditorHandler::getInstance();
$modversion['config'][] = array(
    'name' => "meteoit_editor",
    'title' => "_MI_METEOIT_EDITOR",
    'description' => "_MI_METEOIT_EDITOR_DESC",
    'formtype' => "select",
    'valuetype' => "text",
    'options' => array_flip($editor_handler->getList()),
    'default' => "dhtml");

$modversion['config'][] = array(
    'name' => "keywords",
    'title' => "_MI_METEOIT_KEYWORDS",
    'description' => "_MI_METEOIT_KEYWORDS_DESC",
    'formtype' => "textbox",
    'valuetype' => "text",
    'default' => "meteoit, regional, weither, index");
	
$modversion['config'][] = array(
    'name' => "formatdate",
    'title' => "_MI_METEOIT_FORMATDATE",
    'description' => "_MI_METEOIT_FORMATDATE_DESC",
    'formtype' => "select",
    'valuetype' => "text",
	'options' => array(_MI_METEOIT_FORMATDATE_YMD => 'Y-m-d', _MI_METEOIT_FORMATDATE_MDY => 'm-d-Y', _MI_METEOIT_FORMATDATE_DMY => 'd-m-Y'),
    'default' => "Y-m-d");

$modversion['config'][] = array(
	'name' => "seo_enable",
	'title' => "_MI_METEOIT_SEOENABLE",
	'description' => "_MI_METEOIT_SEOENABLE_DESC",
	'formtype' => "select",
	'valuetype' => "int",
	'options' => array(_NONE => 0, 'htaccess' => 1, 'path-info' => 2),
	'default' => 0);

$modversion['config'][] = array(
	'name' => "seo_path",
	'title' => "_MI_METEOIT_SEOPATH",
	'description' => "_MI_METEOIT_SEOPATH_DESC",
	'formtype' => "textbox",
	'valuetype' => "text",
	'default' => "{$dirname}");

$modversion['config'][] = array(
	'name' => "seo_endofurl",
	'title' => "_MI_METEOIT_SEOENDOFURL",
	'description' => "_MI_METEOIT_SEOENDOFURL_DESC",
	'formtype' => "text",
	'valuetype' => "text",
	'default' => ".html");

$modversion['config'][] = array(
	'name' => "seo_level",
	'title' => "_MI_METEOIT_SEOLEVEL",
	'description' => "_MI_METEOIT_SEOLEVEL_DESC",
	'formtype' => "select",
	'valuetype' => "int",
	'options' => array(	_MI_METEOIT_ROOT_LEVEL => 0, _MI_METEOIT_MODULE_LEVEL => 1 ),
	'default' => 0);

$modversion['config'][] = array(
    'name' => "ads120x240",
    'title' => "_MI_METEOIT_ADVERTISE_120x240",
    'description' => "_MI_METEOIT_ADVERTISE_120x240_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads120x600",
    'title' => "_MI_METEOIT_ADVERTISE_120x600",
    'description' => "_MI_METEOIT_ADVERTISE_120x600_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads160x600",
    'title' => "_MI_METEOIT_ADVERTISE_160x600",
    'description' => "_MI_METEOIT_ADVERTISE_160x600_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads300x250",
    'title' => "_MI_METEOIT_ADVERTISE_300x250",
    'description' => "_MI_METEOIT_ADVERTISE_300x250_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads336x280",
    'title' => "_MI_METEOIT_ADVERTISE_336x280",
    'description' => "_MI_METEOIT_ADVERTISE_336x280_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads468x15",
    'title' => "_MI_METEOIT_ADVERTISE_468x15",
    'description' => "_MI_METEOIT_ADVERTISE_468x15_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads468x60",
    'title' => "_MI_METEOIT_ADVERTISE_468x60",
    'description' => "_MI_METEOIT_ADVERTISE_468x60_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
	
$modversion['config'][] = array(
    'name' => "ads728x90",
    'title' => "_MI_METEOIT_ADVERTISE_728x90",
    'description' => "_MI_METEOIT_ADVERTISE_728x90_DESC",
    'formtype' => "textarea",
    'valuetype' => "text",
	'default' => "");
 
$modversion['config'][] = array(
    'name' => "bookmarks",
    'title' => "_MI_METEOIT_BOOKMARKS",
    'description' => "_MI_METEOIT_BOOKMARKS_DESC",
    'formtype' => "yesno",
    'valuetype' => "int",
	'default' => 0);

$modversion['config'][] = array(
    'name' => "fbcomments",
    'title' => "_MI_METEOIT_FBCOMMENTS",
    'description' => "_MI_METEOIT_FBCOMMENTS_DESC",
    'formtype' => "yesno",
    'valuetype' => "int",
	'default' => 0); 