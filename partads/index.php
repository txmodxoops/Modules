<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * partads - MODULE FOR XOOPS AND IMPRESS CMS
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
 * @package         partads
 * @author 	    txmod (http://www.txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
include "header.php";
// dichiarazione template
$xoopsOption['template_main'] = 'partads_index.html';
// inclusione dell'header principale
include(XOOPS_ROOT_PATH.'/header.php');
//keywords
$keywords = $xoopsModuleConfig['keywords'];
$keywords = substr($keywords, 0);
$xoTheme->addMeta('meta', 'keywords', $keywords);
//description
$xoTheme->addMeta('meta', 'description', 'Lista dei Partner che sono presenti su TXMod Xoops.');
// Librerie LightBox
//$xoTheme->addScript($brwjqlbjs);
// Personalizzazione dello stile
//$xoTheme->addStylesheet($style);
// Style jQuery Lightbox Css
//$xoTheme->addStylesheet($brwjqlbcss);
// Funzione jQuery Lightbox Script
//$xoTheme->addScript($jqlbjs);
// Style in line jQuery Lightbox Css
//$xoTheme->addStylesheet($jqlbcss);
//$numrandom = 1;
$menuarray = array();
// Variabili per le lingue
$xoopsTpl->assign('lang_title', _MD_PARTADS_TITLE);
$xoopsTpl->assign('lang_desc', _MD_PARTADS_DESC);
$xoopsTpl->assign('adv', $xoopsModuleConfig['advertise']);
$xoopsTpl->assign('divideby', $xoopsModuleConfig['divideby']);
$xoopsTpl->assign('numrandom', $xoopsModuleConfig['numrandom']);
// Variables 
$criteria = new CriteriaCompo();
$criteria->setSort("pards_id");
$criteria->setOrder("ASC");
$numrows = $pardsHandler->getCount();
$view_downloads = $pardsHandler->get($lid);
if (isset($_REQUEST['limit'])) {
 	$criteria->setLimit($_REQUEST['limit']);
 	$limit = $_REQUEST['limit'];
} else {
	$criteria->setLimit($xoopsModuleConfig['perpagemain']);
	$limit = $xoopsModuleConfig['perpagemain'];
}
if (isset($_REQUEST['start'])) {
	$criteria->setStart($_REQUEST['start']);
	$start = $_REQUEST['start'];
} else {
	$criteria->setStart(0);
	$start = 0;
}
$partads_arr = $pardsHandler->getall($criteria);
if ( $numrows > $limit ) {
	$pagenav = new XoopsPageNav($numrows, $limit, $start, 'start', 'limit=' . $limit);
	$pagenav = $pagenav->renderNav(4);
} else {
	$pagenav = '';
} 
$xoopsTpl->assign('pagenav', $pagenav);
$count = 1;
// Table View
if ($numrows>0)
{
     foreach (array_keys($partads_arr) as $i)
     {
        $partads_id = $partads_arr[$i]->getVar("pards_id");
        $partads_title = $partads_arr[$i]->getVar("pards_title");
        $partads_desc = $partads_arr[$i]->getVar("pards_desc");
	$partads_url = $partads_arr[$i]->getVar("pards_url");
        $partads_image = $partads_arr[$i]->getVar("pards_image");
        $partads_hits = $partads_arr[$i]->getVar("pards_hits");
        $xoopsTpl->append('partads', array('id' => $partads_id,
                                           'title' => $partads_title,
                                           'desc' => $partads_desc, 
                                           'image' => $partads_image,
                                           'hits' => $partads_hits,
                                           'count' => $count));
        $count++;
     }
}

$xoopsTpl->assign('mod_img', $mod_img);
$xoopsTpl->assign('admin_url', $mod_admin);
$xoopsTpl->assign('copyright', $mod_copyright);

include_once XOOPS_ROOT_PATH."/footer.php";	
?>