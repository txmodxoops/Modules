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
 * @version         $Id: 1.25 modinfo.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
// Admin
define('_MI_METEOIT_NAME', "Meteoit");
define('_MI_METEOIT_DESC', "This module is for doing following...");
//Menu
define('_MI_METEOIT_ADMENU1', "Home");
define('_MI_METEOIT_ADMENU2', "About");
// Submenu
define('_MI_METEOIT_SMENU1', "Today");
define('_MI_METEOIT_SMENU2', "Week");
define('_MI_METEOIT_SMENU3', "Details");
define('_MI_METEOIT_SMENU4', "Flash");
define('_MI_METEOIT_SMENU5', "World");
define('_MI_METEOIT_SMENU6', "Videos");
define('_MI_METEOIT_SMENU7', "Regional");
//Blocks
define('_MI_METEOIT_BLOCK_ITALY', "Italy");
define('_MI_METEOIT_BLOCK_ITALY_DESC', "Italy weither map");
define('_MI_METEOIT_BLOCK_EUROPE', "Europe");
define('_MI_METEOIT_BLOCK_EUROPE_DESC', "Europe weither map");
define('_MI_METEOIT_BLOCK_WORLD', "World");
define('_MI_METEOIT_BLOCK_WORLD_DESC', "World weither map");
//Config
define('_MI_METEOIT_EDITOR', "Editor");
define('_MI_METEOIT_EDITOR_DESC', "Select the Editor to use");

define('_MI_METEOIT_FORMATDATE', "Format date");
define('_MI_METEOIT_FORMATDATE_DESC', "Choose a format of date");
define('_MI_METEOIT_FORMATDATE_YMD', "AAAA-MM-DD");
define('_MI_METEOIT_FORMATDATE_MDY', "MM-DD-AAAA");
define('_MI_METEOIT_FORMATDATE_DMY', "DD-MM-AAAA");

define('_MI_METEOIT_KEYWORDS', "Keywords");
define('_MI_METEOIT_KEYWORDS_DESC', "Insert here the keywords (separate by comma)");
define('_MI_METEOIT_IDPAYPAL', "Paypal ID");
define('_MI_METEOIT_IDPAYPAL_DESC', "Insert here your PayPal ID for donactions.");
define('_MI_METEOIT_ADVERTISE_120x240', "Advertisement Code 120x240");
define('_MI_METEOIT_ADVERTISE_120x240_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_120x600', "Advertisement Code 120x600");
define('_MI_METEOIT_ADVERTISE_120x600_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_160x600', "Advertisement Code 160x600");
define('_MI_METEOIT_ADVERTISE_160x600_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_300x250', "Advertisement Code 300x250");
define('_MI_METEOIT_ADVERTISE_300x250_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_336x280', "Advertisement Code 336x280");
define('_MI_METEOIT_ADVERTISE_336x280_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_468x15', "Advertisement Code 468x15");
define('_MI_METEOIT_ADVERTISE_468x15_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_468x60', "Advertisement Code 468x60");
define('_MI_METEOIT_ADVERTISE_468x60_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_ADVERTISE_728x90', "Advertisement Code 728x90");
define('_MI_METEOIT_ADVERTISE_728x90_DESC', "Insert here the advertisement code");
define('_MI_METEOIT_BOOKMARKS', "Social Bookmarks");
define('_MI_METEOIT_BOOKMARKS_DESC', "Show Social Bookmarks in the form");
define('_MI_METEOIT_FBCOMMENTS', "Facebook comments");
define('_MI_METEOIT_FBCOMMENTS_DESC', "Allow Facebook comments in the form");

define('_MI_METEOIT_SEOENABLE', "Seo enable");
define('_MI_METEOIT_SEOENABLE_DESC', "This will enable/disable SEO activity.
If htaccess is selected you will get: 
http://your.site.com/xnews/topics.1/your-topic-title.html 
If path-info is selected you will get: 
http://your.site.com/modules/xnews/index.php/topics.1/your-topic-title.html");
define('_MI_METEOIT_SEOPATH', "Seo path");
define('_MI_METEOIT_SEOPATH_DESC', "Questo aggiunge un titolo al url SEO sia per htaccess che per path-info. 
Se lasciato vuoto si ottiene: http://tuo.sito.com/argomenti.1/il-tuo-titolo-argomento.html 
Se si scrive notizie si otterrà: http://tuo.sito.com/notizie/argomenti.1/il-tuo-titolo-argomento.html 
sono accettati i caratteri a-z e il carattere meno. es. notizie-del-giorno");
define('_MI_METEOIT_SEOENDOFURL', "Seo end of url");
define('_MI_METEOIT_SEOENDOFURL_DESC', "Estensione file per i file HTML");
define('_MI_METEOIT_SEOLEVEL', "Seo level");
define('_MI_METEOIT_SEOLEVEL_DESC', "Quì si può scegliere se avere l'htaccess nella cartella root di xoops o in quella del modulo. 
Questo cambierà l'url visualizzato. A livello root: http://tuo.sito.com/notizie/argomenti.1/il-tuo-titolo-argomento.html 
A livello modulo: http://tuo.sito.com/modules/xnews/notizie.argomenti.1/il-tuo-titolo-argomento.html
Solo nella modalità htaccess e i file dovranno essere installati di conseguenza.");
define('_MI_METEOIT_ROOT_LEVEL', "Root level");
define('_MI_METEOIT_MODULE_LEVEL', "Module level");