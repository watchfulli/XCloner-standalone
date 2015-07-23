<?php

// --- FRONT AREA---//
define("LM_FRONT_CHOOSE_PACKAGE","<b>Izberite namestitveni paket:</b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Izberite različico Joomle, na katero boste nameščali</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Online nameščanje</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Vnesite podatke za ftp:</h2>");
define("LM_FRONT_WEBSITE_URL","<b>Url strani:</b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Vnesite url spletne strani, kjer bo Joomla nameščena, primer: http://www.mojastran.si/Joomla</small>");
define("LM_FRONT_FTP_HOST","<b>Ftp gostitelj:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>primer: ftp.mojastran.si</small>");
define("LM_FRONT_FTP_USER","<b>Ftp uporabniško ime:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>Primer: janez</small>");
define("LM_FRONT_FTP_PASS","<b>Ftp geslo:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>primer: mojegeslo</small>");
define("LM_FRONT_FTP_DIR","<b>Ftp mapa:</b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Vnesite ftp mapo, kamor bo nameščena Joomla, primer: public_html/Joomla/ ali htdocs/Joomla/ in se prepričajte, da je mapa zapisljiva</small>");
define("LM_TRANSFER_FTP_INCT","Stopnja prenosa: ");
define("LM_TRANSFER_FTP_INCT_SUB","prenos datotek preko FTP-ja bo potekal v primarnem načinu, saj se s tem preprečijo morebitne prazne strani ali časovne omejitve ");
define("LM_FRONT_BOTTOM","Vam ne dela? Prosim, povejte nam, kaj se je zgodilo -> <a href='http://www.xcloner.com/contact/'>Kontakt</a><br />
                         Lastništvo <a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","Prenešen je bil paket za obnovitev vaše strani. Za ftp nadaljevanje kliknote tukaj");
define("LM_NOPAKCAGE_ERROR","Noben paket ni bil izbran, prekinjam ...!");

// --- BACKEND AREA---//

//Amazon S3
define("LM_AMAZON_S3", "Shranjevanje na Amazon S3");
define("LM_AMAZON_S3_ACTIVATE", "Aktivacija");
define("LM_AMAZON_S3_AWSACCESSKEY", "AWS dostopni ključ:");
define("LM_AMAZON_S3_AWSSECRETKEY", "AWS skrivni ključ:");
define("LM_AMAZON_S3_BUCKET", "Uporabniško ime:");
define("LM_AMAZON_S3_DIRNAME", "Nalaganje mape:");
define("LM_AMAZON_S3_SSL","Dovoli SSL prenos");

//Dropbox
define("LM_DROPBOX", "Shranjevanje na DropBox");
define("LM_DROPBOX_ACTIVATE", "Aktivacija");
define("LM_DROPBOX_AWSACCESSKEY", "Uporabniški ključ:");
define("LM_DROPBOX_AWSSECRETKEY", "Skriti ključ:");
define("LM_DROPBOX_DIRNAME", "Nalaganje mape:");


define("LM_DATABASE_EXCLUDE_TABLES","Izberite tabele, ki bodo vključene v arhiv:");
define("LM_CONFIG_SYSTEM_FOLDER","Prikaz map:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","Izberite način, kako bi radi izbrali mape iz sekcije 'Ustvari arhiv'");
define("LM_CONFIG_SYSTEM_LANG","Sistemski jezik:");
define("LM_CONFIG_SYSTEM_LANG_SUB","nastavite XCloner jezik, če nastavite na privzeto, bo prikazan privzeti jezik Joomle");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Privzeti Sistem");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Omogočite povezavo za neposredni prenos:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","če označite, bo v 'Pregled arhivov' prikazana direktna povezava za prenos paketa. Pot mora biti iz Joomline korenske poti");
define("LM_CONFIG_DISPLAY","Prikaz nastavitev");
define("LM_CONFIG_SYSTEM","Sistemske nastavitve");
define("LM_CONFIG_SYSTEM_FTP","Tip FTP prenosa");
define("LM_CONFIG_SYSTEM_FTP_SUB","določite, kako se bodo datoteke prenašale iz strežnika na strežnik preko ftp protokola");
define("LM_CONFIG_MEM","Uporaba strežniških funkcij");
define("LM_CONFIG_MEM_SUB","<small>Če aktivirate, boste potrebovali strežniško podporo <b>zip ali tar</b> in/ali <b>mysqldump</b> ukaze in določiti pot, ter <b>exec()</b> dostop v vašem php-ju</small>");
define("LM_CRON_DB_BACKUP","Omogoči arhiv baze:");
define("LM_CRON_DB_BACKUP_SUB","<small>S to opcijo vključite mysql podatkovno bazo v arhiv.</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Vključevanje arhivske mape v arhiv:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Če vključite, bo vsak arhiv vseboval tudi vse predhodbe arhive. S tem močno povečujete velikost arhiva.</small>");

define("LM_TAB_MYSQL","MYSQL");
define("LM_CONFIG_MYSQL","Nastavitve MySQL povezave:");
define("LM_CONFIG_MYSQLH","Mysql gostitelj:");
define("LM_CONFIG_MYSQLU","Mysql uporabniško ime:");
define("LM_CONFIG_MYSQLP","Mysql geslo:");
define("LM_CONFIG_MYSQLD","Mysql baza:");
define("LM_CONFIG_MYSQLH_SUB","");
define("LM_CONFIG_MYSQLU_SUB","");
define("LM_CONFIG_MYSQLP_SUB","");
define("LM_CONFIG_MYSQLD_SUB","");

define("LM_TAB_AUTH","Preverjanje");
define("LM_CONFIG_AUTH","Preverjanje uporabnika");
define("LM_CONFIG_AUTH_USER","Prijavno uporabniško ime:");
define("LM_CONFIG_AUTH_PASS","Geslo za prijavo:");
define("LM_CONFIG_AUTH_USER_SUB","to bo vaša privzeta prijava v XCloner");
define("LM_CONFIG_AUTH_PASS_SUB", "pustite geslo prazno, če ga nočete spreminjati");

define("LM_YES","Da");
define("LM_NO", "Ne");
define("LM_ACTIVE","Aktivacija");
define("LM_TAR_PATH","Tar pot ali ukaz:");
define("LM_TAR_PATH_SUB","(obvezno, če je arhiv tipa Tar in če je Aktivacija označena)");
define("LM_ZIP_PATH","Zip pot ali ukaz:");
define("LM_ZIP_PATH_SUB","(obvezno, če je arhiv tipa Zip in če je Aktivacija označena)");
define("LM_MYSQLDUMP_PATH","Mysqldump pot ali ukaz: (obvezno, če je Aktivacija označena)<br /> Za večje MySQL baze uporabite
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");

// --- CONFIG ---//
define("LM_CONFIG_MANUAL","Arhiv - Ročni proces");
define("LM_CONFIG_MANUAL_BACKUP","Ročni arhiv:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Izberite to možnost, če imate na vašem strežniku php časovno omejitev. V vašem brskalniku morate imeti omogočen javascript");
define("LM_CONFIG_MANUAL_FILES","Datoteke za obdelavo na zahtevo:");
define("LM_CONFIG_DB_RECORDS", "Baze za obdelavo na zahtevo");
define("LM_CONFIG_MANUAL_REFRESH","Čas med zahtevami:");
define("LM_CONFIG_SYSTEM_MDATABASES","Arhiviranje več baz:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","ta možnost nadzira XCloner pri arhiviranju več baz");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Izključi datoteke, ki so vešje od:");

define("LM_CONFIG_CRON_LOCAL","Lokalni strežnik*");
define("LM_CONFIG_CRON_REMOTE","Oddaljen ftp račun");
define("LM_CONFIG_CRON_EMAIL","Email**");
define("LM_CONFIG_CRON_FULL","Polno (datoteke + baza)");
define("LM_CONFIG_CRON_FILES","Samo datoteke");
define("LM_CONFIG_CRON_DATABASE","Samo baza");

define("LM_CONFIG_EDIT","Urejanje konfiguracijske datoteke:");
define("LM_CONFIG_BSETTINGS","Nastavitev poti arhiva");
define("LM_CONFIG_BSETTINGS_OPTIONS","Ustvarjanje arhiva");
define("LM_CONFIG_BSETTINGS_SERVER","Strežniške uporabniške možnosti");
define("LM_CONFIG_BPATH","Pot shranjevanja arhiva:");
define("LM_CONFIG_UBPATH","Začetna pot arhiva:");
define("LM_CONFIG_BPATH_SUB","<small>to je pot, kjer bodo shranjeni vsi arhivi</small>");
define("LM_CONFIG_UBPATH_SUB","<small>to je osnovna pot, ki jo XCloner uporablja pri izbiri datotek in map</small>");
define("LM_CRON_EXCLUDE","Izvzete mape");
define("LM_CRON_EXCLUDE_DIR","Seznam izvzetih map. Ena v vsako vrstico:<br>uporabite celotno pot do mape");
define("LM_CRON_BNAME","Naziv arhiva:");
define("LM_CRON_BNAME_SUB","<small>če pustite prazno, bo naziv generiran samodejno. Naziv bo vsakič drugačen</small>");
define("LM_CRON_IP","Dovoljeni IP-ji za Časovna opravila:");
define("LM_CRON_IP_SUB","<small>privzeto ima dostop do funkcije Časovnega opravila samo lokalni strežnik, toda tukaj lahko dodate še druge IP-je. Enega v vsako vrstico</small>");
define("LM_CRON_DELETE_FILES","Brisanje starih arhivov");
define("LM_CRON_DELETE_FILES_SUB","Brisanje starih arhivov, ki so sterejši od: ");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE"," Aktivacija");
define("LM_CRON_SEMAIL","Email za dnevnik Časovnega opravila (ZA): ");
define("LM_CRON_SEMAIL_SUB","Če določite email, bo po izvedenem časovnem opravilu na mail poslano poročilo. Več naslovov ločite z ;");
define("LM_CRON_FROMEMAIL","Email za dnevnik Časovnega opravila (OD): ");
define("LM_CRON_FROMEMAIL_SUB","Če določite email, bo po izvedenem časovnemu opravilu s tega maila poslano poročilo");
define("LM_CRON_MCRON","Naziv konfiguracije:");
define("LM_CRON_MCRON_AVAIL","Dostopne konfigiracije:");
define("LM_CRON_MCRON_R","prosimo, da uporabite preprosti naziv za vašo novo konfoguracijo");
define("LM_CRON_MCRON_SUB","s to možnostjo lahko shranite trenutne nastavitve v ločene datoteke in jih uporabljate pri zagonu več različnih časovnih opravil");
define("LM_CRON_SETTINGS_M","Nastavitev več časovnih opravil");
define("LM_CONFIG_SPLIT_BACKUP_SIZE", "Razdeli arhiv, če je le ta večji kot:");

// --- MENU ---//
define("LM_MENU_OPEN_ALL", "odpri vse");
define("LM_MENU_CLOSE_ALL", "zapri vse");
define("LM_MENU_ADMINISTRATION","Administracija");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Nastavitve");
define("LM_MENU_CRON","Časovna opravila");
define("LM_MENU_LANG","Prevajalec");
define("LM_MENU_ACTIONS","Dejanja");
define("LM_MENU_Generate_backup","Ustvari arhiv");
define("LM_MENU_Restore_backup","Obnovi iz arhiva");
define("LM_MENU_View_backups","Prikaz arhivov");
define("LM_MENU_Documentation","Pomoč");
define("LM_MENU_ABOUT","O");
define("LM_DELETE_FILE_FAILED","Napaka pri brisanju. Preverite dovoljena pri datotekah");
define("LM_JOOMLAPLUG_CP","XCloner - Podpora vaši spletni strani za arhiviranje in restavriranje");
define("LM_MENU_FORUM","Forumi");
define("LM_MENU_SUPPORT","Podpora");
define("LM_MENU_WEBSITE","Spletna stran");

define("LM_MAIN_Settings","Nastavitve");
define("LM_MAIN_View_Backups","Prikaz arhivov");
define("LM_MAIN_Generate_Backup","Ustvarjanje arhiva");
define("LM_MAIN_Help","Pomoč");
define("LM_FTP_TRANSFER_MORE","Način FTP povezave");
define("LM_REFRESH_MODE","Način osveževanja arhiva");
define("LM_DEBUG_MODE","Omogoči dnevnik:");
define("LM_REFRESH_ERROR","Prišlo je do napake pridobivanje podatkov iz strežnika preko JSON. Poskusite znova ali pa se obrnite na razvijalce!");


// --- LANGUAGE --//
define("LM_LANG_NAME", "Naziv jezika");
define("LM_LANG_MSG_DEL", "Jezik(i) uspešno odstranjen(i)!");
define("LM_LANG_NEW","Nov naziv jezika:");
define("LM_LANG_EDIT_FILE","Urejanje datoteke:");
define("LM_LANG_EDIT_FILE_SUB","Ne pozabite shranjevati vaših prevodov vsakih 5 minut. Dovolj bo klik na gumb Uporabi");


// --- TABS --//
define("LM_TAB_GENERAL","Splošno");
define("LM_TAB_G_STRUCTURE","Struktura");
define("LM_TAB_SYSTEM","Sistem");
define("LM_TAB_CRON","Časovna opravila");
define("LM_TAB_INFO","Informacije");
define("LM_TAB_G_DATABASE","Možnosti baze");
define("LM_TAB_G_FILES","Možnosti datotek");
define("LM_TAB_G_COMMENTS","Komentar arhiva");
define("LM_G_EXCLUDE_COMMENT","<br>Vnesite izvzete mape, eno na vrstico!
    <br><b>za kreiranje arhiva ali obnovo iz varnostne kopije izključite predpomnilnik</b>");
define("LM_TAB_G_COMMENTS_H2", "Vnesite dodatne opombe za arhiv:");
define("LM_TAB_G_COMMENTS_NOTE","Komentarji so shranjeni znotraj arhiva, datoteka <b>administrator/backups/.comments</b>");

// --- MESSAGES --//
// front end
define("LM_MSG_FRONT_1","Ni paketov");
define("LM_MSG_FRONT_2","Napaka pri FTP nalaganju");
define("LM_MSG_FRONT_3","Naloženo na");
define("LM_MSG_FRONT_4","Napaka pri FTP povezavi!");
define("LM_MSG_FRONT_5","Poskus povezave na");
define("LM_MSG_FRONT_6","za uporabnika");

//backend
define("LM_MSG_BACK_1","Nastavitve uspešno posodobljene...");
define("LM_MSG_BACK_2","Napaka pri FTP povezavi!");
define("LM_MSG_BACK_3","Arhiv premaknjen in je sedaj na volj na predvideni lokaciji!");
define("LM_MSG_BACK_4","Premik uspel. Zaženite Klon pri oddaljene gostitelju");
define("LM_MSG_BACK_5","Uspešen preklic objave v ospredju");
define("LM_MSG_BACK_6","Napaka pri preklicu objave! Preverite poti!");
define("LM_MSG_BACK_7","Uspešno objavljeno v ospredju");
define("LM_MSG_BACK_8","Napaka pri objavljanju! Preverite poti!");
define("LM_MSG_BACK_9","Kloni uspešno preimenovani!");
define("LM_MSG_BACK_10","Joomlina pot ni enaka arhivski poti! Neposredni prenos ni mogoč! Pojdite na Nastavitve->Sistem zavihek in nastavite 'Neposredna povezava za prenos' na Ne");
define("LM_MSG_BACK_11","Uspelo! Ročno arhiviranje je zaključeno! <a href='index2.php?option=com_cloner&task=view'>Kliknite za nadaljevanje</a>");
define("LM_MSG_BACK_12","<h2>Arhiviranje ni uspelo! Preverite Zip podporo (/usr/bin/zip ali /usr/local/bin/zip) na vašem m strežniku in popravite pot n Nastavitvah, ali pa uporabite Tar arhiv!</h2>");
define("LM_MSG_BACK_13","<h2>Arhiviranje ni uspelo! Preverite Tar podporo (/usr/bin/tar ali /usr/local/bin/tar) na vašem m strežniku in popravite pot n Nastavitvah, ali pa uporabite Zip arhiv!</h2>");
define("LM_MSG_BACK_14","<font color='red'>Težave pri arhiviranju baze. Preverite mysqldump strežniško pot!</font>");



define("LM_CRON_TOP","Nastavitve časovnih opravil");
define("LM_CRON_SUB","<b>Uporabite finkcijo časovnih opravil in avtomatizirajte ustvarjanje arhivov vaše spletne strani!</b>
<br />Za nastavitev, morate v vašo kontrolno ploščo (zavihek Časovna opravila) vnesti enega izmed naslednjih ukazov:");
define("LM_CRON_HELP","Opombe:
 - če je vaša php pot drugačna od /usr/bin/php, uporabite format /$"."php_path/php


Več informacij, kako nastaviti časovna opravila za:
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>klikni tukaj</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>klikni tukaj</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>klikni tukaj</a>
 - General Linux crontab info <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>klikni tukaj</a>

Če potrebujete dodatne informacije glede nastavitve časovnih opravil, obiščite forum <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a>");
define("LM_CRON_SETTINGS","Nastavitve časovnih opravil");
define("LM_CRON_MODE","Način shranjevanja arhivov:");
define("LM_CRON_MODE_INFO"," <br />
      <small> upoštevajte:* če je izbran lokalni strežnik, uporabite privzeto varnostno pot iz splošnega seznama za shranjevanje varnostnih kopij</small>
      <br />
      <small> upoštevajte:** če je izbrana možnost email, ne jamčimo, da boste mail tudi dejansko prejeli, saj je potrebno upoštevati omejitve ponudnika</small>
     ");
define("LM_CRON_TYPE_INFO","<small><br /> določite tip arhiva, ki bi ga radi ustvarili</small>");
define("LM_CRON_MYSQL_DETAILS","Mysql nastavitve");
define("LM_CRON_MYSQL_DROP","Dodaj Mysql Drop");
define("LM_CRON_TYPE","Tip arhiva:");
define("LM_CRON_FTP_DETAILS","Ftp podrobnosti:");
define("LM_CRON_FTP_SERVER","Ftp strežnik:");
define("LM_CRON_FTP_USER","Ftp uporabniško ime:");
define("LM_CRON_FTP_PASS","Ftp geslo:");
define("LM_CRON_FTP_PATH","Ftp pot:");
define("LM_CRON_FTP_DELB","Briši arhiv po prenosu");
define("LM_CRON_EMAIL_DETAILS","Email podrobnosti:");
define("LM_CRON_EMAIL_ACCOUNT","Email račun:");
define("LM_CRON_COMPRESS","Stiskanje arhivskih datotek:");
define("LM_RESTORE_TOP","Obnavljanje podatkov iz arhivov");
define("LM_CREDIT_TOP","O XCloner");
define("LM_CLONE_FORM_TOP","<h2>Zagotovite spodnje ftp podrobnosti:</h2>");

// --- Info Tab ---//

define("LM_CONFIG_INFO_T_SAFEMODE","Php Varen način:");
define("LM_CONFIG_INFO_T_VERSION","PHP različica:");
define("LM_CONFIG_INFO_T_MTIME","Php čas izvrševanja:");
define("LM_CONFIG_INFO_T_MEML","Php omejitev spomina:");
define("LM_CONFIG_INFO_T_BDIR","Php osnovna mapa:");
define("LM_CONFIG_INFO_T_EXEC","exec() podpora:");
define("LM_CONFIG_INFO_T_TAR","Pot za Tar podporo:");
define("LM_CONFIG_INFO_T_ZIP","Pot za Zip podporo:");
define("LM_CONFIG_INFO_T_MSQL","Pot za Mysqldump podporo:");
define("LM_CONFIG_INFO_T_BPATH","Pot za arhiv:");
define ("LM_CONFIG_INFO_ROOT_BPATH","Arhivska začetna pot");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","arhivska začetna pot mora obstajati in biti zapisljiva, da XCloner lahko izvede proces arhiviranje");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP", "Začasna mapa");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","pot <i>[Arhivska začetna pot/administrator/backups]</i> mora obstajati in biti zapisljiva. Drugače XCloner ne deluje pravilno");


define("LM_CONFIG_INFO","Ta zavihek prikaže osnovne sistemske informacije in poti");
define("LM_CONFIG_INFO_PATHS","Osnovne informacije o poteh:");
define("LM_CONFIG_INFO_PHP","Informacije o Php nastavitvah:");
define("LM_CONFIG_INFO_TIME","<small>To preveri največji dovoljeni čas izvrševanja (v sekundah) vaših skript, ki jih poganjate na strežniku</small>");
define("LM_CONFIG_INFO_MEMORY","<small>To preveri največji dovoljeni spominski limit</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>To preveri poti vaših skript. Če ni vrednosti pomeni, da lahko dostopate katerikoli poti </small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>varni način mora biti nastavljen na Off, da XCloner deluje pravilno </small>");
define("LM_CONFIG_INFO_VERSION","<small>PHP >=5.2.3 je zahtevan, da lahko koristite vse funkcije</small>");
define("LM_CONFIG_INFO_TAR","<small>Če sistem ne more samodejno določiti TAR poti, morate počistite 'aktivno' polje poleg TAR v splošnem zavihku</small>");
define("LM_CONFIG_INFO_ZIP","<small>Če sistem ne more samodejno določiti ZIP poti, morate počistite 'aktivno' polje poleg ZIP v splošnem zavihku</small>");
define("LM_CONFIG_INFO_MSQL","<small>Če sistem ne more samodejno določiti mysqldump poti, morate počistite 'aktivno' polje poleg MYSQLDUMP v splošnem zavihku</small>");
define("LM_CONFIG_INFO_EXEC","<small>Če je ta funkcija onemogočena, počistite 'aktivno' polje v splošnem zavihku</small>");
define("LM_CONFIG_INFO_BPATH","<small>za ustvarjanje XCloner arhivov mora biti zapisljivo</small>");


// --- TRANSFER DETAILS---//

define("LM_TRANSFER_URL","WUrl spletne strani:");
define("LM_TRANSFER_URL_SUB","<small>Določite url spletne strani, kamor bo premaknjen arhiv, primer: http://www.mojastran.si/. To je potrebno zaradi neposrednega dostopa do obnovitvene skripte</small>");
define("LM_TRANSFER_FTP_HOST","Ftp naziv gostitelja:");
define("LM_TRANSFER_FTP_HOST_SUB","primer: ftp.mojastran.si");
define("LM_TRANSFER_FTP_USER","Ftp uporabniško ime:");
define("LM_TRANSFER_FTP_USER_SUB","primer: 'janez'");
define("LM_TRANSFER_FTP_PASS","Ftp geslo:");
define("LM_TRANSFER_FTP_PASS_SUB","primer: 'mojegeslo'");
define("LM_TRANSFER_FTP_DIR","Ftp mapa:");
define("LM_TRANSFER_FTP_DIR_SUB","Določite ftp mapo, kamor bi radi premaknili arhiv, primer: public_html/ ali htdocs/ in se prepričajte, da je le ta zapisliva");


// --- GENERATE BACKUP---//

define("LM_BACKUP_NAME","<b>Določite naziv arhiva</b>");
define("LM_BACKUP_NAME_SUB","<small>če pustite prazno, bo naziv ustvarjen samodejno!</small>");


// -- General --//
define("LM_COM_TITLE","XCloner Upravljalec - ");
define("LM_COM_TITLE_CONFIRM","Potrjevanje izbora map");

define("LM_COL_FILENAME","Nastavitev arhiva");
define("LM_COL_DOWNLOAD","Prenos");
define("LM_COL_AVALAIBLE","Paket ospredja");
define("LM_COL_SIZE","Nastavljena velikost");
define("LM_COL_DATE","Datum arhiviranja");
define("LM_COL_FOLDER","<b>Izvzete mape in/ali datoteke</b>");

define("LM_DELETE_FILE_SUCCESS", "Datoteke brisane");
define("LM_DOWNLOAD_TITLE", "Prenos");


define("LM_ARCHIVE_NAME","Naziv arhiva");
define("LM_NUMBER_FOLDERS","Število map");
define("LM_NUMBER_FILES","Število datotek");
define("LM_SIZE_ORIGINAL","Velikost izvirne datoteke");
define("LM_SIZE_ARCHIVE","Velikost arhiva");
define("LM_DATABASE_ARCHIVE","Arhiv baze");

define("LM_CONFIRM_INSTRUCTIONS","<b>Izberite mape, ki bodo izvzete iz arhiva</b>
<br />- privzeto so vključene vse mape. Če bi radi zključilo kakšno mapo ali podmapo, samo obkljukajte kvadratek pred nazivom");
define("LM_CONFIRM_DATABASE","Arhiv baze");


define("LM_DATABASE_EXCLUDED", "Izključeno");
define("LM_DATABASE_CURRENT","Trenutna baza:");
define("LM_DATABASE_INCLUDE_DATABASES","Vključevanje dodatnih baz");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","izberete lahko več baz in jih vključite v arhiv. Več baz izberete s pomočjo tipke CTRL in klikom miške<br />
baze bodo shranjene v administrator/backups mapo vašega arhiva");

define("LM_DATABASE_MISSING_TABLES", "Napaka: Definirana tabela ne obstaja");
define("LM_DATABASE_BACKUP_FAILED", "Napaka pri arhiviranju, preverite zapisljivost mape administrator/backups!");
define("LM_DATABASE_BACKUP_COMPLETED", "Arhiviranje končano");
define("LM_RENAME_TOP","Preimenovanje izbranih klonov");
define("LM_RENAME","Preimenovanje klona ");
define("LM_RENAME_TO"," v ");
// --- CLONER RESTORE--- //

define("LM_CLONER_RESTORE","<h2>Kako restavriramo arhiv na izbrani lokaciji!</h2><br />
<pre>
   Restavriranje arhiva ni bilo nikoli lažje!
   S pomočjo našega delovanja kloniranje <a href='index2.php?option=com_cloner&task=view'>Prikaz arhivov</a> screen
   lahko premaknete spletni arhiv kamorkoli na spletu.

   Tukaj so napotki, kaj morate storiti:

   <b>Korak 1 - premaknite arhiv, kjer boste naredili restavriranje</b>

    - pojdite v XCloner 'Pregled arhivov'
    - ko izberete arhiv, kliknite na gumb 'Kloniraj'
    - vnesite ftp podatke, kamor bi radi klonirali arhiv
    - Po potrditvi po skripta prenešena k novemu gostitelju, vi pa boste dobili url za dostop do naslednjega koraka
    - kpo kliku na povezavo, boste preusmerjeni na novo lokacijo, primer url-ja: <b>http://moja_nova_stran.si/XCloner.php</b>

   <b>Opomba:</b> če ta postopek ne uspe, morate storiti tole:
   	1. Prenesite arhiv na vaš računalnik
   	2. Prenesite skripto za restavriranje, vse datoteke iz mape:
		Joomla : administrator/components/com_xcloner-backupandrestore/restore/
		Wordpress : wp-content/plugins/xcloner-backup-and-restore/
		Standalone: restore/
   	3. Oboje naložite na vašo novo lokacijo
   	4. Poženite XCloner.php v vašem brskalniku in sledite navodilom

   <b>Korak 2 - XCloner.php obnovitvena stran:</b>

   <b>XCloner.php - skripta za restavriranje</b>
    - restavratorsko skripto že imate na pravi lokaciji
    - vnesite nove podatke za mysql dostop. Ti vključujejo novo ime gostitelja, uporabniško ime in geslo, ter novo bazo podatkov, ki je različna od originala
    - vnesite novo lokacijo, Url in pot
    - za restavriranje datotek imate <b>2 možnosti:</b>

       	- 1. restavriranje datotek preko ftp. Skripta simulira ftp proces nalaganja na vaš strežnik.
       	tako odpravite težavo z dovoljenji dostopa iz koraka 2.
       	- 2. neposredno restavriranje datotek. To dela hitreje, vendar pa lahko
       	prikaže težave z dovoljenji

    - po potrditvi bo skripta poskušala premakniti datoteke na novo pot, neposredno ali preko ftp-ja in
    namestila bazo
    - če bo šlo vse po sreči, je vaša stran že klonirana na novi lokaciji

    Za podporo se obrnite na forum <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
    ali preko emaila <a href='mailto:info@xcloner.com'>info@xcloner.com</a>


</pre>");


// --- ABOUT CLONER---//

define("LM_CLONER_ABOUT","<h2>XCloner Backup</h2>
      XCloner je orodje, ki vam olajša pri izdelavi varnostnih kopij spletne strani in morebitno restavriranje!
	  <br /><br />
      Lastnosti:
       <ul>
			<li>časovna skripta samodejno ustvarja arhive</li>
			<li>veliko možnosti arhiviranja</li>
			<li>orodje za restavriranje prenese stran na novo lokacijo</li>
			<li>lokalno ali oddaljeno shranjevanje arhivov</li>
			<li>AJAX/JSON arhivski vmesnik</li>
			<li>samostojna koda, ki arhivira katerokoli PHP/Mysql spletno stran</li>
			<li>arhiv primarne baze in datotek</li>
			<li>primarni sistem za pregledovanje datotek</li>
			<li>amazon S3 podpora</li>
       </ul>
	   <br />

       Za poročila in predloge nam pišite na info@xcloner.com ali obiščite <a href='http://www.xcloner.com'>http://www.xcloner.com</a>

      <br/><br/>

      XCloner.com &copy; 2004-2011 | <a href=\"http://www.xcloner.com\">www.xcloner.com</a>
      <br/><p/><br/>
");

define("LM_LOGIN_TEXT","
<pre>
<b>Opomba:</b>
 1. Če ste prvič tukaj je vaše
    uporabniško ime '<i>admin</i>' in geslo '<i>admin</i>'. Podatke lahko spremenite po prijavi

 2. Če pozabite vaše geslo, ga lahko ponastavite, tako da dodate
    naslednjo kodo:

	<b>$"."_CONFIG[\"jcpass\"] = md5(\"moje_novo_geslo\");</b>

    na konec datoteke cloner.config.php tik
    pred vrstico ?>
    Ne pozabite zamenjati moje_novo_geslo z vašim želenim geslom
  
  3. Uporabniško ime in geslo razlikujeta med malimi in velikimi črkami
</pre>
");
?>
