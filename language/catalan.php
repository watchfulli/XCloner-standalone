<?php
// --- FRONT AREA---//
define("LM_FRONT_CHOOSE_PACKAGE","<b>Escull el paquet a instal·lar: </b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Si us plau, selecciona la teva versió de Joomla per instal·lar</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Instal·lar programari Joomla vía web</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Introdueix les teves dades ftp: </h2>");
define("LM_FRONT_WEBSITE_URL","<b>Url de la web: </b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Si us plau, introdueix la url de la web on s'instal·larà Joomla. Exemple: http://www.sitename.com/joomla</small>");
define("LM_FRONT_FTP_HOST","<b>servidor FTP:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>Exemple ftp.sitename.de</small>");
define("LM_FRONT_FTP_USER","<b>FTP Login:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>Exemple Juan</small>");
define("LM_FRONT_FTP_PASS","<b>Contrasenya FTP:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>Exemple contrasenyaJuan</small>");
define("LM_FRONT_FTP_DIR","<b>Directori FTP: </b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Si us plau, introduiu el directori FTP on us agradaria instal·lar Joomla. Exemple: public_html/Joomla o htdocs/joomla i assegureu-vos de que té permisos per tothom, generalment 777</small>");
define("LM_TRANSFER_FTP_INCT","transferència incremental:");
define("LM_TRANSFER_FTP_INCT_SUB","Intentarà transferir els fitxers per FTP en mode incremental per evitar pàgines en blanc o timeouts.");
define("LM_FRONT_BOTTOM","No t'ha funcionat? Si us plau, envian's un comentari amb el que ha passat <a href='http://www.xcloner.com/contact/'>Pàgina de contacte </a><br />Fet per<a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","S'ha pujat el paquet d'utilitats de restauració al vostre lloc FTP. Per continuar, cliqueu aquí.");
define("LM_NOPAKCAGE_ERROR","No s'ha seleccionat cap paquet. Abortant...!");

// --- BACKEND AREA---//

//Amazon S3
define("LM_AMAZON_S3", "Emmagatzament Amazon S3");
define("LM_AMAZON_S3_ACTIVATE", "Activar");
define("LM_AMAZON_S3_AWSACCESSKEY", "Clau d'accés AWS:");
define("LM_AMAZON_S3_AWSSECRETKEY", "Clau secreta AWS:");
define("LM_AMAZON_S3_BUCKET", "Nom:");
define("LM_AMAZON_S3_DIRNAME", "Directori de pujada:");
define("LM_AMAZON_S3_SSL","Activar transferència SSL");

define("LM_DATABASE_EXCLUDE_TABLES","Selecciona les taules que vols excloure (opcional)");
define("LM_CONFIG_SYSTEM_FOLDER","Visualització de carpetes:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","Si us plau, selecciona el mode en el que vols seleccionar les carpetes excloses des de la secció -Generar còpia de seguretat-");
define("LM_CONFIG_SYSTEM_LANG","Idioma del sistema:");
define("LM_CONFIG_SYSTEM_LANG_SUB","<small>Configura l'idoma de XCloner. si es deix en -default- mostrarà el que vé per defecte en Joomla.</small>");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Idioma per defecte");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Activar enllaç de descàrrega directa:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","Si s'activa, a la pantalla -Veure còpies de seguretat-");
define("LM_CONFIG_DISPLAY","Configuració de vista");
define("LM_CONFIG_SYSTEM","Configuració del sistema");
define("LM_CONFIG_SYSTEM_FTP","Mode de transferència FTP");
define("LM_CONFIG_SYSTEM_FTP_SUB","<small>Selecciona la forma en que es transferiran els arxius entre servidors amb el protocol FTP.</small>");
define("LM_CONFIG_MEM","Còpia de seguretat utilitzant funcions de servidor:");
define("LM_CONFIG_MEM_SUB","<small>Si s'activa es requerirà que el teu servidor permeti <b>ZIP o TAR</b> i/o <b>comandes MySQLDump</b> i especificar les rutes, i també permisos d' <b>execució()</b> al teu php.</small>");
define("LM_CRON_DB_BACKUP","Permetre còpia de seguretat de la base de dades:");
define("LM_CRON_DB_BACKUP_SUB","<small>Comprova si t'agradaria copiar les dades de mysql</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Incloure les carpetes de còpia de seguretat a Clonació:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Si s'escull -Si- la còpia de seguretat creada contindrà arxius de còpia previs, augmentant cada vegada la seva mida</small>");

define("LM_TAB_MYSQL","MYSQL");
define("LM_CONFIG_MYSQL","configuració de connexió MySQL");
define("LM_CONFIG_MYSQLH","Servidor MySQL:");
define("LM_CONFIG_MYSQLU","usuari MySQL :");
define("LM_CONFIG_MYSQLP","Contrasenya MySQL :");
define("LM_CONFIG_MYSQLD","Base de dades MySQL:");

define("LM_TAB_AUTH","autentificació");
define("LM_CONFIG_AUTH","Àrea d'autentificació");
define("LM_CONFIG_AUTH_USER","Usuari:");
define("LM_CONFIG_AUTH_PASS","Contrasenya:");
define("LM_CONFIG_AUTH_USER_SUB","<small>Aquest serà el teu usuari per defecte per a XCloner.</small>");
define("LM_CONFIG_AUTH_PASS_SUB","<small>La teva contrasenya per defecte. Deixa-la en blanc si no vols cambiar-la.</small>");

define("LM_YES","Si");
define("LM_NO","No");
define("LM_ACTIVE","Actiu:");
define("LM_TAR_PATH","Ruta o comanda Tar:");
define("LM_TAR_PATH_SUB","<small>(Es requereix quan el tipus d'arxiu es Tar i 'Actiu' està marcat.)</small>");
define("LM_ZIP_PATH","Ruta o comanda ZIP:");
define("LM_ZIP_PATH_SUB","<small>(Es requereix quan el tipus d'arxiu es Tar i 'Actiu' està marcat.)</small>");
define("LM_MYSQLDUMP_PATH","Ruta o comanda MySQLDump:<br />(Es requereix si 'Actiu' està marcat
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");

// --- CONFIG ---//
define("LM_CONFIG_MANUAL","Procés de còpia de seguretat manual");
define("LM_CONFIG_MANUAL_BACKUP","Còpia de seguretat manual");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Aquesta opció és per quan hi ha limitacions de temps de execució al servidor. Requereix que tinguis javascript activat al teu navegador.");
define("LM_CONFIG_MANUAL_FILES","Fitxers a processar en la sessió manual:");
define("LM_CONFIG_MANUAL_REFRESH","Temps de refresc entre sessions:");
define("LM_CONFIG_SYSTEM_MDATABASES","Còpia de seuretat de bases de dades múltiples:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","Aquesta opció controla quan XCloner pot fer una còpia de seguretat de bases de dades múltiples.");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Excloure fitxers més grans que:");

define("LM_CONFIG_CRON_LOCAL","Servidor local*");
define("LM_CONFIG_CRON_REMOTE","Compte FTP remot");
define("LM_CONFIG_CRON_EMAIL","Correu**");
define("LM_CONFIG_CRON_FULL","Complet (fitxers + BBDD)");
define("LM_CONFIG_CRON_FILES","Només fitxers");
define("LM_CONFIG_CRON_DATABASE","Només BBDD");

define("LM_CONFIG_EDIT","Editar fitxer de configuració:");
define("LM_CONFIG_BSETTINGS","Ruta de configuració de la còpia de seguretat.");
define("LM_CONFIG_BSETTINGS_OPTIONS","Opcions del generador de còpies de seguretat");
define("LM_CONFIG_BSETTINGS_SERVER","Opcions de l'ús del servidor");
define("LM_CONFIG_BPATH","Ruta per guardar còpia de seguretat:");
define("LM_CONFIG_UBPATH","Ruta d'inici de còpia de seguretat:");
define("LM_CONFIG_BPATH_SUB","<small>Aquesta és la ruta on es guardaran totes les còpies de seguretat.</small>");
define("LM_CONFIG_UBPATH_SUB","<small>Introduiu aquí la ruta d'inici de la còpia de seguretat des d'on XCloner començarà tots els processos.</small>");
define("LM_CRON_EXCLUDE","Carpetes excloses");
define("LM_CRON_EXCLUDE_DIR","Carpetes excloses, llistat una per línia <br>si us plau, useu la ruta completa del directori del servidor");
define("LM_CRON_BNAME","Nom de la còpia de seguretat:");
define("LM_CRON_BNAME_SUB","<small>Si es deixa en blanc, generarem un nom per defecte cada vegada que una còpia de seguretat cron sigui realitzada.</small>");
define("LM_CRON_IP","IP's Cron permeses:");
define("LM_CRON_IP_SUB","<small>per defecte, només el servidor local tindrà accés al procés cron, però pots introduir altres IP's, una per línia.</small>");
define("LM_CRON_DELETE_FILES","Borrar velles còpies de seguretat");
define("LM_CRON_DELETE_FILES_SUB","Borrar còpies de seguretat prèvies:");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE","Actiu:");
define("LM_CRON_SEMAIL","Enviar log Cron a:");
define("LM_CRON_SEMAIL_SUB","<small>Si escriviu una adreça de correu, després de córrer el procés Cron, enviarem un correu a aquesta adreça. Si son més adreces separeu amb ';'</small>");
define("LM_CRON_MCRON","Nom de la configuració:");
define("LM_CRON_MCRON_AVAIL","Configuracions disponibles:");
define("LM_CRON_MCRON_R","Si us plau introdueix un nom per la teva configuració Cron.");
define("LM_CRON_MCRON_SUB","<small>Amb aquesta opció podràs guardar la configuració actual en un fitxer separat i utilitzar-lo per córrer processos Cron múltiples.</small>");
define("LM_CRON_SETTINGS_M","Configuració de processos Cron múltiples");
define("LM_CONFIG_SPLIT_BACKUP_SIZE", "Dividir el fitxer de còpia de seguretat si és més gran que:");

// --- MENU ---//
define("LM_MENU_OPEN_ALL","Obrir tots");
define("LM_MENU_CLOSE_ALL","Tancar tots ");
define("LM_MENU_ADMINISTRATION","Administració");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Configuració");
define("LM_MENU_CRON","Cron");
define("LM_MENU_LANG","Traductor");
define("LM_MENU_ACTIONS","Accions");
define("LM_MENU_Generate_backup","Generar còpia de seguretat");
define("LM_MENU_Restore_backup","Restaurar còpia de seguretat");
define("LM_MENU_View_backups","Veure còpies de seguretat");
define("LM_MENU_Documentation","Ajuda");
define("LM_MENU_ABOUT","Sobre XCloner");
define("LM_DELETE_FILE_FAILED","Ha fallat el borrat, si us plau comprova els permisos dels arxius");
define("LM_JOOMLAPLUG_CP","XCloner - LA solució de còpies de seguretat");
define("LM_MENU_FORUM","Fòrum");
define("LM_MENU_SUPPORT","Suport tècnic");
define("LM_MENU_WEBSITE","Pàgina web");

define("LM_MAIN_Settings","Configuració");
define("LM_MAIN_View_Backups","Veure còpies de seguretat");
define("LM_MAIN_Generate_Backup","Generar còpies de seguretat");
define("LM_MAIN_Help","Ajuda");
define("LM_FTP_TRANSFER_MORE","Mode connexió FTP");
define("LM_REFRESH_MODE","Mode refrescar còpia de seguretat");
define("LM_DEBUG_MODE","Activar log:");
define("LM_REFRESH_ERROR","Hi ha hagut un error mentres es recuperava les dades JSON del servidor, proveu una altra vegada o contacteu amb els desenvolupadors!");

// --- LANGUAGE --//
define("LM_LANG_NAME","Nom de l'idioma");
define("LM_LANG_MSG_DEL","Idioma borrat amb èxit!");
define("LM_LANG_NEW","Nou nom de l'idioma:");
define("LM_LANG_EDIT_FILE","Editar arxiu:");
define("LM_LANG_EDIT_FILE_SUB","No oblidis guardar la teva traducció cada 5 minuts. Només prem el botó aplicar per actualitzar.");

// --- TABS --//
define("LM_TAB_GENERAL","General");
define("LM_TAB_G_STRUCTURE","Estructura");
define("LM_TAB_SYSTEM","Sistema");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Info servidor");
define("LM_TAB_G_DATABASE","Opcions de BBDD");
define("LM_TAB_G_FILES","Opcions de fitxers");
define("LM_G_EXCLUDE_COMMENT","<br>Si us plau, introdueix aqui les carpetes excloses.
    <br><b>Pot ser que vulguis deshabilitar la caché quan facis una còpia de seguretat, o sino, excloure la carpeta caché de la còpia de seguretat</b>");
define("LM_TAB_G_COMMENTS_H2", "Introduiu a sota comentaris addicionals al fitxer:");
define("LM_TAB_G_COMMENTS_NOTE","Els comentaris seran guradats dins de l'arxiu, a <b>administrator/backups/.comments</b>");

// --- MESSAGES --//
// front end
define("LM_MSG_FRONT_1","Cap paquet disponible");
define("LM_MSG_FRONT_2","Ha fallat la pujada FTP per aquest destí");
define("LM_MSG_FRONT_3","Pujada feta per");
define("LM_MSG_FRONT_4","La connexió FTP ha fallat");
define("LM_MSG_FRONT_5","Intentant connectar a");
define("LM_MSG_FRONT_6","per l'usuari");

//backend
define("LM_MSG_BACK_1","Configuració actualitzada amb èxit...");
define("LM_MSG_BACK_2","La connexió FTP ha fallat!");
define("LM_MSG_BACK_3","còpia de seguretat moguda amb èxit!. La còpia de seguretat hauría de ser visible en el lloc escollit.");
define("LM_MSG_BACK_4","transferència realitzada, començant el procés de clonat al servidor remot.");
define("LM_MSG_BACK_5","despublicat del front-end amb èxit");
define("LM_MSG_BACK_6","Ha fallat la despublicació! Si us plau, comprovi les rutes");
define("LM_MSG_BACK_7","Publicado en el frontend con éxito!");
define("LM_MSG_BACK_8","Publicació fallada! Si us plau, comprovi les rutes");
define("LM_MSG_BACK_9","Clons renombrats amb èxit!");
define("LM_MSG_BACK_10","La ruta del Joomla no està dins de la ruta de la còpia de seguretat! No podrà usar el mode de descàrrega directa! Hauría d'editar la seva Configuració -> Sistema i establir l' -Enllaç de descàrrega directa- a -No-");
define("LM_MSG_BACK_11","Procés de còpia de seguretat manual completat!<a href='index2.php?option=com_cloner&task=view'>Prem aquí per continuar</a>");
define("LM_MSG_BACK_12","<h2>Ha fallat la còpia de seguretat!. Si us plau, comprovi que disposa de suport per utilitats ZIP (/usr/bin/zip or /usr/local/bin/zip) al servidor i que la ruta sigui correcta, o escull el tipus d'arxiu Zip.</h2>");
define("LM_MSG_BACK_13","<h2>Ha fallat la còpia de seguretat!. Si us plau, comprovi que disposa de suport per utilitats TAR (/usr/bin/tar or /usr/local/bin/tar) al servidor i que la ruta sigui correcta, o escull el tipus d'arxiu Tar.</h2>");
define("LM_MSG_BACK_14","<font color='red'>Hi ha hagut un problema al generar la còpia de seguretat de la base de dades, si us plau comproveu la ruta al servidor mysqldump.</font>");

define("LM_CRON_TOP","Configurant la còpia de seguretat Cron:");
define("LM_CRON_SUB","<b>Usant la funció Cron pots configurar un generador automàtic de còpies de seguretat per la teva web Joomla:</b><br>
Per configurar-la necessites afegir al teu panel de control Cron la comanda següent:");
define("LM_CRON_HELP","Atenció:
 - Si la ruta del php és diferent de /usr/bin/php Si us plau, useu aquesta: format /$"."php_path/php

Per a més informació de com configurar el Cron:
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>click here</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>click here</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>click here</a>
 - General Linux crontab info <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>click here</a>

Si necessites més ajuda per configurar el teu treball Cron, visita els nostres fòrums <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a>");
define("LM_CRON_SETTINGS","Configuración Cron");
define("LM_CRON_MODE","Mode de guardat de còpies de seguretat:");
define("LM_CRON_MODE_INFO"," <br />
      <small>Atenció*: Si s'escull -Servidor local- Usarem la ruta de còpies de seguretat per defecte de la secció General per guardar la còpia de seguretat</small>
<br />
<small> Atenció:** Si s'usa el mode correu no garantitzem que la còpia de seguretat arribi a la compte de correu degut a limitacions del proveidor</small>");
define("LM_CRON_TYPE_INFO","<small><br />Si us plau, escull el tipus de còpia que voldries crear.</small>");
define("LM_CRON_MYSQL_DETAILS","Opcions MySQL");
define("LM_CRON_MYSQL_DROP","Afegir MySQL Drop:");
define("LM_CRON_TYPE","Mode Còpia de seguretat:");
define("LM_CRON_FTP_DETAILS","Detalls del mode de guardat FTP:");
define("LM_CRON_FTP_SERVER","Servidor FTP:");
define("LM_CRON_FTP_USER","Usuari FTP:");
define("LM_CRON_FTP_PASS","Contrasenya FTP:");
define("LM_CRON_FTP_PATH","Ruta FTP:");
define("LM_CRON_FTP_DELB","Borrar còpia de seguretat després de transferir:");
define("LM_CRON_EMAIL_DETAILS","Detalls del mode correu:");
define("LM_CRON_EMAIL_ACCOUNT","Compte de correu:");
define("LM_CRON_COMPRESS","Comprimir fitxers de còpia de seguretat:");
define("LM_RESTORE_TOP","Informació per restaurar còpies de seguretat");
define("LM_CREDIT_TOP","Sobre XCloner:");
define("LM_CLONE_FORM_TOP","<h2>Introdueix les dades FTP a continuació:</h2>");

// --- Info Tab ---//
define("LM_CONFIG_INFO_T_SAFEMODE","Mode de seguretat Php:");
define("LM_CONFIG_INFO_T_MTIME","Temps màxim d'execució Php:");
define("LM_CONFIG_INFO_T_MEML","Límit de memòria Php:");
define("LM_CONFIG_INFO_T_BDIR","PHP open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() Ajuda funció:");
define("LM_CONFIG_INFO_T_TAR","Ruta servidor utilitat Tar:");
define("LM_CONFIG_INFO_T_ZIP","Ruta servidor utilitat Zip:");
define("LM_CONFIG_INFO_T_MSQL","Ruta servidor utilitat MySQLDump:");
define("LM_CONFIG_INFO_T_BPATH","Ruta Còpia de seguretat:");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","<small>La ruta d'inici de la còpia de seguretat necessita existir i ser legible per que XCloner comenci el procés de còpia.</small>");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP","Carpeta temporal:");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","<small>Aquesta ruta necessita ser creada i amb permís d'escriptura per que XCloner funcioni correctament.</small>");

define("LM_CONFIG_INFO","Aquesta pestanya mostrarà les opcions generals del sistema i les rutes");
define("LM_CONFIG_INFO_PATHS","Informació de rutes generals:");
define("LM_CONFIG_INFO_PHP","Informació de la configuració Php:");
define("LM_CONFIG_INFO_TIME","<small>Això controla el temps màim que es permet al teu script executar-se al servidor, en segons.</small>");
define("LM_CONFIG_INFO_MEMORY","<small>Això controla la memòria que poden usar els procesos script.</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Això controla les rutes a les que el teu script pot accedir. Sense valor, significa que pot accedir a totes.</small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>El mode segur necessita configurar-se a Off per que XCloner funcioni correctament.</small>");
define("LM_CONFIG_INFO_TAR","<small>Si l'script no pot determinar la ruta tar automàticament necessitaràs desmarcar la caixa de verificació a la línia TAR de la pestanya 'General'.</small>");
define("LM_CONFIG_INFO_ZIP","<small>Si l'script no pot determinar la ruta zip automàticament, necessitaràs desmarcar la caixa de verificació a la línia ZIP de la pestanya 'General'</small>");
define("LM_CONFIG_INFO_MSQL","<small>Si l'script no pot determinar la ruta mysqldump automàticament, necessitaràs desmarcar la caixa de verificació a la línia MYSQLDUMP de la pestanya 'General'</small>");
define("LM_CONFIG_INFO_EXEC","<small>Si aquesta funció està deshabilitada, Pots necessitar desmarcar les dues caixes de verificació de la pestanya 'General'.</small>");
define("LM_CONFIG_INFO_BPATH","<small>necessita tenir permís d'escriptura per que XCloner pugui arxivar còpies de seguretat.</small>");

// --- TRANSFER DETAILS---//
define("LM_TRANSFER_URL","URL lloc web:");
define("LM_TRANSFER_URL_SUB","<small>Si us plau, escriviu la url del vostre lloc web on es mourà la còpia de seguretat. Exemple: http://www.nomlloc.com/ Això es necessita per dirigir-se alli i accedir a l'script de restauració.</small>");
define("LM_TRANSFER_FTP_HOST","Servidor FTP:");
define("LM_TRANSFER_FTP_HOST_SUB","Exemple: ftp.nom de lloc.com");
define("LM_TRANSFER_FTP_USER","Usuari FTP:");
define("LM_TRANSFER_FTP_USER_SUB","Exemple 'Juan'");
define("LM_TRANSFER_FTP_PASS","Contrasenya FTP:");
define("LM_TRANSFER_FTP_PASS_SUB","Exemple: 'juancontrasenya'");
define("LM_TRANSFER_FTP_DIR","Directori FTP:");
define("LM_TRANSFER_FTP_DIR_SUB","Si us plau, introduiu el directori FTP on us agradaria instal·lar Joomla. Exemple: public_html/Joomla o htdocs/joomla i assegureu-vos de que té permisos per tothom, generalment 777.");

// --- GENERATE BACKUP---//
define("LM_BACKUP_NAME","<b>Si us plau, escolliu el nom de la còpia de seguretat</b>");
define("LM_BACKUP_NAME_SUB","<small>Si es deixa en blanc, es generarà un nom per defecte.</small>");

// -- General --//
define("LM_COM_TITLE","XCloner Manager - ");
define("LM_COM_TITLE_CONFIRM","Confirmar selecció de carpeta");

define("LM_COL_FILENAME","Còpia de seguretat");
define("LM_COL_DOWNLOAD","Baixar");
define("LM_COL_AVALAIBLE","Paquet Frontend");
define("LM_COL_SIZE","Mida");
define("LM_COL_DATE","Data");
define("LM_COL_FOLDER","<b>Fitxers i/o carpetes exclosos</b>");

define("LM_DELETE_FILE_SUCCESS","Fitxer(s) borrat(s)");
define("LM_DOWNLOAD_TITLE","Descarregar aquesta còpia de seguretat");

define("LM_ARCHIVE_NAME","Archive Name");
define("LM_NUMBER_FOLDERS","Number of Folders");
define("LM_NUMBER_FILES","Number of Files");
define("LM_SIZE_ORIGINAL","Size of Original File");
define("LM_SIZE_ARCHIVE","Size of Archive");
define("LM_DATABASE_ARCHIVE","Database Backup");

define("LM_CONFIRM_INSTRUCTIONS","<b>Please select the folders you wish to exclude from the archive</b>
<br />- by default all folders are included, if you wish to exclude a folder and it's subfolders just check the box next to it");
define("LM_CONFIRM_DATABASE","Backup Database");

define("LM_DATABASE_EXCLUDED","Exclosos");
define("LM_DATABASE_CURRENT","BBDD actual:");
define("LM_DATABASE_INCLUDE_DATABASES","Incloure BBDD extra");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","<small>Pots seleccionar múltiples BBDD per incloure a la còpia de seguretat presionant la tecla Ctrl i seleccionant amb el ratolí els objectes que es desitji incloure.</small>");

define("LM_DATABASE_MISSING_TABLES","Error: Definicions de taula no trobades");
define("LM_DATABASE_BACKUP_FAILED","Còpia de seguretat fallada, si us plau comprova que la carpeta administrator/backups disposa de permís d'escriptura!");
define("LM_DATABASE_BACKUP_COMPLETED","Còpia de seguretat completada");
define("LM_RENAME_TOP","Renombrar clons seleccionats");
define("LM_RENAME","Renombrar clon");
define("LM_RENAME_TO","a");

// --- CLONER RESTORE--- //
define("LM_CLONER_RESTORE","<h2>Com restaurar una còpia de seguretat en diferents llocs INFO!</h2>
<pre>
Restaurar les teves còpies de seguretat mai havia sigut tan fàcil. Amb l'ajuda de la funció de clonat de <a href='index2.php?option=com_cloner&task=view'>Veure còpies</a>
podràs moure les teves còpies a qualsevol part d'Internet

Això és lo que has de fer:
   
   <b>Pas 1 - mou la còpia al servidor de restauració</b>
  
    - Anar a l'àrea 'Veure còpies de seguretat'	
    - Seleccionar la teva còpia i clicar el botó 'Clonar'
    - Introdueix els detalls FTP d'on vulguis clonar la còpia de seguretat
    - Clicar a 'enviar', i la còpia i l'script de restauració seran transferits al nou servidor i obtindreu una url per accedir al nou pas basat en la url introduida com a lloc remot. Exemple: <b>http://elmeullocderestauracio.com/XCloner.php</b>

<b>Atenció:</b>Si aquest procés falla per alguna raó. Feu el següent: 
     1. Descarrega la còpia de seguretat al teu PC.
     2. Descarrega l'script de restauració, els fitxers, des del directori administrator/components/com_xcloner-backupandrestore/restore/
     3. Pujeu la còpia de seguretat i l'script al teu directori de restauració.
     4. Executeu XCloner.php al navegador i seguiu la pantalla de restauració
     Exemple URL: <b>http://nou-lloc.com/XCloner.php</b>
   
   <b>Paso 2: La pantalla de restauració de XCloner.php:</b>
   <b>XCloner.php - L'script de restauració -</b>
        - En aquest pas ja tens en posició el clon que has fet basat en el teu lloc Joomla i l'script de restauració.
    - Introdueix els nous detalls mysql. Això inclou el teu nou servidor MYSQL, usuari, contrasenya i nom de BBDD.
    - Introducetu nova Url i contrasenya
    - Per restaurar els fitxers tens <b>2 opcions:</b>
       
       	- 1. Restaurar els fitxers per ftp, l'script simularà un procés de pujada ftp al teu servidor, això solucionarà els problemes de permisos del pas 2. 
       	- 2. Restaura els fitxers directament, això desarxivarà els fitxers al teu servidor, serà ràpid perà podrà trobar algun problema de permisos si l'accés ftp s'usa molt sovint per fer canvis al lloc.
      			
    - Després de prémer el botó d'enviament, l'script provarà de moure els fitxers a la nova ruta directament o usant ftp, i instal·larà la nova base de dades.  
    - Si tot va bé el teu clon del lloc estarà pujat i funcionant correctament al seu nou emplaçament
    
  Per a suport, consulta el nostre fòrum <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
    o envian's un correu a <a href='mailto:info@xcloner.com'>info@xcloner.com</a>.   

</pre>");

// --- ABOUT CLONER---//

define("LM_CLONER_ABOUT","<h2>Còpia de seguretat XCloner</h2><br />
      <pre>XCloner és una eina que t'ajudarà a manegar les teves còpies de seguretat dels teus llocs Joomla, generar/restaurar/moure, de forma que el teu lloc sempre estigui segur. <b>Característiques:</b>
       - Script Cron per generar còpies de seguretat
       - Opcions per múltiples còpies de seguretat
       - Eina de restauració per moure el lloc web ràpidament a altres emplaçaments.
       - Múltiples emplaçaments on podrieu guardar les còpies a resguard.

Per reportar problemes o enviar-nos suggerències, contacteu-nos a admin@xcloner.com o visiteu-nos a  
<a href='http://www.xcloner.com'>http://www.xcloner.com</a>.
	   </pre>
     <br/><br/>

      XCloner.com © 2004-2010 | <a href='http://www.xcloner.com'>www.xcloner.com</a>
      <br/><p/><br/>");

define("LM_LOGIN_TEXT","<pre>
<b>Atención:</b>
 1. Si estàs en aquesta pantalla per primer cop, es que el teu usuari per defecte es '<i>admin</i>' i la contrasenya '<i>admin</i>'. 
    necessitaràs canviar-la després d'entrar en el sistema
 
 2. Si oblides la teva contrasenya necessitaràs resetejar-la amb aquest codi: 
        
	<b>$"."_CONFIG[\"jcpass\"] = md5(\"nova_contrasenya\");</b>
</pre>
");
?>
