<?php
/**
 * $Id: singlefile.php v 1.04 06 july 2004 Liquid Exp $
 * Module: PD-Links
 * Version: v1.0
 * Release Date: 04. März 2005
 * Author: Power-Dreams Team
 * Licence: GNU
 */

include 'header.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

$pards_id = intval($_GET['pards_id']);
$xoopsOption['template_main'] = 'partads_pards.html';

$sql = "SELECT * FROM " . $xoopsDB->prefix('partads_pards') . " WHERE pards_id = $pards_id";
$result = $xoopsDB->query($sql);
$link_arr = $xoopsDB->fetchArray($result);

if (!$link_arr) {
   redirect_header("index.php", 1, _MD_PARTADS_NOPARDSLOAD);
   exit(); 
}

include XOOPS_ROOT_PATH . '/header.php';

$sql = "SELECT pards_id, pards_title, pards_date_created FROM " . $xoopsDB->prefix('partads_pards') . "
	WHERE submitter = " . $link_arr['submitter'] . " 
	AND pards_date_created > 0 AND pards_date_created <= " . time() . " AND (expired = 0 OR expired > " . time() . ") 
	AND offline = 0 ORDER by pards_date_created DESC";
$result = $xoopsDB->query($sql, 20, 0);

while ($arr = $xoopsDB->fetchArray($result))
{

    $linkuid['pards_title'] = $arr['pards_title'];
    $linkuid['pards_id'] = $arr['pards_id'];
    $linkuid['cid'] = $arr['cid'];
    $linkuid['pards_date_created'] = formatTimestamp($arr['pards_date_created'], $xoopsModuleConfig['dateformat']);
    $xoopsTpl->append('link_uid', $linkuid);
} 

if (isset($xoopsModuleConfig['copyright']) && $xoopsModuleConfig['copyright'] == 1)
{
    $xoopsTpl->assign('lang_copyright', "" . $link['pards_title'] . " © " . _MD_PARTADS_COPYRIGHT . " " . date("Y") . " " . XOOPS_URL);
} 
$xoopsTpl->assign('link', $link);

include XOOPS_ROOT_PATH . '/include/comment_view.php';
include XOOPS_ROOT_PATH . '/footer.php';

?>