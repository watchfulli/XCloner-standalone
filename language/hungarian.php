<?php

// --- FRONT AREA---//
define("LM_FRONT_CHOOSE_PACKAGE","<b>Válaszd ki a telepíteni kívánt csomagot:</b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Válaszd ki a telepíteni kívánt Joomla verziót</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Joomla Szoftver Online telepítése</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Add meg az FTP adataidat:</h2>");
define("LM_FRONT_WEBSITE_URL","<b>Weboldal Url:</b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Kérlek add meg a weboldalad URL címét, ahová a Joomla telepítve lesz, például http://www.weboldalam.hu/Joomla</small>");
define("LM_FRONT_FTP_HOST","<b>Ftp kiszolgáló:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>például ftp.weboldalam.hu</small>");
define("LM_FRONT_FTP_USER","<b>Ftp felhasználónév:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>például Istvan</small>");
define("LM_FRONT_FTP_PASS","<b>Ftp jelszó:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>például istvanka</small>");
define("LM_FRONT_FTP_DIR","<b>Ftp könyvtár:</b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Kérlek add meg azt a könyvtárat, ahová szeretnéd telepíteni a Joomla-t, például public_html/Joomla/ vagy htdocs/Joomla/ és győződj meg róla, hogy az engedélyek alapján a mappa midnenki számára írható</small>");
define("LM_TRANSFER_FTP_INCT","Inkrementális átvitel:");
define("LM_TRANSFER_FTP_INCT_SUB","A program inkrementális módszerrel kísérli meg átmásolni a fájlokat FTP-n keresztül az üres képernyő, vagy időtúllépés elkerülésé érdekében ");
define("LM_FRONT_BOTTOM","Valami nem működik? Kérlek tudasd velünk és -> <a href='http://www.xcloner.com/contact/'>írd meg nekünk</a> a hibajelenséget<br />
                         Támogatja az <a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","Feltöltöttünk egy Visszaállító eszköz csomagot az FTP oldaladra, a folytatáshoz kattints ide");
define("LM_NOPAKCAGE_ERROR","Nincs csomag kiválasztva, megszakítás...!");

// --- BACKEND AREA---//

//Amazon S3
define("LM_AMAZON_S3", "Amazon S3 tárhely");
define("LM_AMAZON_S3_ACTIVATE", "Aktiválás");
define("LM_AMAZON_S3_AWSACCESSKEY", "AWS hozzáférési kulcs:");
define("LM_AMAZON_S3_AWSSECRETKEY", "AWS biztonsági kód:");
define("LM_AMAZON_S3_BUCKET", "Tároló neve:");
define("LM_AMAZON_S3_DIRNAME", "Feltöltési könyvtár:");
define("LM_AMAZON_S3_SSL","SSL átvitel engedélyezése");

//Dropbox
define("LM_DROPBOX", "DropBox tárhely");
define("LM_DROPBOX_ACTIVATE", "Aktiválás");
define("LM_DROPBOX_AWSACCESSKEY", "Alkalmazás kulcs:");
define("LM_DROPBOX_AWSSECRETKEY", "Alkalmazás biztonság:");
define("LM_DROPBOX_DIRNAME", "Feltöltési könyvtár:");


define("LM_DATABASE_EXCLUDE_TABLES","Válaszd ki a kihagyandó táblákat:");
define("LM_CONFIG_SYSTEM_FOLDER","Mappa megjelenítés:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","Válaszd ki a módot, amellyel a 'Mentés generálása' képernyőn szeretnéd kijelölni a kihagyandó mappákat");
define("LM_CONFIG_SYSTEM_LANG","A rendszer nyelve:");
define("LM_CONFIG_SYSTEM_LANG_SUB","Válaszd ki az XCloner nyelvét. Alapértelmezett választása esetén a Joomla alapértelemezett nyelve lesz alkalmazva, feltéve hogy van XCloner nylevi fájl");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Rendszer alapértelmezett");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Közvetlen letöltési link engedélyezése:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","Ha engedélyezve lett, akkor a 'Mentések kezelése' képernyőn a szerverről közvetlenül lehet majd letölteni a csomagot. Arra figyelj, hogy a mentések mappájának a Joomla gyökér (root) könyvtárán belül kell lennie!");
define("LM_CONFIG_DISPLAY","Megjelenítési beállítások");
define("LM_CONFIG_SYSTEM","Rendszer beállítások");
define("LM_CONFIG_SYSTEM_FTP","FTP átviteli mód");
define("LM_CONFIG_SYSTEM_FTP_SUB","Válaszd ki, hogyan legyenek mozgatva a fájlok szerverről szerverre FTP protokoll esetén");
define("LM_CONFIG_MEM","Mentés Szerver funkciók használatával");
define("LM_CONFIG_MEM_SUB","<small>Aktiváláshoz szükséges a szerver zip, vagy tar és/vagy mysqldump parancs támogatása és meg kell adni azok elérési útvonalát, továbbá szükséges lesz még az <b>exec()</b> php parancsra is.</small>");
define("LM_CRON_DB_BACKUP","Adatbázis mentés engedélyezése:");
define("LM_CRON_DB_BACKUP_SUB","<small>Ha szeretnéd, hogy a mentés tartalmazza az adatbázist is, válaszd ezt a opciót.</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","A klón tartalmazza a mentést:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Ha ezt választod, akkor minden mentés tartalmazni fogja az előző mentés fájljait is, de ezzel minden alkalommal növekedni fog a csomag mérete is.</small>");

define("LM_TAB_MYSQL","MYSQL");
define("LM_CONFIG_MYSQL","MYSQL kapcsolódás beállítások:");
define("LM_CONFIG_MYSQLH","Mysql szerver neve:");
define("LM_CONFIG_MYSQLU","Mysql felhasználónév:");
define("LM_CONFIG_MYSQLP","Mysql jelszó:");
define("LM_CONFIG_MYSQLD","Mysql adatbázis neve:");
define("LM_CONFIG_MYSQLH_SUB","");
define("LM_CONFIG_MYSQLU_SUB","");
define("LM_CONFIG_MYSQLP_SUB","");
define("LM_CONFIG_MYSQLD_SUB","");

define("LM_TAB_AUTH","Hitelesítés");
define("LM_CONFIG_AUTH","Felhasználó hitelesítési terület");
define("LM_CONFIG_AUTH_USER","Felhasználónév:");
define("LM_CONFIG_AUTH_PASS","Jelszó:");
define("LM_CONFIG_AUTH_USER_SUB","Ez lesz az alapértelmezett felhasználód az XCloner-be való belépéshez");
define("LM_CONFIG_AUTH_PASS_SUB", "Az alapértelmezett jelszavad, hagyd üresen, ha nem akarod megváltoztatni");

define("LM_YES","Igen");
define("LM_NO", "Nem");
define("LM_ACTIVE","Aktív");
define("LM_TAR_PATH","Tar elérési út, vagy parancs:");
define("LM_TAR_PATH_SUB","(Akkor szükséges, ha a Tar archívumot választottad és az Aktív be lett jelölve)");
define("LM_ZIP_PATH","Zip elérési út, vagy parancs:");
define("LM_ZIP_PATH_SUB","(Akkor szükséges, ha a Zip archívumot választottad és az Aktív be lett jelölve)");
define("LM_MYSQLDUMP_PATH","Mysqldump elérési út, vagy parancs: (Akkor szükséges, ha az Aktív be lett jelölve)<br /> Nagyobb adatbázis fájl esetén kérlek használd ezt:
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");

// --- CONFIG ---//
define("LM_CONFIG_MANUAL","Kézi mentés művelet");
define("LM_CONFIG_MANUAL_BACKUP","Kézi mentés:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Válaszd ezt az opciót, ha a szervereden van php időtúllépés korlátozás. Ehhez szükséges lesz a böngésződ javascript aktiválására");
define("LM_CONFIG_MANUAL_FILES","Fájlok feldolgozása / lekérdezés:");
define("LM_CONFIG_DB_RECORDS", "Adatbázis bejegyzések / lekérdezés");
define("LM_CONFIG_MANUAL_REFRESH","Idő két lekérdezés között:");
define("LM_CONFIG_SYSTEM_MDATABASES","Több adatbázis mentése:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","Ez az opció vezérli, hogy az XCloner képes-e több adatbázist egyidejűleg lementeni");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Ennél nagyobb fájlok kihagyása:");

define("LM_CONFIG_CRON_LOCAL","Helyi szerver*");
define("LM_CONFIG_CRON_REMOTE","Távoli FTP fiók");
define("LM_CONFIG_CRON_EMAIL","Email**");
define("LM_CONFIG_CRON_FULL","Teljes (fájlok + adatbázis)");
define("LM_CONFIG_CRON_FILES","Csak fájlok");
define("LM_CONFIG_CRON_DATABASE","Csak adatbázis");

define("LM_CONFIG_EDIT","Konfigurációs fájl szerkesztése:");
define("LM_CONFIG_BSETTINGS","Mentési útvonal beállítások");
define("LM_CONFIG_BSETTINGS_OPTIONS","Mentést végző genrátor opciók");
define("LM_CONFIG_BSETTINGS_SERVER","Szerver használati beállítások");
define("LM_CONFIG_BPATH","Mentés tároló útvonala:");
define("LM_CONFIG_UBPATH","Mentés kiinduló útvonala:");
define("LM_CONFIG_BPATH_SUB","<small>Az itt megadott helyen lesznek tárolva a mentések</small>");
define("LM_CONFIG_UBPATH_SUB","<small>Ez a kiinduló útvonal, az XCloner ettől kiindulva fogja kiválasztani a fájlokat és mappákat</small>");
define("LM_CRON_EXCLUDE","Kihagyott mappák");
define("LM_CRON_EXCLUDE_DIR","Kihagyott mappák listája, egy mappa egy sorba:<br>kérlek a szerver könyvtár teljes elérési útvonalát add meg");
define("LM_CRON_BNAME","Mentés neve:");
define("LM_CRON_BNAME_SUB","<small>Ha üresen marad, a program minden alkalommal generálni fog egy nevet</small>");
define("LM_CRON_IP","Engedélyezett Cron IP-k:");
define("LM_CRON_IP_SUB","<small>Alapértelmezésként csak a helyi szerver férhet hozzá a cron feladathoz, de megadhatsz további IP címeket is. Minden IP-t új sorba írj.</small>");
define("LM_CRON_DELETE_FILES","Régi mentések törlése");
define("LM_CRON_DELETE_FILES_SUB","Ennél régebbi mentések törlése: ");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE"," Aktiválás");
define("LM_CRON_SEMAIL","Cron napló küldése emailben: ");
define("LM_CRON_SEMAIL_SUB","Ha megadtál egy emailcímet, a cron feladat lefutása után a feladatról készült naplófájl el lesz küldve a megadott emailcímre. Több emailcím megadása esetén az egyes emailcímeket pontosvesszővel ; válaszd el egymástól");
define("LM_CRON_FROMEMAIL","Cron napló feladó emailcím: ");
define("LM_CRON_FROMEMAIL_SUB","Ha megadtál egy emailcímet, a cron feladat lefutása után a feladatról készült naplófájl ez alatt az emailcím alatt lesz elküldve");
define("LM_CRON_MCRON","Konfiguráció neve:");
define("LM_CRON_MCRON_AVAIL","Rendelkezésre álló konfigurációk:");
define("LM_CRON_MCRON_R","Kérlek adj egy egyszerű nevet az új cron konfigurációnak");
define("LM_CRON_MCRON_SUB","Ezzel az opcióval lehetőséged nyílik elmenteni az aktuális konfigurációt egy külön fájlba, amit felhasználhatsz több cron feladat egyidejű futtatásához is");
define("LM_CRON_SETTINGS_M","Többszörös cron feladat konfiguráció");
define("LM_CONFIG_SPLIT_BACKUP_SIZE", "Ettől nagyobb mentési csomagokat vágja meg:");

// --- MENU ---//
define("LM_MENU_OPEN_ALL", "Összes kinyitása");
define("LM_MENU_CLOSE_ALL", "Összes becsukása");
define("LM_MENU_ADMINISTRATION","Adminisztráció");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Konfiguráció");
define("LM_MENU_CRON","Cron");
define("LM_MENU_LANG","Fordító");
define("LM_MENU_ACTIONS","Műveletek");
define("LM_MENU_Generate_backup","Mentés létrehozása");
define("LM_MENU_Restore_backup","Mentés visszaállítása");
define("LM_MENU_View_backups","Mentések kezelése");
define("LM_MENU_Documentation","Segítség");
define("LM_MENU_ABOUT","Névjegy");
define("LM_DELETE_FILE_FAILED","Törlés hiba, kérlek ellenőrizd a jogosultságkat");
define("LM_JOOMLAPLUG_CP","XCloner - Weboldal mentő és visszaállító alkalmazás");
define("LM_MENU_FORUM","Fórum");
define("LM_MENU_SUPPORT","Támogatás");
define("LM_MENU_WEBSITE","Weboldal");

define("LM_MAIN_Settings","Beállítások");
define("LM_MAIN_View_Backups","Mentések kezelése");
define("LM_MAIN_Generate_Backup","Mentés létrehozása");
define("LM_MAIN_Help","Segítség");
define("LM_FTP_TRANSFER_MORE","FTP kapcsolati mód");
define("LM_REFRESH_MODE","Mentés frissítési mód");
define("LM_DEBUG_MODE","Naplózás engedélyezése:");
define("LM_REFRESH_ERROR","Hiba történt a JSON adatok szerverről való lekérésekor, próbáld meg újra, vagy vedd fel a kapcsolatot a fejlesztővel!");


// --- LANGUAGE --//
define("LM_LANG_NAME", "Nyelv neve");
define("LM_LANG_MSG_DEL", "Nyelv(ek) sikeresen törölve!");
define("LM_LANG_NEW","Új nyelv neve:");
define("LM_LANG_EDIT_FILE","Fájl szerkesztése:");
define("LM_LANG_EDIT_FILE_SUB","Ne feljetsd el menteni a munkádat 5 percenként, csak kattints az Alkalmaz gombra");


// --- TABS --//
define("LM_TAB_GENERAL","Általános");
define("LM_TAB_G_STRUCTURE","Struktúra");
define("LM_TAB_SYSTEM","Rendszer");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Infó");
define("LM_TAB_G_DATABASE","Adatbázis opciók");
define("LM_TAB_G_FILES","Fájl opciók");
define("LM_TAB_G_COMMENTS","Mentés megjegyzések");
define("LM_G_EXCLUDE_COMMENT","<br>Kérlek add meg a kihagyandó mappákat, minden egyes mappa nevét külön sorba írj!
    <br><b>Letilthatod a cache tulajdonságot mentések alatt, vagy ha nem tartalmazza a cache mappát a mentés csomag</b>");
define("LM_TAB_G_COMMENTS_H2", "Add meg az archívumhoz csatolt megjegyzéseket:");
define("LM_TAB_G_COMMENTS_NOTE","Kérlek vedd figyelembe, hogy a megjegyzések a csomagban az <b>administrator/backups/.comments</b> útvonalon lesznek eltárolva");

// --- MESSAGES --//
// front end
define("LM_MSG_FRONT_1","Nincs rendelkézre álló csomag");
define("LM_MSG_FRONT_2","FTP feltöltési hiba");
define("LM_MSG_FRONT_3","A következő feltöltése kész:");
define("LM_MSG_FRONT_4","FTP kapcsolódási hiba!");
define("LM_MSG_FRONT_5","Kisérlet a következőhöz való kapcsolódásra:");
define("LM_MSG_FRONT_6","felhasználónak");

//backend
define("LM_MSG_BACK_1","Konfiguráció sikeresen elmentve...");
define("LM_MSG_BACK_2","FTP kapcsolódási hiba!");
define("LM_MSG_BACK_3","Mentés mozgatása KÉSZ! A kiválasztott mentés mostantól a megadott helyen érhető el!");
define("LM_MSG_BACK_4","Mozgatás kész, klónozás indítása a távoli szerveren");
define("LM_MSG_BACK_5","Sikeresen visszavéve a felhasználói felülettől");
define("LM_MSG_BACK_6","Visszavételi hiba! Kérlek ellenőrizd az útvonalakat!");
define("LM_MSG_BACK_7","Sikeresenesen közzétéve a felhasználói felületen");
define("LM_MSG_BACK_8","Közzétételi hiba! Kérlek ellenőrizd az útvonalakat!");
define("LM_MSG_BACK_9","Klónok sikeresen átnevezve!");
define("LM_MSG_BACK_10","A Joomla elérési útvonal nincs a mentési útvonalon belül! A közvetlen letöltési mód nem használható! A 'Közvetlen letöltési link' opciót állítsd NEM-re a Konfiguráció -> Rendszer fül alatt");
define("LM_MSG_BACK_11","Minden elkészült! A kézi mentési folyamat befejeződött! <a href='index2.php?option=com_cloner&task=view'>Kattints ide a folytatáshoz</a>");
define("LM_MSG_BACK_12","<h2>Hiba történt a mentés közben! Kérlek ellenőrizd, hogy a szervered támogatja-e a zip archiválást és hogy a beállításokban megadott elérési útvonal (/usr/bin/zip vagy /usr/local/bin/zip) helyes-e, vagy válaszd a Tar archiválási típust.</h2>");
define("LM_MSG_BACK_13","<h2>Hiba történt a mentés közben! Kérlek ellenőrizd, hogy a szervered támogatja-e a TAR archiválást és hogy a beállításokban megadott elérési útvonal (/usr/bin/tar vagy /usr/local/bin/tar) helyes-e, vagy válaszd a Zip archiválási típust.</h2>");
define("LM_MSG_BACK_14","<font color='red'>Valami hiba történt az adatbázis mentés generálása közben, kérlek ellenőrizd a mysqldump szerver elérési útvonalat!</font>");



define("LM_CRON_TOP","Cron parancs beállítások");
define("LM_CRON_SUB","<b>A cron funkció használatával be tudsz állítani az oldaladhoz automatizált mentéseket!</b>
<br />A beállításához a Vezérlőpulton a Cron fül alatt hozzá kell adnod egyet az alábbi parancsok közül:");
define("LM_CRON_HELP","Megjegyzés:
 - ha a php helye a szervereden más mint /usr/bin/php, akkor kérlek használd ezt a formát: /$"."php_path/php


További információt a cron beállításáról a következő helyeken olvashatsz:
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>kattints ide</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>kattints ide</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>kattints ide</a>
 - Általános Linux crontab infó <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>kattints ide</a>

Ha szükséged van segítségre a cron beállításához, kérlek látogass el a fórumunkra <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a>");
define("LM_CRON_SETTINGS","Cron beállítások");
define("LM_CRON_MODE","Mentés tárolási mód:");
define("LM_CRON_MODE_INFO"," <br />
      <small> Kérlek vedd figyelembe,* ha helyi szerver lett kiválasztva, az alapértelmezett mentési útvonal lesz használva a mentések tárolásához</small>
      <br />
      <small> Kérlek vedd figyelembe,** ha az email mód lett kiválasztva, nem garantáljuk, hogy a mentések meg fognak érkezni az email fiókodba, az email szolgáltatód korlátozásai miatt</small>
     ");
define("LM_CRON_TYPE_INFO","<small><br /> Kélek válaszd ki a használni kívánt mentési típust</small>");
define("LM_CRON_MYSQL_DETAILS","Mysql opciók");
define("LM_CRON_MYSQL_DROP","Új Mysql Drop");
define("LM_CRON_TYPE","Mentési típus:");
define("LM_CRON_FTP_DETAILS","FTP tárolási mód adatok:");
define("LM_CRON_FTP_SERVER","FTP szerver:");
define("LM_CRON_FTP_USER","FTP felhasználónév:");
define("LM_CRON_FTP_PASS","FTP jelszó:");
define("LM_CRON_FTP_PATH","FTP útvonal:");
define("LM_CRON_FTP_DELB","Mentés törlése átvitel után");
define("LM_CRON_EMAIL_DETAILS","Email mód adatok:");
define("LM_CRON_EMAIL_ACCOUNT","Email fiók:");
define("LM_CRON_COMPRESS","Mentési fájlok tömörítése:");
define("LM_RESTORE_TOP","Infó a mentések visszaállításáról");
define("LM_CREDIT_TOP","Az XCloner névjegye");
define("LM_CLONE_FORM_TOP","<h2>Kérlek add meg az FTP adatokat:</h2>");

// --- Info Tab ---//

define("LM_CONFIG_INFO_T_SAFEMODE","Php Safe_mode:");
define("LM_CONFIG_INFO_T_VERSION","PHP verzió ellenőrzés:");
define("LM_CONFIG_INFO_T_MTIME","Php max_execution_time:");
define("LM_CONFIG_INFO_T_MEML","Php memory_limit:");
define("LM_CONFIG_INFO_T_BDIR","Php open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() funkció támogatás:");
define("LM_CONFIG_INFO_T_TAR","Tar segédprogram szerver elérési út:");
define("LM_CONFIG_INFO_T_ZIP","Zip segédprogram szerver elérési út:");
define("LM_CONFIG_INFO_T_MSQL","Mysqldump segédprogram szerver elérési út:");
define("LM_CONFIG_INFO_T_BPATH","Mentés elérési út:");
define ("LM_CONFIG_INFO_ROOT_BPATH","Mentés kezdő útvonal");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","A mentés kezdő útvonalnak léteznie kell és olvashatónak kell legyen amikor az XCloner elindítja a mentési folyamatot");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP", "Ideiglenes mappa");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","A <i>[Backup Start Path/administrator/backups]</i> elérési útvonalon található mappának írhatónak kell lennie az XCloner zavartalan működése érdekében");


define("LM_CONFIG_INFO","Ez a fül jeleníti meg az általános rendszer információkat és elérési útvonalakat");
define("LM_CONFIG_INFO_PATHS","Általános elérési útvonal infó:");
define("LM_CONFIG_INFO_PHP","Php konfiguráció információk:");
define("LM_CONFIG_INFO_TIME","<small>Ez szabályozza az engedélyezett szkript futtatás maximális idejét (másodpercben)</small>");
define("LM_CONFIG_INFO_MEMORY","<small>Ez szabályozza a maximális memóriát, amit a szkript kioszthat folyamtaihoz</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Ez határozza meg a szkript elérési útvonalát, ha nincs megadva semmi, az azt jelenti, hogy bármilyen útvonal lehet</small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>A safe mode-ot ki kell kapcsolni az XCloner zavartalan működése érdekében</small>");
define("LM_CONFIG_INFO_VERSION","<small>PHP >=5.2.3 verzió szükséges az összes tulajdonság eléréséhez</small>");
define("LM_CONFIG_INFO_TAR","<small>Ha a szkript nem tudja automatikusan meghatározni a Tar útvonalát, Akkor ki kell kapcsolnod az 'Aktív' állapotot a Tar sorában az Általános beállításoknál.</small>");
define("LM_CONFIG_INFO_ZIP","<small>Ha a szkript nem tudja automatikusan meghatározni a Zip útvonalát, Akkor ki kell kapcsolnod az 'Aktív' állapotot a Zip sorában az Általános beállításoknál.</small>");
define("LM_CONFIG_INFO_MSQL","<small>Ha a szkript nem tudja automatikusan meghatározni a mysqldump útvonalát, Akkor ki kell kapcsolnod az 'Aktív' állapotot a MYSQLDUMP sorában az Általános beállításoknál.</small>");
define("LM_CONFIG_INFO_EXEC","<small>Ha ez a funkció le van tiltva, akkor érdemes mindkét 'Aktív' kapcsolót kikapcsolni az Általános lapon</small>");
define("LM_CONFIG_INFO_BPATH","<small>írhatónak kell lennie, hogy az XCloner archiválni tudja a mentéseket</small>");


// --- TRANSFER DETAILS---//

define("LM_TRANSFER_URL","Weboldal Url:");
define("LM_TRANSFER_URL_SUB","<small>Add meg a weboldal URL címét, ahová a mentések át lesznek mozgatva, például http://weboldalam.hu. Erre azért van szükség, mert ide leszel átirányítva a visszaállítás során</small>");
define("LM_TRANSFER_FTP_HOST","Ftp szerver neve:");
define("LM_TRANSFER_FTP_HOST_SUB","például ftp.weboldalam.hu");
define("LM_TRANSFER_FTP_USER","Ftp felhasználónév:");
define("LM_TRANSFER_FTP_USER_SUB","például 'Istvan'");
define("LM_TRANSFER_FTP_PASS","Ftp jelszó:");
define("LM_TRANSFER_FTP_PASS_SUB","például 'istvanka'");
define("LM_TRANSFER_FTP_DIR","Ftp könyvtár:");
define("LM_TRANSFER_FTP_DIR_SUB","Add meg az FTP könyvtárat, ahová szeretnéd tárolni a mentéseket, például public_html/ vagy htdocs/ és győződj meg róla, hogy az engedélyek alapján a mappa midnenki számára írható");


// --- GENERATE BACKUP---//

define("LM_BACKUP_NAME","<b>Kérlek válaszd ki a mentés nevét</b>");
define("LM_BACKUP_NAME_SUB","<small>Ha üresen marad, a program alapértelmezés szerint automatikusan generálni fog egyet!</small>");


// -- General --//
define("LM_COM_TITLE","XCloner kezelő - ");
define("LM_COM_TITLE_CONFIRM","Könyvtár választás megerősítés");

define("LM_COL_FILENAME","Mentés neve");
define("LM_COL_DOWNLOAD","Letöltés");
define("LM_COL_AVALAIBLE","Weboldali csomag");
define("LM_COL_SIZE","Méret");
define("LM_COL_DATE","Mentés dátuma");
define("LM_COL_FOLDER","<b>Kihagyott könyvtárak és /vagy fájlok</b>");

define("LM_DELETE_FILE_SUCCESS", "Fájlok törölve");
define("LM_DOWNLOAD_TITLE", "Letöltés");


define("LM_ARCHIVE_NAME","Archívum neve");
define("LM_NUMBER_FOLDERS","Mappák száma");
define("LM_NUMBER_FILES","Fájlok száma");
define("LM_SIZE_ORIGINAL","Eredeti fájl mérete");
define("LM_SIZE_ARCHIVE","Archívum mérete");
define("LM_DATABASE_ARCHIVE","Adatbázis mentés");

define("LM_CONFIRM_INSTRUCTIONS","<b>Kérlek jelöld ki azokat a könyvtárakat, melyeket szeretnél kihagyni az Archívumból</b>
<br />- alapértelmezésként minden mappa benne lesz, ha mégis szeretnéd valamelyik mappát és az almappáit kihagyni, csak jelöld be a kis nézetet a mappa neve mellett");
define("LM_CONFIRM_DATABASE","Adatbázis mentése");


define("LM_DATABASE_EXCLUDED", "Kihagyva");
define("LM_DATABASE_CURRENT","aktuális adatbázis:");
define("LM_DATABASE_INCLUDE_DATABASES","Egy másik adatbázist is tartalmazzon");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","A CTRL billentyű lenyomva tartása mellett az egérrel ki tudsz jelölni több adatbázist is, 
melyek benne lesznek majd a mentésben<br />
Az adatbázis az administrator/backups könyvtárba lesz mentve");

define("LM_DATABASE_MISSING_TABLES", "Hiba: A tábla definíció nem található");
define("LM_DATABASE_BACKUP_FAILED", "Mentési HIBA, kérlek ellenőrizd, hogy az administrator/backups könyvtár írható?!");
define("LM_DATABASE_BACKUP_COMPLETED", "Mentés kész");
define("LM_RENAME_TOP","A kijelölt klónok átnevezése");
define("LM_RENAME","Klón átnevezése erről: ");
define("LM_RENAME_TO"," erre: ");
// --- CLONER RESTORE--- //

define("LM_CLONER_RESTORE","<h2>Hogyan állíts vissza egy mentés különböző helyeken INFÓ!</h2><br />
<pre>
   Egy mentés visszaállítása soha nem a legkönnyebb feladat !
   A <a href='index2.php?option=com_cloner&task=view'>Mentések kezelése</a> lapont található klónózó funkció segítségével lehetőséged nyílik 
   a weboldalad mentését elhelyezni bárhol az Interneten.
   
   Itt megtudhatod mit kell tenned:
   
   <b>1. lépés - a mentés másolása a visszaállítandó szerverre</b>
   
    - menj az XCloner 'Mentések kezelése' lapra
	- miután kiválasztott a mentést, kattints a 'Klónozás' gombra
	- add meg annak az oldalnak az FTP adatait, ahová klónozni akarod a mentést
	- miután rákattintottál az OK gombra és a visszaállító szkript elkezdi másolni a mentés az új szerverre, kapni fogsz egy URL címet, 
	melyen megtalálod a visszaállítás következő lépését
	- miután rákattintottál erre a linkre, át leszel irányítva az új helyre. Egy link példa: <b>http://uj_weboldalam.hu/XCloner.php</b>
	
   <b>Megjegyzés:</b> ha valami hiba történne, tedd a következőket:
	1. Töltsd le a mentést a gépedre
	2. Töltsd le a visszaállító szkript összes fájlját ebből a könyvtárból:
	    Joomla : administrator/components/com_xcloner-backupandrestore/restore/
	    Wordpress : wp-content/plugins/xcloner-backup-and-restore/
	    Standalone : restore/
	3. Töltsd fel a mentést és a szkript összes fájlját a visszaállítandó szerverre
	4. Hívd le az XCloner.php fájlt a böngésződben, kövesd a visszaállátis képernyőn látható utasításokat 
	(a képernyő magyarázata alább látható)
	
   <b>2. lépés - XCloner.php visszaállító képernyő</b>
   
	- ennél a lépésnél már minden fájlnak a helyén kell lennie (szkript és mentés)
	- add meg az új adatbázis hozzáférési adatait - adatbázis szerver, felhasználó, jelszó, adatbázis neve, ha eltér a régitől
	- add meg az új helyet és elérési útvonalat
	- a fájlok visszaállítására van <b>2 lehetőséged:</b>
	  
	   - 1. állítsd vissza a fájlokat FTP-n keresztül, a szkript szimulálni fog egy FTP feltöltési folyamatot, 
	   ezzel kiküszöbölve a 2. lépés hozzáférési jogok problémáját
	   - 2. töltsd fel a fájlokat közvetlenül, így a fájlok nem lesznek kicsomagolva a szerverre, így valamivel gyorsabb lesz, 
	   de hozzáférési jog problémák léphetnek fel az FTP használatával
	
	- miután rákattintottál az OK gombra, a szkript átmásolni a fájlokat az új helyre, közvetlenül, vagy FTP használatával, 
	majd telepíti az adatbázist
	- ha minden probléma mentesen zajlik le, az oldalad pontos másolat fog futni az új helyen
	
	További segítségért fordulj a fórumunkhoz : <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
	vagy írj nekünk : <a href='mailto:info@xcloner.com'>info@xcloner.com</a>
</pre>");


// --- ABOUT CLONER---//

define("LM_CLONER_ABOUT","<h2>XCloner biztonsági mentés</h2>
      Az XCloner egy eszköz, mely segítségedre lesz a weboldalad mentéseinek kezelésében, új mentések létrehozásában, visszaállításában, 
	  másik oldalra való költöztetésében, tehát a weboldalad mindig biztonságban lesz!
	  <br /><br />
	  
	  Tulajdonságok:
       <ul>
			<li>időzített (cron) szkript az automatikus mentésekhez</li>
			<li>egyidejűleg több mentés opció</li>
			<li>visszaállító eszköz az oldalad gyors mozgatásához egy másik helyre</li>
			<li>mentések tárolása helyileg, vagy távoli helyen</li>
			<li>AJAX/JSON mentési felület</li>
			<li>egyedülálló kód, mely vissza tud állítani mindenféle PHP/Mysql weboldalt</li>
			<li>inkrementális adatbázis és fájl mentések</li>
			<li>inkrementális fájlrendszer szkennelés</li>
			<li>amazon S3 támogatás</li>
       </ul>
	   <br />

       Ha hibát találsz, vagy kérdésed, javaslatod van, kérlek lépj kapcsolatba velünk az info@xcloner.com emailcímen, vagy látogass el a <a href='http://www.xcloner.com'>http://www.xcloner.com</a> címen található weboldalunkra.

      <br/><br/>

      XCloner.com &copy; 2004-2011 | <a href=\"http://www.xcloner.com\">www.xcloner.com</a>
      <br/><p/><br/>
");

define("LM_LOGIN_TEXT","
<pre>
<b>Megjegyzés:</b>
 1. Ha először jársz ezen a képernyőn, az alapértelmezett
    felhasználónév : '<i>admin</i>' , a jelszó : '<i>admin</i>', melyeket érdemes megváltoztatni az első belépés után.

 2. Ha elfelejtenéd a jelszót, az alábbi kódrészlet beillesztésével tudod visszaállítani alaphelyzetre:

	<b>$"."_CONFIG[\"jcpass\"] = md5(\"my_new_pass\");</b>

    melyet a cloner.config.php fájl legvégére kell beillesztened de
    a ?> kód elé !
    Ne feljtsd el a kódban szereplő <b>my_new_pass</b> részt lecserélni az új jelszvaddal !
  
  3. A felhasználónév és jelszó betű érzékeny !  
</pre>
");
?>
