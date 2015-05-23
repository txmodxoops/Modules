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
 * @author 	    txmod (http://www.txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
include 'header.php';
global $myts;
$agreed = (isset($_GET['agree'])) ? $_GET['agree'] : 0;
$id = intval($_GET['pards_id']);

if ($agreed == 0)
{
    $goodhost = 1;
}
    $isadmin = (!empty($xoopsUser) && $xoopsUser->isAdmin($xoopsModule->mid())) ? true : false;
    $sql = sprintf("UPDATE ".$xoopsDB->prefix('partads_pards')." SET pards_hits = pards_hits+1 WHERE pards_id =$id");
    $xoopsDB->queryF($sql);
    $result = $xoopsDB->query("SELECT pards_url FROM ".$xoopsDB->prefix('partads_pards')." WHERE pards_id=$id");
    list($url) = $xoopsDB->fetchRow($result);
    $url = $myts->htmlSpecialChars(preg_replace('/javascript:/si' , 'java script:', $url), ENT_QUOTES);
    if (!empty($url))
    {
                header("Cache-Control: no-store, no-cache, must-revalidate"); 
                header("Cache-Control: post-check=0, pre-check=0", false); 
                // HTTP/1.0
                header("Pragma: no-cache");
                // Date in the past
                header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
                // always modified
                header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                header("Refresh: 0; url=$url");
    } 
    else
    {
                reportBroken($id);
    }
?>