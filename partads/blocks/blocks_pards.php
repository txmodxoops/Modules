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
 * @package         partads
 * @author 	    txmod (webmaster@txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 	
include_once XOOPS_ROOT_PATH."/modules/partads/include/functions.php";
	
function b_partads_pards($options) {
include_once XOOPS_ROOT_PATH."/modules/partads/class/pards.php";
$myts =& MyTextSanitizer::getInstance();

$pards = array();
$type_block = $options[0];
$nb_pards = $options[1];
$lenght_title = $options[2];
$set_limit = $options[3];

$pardsHandler =& xoops_getModuleHandler("partads_pards", "partads");
$criteria = new CriteriaCompo();
array_shift($options);
array_shift($options);
array_shift($options);

switch ($type_block) 
{
	// pour le bloc: pards recents
	case "recent":
		$criteria->add(new Criteria("pards_online", 1));
		$criteria->setSort("pards_date_created");
		$criteria->setOrder("DESC");
		$criteria->setOrder("Hits");
		$criteria->setLimit($set_limit);
	break;
	// pour le bloc: pards du jour
	case "day":	
		$criteria->add(new Criteria("pards_online", 1));
		$criteria->add(new Criteria("pards_date_created", strtotime(date("Y/m/d")), ">="));
		$criteria->add(new Criteria("pards_date_created", strtotime(date("Y/m/d"))+86400, "<="));
		$criteria->setSort("pards_date_created");
		$criteria->setOrder("ASC");
		$criteria->setOrder("Hits");
		$criteria->setLimit($set_limit);
	break;
	// pour le bloc: pards aléatoires
	case "random":
		$criteria->add(new Criteria("pards_online", 1));
		$criteria->setSort("RAND()");
		$criteria->setLimit($set_limit);
	break;
}


$criteria->setLimit($nb_pards);
$pards_arr = $pardsHandler->getall($criteria);
	foreach (array_keys($pards_arr) as $i) 
	{
		$pards[$i]["pards_id"] = $pards_arr[$i]->getVar("pards_id");
		$pards[$i]["pards_title"] = $pards_arr[$i]->getVar("pards_title");
		$pards[$i]["pards_desc"] = $pards_arr[$i]->getVar("pards_desc");
                $pards[$i]["pards_image"] = $pards_arr[$i]->getVar("pards_image");
		$pards[$i]["pards_submitter"] = $pards_arr[$i]->getVar("pards_submitter");
		$pards[$i]["pards_date_created"] = $pards_arr[$i]->getVar("pards_date_created");
		$pards[$i]["pards_online"] = $pards_arr[$i]->getVar("pards_online");
	}
return $pards;
}

function b_partads_pards_edit($options) {
	$form = ""._MB_PARTADS_PARDS_DISPLAY."\n";
	$form .= "<input type=\"hidden\" name=\"options[0]\" value=\"".$options[0]."\" />";
	$form .= "<input name=\"options[1]\" size=\"5\" maxlength=\"255\" value=\"".$options[1]."\" type=\"text\" />&nbsp;<br />";
	$form .= ""._MB_PARTADS_PARDS_TITLELENGTH." : <input name=\"options[2]\" size=\"5\" maxlength=\"255\" value=\"".$options[2]."\" type=\"text\" /><br /><br />";
	array_shift($options);
	array_shift($options);
	array_shift($options);
	$form .= ""._MB_PARTADS_PARDS_CATTODISPLAY."<br /><select name=\"options[]\" multiple=\"multiple\" size=\"5\">";
	$form .= "<option value=\"0\" " . (array_search(0, $options) === false ? "" : "selected=\"selected\"") . ">" ._MB_PARTADS_PARDS_ALLCAT . "</option>";
	foreach (array_keys($topic_arr) as $i) {
		$form .= "<option value=\"" . $topic_arr[$i]->getVar("topic_id") . "\" " . (array_search($topic_arr[$i]->getVar("topic_id"), $options) === false ? "" : "selected=\"selected\"") . ">".$topic_arr[$i]->getVar("topic_title")."</option>";
	}
	$form .= "</select>";

	return $form;
}
	
?>