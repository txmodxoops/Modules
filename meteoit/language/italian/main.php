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
define('_MA_METEOIT_DESC', "Previsioni del tempo in Italia e nel mondo");
define('_MA_METEOIT_INDEX_DESC', "Benvenuti nello spazio per le previsioni meteo.<br /><br />
Le schede in alto servono per navigare tra le varie sezioni del modulo in base ai diversi servizi forniti dallo streaming.<br /><br />
Le mappe sono suddivise in base al giorno ed alle precipitazioni.<br />
Per l'intera settimana si hanno dal secondo al settimo giorno, le previsioni per l'italia con le mappe topografiche.<br /><br />
In formato flash abbiamo uno riquadro che mostra le previsioni per l'italia, l'europa, il mondo e per i mari ed i venti. Baster&#224; chiccarci sopra il continente, lo stato, la regione e la citt&#224; desiderata per visualizzarne il contenuto.<br /><br />
Una mappa dal modo direttamente dal satellite in formato ibrida mostra le previsioni da est ad ovest.<br /><br />
In formato video possiamo ascoltare lo streaming delle previsioni per oggi e domani della situazione in italia.<br /><br />
Per le previsioni regionali si sceglie la propria regione interessata per la mappa topografica di quella specifica regione.");

define('_MA_METEOIT_TBNAME2', "Oggi");
define('_MA_METEOIT_TODAY_DESC', "Come si osserva nelle due mappe, abbiamo una mappa topografica, per le previsioni odierne e le relative temperature minime e massime, in base alla sigle della citt&#224; corrispondente, ed una mappa eta per visualizzare le precipitazioni in corso, sempre nella giornata odierna.");
define('_MA_METEOIT_TBNAME3', "Settimana");
define('_MA_METEOIT_WEEK_DESC', "Previsioni meteo in formato normale per l'italia, per tutta la settimana con relative temperature.");
define('_MA_METEOIT_TBNAME4', "Dettagli");
define('_MA_METEOIT_DETAILS_DESC', "Previsioni meteo in formato dettagliato per l'italia, per tutta la settimana con relative temperature.");
define('_MA_METEOIT_TBNAME5', "Flash");
define('_MA_METEOIT_FLASH_DESC', "Previsioni meteo in formato flash per l'italia, per l'europa, il mondo ed anche mari e venti.");
define('_MA_METEOIT_TBNAME6', "Mondo");
define('_MA_METEOIT_WORLD_DESC', "Previsioni meteo in formato satellite per il globo, direttamente dal sito che invia lo streaming del servizio meteo per il nostro sito.");
define('_MA_METEOIT_TBNAME7', "Video");
define('_MA_METEOIT_VIDEOS_DESC', "Previsioni meteo in formato video per l'italia, direttamente dal sito che invia lo streaming del servizio meteo per il nostro sito.");
define('_MA_METEOIT_TBNAME8', "Regione");
define('_MA_METEOIT_REGIONAL_DESC', "Previsioni meteo in formato regionale per l'italia, scegliendo dal menu la regione desiderata, si devono consultare, oltre alle immagini del tempo, anche quelle delle temperature, contrassegnate con dei quadratini. Per i valori minimi i numeri con sfondo azzurro, mentre per i valori massimi, quelli con lo sfondo rosso.");
// Day
define('_MA_METEOIT_WEEK', "Settimana");
define('_MA_METEOIT_DETAIL1_DESC', "In questa immagine della mappa si possono consultare le previsioni settimanali ordinate per giorno, l'immagine del tempo, la temperatura minima in azzurro, la temperatura massima in rosso, la direzione del vento con i simboli delle cartesiane N(Nord), E(Est), S(Sud) ed W(Ovest), la velocit&#224; del vento in kilometri orari, ed infine le probabilit&#224; di precipitazioni, descritte in percentuale.");
define('_MA_METEOIT_ANIMATED', "Animato");
define('_MA_METEOIT_DETAIL2_DESC', "Giorno 1&#176;");
define('_MA_METEOIT_TIMEBANDS', "Fasce orarie");
define('_MA_METEOIT_DETAIL3_DESC', "Giorno 1&#176;");
define('_MA_METEOIT_THREEHOURS', "Tri orario");
define('_MA_METEOIT_DETAIL4_DESC', "Giorno 1&#176;");
define('_MA_METEOIT_WINDSANDSEAS', "Mari e venti");
define('_MA_METEOIT_DETAIL5_DESC', "Giorno 1&#176;");
define('_MA_METEOIT_WEATHERDAY', "Previsioni del giorno");
define('_MA_METEOIT_DETAIL6_DESC', "Giorno 1&#176;");
// Toolbar
define('_MA_METEOIT_TMNAME1', "Dashboard");
define('_MA_METEOIT_TMNAME2', "Oggi");
define('_MA_METEOIT_TMNAME3', "Dettagli");
define('_MA_METEOIT_TMNAME4', "Flash");
define('_MA_METEOIT_TMNAME5', "Mondo");
define('_MA_METEOIT_TMNAME6', "Video");
define('_MA_METEOIT_TMNAME7', "Regionale");
// Description Metas
define('_MA_METEOIT_DESC_NOW', "Italy Weather in real-time");
define('_MA_METEOIT_DESC_DAY', "Weather in Italy today");
define('_MA_METEOIT_DESC_FLASH', "Weather in Italy in flash");
define('_MA_METEOIT_DESC_WORLD', "Weather in the World");
// Titles
define('_MA_METEOIT_WEATHER_ITALY', "Previsioni in italia");
define('_MA_METEOIT_WEATHER_EARTH', "Previsioni mondiali");
define('_MA_METEOIT_WEATHER_FLASH', "Previsioni flash");
define('_MA_METEOIT_WEATHER_TODAY', "Previsioni di oggi");
define('_MA_METEOIT_WEATHER_DETAILS', "Previsioni settimanali");
define('_MA_METEOIT_WEATHER_VIDEOS', "Previsioni video");
define('_MA_METEOIT_WEATHER_REGIONAL', "Previsioni regionali");
define('_MA_METEOIT_WEATHER_REGIONAL_SELECT', "Selezionare la propria regione per l'italia, scegliendo dal menu quella che si desidera consultare.");
// Today
define('_MA_METEOIT_TOPOGRAPHIC', "Mappa Topografica");
define('_MA_METEOIT_RAINFALL', "Mappa Precipitazioni");
// Earth
define('_MA_METEOIT_EST', "Est");
define('_MA_METEOIT_WEST', "Ovest");
// Videos
define('_MA_METEOIT_TODAY', "Oggi");
define('_MA_METEOIT_TOMORROW', "Domani");
// Index
define('_MA_METEOIT_ONEDAY', "Tra 1 Giorno");
define('_MA_METEOIT_DAI1_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
define('_MA_METEOIT_TWODAY', "Tra 2 Giorni");
define('_MA_METEOIT_DAI2_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
define('_MA_METEOIT_THREEDAY', "Tra 3 Giorni");
define('_MA_METEOIT_DAI3_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
define('_MA_METEOIT_FOURDAY', "Tra 4 Giorni");
define('_MA_METEOIT_DAI4_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
define('_MA_METEOIT_FIVEDAY', "Tra 5 Giorni");
define('_MA_METEOIT_DAI5_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
define('_MA_METEOIT_SIXDAY', "Tra 6 Giorni");
define('_MA_METEOIT_DAI6_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
define('_MA_METEOIT_SEVENDAY', "Tra 7 Giorni");
define('_MA_METEOIT_DAI7_DESC', "Previsioni per l'italia con relative temperature, in azzurro le minime ed in rosso le massime. La cartina topografica mostra l'andamento del tempo evidenziando nelle varie parti della penisola le immagini, della situazione attuale.");
// Seo
define('_MA_METEOIT_SEO_INDEX', "index");
define('_MA_METEOIT_SEO_TODAY', "today");
define('_MA_METEOIT_SEO_WEEK', "week");
define('_MA_METEOIT_SEO_DETAILS', "details");
define('_MA_METEOIT_SEO_FLASH', "flash");
define('_MA_METEOIT_SEO_WORLD', "world");
define('_MA_METEOIT_SEO_VIDEO', "video");
define('_MA_METEOIT_SEO_REGIONAL', "regionale");

define('_MA_METEOIT_ADMIN', "Admin");