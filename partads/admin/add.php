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
 
include_once("./header.php");
	
xoops_cp_header();

if (isset($_REQUEST["op"])) {
	$op = $_REQUEST["op"];
} else {
	@$op = "show_list_pards";
}

//Menu admin
if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php") ) {
partads_adminmenu(2, _AM_PARTADS_MANAGER_ADD);
} else {
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
loadModuleAdminMenu (2, _AM_PARTADS_MANAGER_ADD);
}

//Sous menu
echo "<div class=\"CPbigTitle\" style=\"background-image: url(../images/deco/contact.png); background-repeat: no-repeat; background-position: left; padding-left: 50px; height: 48;\">
		<strong>"._AM_PARTADS_MANAGER_ADD."</strong>
	</div><br /><br>";
switch ($op) 
{	
	case "save_pards":
		if ( !$GLOBALS["xoopsSecurity"]->check() ) {
           redirect_header("pards.php", 3, implode(",", $GLOBALS["xoopsSecurity"]->getErrors()));
        }
        if (isset($_REQUEST["pards_id"])) {
           $obj =& $pardsHandler->get($_REQUEST["pards_id"]);
        } else {
           $obj =& $pardsHandler->create();
        }		
		//Form pards_title
		$obj->setVar("pards_title", $_REQUEST["pards_title"]);
		//Form pards_desc
		$obj->setVar("pards_desc", $_REQUEST["pards_desc"]);
		//Form pards_url
		$obj->setVar("pards_url", $_REQUEST["pards_url"]);
		//Form pards_image
		$obj->setVar("pards_image", $_REQUEST["pards_image"]);
		//Form pards_weight
		$obj->setVar("pards_weight", $_REQUEST["pards_weight"]);
		//Form pards_hits
		$obj->setVar("pards_hits", $_REQUEST["pards_hits"]);
		//Form pards_status
		$obj->setVar("pards_status", $_REQUEST["pards_status"]);
		//Form pards_date_expired
		$obj->setVar("pards_date_expired", strtotime($_REQUEST["pards_date_expired"]));
		//Form pards_submitter
		$obj->setVar("pards_submitter", $_REQUEST["pards_submitter"]);
		//Form pards_date_created
		$obj->setVar("pards_date_created", strtotime($_REQUEST["pards_date_created"]));
		//Form pards_online
		$verif_pards_online = ($_REQUEST["pards_online"] == 1) ? "1" : "0";
		$obj->setVar("pards_online", $verif_pards_online);
		
		
        if ($pardsHandler->insert($obj)) {
           redirect_header("pards.php?op=show_list_pards", 2, _AM_PARTADS_FORMOK);
        }
        //include_once("../include/forms.php");
        echo $obj->getHtmlErrors();
        $form =& $obj->getForm();
	break;
	
	case "edit_pards":
		$obj = $pardsHandler->get($_REQUEST["pards_id"]);
		$form = $obj->getForm();
	break;
	
	case "delete_pards":
		$obj =& $pardsHandler->get($_REQUEST["pards_id"]);
		if (isset($_REQUEST["ok"]) && $_REQUEST["ok"] == 1) {
			if ( !$GLOBALS["xoopsSecurity"]->check() ) {
				redirect_header("pards.php", 3, implode(",", $GLOBALS["xoopsSecurity"]->getErrors()));
			}
			if ($pardsHandler->delete($obj)) {
				redirect_header("pards.php", 3, _AM_PARTADS_FORMDELOK);
			} else {
				echo $obj->getHtmlErrors();
			}
		} else {
			xoops_confirm(array("ok" => 1, "pards_id" => $_REQUEST["pards_id"], "op" => "delete_pards"), $_SERVER["REQUEST_URI"], sprintf(_AM_PARTADS_FORMSUREDEL, $obj->getVar("pards")));
		}
	break;
	
	case "update_online_pards":
		
	if (isset($_REQUEST["pards_id"])) {
		$obj =& $pardsHandler->get($_REQUEST["pards_id"]);
	} 
	$obj->setVar("pards_online", $_REQUEST["pards_online"]);

	if ($pardsHandler->insert($obj)) {
		redirect_header("pards.php", 3, _AM_PARTADS_FORMOK);
	}
	echo $obj->getHtmlErrors();
	
	break;
	
	case "default":
	default:
	break;
}
xoops_cp_footer();

?>