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
 * @version         $Id: 1.25 install.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
$indexFile = XOOPS_UPLOAD_PATH.'/index.html';
$blankFile = XOOPS_UPLOAD_PATH.'/blank.gif';

// Making of "uploads" folder
$meteoit = XOOPS_UPLOAD_PATH.'/meteoit';
if(!is_dir($meteoit))
	mkdir($meteoit, 0777);
	chmod($meteoit, 0777);
copy($indexFile, $meteoit.'/index.html');

// Making of "images" folder
$images = $meteoit.'/images';
if(!is_dir($images))
	mkdir($images, 0777);
	chmod($images, 0777);
copy($indexFile, $images.'/index.html');
copy($blankFile, $images.'/blank.gif');