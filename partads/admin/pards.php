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

//Menu admin
if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php") ) {
partads_adminmenu(1, _AM_PARTADS_MANAGER_PARDS);
} else {
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
loadModuleAdminMenu (1, _AM_PARTADS_MANAGER_PARDS);
}

//Sous menu
echo "<div class=\"CPbigTitle\" style=\"background-image: url(../images/deco/contact.png); background-repeat: no-repeat; background-position: left; padding-left: 50px; height: 48;\">
		<strong>"._AM_PARTADS_MANAGER_PARDS."</strong>
	</div><br /><br />";

if (isset($_REQUEST["op"])) {
	$op = $_REQUEST["op"];
} else {
	@$op = "show_list_pards";
}

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
		$criteria = new CriteriaCompo();
		$criteria->setSort("pards_id");
		$criteria->setOrder("ASC");
		if (isset($_REQUEST['limit'])) {
                    $criteria->setLimit($_REQUEST['limit']);
                    $limit = $_REQUEST['limit'];
                } else {
                    $criteria->setLimit($xoopsModuleConfig['perpageadmin']);
                    $limit = $xoopsModuleConfig['perpageadmin'];
                }
                if (isset($_REQUEST['start'])) {
                    $criteria->setStart($_REQUEST['start']);
                    $start = $_REQUEST['start'];
                } else {
                    $criteria->setStart(0);
                    $start = 0;
                }
		$numrows = $pardsHandler->getCount();
		$pards_arr = $pardsHandler->getall($criteria);
		if ( $numrows > $limit ) {
			$pagenav = new XoopsPageNav($numrows, $limit, $start, 'start');
 			$pagenav = $pagenav->renderNav(4);
 		} else {
 			$pagenav = '';
 		}
			//Affichage du tableau
			if ($numrows>0) 
			{			
				echo "<table width=\"100%\" cellspacing=\"1\" class=\"outer\">
					<tr>
						<th align=\"center\">"._AM_PARTADS_PARDS_TITLE."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_DESC."</th>
						<!--<th align=\"center\">"._AM_PARTADS_PARDS_URL."</th>-->
						<th align=\"center\">"._AM_PARTADS_PARDS_IMAGE."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_WEIGHT."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_HITS."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_STATUS."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_SUBMITTER."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_DATE_CREATED."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_DATE_EXPIRED."</th>
						<th align=\"center\">"._AM_PARTADS_PARDS_ONLINE."</th>
						
						<th align=\"center\" width=\"10%\">"._AM_PARTADS_FORMACTION."</th>
					</tr>";
						
				$class = "odd";
				
				foreach (array_keys($pards_arr) as $i) 
				{	
					if ( $pards_arr[$i]->getVar("topic_pid") == 0)
					{
						echo "<tr class=\"".$class."\">";
						$class = ($class == "even") ? "odd" : "even";
						echo "<td align=\"center\">".$pards_arr[$i]->getVar("pards_title")."</td>";	
					echo "<td align=\"center\"><textarea>".$pards_arr[$i]->getVar("pards_desc")."</textarea></td>";
					//echo "<td align=\"center\">".$pards_arr[$i]->getVar("pards_url")."</td>";
					echo "<td align=\"center\"><img src='".$pards_arr[$i]->getVar("pards_image")."' alt='' /></td>";
					echo "<td align=\"center\">".$pards_arr[$i]->getVar("pards_weight")."</td>";	
					echo "<td align=\"center\">".$pards_arr[$i]->getVar("pards_hits")."</td>";	
					echo "<td align=\"center\">".$pards_arr[$i]->getVar("pards_status")."</td>";	
					echo "<td align=\"center\">".XoopsUser::getUnameFromId($pards_arr[$i]->getVar("pards_submitter"),"S")."</td>";	
					echo "<td align=\"center\">".formatTimeStamp($pards_arr[$i]->getVar("pards_date_created"),"S")."</td>";	
					echo "<td align=\"center\">".formatTimeStamp($pards_arr[$i]->getVar("pards_date_expired"),"S")."</td>";
					
					$online = $pards_arr[$i]->getVar("pards_online");
				
					if( $online == 1 ) {
						echo "<td align=\"center\"><a href=\"./pards.php?op=update_online_pards&pards_id=".$pards_arr[$i]->getVar("pards_id")."&pards_online=0\"><img src=\"./../images/deco/on.gif\" border=\"0\" alt=\""._AM_PARTADS_ON."\" title=\""._AM_PARTADS_ON."\"></a></td>";	
					} else {
						echo "<td align=\"center\"><a href=\"./pards.php?op=update_online_pards&pards_id=".$pards_arr[$i]->getVar("pards_id")."&pards_online=1\"><img src=\"./../images/deco/off.gif\" border=\"0\" alt=\""._AM_PARTADS_OFF."\" title=\""._AM_PARTADS_OFF."\"></a></td>";
					}
									echo "<td align=\"center\" width=\"10%\">
										<a href=\"pards.php?op=edit_pards&pards_id=".$pards_arr[$i]->getVar("pards_id")."\"><img src=\"../images/deco/edit.gif\" alt=\""._AM_PARTADS_EDIT."\" title=\""._AM_PARTADS_EDIT."\"></a>
										<a href=\"pards.php?op=delete_pards&pards_id=".$pards_arr[$i]->getVar("pards_id")."\"><img src=\"../images/deco/delete.gif\" alt=\""._AM_PARTADS_DELETE."\" title=\""._AM_PARTADS_DELETE."\"></a>
									  </td>";
						echo "</tr>";
					}	
				}
				echo "</table><br />";
				echo "<div class='right'>" . $pagenav . "</div><br />";
			}
		
		// Affichage du formulaire
    	$obj =& $pardsHandler->create();
    	$form = $obj->getForm(); 
     break;
}
xoops_cp_footer();
?>