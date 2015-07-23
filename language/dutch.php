<?php
define("LM_FRONT_CHOOSE_PACKAGE","<b>Kies het installatie pakket:</b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Selecteer de Joomla! versie die je wilt installeren</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Installeer Joomla Software Online</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Vul je ftp gegevens hieronder in:</h2>");
define("LM_FRONT_WEBSITE_URL","<b>Website URL:</b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Vul aub de URL van de website in waar Joomla geinstalleerd zal worden, bijvoorbeeld http://www.sitenaam.nl/Joomla</small>");
define("LM_FRONT_FTP_HOST","<b>FTP Hostnaam:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>voorbeeld ftp.sitename.com</small>");
define("LM_FRONT_FTP_USER","<b>Ftp gebruikersnaam:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>voorbeeld john</small>");
define("LM_FRONT_FTP_PASS","<b>Ftp wachtwoord:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>voorbeeld johnpass</small>");
define("LM_FRONT_FTP_DIR","<b>FTP Directory:</b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Vul aub de directorie in waar je Joomla! wilt installeren, bijvoorbeeld public_html/Joomla/ or htdocs/Joomla/ en zorg ervoor dat er schrijfrechten zijn voor iedereen, normaliter 777.</small>");
define("LM_TRANSFER_FTP_INCT","Gedeeltelijke transfer:");
define("LM_TRANSFER_FTP_INCT_SUB","zal proberen de bestanden via een gedeeltelijke transfer over te brengen om zo blanke pagina´s en time outs te voorkomen.");
define("LM_FRONT_BOTTOM","Werkt die niet voor jou? Vertel ons waarom niet -> <a href='http://www.xcloner.com/contact/'>Contact pagina</a><br />
                         Powered by <a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","We hebben de Package Restore Utility geüpload naar je ftp site. klik hier om door te gaan");
define("LM_NOPAKCAGE_ERROR","Er is geen pakket geselecteerd, installatie wordt afgebroken");
define("LM_DATABASE_EXCLUDE_TABLES","Selecteer de tabellen die niet met de backup meegenomen dienen te worden:");
define("LM_CONFIG_SYSTEM_FOLDER","Mapweergave:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","selecteer aub de manier waarop je de mappen wilt uitsluiten in de 'Genereer Backup' sectie.");
define("LM_CONFIG_SYSTEM_LANG","Systeem taal:");
define("LM_CONFIG_SYSTEM_LANG_SUB","configureert de taal van XCloner, als deze waarde op standaard staat, zal de taal van de site gebruikt worden, indien beschikbaar.");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Systeem Standaard");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Maak directe download link aan:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","indien dit is aangevinkt in het 'Bekijk de Backup's scherm zal de download link een directe link zijn naar het desbetreffende backup pakket. Houdt er rekening mee dat de backup in de Joomla! root aangemaakt moet zijn.");
define("LM_CONFIG_DISPLAY","Weergave Instellingen");
define("LM_CONFIG_SYSTEM","Systeem Instellingen");
define("LM_CONFIG_SYSTEM_FTP","Ftp Transfer Modus");
define("LM_CONFIG_SYSTEM_FTP_SUB","selecteer hoe de bestanden moeten worden overgebracht van server naar server wanneer het ftp protocol gebruikt wordt.");
define("LM_CONFIG_MEM","Backup met gebruik  van de Serverfuncties");
define("LM_CONFIG_MEM_SUB","<small>Indien ingesteld op Actief, ben je verplicht om op je server ondersteuning te hebben voor <b>zip of tar</b>  en/of <b> mysqldump commando's en zul je de paden aan moeten geven en ook <b>exec()</b> toegang in je php</small>");
define("LM_CRON_DB_BACKUP","Maak Database backup mogelijk:");
define("LM_CRON_DB_BACKUP_SUB","<small>Vink Ja aan indien je de MySQL data wilt back-uppen</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Sluit backup directory in wanneer de site gekloond wordt:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Indien Ja gebruikt wordt, zal de gemaakte backup ook alle vooraf gemaakte backups in deze backup opnemen, wat er toe bijdraagt dat de grootte van het bestand iedere keer toeneemt</small>");
define("LM_TAB_MYSQL","MySQL");
define("LM_CONFIG_MYSQL","MySQL verbindings intsellingen:");
define("LM_CONFIG_MYSQLH","MySQL Hostname:");
define("LM_CONFIG_MYSQLU","MySQL gebruikersnaam:");
define("LM_CONFIG_MYSQLP","MySQL wachtwoord:");
define("LM_CONFIG_MYSQLD","MySQL Database:");
define("LM_TAB_AUTH","Authentificatie");
define("LM_CONFIG_AUTH","Gebruikers Authentificatie Sectie");
define("LM_CONFIG_AUTH_USER","Login Gebruikersnaam:");
define("LM_CONFIG_AUTH_PASS","Login Wachtwoord:");
define("LM_CONFIG_AUTH_USER_SUB","Dit is de standaard inlog voor Xcloner");
define("LM_CONFIG_AUTH_PASS_SUB","je standaard login wachtwoord, leeg laten als je het niet wilt veranderen.");
define("LM_YES","Ja");
define("LM_NO","Neen");
define("LM_ACTIVE","Actief:");
define("LM_TAR_PATH","Tar pad of commando:");
define("LM_TAR_PATH_SUB","(verplicht indien archief type Tar en Actieve box zijn aangevinkt)");
define("LM_ZIP_PATH","Zip pad of commando:");
define("LM_ZIP_PATH_SUB","(verplicht indien archief type Zip en Actieve box zijn aangevinkt)");
define("LM_MYSQLDUMP_PATH","MySQL dump pad or commando: (verplicht indien Actieve box is aangevinkt)<br /> Voor grote MySQL dumps gebruik je het beste
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");
define("LM_CONFIG_MANUAL","Handmatig Backup Proces");
define("LM_CONFIG_MANUAL_BACKUP","Handmatige backup:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Deze optie wordt weergegeven indien er een php tijd uitvoer limiet op je server zit. Je dient voor het gebruiken van deze optie Javascript in je browser geactiveerd te hebben.");
define("LM_CONFIG_MANUAL_FILES","Bestanden die per handmatige sessie verwerkt moeten worden");
define("LM_CONFIG_MANUAL_REFRESH","Tijd tussen het verversen van de sessies:");
define("LM_CONFIG_SYSTEM_MDATABASES","Backup Meerdere Databases:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","Deze optie zal er voor zorgen dat XCloner meerdere databases kan backuppen.");
define("LM_CONFIG_CRON_LOCAL","Locale Server*");
define("LM_CONFIG_CRON_REMOTE","FTP account op afstand");
define("LM_CONFIG_CRON_EMAIL","E-mail**");
define("LM_CONFIG_CRON_FULL","Volledig (bestanden + database)");
define("LM_CONFIG_CRON_FILES","Enkel de bestanden");
define("LM_CONFIG_CRON_DATABASE","Enkel de Database");
define("LM_CONFIG_EDIT","Bewerken van het config bestand");
define("LM_CONFIG_BSETTINGS","Backup Pad Instellingen");
define("LM_CONFIG_BSETTINGS_OPTIONS","Backup Generator Opties");
define("LM_CONFIG_BSETTINGS_SERVER","Server Gebruiks Opties");
define("LM_CONFIG_BPATH","Backup Oplsag Pad:");
define("LM_CONFIG_UBPATH","Backup Start Pad:");
define("LM_CONFIG_BPATH_SUB","<small>dit is het pad waar alle backups zullen worden opgeslagen</small>");
define("LM_CONFIG_UBPATH_SUB","<small>vul hier het pad in van waaruit XCloner alle processen zal starten</small>");
define("LM_CRON_EXCLUDE","Directories die uitgesloten dienen te worden");
define("LM_CRON_EXCLUDE_DIR","Sluit diretories uit, een per lijn<br> gebruik aub het volledige pad van de server directory");
define("LM_CRON_BNAME","Backup Naam:");
define("LM_CRON_BNAME_SUB","<small>Indien leeg wordt er een standaard naam gekozen wanneer er een nieuwe backup via cron wordt gemaakt</small>");
define("LM_CRON_IP","IP adressen die gebruik mogen maken van de cron optie:");
define("LM_CRON_IP_SUB","<small>Standaard heeft enkel de locale server toegant tot een cron job, maar je mag ook andere IP nummers invullen, één per lijn.</small>");
define("LM_CRON_DELETE_FILES","Oude Backups verwijderen");
define("LM_CRON_DELETE_FILES_SUB","Verwijder backups ouder dan:");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE"," Actief:");
define("LM_CRON_SEMAIL","E-mail cron log naar:");
define("LM_CRON_SEMAIL_SUB","Als er een e-mail adres is ingevuld, zal het log dat gemaakt is gedurende de cron-job naar dat betreffende e-mail adres gestuurd. Er kunnen meerdere e-mail adressen worden ingevuld, gescheiden door een ;");
define("LM_CRON_MCRON","Configuratie Naam:");
define("LM_CRON_MCRON_AVAIL","Beschikbare Configuraties:");
define("LM_CRON_MCRON_R","vul aub een eenvoudige naam in voor je nieuwe cron configuratie");
define("LM_CRON_MCRON_SUB","Met deze optie ben je in staat om de huidige configuratie op te slaan in een apart bestand en om het te gebruiken als je meerdere cron-jobs tegelijk uitvoert");
define("LM_CRON_SETTINGS_M","Meerdere CronJobs Configuratie");
define("LM_MENU_OPEN_ALL","alles openvouwen");
define("LM_MENU_CLOSE_ALL","alles sluiten");
define("LM_MENU_ADMINISTRATION","Administratie");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Configuratie");
define("LM_MENU_CRON","Cronjob");
define("LM_MENU_LANG","Vertaler");
define("LM_MENU_ACTIONS","Acties");
define("LM_MENU_Generate_backup","Backup maken");
define("LM_MENU_Restore_backup","Backup Herstellen");
define("LM_MENU_View_backups","Backups Bekijken");
define("LM_MENU_Documentation","Hulp");
define("LM_MENU_ABOUT","Over");
define("LM_DELETE_FILE_FAILED","Verwijderen mislukt, controleer de bestandsrechten");
define("LM_JOOMLAPLUG_CP","XCloner - de backup en herstel oplossing voor je website");
define("LM_MENU_FORUM","Fora");
define("LM_MENU_SUPPORT","Ondersteuning");
define("LM_MENU_WEBSITE","Web-site");
define("LM_MAIN_Settings","Instellingen");
define("LM_MAIN_View_Backups","Bekijk Backups");
define("LM_MAIN_Generate_Backup","Maak Backup");
define("LM_MAIN_Help","Hulp");
define("LM_FTP_TRANSFER_MORE","FTP Connectie Modus");
define("LM_LANG_NAME","Naam van taal");
define("LM_LANG_MSG_DEL","Taal met succes verwijderd.");
define("LM_LANG_NEW","Nieuwe naam voor taal:");
define("LM_LANG_EDIT_FILE","Bestand bewerken:");
define("LM_LANG_EDIT_FILE_SUB","Vergeet niet om om de 5 minuten je vertaling op te slaan. Klik gewoon op de Apply knop om een update te maken");
define("LM_TAB_GENERAL","Algemeen");
define("LM_TAB_G_STRUCTURE","Structuur");
define("LM_TAB_SYSTEM","Systeem");
define("LM_TAB_CRON","Cronjob");
define("LM_TAB_INFO","Informatie");
define("LM_TAB_G_DATABASE","Database Opties");
define("LM_TAB_G_FILES","Bestands Opties");
define("LM_G_EXCLUDE_COMMENT","<br>Vul hier aub de mappen in die uitgesloten worden van de backup, iedere map op een aparte lijn!
    <br><b>je zou het beste de cache functie kunnen uitschakelen als je begint met een backup te maken, of de cache mappen uitsluiten van de backup.</b>");
define("LM_MSG_FRONT_1","Geen pakket beschikbaar");
define("LM_MSG_FRONT_2","FTP upload naar bestemming is mislukt");
define("LM_MSG_FRONT_3","Upload klaar voor:");
define("LM_MSG_FRONT_4","FTP connectie is mislukt!");
define("LM_MSG_FRONT_5","Probeer te verbinden met");
define("LM_MSG_FRONT_6","voor gebruiker");
define("LM_MSG_BACK_1","Configuratie met succes bijgewerkt");
define("LM_MSG_BACK_2","FTP connectie is mislukt!");
define("LM_MSG_BACK_3","Het verplaatsen van de backup is afgerond. De door jou geselecteerde backup zou nu beschikbaar moeten zijn op de aangegeven locatie");
define("LM_MSG_BACK_4","Verplaatsen afgerond, het clone proces op de nieuwe server wordt gestart.");
define("LM_MSG_BACK_5","Met succes gede-publiceerd op de voorpagina");
define("LM_MSG_BACK_6","de-publiceren mislukt, controleer je paden!");
define("LM_MSG_BACK_7","Met succes gepubliceerd naar de voorpagina");
define("LM_MSG_BACK_8","Publiceren mislukt, controleer je paden!");
define("LM_MSG_BACK_9","De Kloons zijn met succes hernoemd!");
define("LM_MSG_BACK_10","Het Joomla! pad ligt niet binnen je backup pad. Kan geen gebruik maken van de directe download methode. Je moet je Configuratie -> Systeem tab bewerken en de optie Directe download op nee zetten.");
define("LM_MSG_BACK_11","Alle taken zijn volbracht. Het handmatige backup proces is klaar.<a href='index2.php?option=com_cloner&task=view'>Klik hier om verder te gaan</a>");
define("LM_MSG_BACK_12","<h2>Backup mislukt! controleer of je gebruik kunt maken van de ZIP applicatie op je server (/usr/bin/zip of /usr/local/bin/zip) en of het juist is ingevuld in je configuratie. Kies anders voor het TAR archief type</h2>");
define("LM_MSG_BACK_13","<h2>Backup mislukt! controleer of je gebruik kunt maken van de TAR applicatie op je server (/usr/bin/tar of /usr/local/bin/tar) en of het juist is ingevuld in je configuratie. Kies anders voor het ZIP archief type</h2>");
define("LM_MSG_BACK_14","<font color='red'>Er is een probleem opgetreden bij het maken van een database backup, controleer aub het MySQL server pad!</font>");
define("LM_CRON_TOP","Instellen van een Cron backup:");
define("LM_CRON_SUB","<b>Door het gebruik van de Cron functie kun je een automatische backup van je Joomla! webstie laten maken</b>. Om dit in te stellen moet je in het configuratiescherm van je crontab het volgende commando invoeren:");
define("LM_CRON_HELP","Notes:
 - indien de PHP locatie verschilt van /usr/bin/php gebruik dan die, formaat /$"."php_path/php


Voor meer informatie over het instellen van cronjobs kun je terecht op een van de onderstaande locaties
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>klik hier</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>klik hier</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>klik hier</a>
 - Algemene Linux crontab informatie <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>klik hier</a>

If you need help setting it up or have problems please consult our forums <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a>
or email us at <a href='mailto:admin@xcloner.com'>admin@xcloner.com</a>");
define("LM_CRON_SETTINGS","Cron instellingen");
define("LM_CRON_MODE","Backup opslag modus:");
define("LM_CRON_MODE_INFO"," <br />
      <small> let op:* indien local server is gekozen, zullen we het standaard backup pad gebruikeren, zoals op het tabblad Algemeen aangegeven.</small>
      <br />
      <small> let op:** als de e-mail modus wordt gebruikt, kunnen we niet garanderen of de backup het account zal bereiken, dit ivm de beperkingen van de desbetreffende provider.</small>");
define("LM_CRON_TYPE_INFO","<small><br /> selecteer het type backup dat je wilt aanmaken</small>");
define("LM_CRON_MYSQL_DETAILS","MySQL Opties");
define("LM_CRON_MYSQL_DROP","Voeg MySQL Drop toe:");
define("LM_CRON_TYPE","Backup soort:");
define("LM_CRON_FTP_DETAILS","meer details over FTP opslag :");
define("LM_CRON_FTP_SERVER","FTP Serveradres:");
define("LM_CRON_FTP_USER","FTP gebruikersnaam:");
define("LM_CRON_FTP_PASS","FTP wachtwoord:");
define("LM_CRON_FTP_PATH","FTP pad:");
define("LM_CRON_FTP_DELB","Verwijder backup na transfer:");
define("LM_CRON_EMAIL_DETAILS","E-mail modus details:");
define("LM_CRON_EMAIL_ACCOUNT","E-mail account:");
define("LM_CRON_COMPRESS","Comprimeer backup bestanden");
define("LM_RESTORE_TOP","Herstelinformatie over je backupsRestoring your backups info:");
define("LM_CREDIT_TOP","Over XCloner:");
define("LM_CLONE_FORM_TOP","<h2>Vul hieronder je FTP gegevens in</h2>");
define("LM_CONFIG_INFO_T_SAFEMODE","PHP Safe_mode:");
define("LM_CONFIG_INFO_T_MTIME","PHP max_execution_time:");
define("LM_CONFIG_INFO_T_MEML","PHP memory_limit:");
define("LM_CONFIG_INFO_T_BDIR","PHP open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() functie ondersteuning:");
define("LM_CONFIG_INFO_T_TAR","pad op de server voor de TAR applicatie:");
define("LM_CONFIG_INFO_T_ZIP","pad op de server voor de ZIP applicatie:");
define("LM_CONFIG_INFO_T_MSQL","pad op de server voor de MySQLdump applicatie:");
define("LM_CONFIG_INFO_T_BPATH","Backup Pad:");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","het backup pad moet reeds aangemaakt zijn en leesbaar eer je XCloner kunt laten starten met het backup proces.");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP","Tijdelijke map");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","Dit pad moet aangemaakt worden met schrijfrechten om XCloner goed te laten functioneren");
define("LM_CONFIG_INFO","Dit tabblad geeft de algemene instellingen en paden weer.");
define("LM_CONFIG_INFO_PATHS","Informatie over het algemene pad.");
define("LM_CONFIG_INFO_PHP","PHP Configuratien Informatie:");
define("LM_CONFIG_INFO_TIME","<small>Dit regelt de maximale tijdsduur in seconden, dat je script op de server mag gebruiken.</small>");
define("LM_CONFIG_INFO_MEMORY","<small>Dit regelt de maximum aan geheugen dat je script voor de uitvoer mag aanroepen voor de benodigde processen</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Dit regelt de paden waar je script toegang tot heeft, geen waarde betekend dat het script elk pad kan gebruiken.</small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>safe mode moet uitgeschakeld zijn om XCloner goed te laten werken.</small>");
define("LM_CONFIG_INFO_TAR","<small>Indien het script niet in staat is om het TAR pad automatisch te detecteren zou je het keuzehokje 'Actief' naast TAR op het tabblad Algemeen kunnen uitvinken.</small>");
define("LM_CONFIG_INFO_ZIP","<small>Indien het script niet in staat is om het ZIP pad automatisch te detecteren zou je het keuzehokje 'Actief' naast ZIP op het tabblad Algemeen kunnen uitvinken.</small>");
define("LM_CONFIG_INFO_MSQL","<small>Indien het script niet in staat is om het MySQL dump pad automatisch te detecteren zou je het keuzehokje 'Actief' naast MySQLdump op het tabblad Algemeen kunnen uitvinken.</small>");
define("LM_CONFIG_INFO_EXEC","<small>Indien deze functie is uitgeschakeld kun je het beste de vinkjes weghalen bij beide keuzehokjes op het tabblad Algemeen.</small>");
define("LM_CONFIG_INFO_BPATH","<small>moet schrijfrechten hebben om XCloner backups te archieveren</small>");
define("LM_TRANSFER_URL","Website URL:");
define("LM_TRANSFER_URL_SUB","<small>Vul aub de URL in van de site waarheen de backup verplaatst zal worden. Bijvoorbeeld http://www.naamvandesite.nl/, we hebben dit nodig om je daarheen door te sturen om toegang te krijgen tot het herstelscript</small>");
define("LM_TRANSFER_FTP_HOST","FTP hostnaam:");
define("LM_TRANSFER_FTP_HOST_SUB","voorbeeld ftp.naamvandesite.nl");
define("LM_TRANSFER_FTP_USER","FTP gebruikersnaam");
define("LM_TRANSFER_FTP_USER_SUB","vorobeeld 'john'");
define("LM_TRANSFER_FTP_PASS","FTP wachtwoord:");
define("LM_TRANSFER_FTP_PASS_SUB","voorbeeld 'johnpass'");
define("LM_TRANSFER_FTP_DIR","FTP directory:");
define("LM_TRANSFER_FTP_DIR_SUB","Vul aub de FTP directory in waar je je backup heen wilt verplaatsen, bijvoorbeeld public_html/ or htdocs/ en zorg voor schrijfrechten voor iederen, normaliter 777");
define("LM_BACKUP_NAME","<b>Kies aub een naam voor je backup</b>");
define("LM_BACKUP_NAME_SUB","<small>Indien leeg zullen we een standaard naam invullen!</small>");
define("LM_COL_AVALAIBLE","Voorpagina Pakket");
define("LM_DELETE_FILE_SUCCESS","Bestand(en) verwijderd");
define("LM_DOWNLOAD_TITLE","Download dit Backup Set");
define("LM_DATABASE_EXCLUDED","Uitgesloten");
define("LM_DATABASE_CURRENT","Huidige database:");
define("LM_DATABASE_INCLUDE_DATABASES","Inclusief Extra Databases");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","je kunt meerdere databases in de backup opnemen door de CTRL toets ingedrukt te houden en vervolgens de gewenste bestanden te selecteren met je muis<br />
de databases zullen worden opgeslagen in de administrator/backups directory in je archief");
define("LM_DATABASE_MISSING_TABLES","Fout: Tabel definities niet gevonden");
define("LM_DATABASE_BACKUP_FAILED","Backup mislukt, controleer of je administrator/backups directory schrijfrechten heeft");
define("LM_DATABASE_BACKUP_COMPLETED","Backup Complee");
define("LM_RENAME_TOP","Hernoem geselecteerde Kloons");
define("LM_RENAME","hernoem kloon");
define("LM_RENAME_TO","naar");
define("LM_CLONER_RESTORE","<h2>Hoe herstel ik een backup op verschillende locaties INFO!</h2>
<pre>
   Het herstellen van een backup was nog nooit zo eenvoudig!
   Met behulp van onze clone functie vanuit het With the help of our cloning function from the <a href='index2.php?option=com_cloner&task=view'>Bekijk je backups</a> scherm zul je instaat zijn om je Joomla! backup te verplaatsen waardan ook op het Internet.
 
   Dit is wat je er voor moet doen:
   
   <b>Stap1 - verplaats je backup naar een  herstelhost</b>
   	
    - ga in XCloner naar de 'Bekijk Backups' sectie
    - nadat je een backup hebt geselecteerd klik je op de 'Clone it' knop
    - Vul je ftp detiails in van de server waar je je backup heen wilt clonen.
    - na de toevoeg knop te hebben gedrukt zal de backupen het herstel script naar de nieuwe host worden overgebracht krijg je een URL toegewezen waar je naar toe moet gaan, gebaseerd op de door jou ingevoerde URL voor de locatie op afstand.    
    - na op de getoonde link geklikt te hebben wordt je naar de nieuwe locatie gebracht. Voorbeeld van een URL <b>http://mijn_herstel_site.nl/XCloner.php</b>
   
   <b>Let op:</b>Als dit proces om welke reden dan ook onderbroken wordt of mislukt dien je de volgende stappen te nemen   	
1. Download de backup naar je computer
   	2. Download het herstel script, alle de bestanden uit de volgende directory: administrator/components/com_cloner-backupandrestore/restore/
   	3. Upload beiden backup en herstel script naar de herstel locatie
   	4. Start XCloner.php in je browser en volg het herstelscherm zoals hieronder aangegeven
   
   <b>Stap 2 - het XCloner.php herstel scherm:</b>
    
   <b>XCloner.php - het herstel script</b>
    - In deze stap heb je reeds de kloon en het herstelscript op de desbetreffende plaats geüpload
    - Vul de nieuwe MySQL gegevens in, inclusief MySQL hostnaam, gebruikersnaam en paswoord, en de nieuwe database die van de orginele verschilt.
    - Vul de URL van de nieuwe locatie in en je wachtwoord.
    - Om de bestanden te herstellen heb je <b>2 opties:</b>
       
       	- 1. herstel de bestanden over FTP, het script zal dan een FTP proces emuleren op je server, dat zal ook het rechtenprobleem uit stap 2 oplossen.
       	- 2. herstel de bestanden direct, dit zal je bestanden op de server uitpakken, deze manier is erg snel, maar zou wel eens rechtenproblemen met zich mee kunnen brengen als je veel gebruik maakt van FTP om wijzigingen aan je site aan te brengen. 
       			
    - nadat je op toevoegen hebt geklikt, zal het script proberen om de bestanden naar het nieuwe pad te verplaatsen, direct of via FTP, en zal ook de database installeren
    - indien alles zonder fouten is verlopen zou je gekloonde site het moeten doen vanaf de nieuwe locatie
    
    Voor ondersteuning kun je het best gebruik maken van onze fora <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
    of ons een e-mail sturen via: <a href='mailto:info@xcloner.com'>info@xcloner.com</a>
   

</pre>");
define("LM_CLONER_ABOUT","<h2>XCloner Backup</h2>
      <pre>XCloner is een gereedschap dat je helpt om een backups te beheren van je Joomla! websites. Genereer/Herstel/Verplaats een backup zodat je Joomla! website altijd veilig zal zijn.

      Features:
       -cron script to generate backup
       -multiple backup options
       -restore tool to move the website rapidly to other locations
       -multiple locations of where you could store the backup safelly

       For reports and suggestions please contact us at admin@xcloner.com or visit us on <a href='http://www.xcloner.com'>http://www.xcloner.com</a>
       </pre>
      <br/><br/>

      XCloner.com © 2004-2010 | <a href='http://www.xcloner.com'>www.xcloner.com</a>
      <br/><p/><br/>");
define("LM_LOGIN_TEXT","<pre>
<b>Notes:</b>
 1. Als je dit scherm voor het eerst ziet is je standaard 
    gebruikersnaam '<i>admin</i>'en wachtwoord'<i>admin</i>', je zult deze na het inloggen moeten wijzigen
 
 2. Om je wachtwoord te resetten als je het vergeten bent, zul je onderstaande code moeten toevoegen:
    
	<b>$"."_CONFIG['jcpass'] = md5('my_new_pass')</b></pre>");
?>
