<?php
/**
* @XCloner 2.1 - German language file
* @Translated by Joomla Blog Insider / www.joomla-blog.net - Felix Schumpelick
* @by order of XCloner.com
* @version 1.0 - 15.07.08
**/

// --- FRONT AREA---//
define("LM_FRONT_CHOOSE_PACKAGE","<b>Wähle das zu installierende Paket: </b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Bitte wähle die zu installierende Joomla Version</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Joomla Software online installieren</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Gib deine FTP Zugangsdaten unten ein: </h2>");
define("LM_FRONT_WEBSITE_URL","<b>URL der Webseite: </b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Gib die Webseiten URL ein, wo Joomla installiert werden soll. Beispiel: http://www.seitenname.de/Joomla</small>");
define("LM_FRONT_FTP_HOST","<b>FTP Hostname:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>Beispiel ftp.seitenname.de</small>");
define("LM_FRONT_FTP_USER","<b>FTP Username:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>Beispiel John</small>");
define("LM_FRONT_FTP_PASS","<b>FTP Kennwort:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>Beispiel johnpass</small>");
define("LM_FRONT_FTP_DIR","<b>FTP Verzeichnis: </b>");
define("LM_FRONT_FTP_DIR_SUB","<small>FTP Verzeichnis in dem du Joomla installieren willst. Beispiel: public_html/Joomla/ oder htdocs/Joomla/. Stelle sicher, dass dieses Verzeichnis volle Schreibrechte hat, normalerweise 777</small>");
define("LM_TRANSFER_FTP_INCT","Inkrementeller Transfer:");
define("LM_TRANSFER_FTP_INCT_SUB","Datentransfer über FTP im inkrementellen Modus um Timeouts oder weiße Seiten zu vermeiden.");
define("LM_FRONT_BOTTOM","Hat nicht funktioniert? Bitte teile uns mit, was das Problem / die Fehlermeldung ist. Wir helfen dir weiter: <a href='http://www.xcloner.com/contact/3/'>XCloner Kontaktseite </a><br />Powered by<a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","Wir haben das Backup-Wiederherstellung Programm auf deine FTP Seite hochgeladen. Um fortzufahren klicke hier");
define("LM_NOPAKCAGE_ERROR","Es wurde kein Backup Paket gewählt. Abbruch...!");
define("LM_AMAZON_S3","Amazon S3 Storage");
define("LM_AMAZON_S3_ACTIVATE","Activate");
define("LM_AMAZON_S3_AWSACCESSKEY","AWS Access Key:");
define("LM_AMAZON_S3_AWSSECRETKEY","AWS Secret Key:");
define("LM_AMAZON_S3_BUCKET","Bucket name:");
define("LM_AMAZON_S3_DIRNAME","Upload Directory:");
define("LM_AMAZON_S3_SSL","Enable SSL transfer");
define("LM_DATABASE_EXCLUDE_TABLES","Wähle die Tabellen, die vom Backup ausgeschlossen werden sollen (optional)");
define("LM_CONFIG_SYSTEM_FOLDER","Ordner Anzeige:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","Bitte wähle die Methode aus mit der die Ordner von der Backuperstellung ausgeschlossen werden sollen");
define("LM_CONFIG_SYSTEM_LANG","System Sprache:");
define("LM_CONFIG_SYSTEM_LANG_SUB","<small>Konfiguriert die XCloner Sprache. Wenn auf 'System Default' gesetzt, dann wird die Joomla default Sprache angezeigt.</small>");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","System Default");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Direkten Download Link aktivieren:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","Wenn dies aktiviert ist, im 'Backups anzeigen' Screen,ist der Download Link ein direkter Link von deinem Server. Beachte, dass der Backup Pfad im Joomla Root Pfad liegen muss");
define("LM_CONFIG_DISPLAY","Sprachauswahl für XCloner");
define("LM_CONFIG_SYSTEM","System Einstellungen");
define("LM_CONFIG_SYSTEM_FTP","FTP Transfer Modus");
define("LM_CONFIG_SYSTEM_FTP_SUB","<small>Wähle aus, wie die Dateien vom einen Server zum anderen Server, unter Verwendung des FTP Protokolls, transferiert werden sollen.</small>");
define("LM_CONFIG_MEM","Backup unter Benutzung von Server Funktionen, falls verfügbar:");
define("LM_CONFIG_MEM_SUB","<small>Wenn du diese Optionen aktivierst, muss dein Server <b>ZIP oder TAR</b> und / oder <b>MySQLDump</b> Befehle unterstützen. Zudem musst du deren Pfade angeben. Auch die PHP Funktion <b>exec()</b> muss aktiviert sein. Im Zweifelsfalle frage am Besten bei deinem Hoster nach, ob du diese Funktionen nutzen kannst.</small>");
define("LM_CRON_DB_BACKUP","Datenbank Backup einschalten:");
define("LM_CRON_DB_BACKUP_SUB","<small>Wähle 'Ja', wenn du ein Backup der MySQL Daten erstellen willst</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Backup Verzeichnis im Klon integrieren:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Wenn aktiviert, dann enthält das erstellte Backup immer auch alle vorherigen Backups. Damit erhöht sich die Backup Größte jedes Mal deutlich. Somit nur sinnvoll für besondere Anwendungszwecke.</small>");
define("LM_TAB_MYSQL","MySQL");
define("LM_CONFIG_MYSQL","MySQL Verbindungseinstellungen");
define("LM_CONFIG_MYSQLH","MySQL Hostname:");
define("LM_CONFIG_MYSQLU","MySQL Username:");
define("LM_CONFIG_MYSQLP","MySQL Passwort:");
define("LM_CONFIG_MYSQLD","MySQL Datenbank:");
define("LM_TAB_AUTH","Authentifikation");
define("LM_CONFIG_AUTH","XCloner Authentifikation");
define("LM_CONFIG_AUTH_USER","Login Username:");
define("LM_CONFIG_AUTH_PASS","Login Passwort:");
define("LM_CONFIG_AUTH_USER_SUB","<small>Dies ist dein Login User Name für XCloner.</small>");
define("LM_CONFIG_AUTH_PASS_SUB","<small>Dies ist dein Login Passwort für XCloner. Freilassen, wenn du das Passwort nicht ändern möchtest.</small>");
define("LM_YES","Ja");
define("LM_NO","Nein");
define("LM_ACTIVE","Aktiv:");
define("LM_TAR_PATH","Tar Pfad oder Server Befehl:");
define("LM_TAR_PATH_SUB","<small>(notwendig wenn 'Aktiv' Checkbox aktiviert und TAR als Archiv Typ gewählt ist.)</small>");
define("LM_ZIP_PATH","Zip Pfad oder Server Befehl:");
define("LM_ZIP_PATH_SUB","<small>(notwendig wenn 'Aktiv' Checkbox aktiviert und ZIP als Archiv Typ gewählt ist.)</small>");
define("LM_MYSQLDUMP_PATH","MySQLDump Pfad oder Befehl:(required if  Active box checked)<br />Für große MySQL Dumps nutze bitte den Befehl<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");
define("LM_CONFIG_MANUAL","Manueller Backup Prozess");
define("LM_CONFIG_MANUAL_BACKUP","Manuelles Backup:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Wenn dein Server eine PHP Ausführungszeit Beschränkungen aufweist (siehe Tab 'Server Info'), dann aktiviere das manuelle Backup. Es benötigt JavaScript und läuft ebenfalls automatisch ab.");
define("LM_CONFIG_MANUAL_FILES","Anzahl der Dateien, die pro manueller Session gesichert werden sollen:");
define("LM_CONFIG_DB_RECORDS","Database records per request");
define("LM_CONFIG_MANUAL_REFRESH","Zeit zwischen Backup Session Refresh:");
define("LM_CONFIG_SYSTEM_MDATABASES","Mehrere Datenbanken sichern:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","Darf XCloner mehrere Datenbanken auf einmal sichern?");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Exclude files larger than:");
define("LM_CONFIG_CRON_LOCAL","Lokaler Server*");
define("LM_CONFIG_CRON_REMOTE","Remote FTP Account");
define("LM_CONFIG_CRON_EMAIL","Email**");
define("LM_CONFIG_CRON_FULL","Komplett (Daten + Datenbank)");
define("LM_CONFIG_CRON_FILES","Nur Daten");
define("LM_CONFIG_CRON_DATABASE","Nur Datenbank");
define("LM_CONFIG_EDIT","Konfigurationsdatei editieren:");
define("LM_CONFIG_BSETTINGS","Backup Pfad Einstellungen");
define("LM_CONFIG_BSETTINGS_OPTIONS","Backup Erstellungsoptionen");
define("LM_CONFIG_BSETTINGS_SERVER","Server Nutzungsoptionen (optional)");
define("LM_CONFIG_BPATH","Backup Speicherort:");
define("LM_CONFIG_UBPATH","Backup Start Pfad:");
define("LM_CONFIG_BPATH_SUB","<small>dies ist der Pfad, wo alle XCloner Backups gespeichert werden.</small>");
define("LM_CONFIG_UBPATH_SUB","<small>dies ist der Pfad, in dem der XCloner Backuppozess beginnt - meistens also das Server Root Verzeichnis.</small>");
define("LM_CRON_EXCLUDE","Ausgeschlossene Verzeichnisse");
define("LM_CRON_EXCLUDE_DIR","Liste der vom Backup auszuschließenden Verzeichnisse. Ein Verzeichnis pro Zeile. Bitte nutze den vollen Serverpfad");
define("LM_CRON_BNAME","Backup Name:");
define("LM_CRON_BNAME_SUB","<small>Wenn freigelassen, dann wird XCloner bei jedem Cron Backup einen neuen Namen erzeugen.</small>");
define("LM_CRON_IP","Zugelassene Cron IP's:");
define("LM_CRON_IP_SUB","<small>Standardmäßig, hat nur der lokale Server Zugriff zum Cron Job. Du kannst hier aber weitere IP's zulassen - eine IP pro Zeile.</small>");
define("LM_CRON_DELETE_FILES","Ältere Backups löschen");
define("LM_CRON_DELETE_FILES_SUB","Backups löschen, die älter sind als:");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE","Aktiv:");
define("LM_CRON_SEMAIL","Cron Log emailen an:");
define("LM_CRON_SEMAIL_SUB","<small>Wenn eine Email Adresse eingegeben wird, dann wird der Cron Log an diese Adresse gemailt - nachdem der Cron Job gelaufen ist. Es können mehrere Email Adressen eingegeben werden, getrennt mit ';'.</small>");
define("LM_CRON_MCRON","Konfigurationsprofil:");
define("LM_CRON_MCRON_AVAIL","Vorhandene Konfigurationen:");
define("LM_CRON_MCRON_R","Bitte gib eine kurze, simple Bezeichnung an für den Namen dieser neuen Cron Konfiguration.");
define("LM_CRON_MCRON_SUB","<small>Mit dieser Option kannst du bestimmte Cron Profile erstellen und in einer speziellen Datei abspeichern. Nutze diese Funktion, um mehrere Cron Jobs zu definieren und auszuführen.</small>");
define("LM_CRON_SETTINGS_M","Cron Konfiguration");
define("LM_CONFIG_SPLIT_BACKUP_SIZE","Split Backup Archive if size larger than:");
define("LM_MENU_OPEN_ALL","alle öffnen");
define("LM_MENU_CLOSE_ALL","alle schließen");
define("LM_MENU_ADMINISTRATION","Administration");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Konfiguration");
define("LM_MENU_CRON","Cron");
define("LM_MENU_LANG","Übersetzer");
define("LM_MENU_ACTIONS","Aktionen");
define("LM_MENU_Generate_backup","Backup erstellen");
define("LM_MENU_Restore_backup","Backup wiederherstellen");
define("LM_MENU_View_backups","Backups anzeigen");
define("LM_MENU_Documentation","Hilfe");
define("LM_MENU_ABOUT","Über");
define("LM_DELETE_FILE_FAILED","Löschen fehlgeschlagen - bitte Datei Zugriffsrechte prüfen");
define("LM_JOOMLAPLUG_CP","XCloner - Die Joomla Backup Lösung");
define("LM_MENU_FORUM","Forum");
define("LM_MENU_SUPPORT","Support");
define("LM_MENU_WEBSITE","Webseite");
define("LM_MAIN_Settings","Einstellungen");
define("LM_MAIN_View_Backups","Backups anzeigen");
define("LM_MAIN_Generate_Backup","Backup erstellen");
define("LM_MAIN_Help","Hilfe");
define("LM_FTP_TRANSFER_MORE","FTP Verbindunsmodus");
define("LM_REFRESH_MODE","Backup Refresh Mode");
define("LM_DEBUG_MODE","Enable log:");
define("LM_REFRESH_ERROR","There was an error retrieving the JSON data from the server, try again or contact the developers!");
define("LM_LANG_NAME","XCloner Sprache");
define("LM_LANG_MSG_DEL","Sprache(n) erfolgreich gelöscht!");
define("LM_LANG_NEW","Neuer Sprach Name:");
define("LM_LANG_EDIT_FILE","Datei editieren:");
define("LM_LANG_EDIT_FILE_SUB","Bitte vergiß nicht, die Übersetzung alle 5 Minuten zu speichern. Drücke dazu einfach den Apply Button.");
define("LM_TAB_GENERAL","Allgemein");
define("LM_TAB_G_STRUCTURE","Struktur");
define("LM_TAB_SYSTEM","System");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Server Info");
define("LM_TAB_G_DATABASE","Datenbank Optionen");
define("LM_TAB_G_FILES","Datei Optionen");
define("LM_TAB_G_COMMENTS","Backup Comments");
define("LM_G_EXCLUDE_COMMENT","<br>Auszuschließende Ordner bitte hier angeben. 1 Ordner pro Zeile.<br><b>Möglicherweise willst du die das Cache Feature deaktivieren, während du ein Backup erstellst. Ansonsten kannst du auch das Cache Verzeichnis vom Backup ausschließen.</b>");
define("LM_TAB_G_COMMENTS_H2","Enter below any additional comments to archive:");
define("LM_TAB_G_COMMENTS_NOTE","Please note, the comments are stored inside the archive, file <b>administrator/backups/.comments</b>");
define("LM_MSG_FRONT_1","Kein Backup Paket vorhanden");
define("LM_MSG_FRONT_2","Der FTP Upload ist leider fehlgeschlagen");
define("LM_MSG_FRONT_3","Upload erledigt für");
define("LM_MSG_FRONT_4","FTP Verbindung fehlgeschlagen!");
define("LM_MSG_FRONT_5","Verbindungsversuch zu");
define("LM_MSG_FRONT_6","für User");
define("LM_MSG_BACK_1","Konfiguration erfolgreich aktualisiert...");
define("LM_MSG_BACK_2","FTP Verbindung fehlgeschlagen!");
define("LM_MSG_BACK_3","Verschieben des Backups erfolgreich! Das ausgewählte Backup sollte nun an der neuen Stelle verfügbar sein.");
define("LM_MSG_BACK_4","Verschieben erfolgreich - starte den Klon Prozess auf dem Remote Host");
define("LM_MSG_BACK_5","Frontend Anzeige erfolgreich deaktiviert");
define("LM_MSG_BACK_6","Deaktivierung fehlgeschlagen! Bitte überprüfe die Pfade!");
define("LM_MSG_BACK_7","Frontpage Veröffentlichung erfolgreich deaktiviert");
define("LM_MSG_BACK_8","Frontpage Deaktivierung fehlgeschlagen! Bitte überprüfe die Pfade!");
define("LM_MSG_BACK_9","Klon erfolgreich umbenannt!");
define("LM_MSG_BACK_10","Der Joomla Pfad ist nicht innerhalb deines Backup Pfades. Konnte den direkten Download Modus nicht nutzen. Du solltest deine Server Konfiguration im Tab 'System Info' überprüfen und die Option 'Direct Download link' auf 'Nein' stellen.");
define("LM_MSG_BACK_11","Fertig! Manueller Backup Vorgang erfolgreich abgeschlossen! <a href='index2.php?option=com_cloner&task=view'>Klicke hier um fortzufahren</a>");
define("LM_MSG_BACK_12","<h2>Backup ist leider fehlgeschlagen! Bitte überprüfe ob dein Server die ZIP Funktion (/usr/bin/zip or /usr/local/bin/zip) unterstüzt und ob die Pfade in der Konfiguration korrekt gesetzt sind.</h2>");
define("LM_MSG_BACK_13","<h2>Backup ist leider fehlgeschlagen! Bitte überprüfe ob dein Server die TAR Funktion (/usr/bin/tar or /usr/local/bin/tar) unterstüzt und ob die Pfade in der Konfiguration korrekt gesetzt sind.</h2>");
define("LM_MSG_BACK_14","<font color='red'>Leider gab es ein Problem bei der Erstellung des Datenbank Backups. Bitte überprüfe deinen MySQLDump Server Pfad im Tab 'Allgemein'.</font>");
define("LM_CRON_TOP","Anleitung - Cron Backup einstellen");
define("LM_CRON_SUB","Mit Hilfe der Cron Funktion kannst du voll automatische Backups deiner Joomla Webseite erstellen lassen!Um dies zu aktivieren, musst du in deinem Cron Job Panel deines Servers, Details zum CronJob erfährst du vondeinem Hoster, folgenden Befehl hinzufügen:<br />");
define("LM_CRON_HELP","Anmerkungen:- wenn dein PHP Verzeichnis nicht /usr/bin/php ist, dann nutze bitte folgendes: format /$"."php_path/phpWeiterführende Informationen (englisch) wie man ein Cronjob konfiguriert für- Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>click here</a>- Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>click here</a>- Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>click here</a>- General Linux crontab info <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>click here</a>Wenn du Hilfe beim Setup des Cron Backups benötigst oder Probleme beim Cron Backups hast, dann wende dich bittean unser Forum <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a> oder schreibe uns eine Email an <a href='mailto:admin@xcloner.com'>admin@xcloner.com</a>");
define("LM_CRON_SETTINGS","Cron Einstellungen");
define("LM_CRON_MODE","Backup Speicher Modus:");
define("LM_CRON_MODE_INFO"," <br /><small>*: Wenn 'Lokaler Server' ausgewählt wird, dann wird der default Backup Pfad aus dem Tab 'Allgemein' genutzt, um das Backup zu speichern.</small><br /><br /><small>**: Wenn 'Email' ausgewählt wird, dann kann nicht garantiert werden, dass das Backup korrekt zugestellt wird, wenn Provider Einschränkungen überschritten werden (Speicherplatz, etc.).</small>");
define("LM_CRON_TYPE_INFO","<small><br />Bitte wähle den Backup Modus, mit dem die Cron Backups erstellt werden sollen.</small>");
define("LM_CRON_MYSQL_DETAILS","MySQL Optionen");
define("LM_CRON_MYSQL_DROP","MySQL Drop ergänzen:");
define("LM_CRON_TYPE","Backup Modus:");
define("LM_CRON_FTP_DETAILS","FTP Speichermodus Details");
define("LM_CRON_FTP_SERVER","FTP Server:");
define("LM_CRON_FTP_USER","FTP Username:");
define("LM_CRON_FTP_PASS","FTP Passwort:");
define("LM_CRON_FTP_PATH","FTP Pfad:");
define("LM_CRON_FTP_DELB","Nach Transfer das Backup löschen:");
define("LM_CRON_EMAIL_DETAILS","Email Modus Details");
define("LM_CRON_EMAIL_ACCOUNT","Email Account:");
define("LM_CRON_COMPRESS","Backup Archive komprimieren:");
define("LM_RESTORE_TOP","Anleitung - Backup wiederherstellen");
define("LM_CREDIT_TOP","Über XCloner:");
define("LM_CLONE_FORM_TOP","<h2>Bitte gib deine FTP Einstellungen hier ein:</h2>");
define("LM_CONFIG_INFO_T_SAFEMODE","PHP Safe_mode:");
define("LM_CONFIG_INFO_T_VERSION","PHP Version Check:");
define("LM_CONFIG_INFO_T_MTIME","PHP max_execution_time:");
define("LM_CONFIG_INFO_T_MEML","PHP memory_limit:");
define("LM_CONFIG_INFO_T_BDIR","PHP open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() Funktion Support:");
define("LM_CONFIG_INFO_T_TAR","TAR Utility Server Pfad:");
define("LM_CONFIG_INFO_T_ZIP","ZIP Utility Server Pfad:");
define("LM_CONFIG_INFO_T_MSQL","MySQLDump Utility Server Pfad:");
define("LM_CONFIG_INFO_T_BPATH","Backup Pfad:");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","<small>Der Backup Start Pfad muss existieren und lesbar sein, damit XCloner den Backup Prozess starten kann.</small>");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP","Temporäres Verzeichnis:");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","<small>Dieser Pfad muss erstellt und beschreibbar sein, damit XCloner ordnungsgemäß arbeiten kann.</small>");
define("LM_CONFIG_INFO","Dieses Tab zeigt allgemeine System Infos und Pfade");
define("LM_CONFIG_INFO_PATHS","Generelle Pfad Informationen:");
define("LM_CONFIG_INFO_PHP","PHP Konfiguration:");
define("LM_CONFIG_INFO_TIME","<small>Diese Einstellung definiert die maximale Zeit in Sekunden, die das Backup Skript auf dem Server laufen darf.</small>");
define("LM_CONFIG_INFO_MEMORY","<small>Diese Einstellung definiert, wieviel Speicher das Backup Skript für die Backuperstellung maximal nutzen darf.</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Diese Einstellung definiert die Pfade, auf welche das Backup Skript zugreifen darf. Kein Wert heißt, dass das Skript auf alle Pfade zugreifen darf.</small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>Safe Mode muss 'Off' geschaltet sein, damit XCloner ordnungsgemäß funktioniert.</small>");
define("LM_CONFIG_INFO_VERSION","<small>PHP >=5.2.3 is required to enjoy all features</small>");
define("LM_CONFIG_INFO_TAR","<small>Wenn das Skript den TAR Pfad nicht automatisch bestimmen kann, musst du die TAR Option 'Aktiv' im Tab 'Allgemein' deaktivieren.</small>");
define("LM_CONFIG_INFO_ZIP","<small>Wenn das Skript den ZIP Pfad nicht automatisch bestimmen kann, musst du die ZIP Option 'Aktiv' im Tab 'Allgemein' deaktivieren.</small>");
define("LM_CONFIG_INFO_MSQL","<small>Wenn das Skript den MySQLDump Pfad nicht automatisch bestimmen kann, musst du die MySQLDump Option 'Aktiv' im Tab 'Allgemein' deaktivieren.</small>");
define("LM_CONFIG_INFO_EXEC","<small>Wenn diese Funktion deaktiviert ist, musst du die Checkbox 'Aktiv' im Tab 'Allgemein' deaktivieren.</small>");
define("LM_CONFIG_INFO_BPATH","<small>Dieses Verzeichnis muss beschreibbar sein, damit XCloner die Backups abspeichern kann.</small>");
define("LM_TRANSFER_URL","Website URL:");
define("LM_TRANSFER_URL_SUB","<small>Bitte gib die Webseiten URL an, auf die das Backup geklont / kopiert werden soll. Beispiel: http://www.webseite.de/</small>");
define("LM_TRANSFER_FTP_HOST","FTP Hostname:");
define("LM_TRANSFER_FTP_HOST_SUB","Beispiel ftp.webseite.de");
define("LM_TRANSFER_FTP_USER","FTP Username:");
define("LM_TRANSFER_FTP_USER_SUB","Beispiel 'john'");
define("LM_TRANSFER_FTP_PASS","FTP Passwort:");
define("LM_TRANSFER_FTP_PASS_SUB","Beispiel 'johnpass'");
define("LM_TRANSFER_FTP_DIR","FTP Verzeichnis:");
define("LM_TRANSFER_FTP_DIR_SUB","Bitte gib das FTP Verzeichnis an, auf die das Backup geklont / kopiert werden soll. Beispiel: public_html/ oder htdocs/ . Stelle die Zugriffberechtigungen dafür auf 777.");
define("LM_BACKUP_NAME","<b>Bitte wählen den gewünschten Backupnamen</b>");
define("LM_BACKUP_NAME_SUB","<small>Wenn freigelassen, wird XCloner den Default Backupnamen wählen.</small>");
define("LM_COM_TITLE","XCloner Manager -");
define("LM_COM_TITLE_CONFIRM","Confirm Folder Selection");
define("LM_COL_FILENAME","Backup Set");
define("LM_COL_DOWNLOAD","Download");
define("LM_COL_AVALAIBLE","Frontend Paket");
define("LM_COL_SIZE","Size of Set");
define("LM_COL_DATE","Date of Backup");
define("LM_COL_FOLDER","<b>Excluded Folders and/or files</b>");
define("LM_DELETE_FILE_SUCCESS","Datei(en) gelöscht");
define("LM_DOWNLOAD_TITLE","Downloade dieses Backup Archiv");
define("LM_ARCHIVE_NAME","Archive Name");
define("LM_NUMBER_FOLDERS","Number of Folders");
define("LM_NUMBER_FILES","Number of Files");
define("LM_SIZE_ORIGINAL","Size of Original File");
define("LM_SIZE_ARCHIVE","Size of Archive");
define("LM_DATABASE_ARCHIVE","Database Backup");
define("LM_CONFIRM_INSTRUCTIONS","<b>Please select the folders you wish to exclude from the archive</b><br />- by default all folders are included, if you wish to exclude a folder and it's subfolders just check the box next to it");
define("LM_CONFIRM_DATABASE","Backup Database");
define("LM_DATABASE_EXCLUDED","Ausgeschlossen");
define("LM_DATABASE_CURRENT","Aktuelle Datenbank:");
define("LM_DATABASE_INCLUDE_DATABASES","Zusätzliche Datenbanken sichern");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","<small>Du kannst mehrere Datenbanken in die Backuperstellung einschließen, indem du die STRG Taste beim Auswählen mit der Maus gedrückt hälst. Die Datenbanken werden im Administrator / Backups Verzeichnis in deinem Backup Archiv gespeichert.</small>");
define("LM_DATABASE_MISSING_TABLES","Fehler: Tabellen Definitionen nicht gefunden");
define("LM_DATABASE_BACKUP_FAILED","Backup ist leider fehlgeschlagen. Bitte überprüfe, ob das Administrator / Backup Verzeichnis Schreibzugriff hat!");
define("LM_DATABASE_BACKUP_COMPLETED","Backup vollständig");
define("LM_RENAME_TOP","Ausgewählte Klone umbenennen");
define("LM_RENAME","Klon umbenennen");
define("LM_RENAME_TO"," zu");
define("LM_CLONER_RESTORE","<h2>Wie du ein Backup an verschiedenen Stellen wiederherstellen kannst</h2><pre>Mit XCloner ist es kaum einfacher deine Backups wiederherzustellen. Mit Hilfe der Klon Funktion aus dem <a href='index2.php?option=com_cloner&task=view'>Backups anzeigen</a>Bereich kannst du deine Joomla Backups an jede Stelle im Internet verschieben und wiederherstellen / einspielen.Und folgende Arbeitsschritte sind dafür notwendig:<b>Schritt 1 - Bewege dein Backup auf den neuen Server</b>- öffne den Bereich 'Backups anzeigen' im XCloner Backend- nachdem du das jeweilige Backup ausgewählt hast, klicke auf den 'Clone' Button- gib nun die FTP Zugangsdaten des neuen Servers ein, an dem das Backup eingespielt werden soll- Nachdem du den Submit Button angeklickt hast wird das Backup und das Wiederherstellungsskript auf den neuen Server kopiert- Du bekommst abschließend eine URL angezeigt, die dich zum nächsten Arbeitsschritt führt.Beispiel URL: <b>http://neue-seite.de/XCloner.php</b><b>Anmerkung: </b>Wenn dieser Prozess fehlschlagen sollte, dann befolge diese Schritte:1. Downloade das Backup auf deinen Computer2. Downloade das Wiederherstellungsskript, welches aus 2 Dateien besteht. Zu finden imVerzeichnis administrator/components/com_xcloner-backupandrestore/restore/3. Uploade das Backup und alle Dateien des Wiederherstellungskripts auf den neuen Server4. Rufe nun XCloner.php auf dem neuen Server mit deinem Browser auf und befolge abschließenddie Anweisungen des Wiederherstellungsskripts<b>Schritt 2 - XCloner Wiederherstellungsskript</b>- In diesem Schritt hast du bereits das Backup und das Wiederherstellungsskript auf dem neuen Server (siehe oben)- Gib nun deine neuen MySQL Zugangsdaten des neuen Servers ein(MySQL hostname, user, pass und Datenbank Name)- Gib die URL der neuen Webseite und die neuen Zugangsdaten ein- Für die eigentliche Wiederherstellung des Backups hast du <b>zwei Optionen:</b>- 1. Wiederherstellung der Dateien über FTP. Das Skript wird ein FTP Upload auf den neuen Server simulieren.Somit werden eventuelle Zugriffsprobleme vermieden (wwwrun)- 2. Direkte Wiederherstellung der Dateien. Dabei wird das Backup direkt auf dem Server entpackt. Diese Optionist schneller, kann aber an Zugriffsprobleme scheitern, wenn der Zugriff auf den FTP User eingestellt istanstatt wwwrun- Nachdem du den Submit Button angeklickt hast, beginnt die Wiederherstellung / das Einspielen der Dateienund der Datenbank- Wenn alles einwandfrei geklappt hat, kann der Backup Klon direkt auf der neuen URL / Server verwendet werdenHast du Fragen oder Probleme? Dann wende dich bitte an unser Forum <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>oder schreibe uns eine Email an <a href='mailto:info@xcloner.com'>info@xcloner.com</a>.</pre>");
define("LM_CLONER_ABOUT","<h2>XCloner Backup</h2><br />
      <pre>XCloner ist ein Tool, das dir bei der Backuperstellung von Joomla Webseiten umfassend hilft - bishin zur voll 
automatischen Backuperstellung. Du kannst Backups erstellen, wiederherstellen oder verschieben und klonen. So wird 
deine Webseite immer abgesichert sein und das ohne großen Aufwand.

    <b>Features:</b>
       - Cron Skript für die automatische Backuperstellung
       - Optionen für multiple Backups
       - Wiederherstellungstool für das einfache, schnelle Verschieben von ganzen Webseiten
       - Verschiedene Backuporte, an denen das Backup sicher gespeichert werden kann

Für Mitteilungen und Vorschläge wende dich bitte an admin@xcloner.com oder besuche uns auf 
<a href='http://www.xcloner.com'>http://www.xcloner.com</a>.
	   
<b>Deutsche Übersetzung</b>: Du hast Verbesserungsvorschläge oder Fragen bezüglich der deutschen Übersetzung von 
XCloner? Dann wende dich per Kontaktformular an <a href='http://www.joomla-blog.net'>Joomla Blog Insider</a>. Vielen Dank im Voraus!
       </pre>
      <br/>
      XCloner.com &copy; 2004-2010 | <a href=\"http://www.xcloner.com\">www.xcloner.com</a>
      <br/><p/><br/>");
define("LM_LOGIN_TEXT","<pre>
<b>Weitere Infos:</b>
 1. Wenn du diesen Login das erste Mal siehst, ist dein Username '<i>admin</i>' und dein Passwort '<i>admin</i>'. 
    Bitte ändere beide Angaben nach dem Login
 
 2. Wenn du dein Passwort vergessen haben solltest, kannst du dieses leicht zurücksetzen. Du musst dazu folgenden 
    Code ergänzen:
    
	<b>$"."_CONFIG[\"jcpass\"] = md5(\"neues_passwort\");</b>
    
    am Ende der Konfigurationsdatei cloner.config.php direkt vor der Zeile '?>'
    Vergiß nicht die Angabe 'neues_passwort' mit deinem neuen persönlichen Passwort zu ersetzen.
</pre>");
?>