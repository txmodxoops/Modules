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
 
	
	function partads_search($queryarray, $andor, $limit, $offset, $userid)
	{
		global $xoopsDB;
		
		$sql = "SELECT pards_id, pards_title, pards_submitter, pards_date_created FROM ".$xoopsDB->prefix("partads_pards")." WHERE pards_online = 1";
		
		if ( $userid != 0 ) {
			$sql .= " AND pards_submitter=".intval($userid)." ";
		}
		
		if ( is_array($queryarray) && $count = count($queryarray) ) 
		{
			$sql .= " AND ((pards_title LIKE '%$queryarray[0]%' OR pards_desc LIKE '%$queryarray[0]%' OR pards_url LIKE '%$queryarray[0]%' OR pards_image LIKE '%$queryarray[0]%' OR pards_weight LIKE '%$queryarray[0]%' OR pards_hits LIKE '%$queryarray[0]%' OR pards_status LIKE '%$queryarray[0]%')";
			
			for($i=1;$i<$count;$i++)
			{
				$sql .= " $andor ";
				$sql .= "(pards_title LIKE '%$queryarray[$i]%' OR pards_desc LIKE '%$queryarray[$i]%' OR pards_url LIKE '%$queryarray[$i]%' OR pards_image LIKE '%$queryarray[$i]%' OR pards_weight LIKE '%$queryarray[$i]%' OR pards_hits LIKE '%$queryarray[$i]%' OR pards_status LIKE '%$queryarray[0]%')";
			}
			$sql .= ")";
		}
		
		$sql .= " ORDER BY pards_date_created DESC";
		$result = $xoopsDB->query($sql,$limit,$offset);
		$ret = array();
		$i = 0;
		while($myrow = $xoopsDB->fetchArray($result))
		{
			$ret[$i]["image"] = "images/deco/pards_search.png";
			$ret[$i]["link"] = "pards.php?pards_id=".$myrow["pards_id"]."";
			$ret[$i]["title"] = $myrow["pards_title"];
			$ret[$i]["time"] = $myrow["pards_date_created"];
			$ret[$i]["uid"] = $myrow["pards_submitter"];
			$i++;
		}
		return $ret;
	}

	
?>