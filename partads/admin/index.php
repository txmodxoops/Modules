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

global $xoopsModule;

//Apelle du menu admin
if ( !is_readable(XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php"))	{
partads_adminmenu(0, _AM_PARTADS_MANAGER_INDEX);
} else {
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
loadModuleAdminMenu (0, _AM_PARTADS_MANAGER_INDEX);
} 
	//compte "total"
	$count_pards = $pardsHandler->getCount();
	//compte "attente"
	$criteria = new CriteriaCompo();
	$criteria->add(new Criteria("pards_online", 1));
	$pards_online = $pardsHandler->getCount($criteria);
	
        include_once XOOPS_ROOT_PATH."/modules/partads/class/menu.php";

	$menu = new partadsMenu();
	$menu->addItem("pards", "pards.php", "../images/deco/contact.png", _AM_PARTADS_MANAGER_PARDS);
	$menu->addItem("update", "../../system/admin.php?fct=modulesadmin&op=update&module=partads", 
                       "../images/deco/update.png",  _AM_PARTADS_MANAGER_UPDATE);
	$menu->addItem("permissions", "permissions.php", "../images/deco/permissions.png", _AM_PARTADS_MANAGER_PERMISSIONS);
	$menu->addItem("preference", "../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getVar("mid").
				     "&amp;&confcat_id=1", "../images/deco/pref.png", _AM_PARTADS_MANAGER_PREFERENCES);
	$menu->addItem("about", "about.php", "../images/deco/about.png", _AM_PARTADS_MANAGER_ABOUT);
	
	echo $menu->getCSS();
	

echo "<div class='CPbigTitle' style='background-image: url(../images/deco/index.png); background-repeat: no-repeat; background-position: left; padding-left: 50px; height: 48;'><strong>"._AM_PARTADS_MANAGER_INDEX."</strong></div><br />
		<table width='100%' border='0' cellspacing='10' cellpadding='4'>
			<tr>
				<td valign='top' width='auto'>".$menu->render()."</td>
				<td valign='top' width='auto'>";
				
					echo "<fieldset>
						<legend class='CPmediumTitle'>"._AM_PARTADS_MANAGER_PARDS."</legend>
						<br />";
						printf(_AM_PARTADS_THEREARE_PARDS, $count_pards);
						echo "<br /><br />";
						printf(_AM_PARTADS_THEREARE_PARDS_ONLINE, $pards_online);
						echo "<br />
					</fieldset><br /><br />";
				echo "</td>
			</tr>
		</table>
";
xoops_cp_footer();

?>