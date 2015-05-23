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
 * @version         $Id: 1.25 main.php 11650 Wed 2013/06/12 14:08:24Z Timgno $
 */
// Main
define('_MA_METEOIT_TBNAME1', "Home");
define('_MA_METEOIT_TITLE', "Meteoit");
define('_MA_METEOIT_DESC', "Weather in Italy and the world");
define('_MA_METEOIT_INDEX_DESC', "Welcome to the space for the weather forecast.
The tabs at the top are used to navigate between the different sections of the module according to the various services provided by the stream.
The maps are divided according to the day and to precipitation.
For the whole week we have the second to the seventh day, the forecasts for Italy with topographic maps.
In flash format we have a box that shows the forecasts for Italy, europe, the world and the seas and winds. Just click over the continent, the state, the region and the city you want to see its contents.
A map of the way directly from the satellite in hybrid format displays forecasts from east to west.
In the video we can listen to the streaming format of the forecast for today and tomorrow the situation in Italy.
For regional forecasts you choose your region in the topographic map of that specific region.");

define('_MA_METEOIT_TBNAME2', "Today");
define('_MA_METEOIT_TODAY_DESC', "This module is for doing following...");
define('_MA_METEOIT_TBNAME3', "Week");
define('_MA_METEOIT_WEEK_DESC', "This module is for doing following...");
define('_MA_METEOIT_TBNAME4', "Details");
define('_MA_METEOIT_DETAILS_DESC', "This module is for doing following...");
define('_MA_METEOIT_TBNAME5', "Flash");
define('_MA_METEOIT_FLASH_DESC', "Weather in flash format for Italy, for Europe, the world and even seas and winds.");
define('_MA_METEOIT_TBNAME6', "World");
define('_MA_METEOIT_WORLD_DESC', "This module is for doing following...");
define('_MA_METEOIT_TBNAME7', "Video");
define('_MA_METEOIT_VIDEOS_DESC', "Weather in video format for Italy, directly from the website that sends streaming weather service for our site.");
define('_MA_METEOIT_TBNAME8', "Region");
define('_MA_METEOIT_REGIONAL_DESC', "Weather in video format for Italy, a specific region, by choosing from the menu that you want to read.");
// Day
define('_MA_METEOIT_WEEK', "Week");
define('_MA_METEOIT_DETAIL1_DESC', "Day 1&#176;");
define('_MA_METEOIT_ANIMATED', "Animated");
define('_MA_METEOIT_DETAIL2_DESC', "Day 1&#176;");
define('_MA_METEOIT_TIMEBANDS', "Time bands");
define('_MA_METEOIT_DETAIL3_DESC', "Day 1&#176;");
define('_MA_METEOIT_THREEHOURS', "Three hours");
define('_MA_METEOIT_DETAIL4_DESC', "Day 1&#176;");
define('_MA_METEOIT_WINDSANDSEAS', "Wind sandseas");
define('_MA_METEOIT_DETAIL5_DESC', "Day 1&#176;");
define('_MA_METEOIT_WEATHERDAY', "Weather day");
define('_MA_METEOIT_DETAIL6_DESC', "Day 1&#176;");
// Toolbar
define('_MA_METEOIT_TMNAME1', "Dashboard");
define('_MA_METEOIT_TMNAME2', "Today");
define('_MA_METEOIT_TMNAME3', "Detail");
define('_MA_METEOIT_TMNAME4', "Flash");
define('_MA_METEOIT_TMNAME5', "World");
define('_MA_METEOIT_TMNAME6', "Videos");
define('_MA_METEOIT_TMNAME7', "Regional");
// Description Metas
define('_MA_METEOIT_DESC_NOW', "Italy Weather in real-time");
define('_MA_METEOIT_DESC_DAY', "Weather in Italy today");
define('_MA_METEOIT_DESC_FLASH', "Weather in Italy in flash");
define('_MA_METEOIT_DESC_WORLD', "Weather in the World");
// Titles
define('_MA_METEOIT_WEATHER_ITALY', "Weather italy");
define('_MA_METEOIT_WEATHER_EARTH', "Weather earth");
define('_MA_METEOIT_WEATHER_FLASH', "Weather flash");
define('_MA_METEOIT_WEATHER_TODAY', "Weather of today");
define('_MA_METEOIT_WEATHER_DETAILS', "Weather day");
define('_MA_METEOIT_WEATHER_VIDEOS', "Weather videos");
define('_MA_METEOIT_WEATHER_REGIONAL', "Weather regional");
// Today
define('_MA_METEOIT_TOPOGRAPHIC', "Topographic Map");
define('_MA_METEOIT_RAINFALL', "Rainfall");
// Earth
define('_MA_METEOIT_EST', "Est");
define('_MA_METEOIT_WEST', "West");
// Videos
define('_MA_METEOIT_TODAY', "Today");
define('_MA_METEOIT_TOMORROW', "Tomorrow");
// Index
define('_MA_METEOIT_ONEDAY', "Day 1&#176;");
define('_MA_METEOIT_DAI1_DESC', "Day 1&#176;");
define('_MA_METEOIT_TWODAY', "Day 2&#176;");
define('_MA_METEOIT_DAI2_DESC', "Day 2&#176;");
define('_MA_METEOIT_THREEDAY', "Day 3&#176;");
define('_MA_METEOIT_DAI3_DESC', "Day 3&#176;");
define('_MA_METEOIT_FOURDAY', "Day 4&#176;");
define('_MA_METEOIT_DAI4_DESC', "Day 4&#176;");
define('_MA_METEOIT_FIVEDAY', "Day 5&#176;");
define('_MA_METEOIT_DAI5_DESC', "Day 5&#176;");
define('_MA_METEOIT_SIXDAY', "Day 6&#176;");
define('_MA_METEOIT_DAI6_DESC', "Day 6&#176;");
define('_MA_METEOIT_SEVENDAY', "Day 7&#176;");
define('_MA_METEOIT_DAI7_DESC', "Day 7&#176;");
// Seo
define('_MA_METEOIT_SEO_INDEX', "index");
define('_MA_METEOIT_SEO_TODAY', "today");
define('_MA_METEOIT_SEO_WEEK', "week");
define('_MA_METEOIT_SEO_DETAILS', "details");
define('_MA_METEOIT_SEO_FLASH', "flash");
define('_MA_METEOIT_SEO_WORLD', "world");
define('_MA_METEOIT_SEO_VIDEO', "video");
define('_MA_METEOIT_SEO_REGIONAL', "regional");

define('_MA_METEOIT_ADMIN', "Admin");