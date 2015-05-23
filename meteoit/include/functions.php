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
 * @version         $Id: 1.25 functions.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
/*
// SEO Url Rewrite
$url = XOOPS_URL.'/'.$GLOBALS['xoopsModuleConfig']['baseurl'].'/now'.$GLOBALS['xoopsModuleConfig']['endofurl'];
if (!strpos($url, $_SERVER['REQUEST_URI'])&&$GLOBALS['xoopsModuleConfig']['htaccess']==true&&empty($_POST)) {
	header( "HTTP/1.1 301 Moved Permanently" ); 
	header('Location: '.$url);
	exit(0);
}
*/ 
// Toolbar
/*function mit_toolbar()
{
	$filename = basename(__FILE__, '.php');
	$toolbar = "<li class='" . (($filename == 'index.php') ? 'active' : '') . "><a href='index.php'>" . _MA_METEOIT_TBNAME1 . "</a></li>";
	$toolbar .= "<li class='" . (($filename == 'day.php') ? 'active' : '') . "'><a href='day.php'>" . _MA_METEOIT_TBNAME2 . "</a></li>";
    $toolbar .= "<li class='" . (($filename == 'details.php') ? 'active' : '') . "'><a href='details.php'>" . _MA_METEOIT_TBNAME3 . "</a></li>";
    $toolbar .= "<li class='" . (($filename == 'flash.php') ? 'active' : '') . "'><a href='flash.php'>" . _MA_METEOIT_TBNAME4 . "</a></li>";
	$toolbar .= "<li class='" . (($filename == 'world.php') ? 'active' : '') . "'><a href='world.php'>" . _MA_METEOIT_TBNAME5 . "</a></li>";
	$toolbar .= "<li class='" . (($filename == 'videos.php') ? 'active' : '') . "'><a href='videos.php'>" . _MA_METEOIT_TBNAME6 . "</a></li>";
	return $toolbar;
}*/  

function mit_toolbar($page = 'index')
{
    $active = "class='active'";
	$toolbar = "<li ".(($page == 'index' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME1 . "' href='index.php'>" . _MA_METEOIT_TBNAME1 . "</a></li>";
	$toolbar .= "<li ".(($page == 'today' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME2 . "' href='today.php'>" . _MA_METEOIT_TBNAME2 . "</a></li>";
	$toolbar .= "<li ".(($page == 'week' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME3 . "' href='week.php'>" . _MA_METEOIT_TBNAME3 . "</a></li>";
    $toolbar .= "<li ".(($page == 'details' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME4 . "' href='details.php'>" . _MA_METEOIT_TBNAME4 . "</a></li>";
    $toolbar .= "<li ".(($page == 'flash' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME5 . "' href='flash.php'>" . _MA_METEOIT_TBNAME5 . "</a></li>";
	$toolbar .= "<li ".(($page == 'world' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME6 . "' href='world.php'>" . _MA_METEOIT_TBNAME6 . "</a></li>";
	$toolbar .= "<li ".(($page == 'videos' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME7 . "' href='videos.php'>" . _MA_METEOIT_TBNAME7 . "</a></li>";
	$toolbar .= "<li ".(($page == 'regional' ) ? $active : '')."><a title='" . _MA_METEOIT_TBNAME8 . "' href='regional.php'>" . _MA_METEOIT_TBNAME8 . "</a></li>";
	return $toolbar;
}  
 
/***************Blocks***************/
function meteoit_block_addCatSelect($cats) {
	if(is_array($cats)) 
	{
		$cat_sql = '('.current($cats);
		array_shift($cats);
		foreach($cats as $cat) 
		{
			$cat_sql .= ','.$cat;
		}
		$cat_sql .= ')';
	}
	return $cat_sql;
}

function meteoit_CleanVars( &$global, $key, $default = '', $type = 'int' ) {
    switch ( $type ) {
        case 'string':
            $ret = ( isset( $global[$key] ) ) ? filter_var( $global[$key], FILTER_SANITIZE_MAGIC_QUOTES ) : $default;
            break;
        case 'int': default:
            $ret = ( isset( $global[$key] ) ) ? filter_var( $global[$key], FILTER_SANITIZE_NUMBER_INT ) : $default;
            break;
    }
    if ( $ret === false ) {
        return $default;
    }
    return $ret;
}

function meteoit_meta_keywords($content)
{
	global $xoopsTpl, $xoTheme;
	$myts =& MyTextSanitizer::getInstance();
	$content= $myts->undoHtmlSpecialChars($myts->displayTarea($content));
	if(isset($xoTheme) && is_object($xoTheme)) {
		$xoTheme->addMeta( 'meta', 'keywords', strip_tags($content));
	} else {	// Compatibility for old Xoops versions
		$xoopsTpl->assign('xoops_meta_keywords', strip_tags($content));
	}
}

function meteoit_meta_description($content)
{
	global $xoopsTpl, $xoTheme;
	$myts =& MyTextSanitizer::getInstance();
	$content = $myts->undoHtmlSpecialChars($myts->displayTarea($content));
	if(isset($xoTheme) && is_object($xoTheme)) {
		$xoTheme->addMeta( 'meta', 'description', strip_tags($content));
	} else {	// Compatibility for old Xoops versions
		$xoopsTpl->assign('xoops_meta_description', strip_tags($content));
	}
}

function meteoit_remove_accents($chain){
	/**
    * if XOOPS ML is present, let's sanitize the title with the current language
    */
    $myts = MyTextSanitizer::getInstance();
    if (method_exists($myts, 'formatForML')) {
    	$chain = $myts->formatForML($chain);
    }
    
	/**
    * if xLanguage is present, let's prepare the title with the current language
    */
	$module_handler =& xoops_gethandler('module');
	$xlanguage = $module_handler->getByDirname('xlanguage');
	if ( is_object($xlanguage) && $xlanguage->getVar('isactive') == true ) 
	{ 
		require_once XOOPS_ROOT_PATH.'/modules/xlanguage/include/functions.php';
		$chain = xlanguage_ml($chain); 
	} 	
    
    $chain = rawurlencode($chain);
    //$chain = utf8_decode($chain);
    
    // Transform punctuation
    //                 Tab     Space      !        "        #        %        &        '        (        )        ,        /        :        ;        <        =        >        ?        @        [        \        ]        ^        {        |        }        ~       .
    $pattern = array("/%09/", "/%20/", "/%21/", "/%22/", "/%23/", "/%25/", "/%26/", "/%27/", "/%28/", "/%29/", "/%2C/", "/%2F/", "/%3A/", "/%3B/", "/%3C/", "/%3D/", "/%3E/", "/%3F/", "/%40/", "/%5B/", "/%5C/", "/%5D/", "/%5E/", "/%7B/", "/%7C/", "/%7D/", "/%7E/", "/%39/","/\./");
    $rep_pat = array(  "-"  ,   "-"  ,   ""   ,   ""   ,   ""   , "-100" ,   ""   ,   "-"  ,   ""   ,   ""   ,   ""   ,   "-"  ,   ""   ,   ""   ,   ""   ,   "-"  ,   ""   ,   ""   , "-at-" ,   ""   ,   "-"   ,  ""   ,   "-"  ,   ""   ,   "-"  ,   ""   ,   "-"  ,   "-"   , "" );
    $chain   = preg_replace($pattern, $rep_pat, $chain);
	
	$search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
	$replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");
	$chain = str_replace($search, $replace, $chain);
	
	$str = '';
	$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?');
	$b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
	$str = str_replace($a, $b, $str);
    
    return $chain;
}

function meteoit_getUrl($op, $id, $short_url = '') 
{
    if ( xoops_getModuleOption('seo_enable', METEOIT_DIRNAME) != 0 )
    {
    	if ( !empty($short_url) ) $short_url = strtolower($short_url);
		
		/*$filename = array( _MA_METEOIT_SEO_INDEX, _MA_METEOIT_SEO_TODAY, _MA_METEOIT_SEO_WEEK, 
		                   _MA_METEOIT_SEO_DETAILS, _MA_METEOIT_SEO_FLASH, _MA_METEOIT_SEO_WORLD, _MA_METEOIT_SEO_VIDEO );
		switch($op) {
		    default:
			    break;
			foreach($filename as $key => $value) {		
				case $value:
					$short_url .= $seo_endofurl;
					break;
			}			
		}*/
		
		$seo_endofurl = xoops_getModuleOption('seo_endofurl', METEOIT_DIRNAME);
		switch($op) {			
			case _MA_METEOIT_SEO_INDEX:
				$short_url .= $seo_endofurl;
				break;
			case _MA_METEOIT_SEO_TODAY:
				$short_url .= $seo_endofurl;
				break;
			case _MA_METEOIT_SEO_WEEK:
				$short_url .= $seo_endofurl;
				break;
			case _MA_METEOIT_SEO_DETAILS:
				$short_url .= $seo_endofurl;
				break;
			case _MA_METEOIT_SEO_FLASH:
				$short_url .= $seo_endofurl;
				break;
			case _MA_METEOIT_SEO_WORLD:
				$short_url .= $seo_endofurl;
				break;
			case _MA_METEOIT_SEO_VIDEO:
				$short_url .= $seo_endofurl;
				break;			
		}
        if ( xoops_getModuleOption('seo_enable', METEOIT_DIRNAME) == 1 ) 
        {   
			// generate SEO url using htaccess
            $seo_path = "";
            if ( xoops_getModuleOption('seo_path', METEOIT_DIRNAME) != '' ) {
				// generate SEO url using seo path eg news, info, blog
				$seo_path = "/" . strtolower(xoops_getModuleOption('seo_path', METEOIT_DIRNAME)); 
				if ( xoops_getModuleOption('seo_level', METEOIT_DIRNAME) == 0 ) 
				{
					// generate SEO url using root level htaccess
					$seo_path .= "/";
					return XOOPS_URL . "/" . METEOIT_DIRNAME . $seo_path . "${op}/${id}/${short_url}"; 
				} else {
					// generate SEO url using module level htaccess
					$seo_path .= "/";
					return NW_MODULE_URL . $seo_path . "${op}/${id}/${short_url}"; 
				}
			} else {
				// generate SEO url with no seo path
				$seo_path = "/" . strtolower(xoops_getModuleOption('seo_path', METEOIT_DIRNAME));
				if ( xoops_getModuleOption('seo_level', METEOIT_DIRNAME) == 0 ) 
				{
					// generate SEO url using root level htaccess
					return XOOPS_URL . "/" . METEOIT_DIRNAME . $seo_path . "${op}/${id}/${short_url}"; 
				} else {
					// generate SEO url using module level htaccess
					return NW_MODULE_URL . $seo_path . "${op}/${id}/${short_url}"; 
				}
			}   
        } else if ( xoops_getModuleOption('seo_enable', METEOIT_DIRNAME) == 2 ) {
            // generate SEO url using path-info
            $seo_path = "";
            if ( xoops_getModuleOption('seo_path', METEOIT_DIRNAME) != "" ) {
				$seo_path = strtolower(xoops_getModuleOption('seo_path', METEOIT_DIRNAME)) . "."; 
			}
            return NW_MODULE_URL . "/". $seo_path . "${op}/${id}/${short_url}";
        } else {
            die('Unknown SEO method.');
        }
    } else {
        // generate classic url
        switch ($op) {
            case _MA_METEOIT_SEO_INDEX:
               return METEOIT_URL . "/index.php";
            case _MA_METEOIT_SEO_TODAY:
               return METEOIT_URL . "/today.php?page=${id}";
            case _MA_METEOIT_SEO_WEEK:
               return METEOIT_URL . "/week.php?page=${id}";
			case _MA_METEOIT_SEO_DETAILS:
               return METEOIT_URL . "/details.php?page=${id}";
            case _MA_METEOIT_SEO_FLASH:
               return METEOIT_URL . "/flash.php?page=${id}";
			case _MA_METEOIT_SEO_WORLD:
			   return METEOIT_URL . "/world.php?page=${id}";
            case _MA_METEOIT_SEO_VIDEO:
			   return METEOIT_URL . "/videos.php?page=${id}";                    	   
            default:
                die('Unknown SEO operation.');
        }
    }
}