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
 
	include "../../mainfile.php";
	include_once XOOPS_ROOT_PATH."/modules/partads/class/pards.php";
	$com_itemid = isset($_REQUEST["com_itemid"]) ? intval($_REQUEST["com_itemid"]) : 0;
	if ($com_itemid > 0) {
		$pardsHandler =& xoops_getModuleHandler("partads_pards", "pards");
		$pards = $pardshandler->get($com_itemid);
		$com_replytitle = $pards->getVar("pards_title");
		include XOOPS_ROOT_PATH."/include/comment_new.php";
	}
?>