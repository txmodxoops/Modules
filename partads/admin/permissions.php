<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * partads - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) txmod (http://www.txmodxoops.org/)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       txmod (http://www.txmodxoops.org/)
 * @license         GNU GPL
 * @package         partads
 * @author 	    txmod (webmaster@txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
include("header.php");

if( !empty($_POST["submit"]) ) 
{
	redirect_header( XOOPS_URL."/modules/".$xoopsModule->dirname()."/admin/permissions.php" , 1 , _MP_GPERMUPDATED );
}

xoops_cp_header();

global $xoopsDB;

if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php"))	{
partads_adminmenu(3,_AM_PARTADS_MANAGER_PERMISSIONS);
} else {
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
loadModuleAdminMenu (3,_AM_PARTADS_MANAGER_PERMISSIONS);
}

//menu
echo "<div class=\"CPbigTitle\" style=\"background-image: url(../images/deco/permissions.png); background-repeat: no-repeat; background-position: left; padding-left: 50px; height: 48;\">
		<strong>"._AM_PARTADS_MANAGER_PERMISSIONS."</strong>
	</div><br />";

	$permtoset= isset($_POST["permtoset"]) ? intval($_POST["permtoset"]) : 1;
	$selected=array("","","");
	$selected[$permtoset-1]=" selected";
	
echo "
<form method=\"post\" name=\"fselperm\" action=\"permissions.php\">
	<table border=0>
		<tr>
			<td>
				<select name=\"permtoset\" onChange=\"javascript: document.fselperm.submit()\">
					<option value=\"1\"".$selected[0].">"._AM_PARTADS_PERMISSIONS_ACCESS."</option>
					<option value=\"2\"".$selected[1].">"._AM_PARTADS_PERMISSIONS_SUBMIT."</option>
				</select>
			</td>
		</tr>
	</table>
</form>";

$module_id = $xoopsModule->getVar("mid");

	switch($permtoset)
	{
		case 1:
			$title_of_form = _AM_PARTADS_PERMISSIONS_ACCESS;
			$perm_name = "partads_access";
			$perm_desc = "";
			break;
		case 2:
			$title_of_form = _AM_PARTADS_PERMISSIONS_SUBMIT;
			$perm_name = "partads_submit";
			$perm_desc = "";
			break;
	}
	
	$permform = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc, "admin/permissions.php");
	$xt = new XoopsTopic( $xoopsDB -> prefix("partads_pards") );
	$alltopics =& $xt->getTopicsList();
	
	foreach ($alltopics as $topic_id => $topic) 
	{
		$permform->addItem($topic_id, $topic["pards_name"], $topic["pards_id"]);
	}
	echo $permform->render();
	echo "<br />\n";
	unset ($permform);

include_once("footer.php");
xoops_cp_footer();
?>