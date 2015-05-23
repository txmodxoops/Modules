<?php   
/**
 * ****************************************************************************
 *       - Original Copyright (TDM)
 *       - TDMCreate By TDM - TEAM DEV MODULE FOR XOOPS
 *       - Licence GPL Copyright (c) (http://www.tdmxoops.net)
 *       - Developers TEAM TDMCreate Xoops - (http://www.xoops.org)
 * ****************************************************************************
 *       TWITTER - MODULE FOR XOOPS
 *        Copyright (c) 2007 - 2012
 *       TXMod Xoops (http://www.txmodxoops.org)
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  ------------------------------------------------------------------------
 *
 * @copyright       TXMod Xoops (http://www.txmodxoops.org)
 * @license         GPL see LICENSE
 * @package         twitter
 * @author          TXMod Xoops (info@txmodxoops.org)
 *
 * Version : 1.01 Mon 2012/03/05 18:12:44 : Timgno Exp $
 * ****************************************************************************
 */
 
if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$dirname = basename( dirname( __FILE__ ) ) ;

$modversion['name'] = _MI_TWITTER_NAME;
$modversion['version'] = 1.01;
$modversion['description'] = _MI_TWITTER_DESC;
$modversion['author'] = "TXMod Xoops";
$modversion['author_mail'] = "info@txmodxoops.org";
$modversion['author_website_url'] = "http://www.txmodxoops.org";
$modversion['author_website_name'] = "TXMod Xoops";
$modversion['credits'] = "Timgno";
$modversion['license'] = "GPL see LICENSE";
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = "www.gnu.org/licenses/gpl-2.0.html/";

$modversion['release_info'] = "Beta 1 05/03/2012";
$modversion['release_file'] = XOOPS_URL."/modules/{$dirname}/docs/changelog.txt";
$modversion['release_date'] = "2012/03/05";

$modversion['manual'] = "Install Manual";
$modversion['manual_file'] = XOOPS_URL."/modules/{$dirname}/docs/install.txt";
$modversion['min_php'] = "5.2";
$modversion['min_xoops'] = "2.5";
$modversion['min_admin']= "1.1";
$modversion['min_db']= array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');
$modversion['image'] = "images/twitter_slogo.png";
$modversion['dirname'] = "{$dirname}";

$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses';
$modversion['icons16'] = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = 'Frameworks/moduleclasses/icons/32';

//About
$modversion['demo_site_url'] = "http://www.txmodxoops.org/modules/twitter";
$modversion['demo_site_name'] = "Twitter TXMod Xoops";
$modversion['forum_site_url'] = "http://www.txmodxoops.org/modules/newbb/";
$modversion['forum_site_name'] = "TXMod Xoops Community";
$modversion['module_website_url'] = "http://www.txmodxoops.org/";
$modversion['module_website_name'] = "TXMod Xoops";
$modversion['release'] = "05/03/2012";
$modversion['module_status'] = "Beta 1";

// Admin things
$modversion['hasAdmin'] = 1;
// Admin system menu
$modversion['system_menu'] = 1;

$modversion["adminindex"] = "admin/index.php";
$modversion["adminmenu"] = "admin/menu.php";


// Scripts to run upon installation or update
$modversion["onInstall"] = "include/install.php";
//$modversion["onUpdate"] = "include/update.php";

// Menu
$modversion["hasMain"] = 1;

// Templates
$i = 1;
$modversion["templates"][$i]["file"] = "twitter_index.html";
$modversion["templates"][$i]["description"] = "twitter index page";
$i++;
$modversion["templates"][$i]["file"] = "twitter_header.html";
$modversion["templates"][$i]["description"] = "twitter header page";
$i++;
$modversion["templates"][$i]["file"] = "twitter_footer.html";
$modversion["templates"][$i]["description"] = "twitter footer page";
unset( $i );

// Config
$i = 1;
include_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
$modversion["config"][$i]["name"]        = "twitter_editor";
$modversion["config"][$i]["title"]       = "_MI_TWITTER_EDITOR";
$modversion["config"][$i]["description"] = "_MI_TWITTER_EDITOR_DESC";
$modversion["config"][$i]["formtype"]    = "select";
$modversion["config"][$i]["valuetype"]   = "text";
$modversion["config"][$i]["default"]     = "dhtmltextarea";
$modversion["config"][$i]["options"]     = XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . "/class/xoopseditor");
$modversion["config"][$i]["category"]    = "global";  
$i++;
$modversion["config"][$i]["name"] = "keywords";
$modversion["config"][$i]["title"] = "_MI_TWITTER_KEYWORDS";
$modversion["config"][$i]["description"] = "_MI_TWITTER_KEYWORDS_DESC";
$modversion["config"][$i]["formtype"] = "textbox";
$modversion["config"][$i]["valuetype"] = "text";
$modversion["config"][$i]["default"] = '';
$i++;
$modversion["config"][$i]["name"] = "default_url";
$modversion["config"][$i]["title"] = "_MI_TWITTER_DEFAULT_URL";
$modversion["config"][$i]["description"] = "_MI_TWITTER_DEFAULT_URL_DESC";
$modversion["config"][$i]["formtype"] = "textbox";
$modversion["config"][$i]["valuetype"] = "text";
$modversion["config"][$i]["default"] = 'http://search.twitter.com/search.json?lang=en&q=';
$i++;
$modversion["config"][$i]["name"] = "advertise_text";
$modversion["config"][$i]["title"] = "_MI_TWITTER_ADVERTISE";
$modversion["config"][$i]["description"] = "_MI_TWITTER_ADVERTISE_DESC";
$modversion["config"][$i]["formtype"] = "textarea";
$modversion["config"][$i]["valuetype"] = "text";
$modversion["config"][$i]["default"] = '';
$i++;
$modversion["config"][$i]["name"] = "query_search";
$modversion["config"][$i]["title"] = "_MI_TWITTER_QUERY_SEARCH";
$modversion["config"][$i]["description"] = "_MI_TWITTER_QUERY_SEARCH_DESC";
$modversion["config"][$i]["formtype"] = "textbox";
$modversion["config"][$i]["valuetype"] = "text";
$modversion["config"][$i]["default"] = 'txmodxoops';
$i++;
$modversion["config"][$i]["name"] = "advertise_120";
$modversion["config"][$i]["title"] = "_MI_TWITTER_ADVERTISE";
$modversion["config"][$i]["description"] = "_MI_TWITTER_ADVERTISE_DESC";
$modversion["config"][$i]["formtype"] = "textarea";
$modversion["config"][$i]["valuetype"] = "text";
$modversion["config"][$i]["default"] = '';
$i++;   
$modversion["config"][$i]["name"] = "act_socialnetworks";   
$modversion["config"][$i]["title"] = "_MI_TWITTER_ACTSOCIALNETWORKS";   
$modversion["config"][$i]["description"] = "_MI_TWITTER_ACTSOCIALNETWORKS_DESC";   
$modversion["config"][$i]["formtype"] = "yesno";  
$modversion["config"][$i]["aluetype"] = "int";  
$modversion["config"][$i]["default"] = 0; 
$i++; 
$modversion["config"][$i]["name"] = "socialnetworks"; 
$modversion["config"][$i]["title"] = "_MI_TWITTER_SOCIALNETWORKS"; 
$modversion["config"][$i]["description"] = "_MI_TWITTER_SOCIALNETWORKS_DESC"; 
$modversion["config"][$i]["formtype"] = "textarea"; 
$modversion["config"][$i]["valuetype"] = "text"; 
$modversion["config"][$i]["default"] = '';
unset($i);
?>