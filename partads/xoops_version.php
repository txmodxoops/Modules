<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * Part Ads - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) txmod (http://www.txmodxoops.org)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       txmod (http://www.txmodxoops.org)
 * @license         GNU GPL
 * @package         Part Ads
 * @author          txmod (webmaster@txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$modversion['name'] = _MI_PARTADS_MANAGER_NAME;
$modversion['version'] = 1.14;
$modversion['description'] = _MI_PARTADS_MANAGER_DESC;
$modversion['author'] = "txmod";
$modversion['author_website_url'] = "http://www.txmodxoops.org";
$modversion['author_website_name'] = "TXMod";
$modversion['credits'] = "txmod";
$modversion['license'] = "GNU GPL";
$modversion['release_info'] = "RC 27/10/2010";
$modversion['release_file'] = "manual.txt";
$modversion['manual'] = "Manual";
$modversion['manual_file'] = "manual.txt";
$modversion['image'] = "images/partads_slogo.png";
$modversion['dirname'] = "partads";
//about
$modversion['demo_site_url'] = "http://www.txmodxoops.org/modules/partads";
$modversion['demo_site_name'] = "TXMod PartAds";
$modversion['module_website_url'] = "http://www.txmodxoops.org/";
$modversion['module_website_name'] = "TXMod";
$modversion['release'] = "27/10/2010";
$modversion['module_status'] = "Release Candidate";
// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Mysql file
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
// Tables
$modversion['tables'][0] = "partads_pards";
// Scripts to run upon installation or update
$modversion['onInstall'] = "include/install.php";
//$modversion['onUpdate'] = "include/update.php";// Menu
$modversion['hasMain'] = 1;

//Recherche
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "partads_search";
// Templates
$modversion['templates'][1]['file'] = "partads_index.html";
$modversion['templates'][1]['description'] = "Partners Ads index page";
$modversion['templates'][2]['file'] = "partads_header.html";
$modversion['templates'][2]['description'] = "Partners Ads header file";
$modversion['templates'][3]['file'] = "partads_footer.html";
$modversion['templates'][3]['description'] = "Partners Ads footer file";
$modversion['templates'][4]['file'] = "partads_random.html";
$modversion['templates'][4]['description'] = "Partners Ads random file";
$modversion['templates'][5]['file'] = "partads_pards.html";
$modversion['templates'][5]['description'] = "Partners Ads single file";
//Blocs
$i = 1;
$modversion['blocks'][$i]['file'] = "blocks_pards.php";
$modversion['blocks'][$i]['name'] = _MI_PARTADS_PARDS_BLOCK_RECENT;
$modversion['blocks'][$i]['description'] = "";
$modversion['blocks'][$i]['show_func'] = "b_partads_pards";
$modversion['blocks'][$i]['edit_func'] = "b_partads_pards_edit";
$modversion['blocks'][$i]['options'] = "recent|5|25|0|5";
$modversion['blocks'][$i]['template'] = "partads_pards_block_recent.html";
$i++;
$modversion['blocks'][$i]['file'] = "blocks_pards.php";
$modversion['blocks'][$i]['name'] = _MI_PARTADS_PARDS_BLOCK_DAY;
$modversion['blocks'][$i]['description'] = "";
$modversion['blocks'][$i]['show_func'] = "b_partads_pards";
$modversion['blocks'][$i]['edit_func'] = "b_partads_pards_edit";
$modversion['blocks'][$i]['options'] = "day|5|25|0|5";
$modversion['blocks'][$i]['template'] = "partads_pards_block_day.html";
$i++;
$modversion['blocks'][$i]['file'] = "blocks_pards.php";
$modversion['blocks'][$i]['name'] = _MI_PARTADS_PARDS_BLOCK_RANDOM;
$modversion['blocks'][$i]['description'] = "";
$modversion['blocks'][$i]['show_func'] = "b_partads_pards";
$modversion['blocks'][$i]['edit_func'] = "b_partads_pards_edit";
$modversion['blocks'][$i]['options'] = "random|5|25|0|1";
$modversion['blocks'][$i]['template'] = "partads_pards_block_random.html";
unset($i);
// Config
$i = 1;
include_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
$modversion['config'][$i]['name']        = "partads_editor";
$modversion['config'][$i]['title']       = "_MI_PARTADS_EDITOR";
$modversion['config'][$i]['description'] = "_MI_PARTADS_EDITORDSC";
$modversion['config'][$i]['formtype']    = "select";
$modversion['config'][$i]['valuetype']   = "text";
$modversion['config'][$i]['default']     = "dhtmltextarea";
$modversion['config'][$i]['options']     = XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . "/class/xoopseditor");
$modversion['config'][$i]['category']    = "global";
$i++;
$modversion['config'][$i]['name'] = "keywords";
$modversion['config'][$i]['title'] = "_MI_PARTADS_KEYWORDS";
$modversion['config'][$i]['description'] = "_MI_PARTADS_KEYWORDSDSC";
$modversion['config'][$i]['formtype'] = "textbox";
$modversion['config'][$i]['valuetype'] = "text";
$modversion['config'][$i]['default'] = '';
$i++;
$modversion["config"][$i]["name"] = "perpageadmin";
$modversion["config"][$i]["title"] = "_MI_PARTADS_ADMINPERPAGE";
$modversion["config"][$i]["description"] = "_MI_PARTADS_ADMINPERPAGEDSC";
$modversion["config"][$i]["formtype"] = "select";
$modversion["config"][$i]["valuetype"] = "int";
$modversion["config"][$i]["default"] = 10;
$modversion["config"][$i]["options"] = array("2" => 2, "4" => 4, "6" => 6, "8" => 8, "10" => 10, 
                                             "15" => 15, "20" => 20, "30" => 30, "40" => 40);
$i++;
$modversion["config"][$i]["name"] = "perpagemain";
$modversion["config"][$i]["title"] = "_MI_PARTADS_MAINPERPAGE";
$modversion["config"][$i]["description"] = "_MI_PARTADS_MAINPERPAGEDSC";
$modversion["config"][$i]["formtype"] = "select";
$modversion["config"][$i]["valuetype"] = "int";
$modversion["config"][$i]["default"] = 10;
$modversion["config"][$i]["options"] = array("2" => 2, "4" => 4, "6" => 6, "8" => 8, "10" => 10, 
                                             "15" => 15, "20" => 20, "30" => 30, "40" => 40);
$i++;
$modversion["config"][$i]["name"] = "divideby";
$modversion["config"][$i]["title"] = "_MI_PARTADS_DIVIDEBY";
$modversion["config"][$i]["description"] = "_MI_PARTADS_DIVIDEBYDSC";
$modversion["config"][$i]["formtype"] = "select";
$modversion["config"][$i]["valuetype"] = "int";
$modversion["config"][$i]["default"] = 2;
$modversion["config"][$i]["options"] = array("1" => 1, "2" => 2, "3" => 3);
$i++; /* * Seo enable */
$modversion['config'][$i]['name'] = 'htaccess';
$modversion['config'][$i]['title'] = '_MI_PARTADS_HTACCESS';
$modversion['config'][$i]['description'] = '_MI_PARTADS_HTACCESSDESC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++; /** Seo path */
$modversion['config'][$i]['name'] = 'baseurl';
$modversion['config'][$i]['title'] = '_MI_PARTADS_BASEURL';
$modversion['config'][$i]['description'] = '_MI_PARTADS_BASEURLDESC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'partads';
$i++; /** Seo end of URL for Standard */
$modversion['config'][$i]['name'] = 'endofurl';
$modversion['config'][$i]['title'] = "_MI_PARTADS_ENDOFURL";
$modversion['config'][$i]['description'] = "_MI_PARTADS_ENDOFURLDESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '.html';
$i++;
$modversion['config'][$i]['name'] = 'maxcolrandom';
$modversion['config'][$i]['title'] = '_MI_PARTADS_MAXCOLRANDOM';
$modversion['config'][$i]['description'] = '_MI_PARTADS_MAXCOLRANDOMDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$modversion["config"][$i]["options"] = array("1" => 1, "2" => 2, "3" => 3, "4" => 4);
$i++;
$modversion['config'][$i]['name']        = 'cookietime';
$modversion['config'][$i]['title']       = '_MI_PARTADS_RECLICK';
$modversion['config'][$i]['description'] = '_MI_PARTADS_RECLICKDSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 3600;
$modversion['config'][$i]['options']     = array('_MI_PARTADS_1HOUR'   => '3600',
                                                 '_MI_PARTADS_3HOURS'  => '10800',
                                                 '_MI_PARTADS_5HOURS'  => '18000',
                                                 '_MI_PARTADS_10HOURS' => '36000',
                                                 '_MI_PARTADS_1DAY'    => '86400');
$i++;
$modversion['config'][$i]['name']        = 'pardsshow';
$modversion['config'][$i]['title']       = '_MI_PARTADS_SHOW';
$modversion['config'][$i]['description'] = '_MI_PARTADS_SHOWDSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array('_MI_PARTADS_IMAGES' => 1,
                                                 '_MI_PARTADS_TEXT' => 2,
                                                 '_MI_PARTADS_BOTH' => 3);
$i++;
$modversion['config'][$i]['name']        = 'pardssort';
$modversion['config'][$i]['title']       = '_MI_PARTADS_SORT';
$modversion['config'][$i]['description'] = '_MI_PARTADS_SORTDSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array('_MI_PARTADS_ID' => 1,
                                                 '_MI_PARTADS_HITS' => 2,
                                                 '_MI_PARTADS_TITLE' => 3,
                                                 '_MI_PARTADS_WEIGHT' => 4);
$i++;
$modversion['config'][$i]['name']        = 'pardsorder';
$modversion['config'][$i]['title']       = '_MI_PARTADS_ORDER';
$modversion['config'][$i]['description'] = '_MI_PARTADS_ORDERDSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array('_ASCENDING' => 1, '_DESCENDING' => 2);
$i++;
$modversion['config'][$i]['name'] = 'dateformat';
$modversion['config'][$i]['title'] = '_MI_PARTADS_DATEFORMAT';
$modversion['config'][$i]['description'] = '_MI_PARTADS_DATEFORMATDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'D, d-M-Y';
$i++;
$modversion['config'][$i]['name'] = "advertise";
$modversion['config'][$i]['title'] = "_MI_PARTADS_ADVERTISE";
$modversion['config'][$i]['description'] = "_MI_PARTADS_ADVERTISEDSC";
$modversion['config'][$i]['formtype'] = "textarea";
$modversion['config'][$i]['valuetype'] = "text";
$modversion['config'][$i]['default'] = '';
unset($i);
?>