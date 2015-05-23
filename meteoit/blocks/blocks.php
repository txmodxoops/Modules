<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * meteoit module for xoops
 *
 * @copyright       The TXMod XOOPS Project http://sourceforge.net/projects/thmod/
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GPL 2.0 or later
 * @package         meteoit
 * @since           2.5.5
 * @author          TXMod Xoops <support@txmodxoops.org> - <http://www.txmodxoops.org>
 * @version         $Id: 1.25 blocks.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
/*
 * IFrame data
 * <!-- Inizio codice ilMeteo.it -->
   <iframe width="150" height="408" scrolling="no" frameborder="no" noresize="noresize" src="http://www.ilmeteo.it/box/previsioni.php?citta=5913&type=mps1&width=150&ico=1&lang=ita&days=3&font=Arial&fontsize=12&bg=FFFFFF&fg=000000&bgtitle=0099FF&fgtitle=FFFFFF&bgtab=F0F0F0&fglink=1773C2"></iframe>
   <!-- Fine codice ilMeteo.it -->
 */

function b_meteoit_show($options) 
{
	$block = array();
	$type_block = $options[0];
	$img_width = $options[1];
	$img_height = $options[2];
	$footer = /*$options[3]*/'-/';

	array_shift($options);
	array_shift($options);
	array_shift($options);		
	switch($type_block) {
		default:
		case 'italy':
			$block['italy'] = array('title' => ucfirst($type_block), 
									'width' => $img_width, 
									'height' => $img_height, 
									'footer' => $footer);			
		    break;
		case 'europe':
			$block['europe'] = array('title' => ucfirst($type_block), 
									'width' => $img_width, 
									'height' => $img_height, 
									 'footer' => $footer);		
		    break;
		case 'world':
			$block['world'] = array('title' => ucfirst($type_block), 
									'width' => $img_width, 
									'height' => $img_height, 
									'footer' => $footer);		
		    break;
	}	
	return $block;
}

function b_meteoit_edit($options) 
{
	array_shift($options);
	array_shift($options);
	array_shift($options);
	$form = _MB_METEOIT_DISPLAY;
	$form .= "<input type='hidden' name='options[0]' value='".$options[0]."' /><br /><br />";
	$form .= _MB_METEOIT_IMGWIDTH." : <input name='options[1]' size='1' value='".$options[1]."' type='text' />&nbsp;<br />";
	$form .= _MB_METEOIT_IMGHEIGHT." : <input name='options[2]' size='1' value='".$options[2]."' type='text' /><br /><br />";	
	return $form;
}	