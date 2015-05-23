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
include "header.php";
$twitter_user = twitter_CleanVars( $_REQUEST, 'query', 'txmodxoops', 'string' );
$xoopsOption['template_main'] = 'twitter_index.html';
include_once XOOPS_ROOT_PATH."/header.php";
$xoopsTpl->assign('xoops_mpageurl', XOOPS_URL.'/modules/twitter/index.php');
// Include Styles
$GLOBALS['xoTheme']->addStylesheet($style);
//keywords
$keywords = $GLOBALS['xoopsModuleConfig']['keywords'];
$keywords .= substr($keywords, 0);
$GLOBALS['xoTheme']->addMeta('meta', 'keywords', $keywords);
//description
$GLOBALS['xoTheme']->addMeta('meta', 'description', _MD_TWITTER_DESC);
$GLOBALS['xoopsTpl']->assign('adv', $GLOBALS['xoopsModuleConfig']['advertise_text']);
$GLOBALS['xoopsTpl']->assign('ads120x600', $GLOBALS['xoopsModuleConfig']['advertise_120']);

$GLOBALS['xoopsTpl']->assign('users_title', 'Users');
$GLOBALS['xoopsTpl']->assign('tweets_title', 'Tweets');

$GLOBALS['xoopsTpl']->assign('username', $twitter_user);

$url = $GLOBALS['xoopsModuleConfig']['default_url'];
if (isset($_POST['query'])) {
   /* $full_query = $url . urlencode($_POST['query']);
    $raw_json = file_get_contents($full_query);
    $json = json_decode($raw_json);

    foreach ($json->results as $r) {
		$GLOBALS['xoopsTpl']->append('tweets', array('image_url' => $r->profile_image_url, 'from_user' => $r->from_user, 'text' => $r->text));
    }
	$ret = "<table style='width:600px;'>";
	$ret .= "<tr><th>user</th><th>tweet</th></tr>";
    foreach ($json->results as $r) {

        $ret .= '<tr><td><a href="https://twitter.com/'. $r->from_user . '"><img src="' . $r->profile_image_url . '" /></a></td>';
        $ret .= '<td style="border-bottom: #ccc solid 1px;">'. $r->from_user . '<br />' . $r->text . '</td>';
        $ret .= '</tr>';
    }
    $ret .= "</table>";
	$GLOBALS['xoopsTpl']->assign('tweets', $ret);*/
	$GLOBALS['xoopsTpl']->assign('username', $twitter_user);
}

if($GLOBALS['xoopsModuleConfig']['act_socialnetworks'] == 1){  
$social = $GLOBALS['xoopsModuleConfig']['socialnetworks'];
$act_social = $GLOBALS['xoopsModuleConfig']['act_socialnetworks'];  
$GLOBALS['xoopsTpl']->assign('act_social', $act_social); 
$GLOBALS['xoopsTpl']->assign('social', $social); }

$GLOBALS['xoopsTpl']->assign('admin', $mod_admin);

include_once XOOPS_ROOT_PATH."/footer.php";	
?>