<?php

// --- FRONT AREA---//
define("LM_FRONT_CHOOSE_PACKAGE","<b>Choisissez votre installation: </b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>S'il vous pla&icirc;t choisissez votre version de joomla ou de wordpress que vous souhaitez installer </small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'> Installez le Logiciel en ligne</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Fournissez vos d&eacute;tails ftp ci-dessous: </h2>");
define("LM_FRONT_WEBSITE_URL","<b>Url de votre site</b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>S'il vous pla&icirc;t fournissez l'url du site Web Joomla ou wordpress sera install&eacute;, exemple http://www.sitename.com/Joomla ou Wordpress </small>");
define("LM_FRONT_FTP_HOST","<b>Nom du ftp:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>exemple ftp://123456878.fr</small>");
define("LM_FRONT_FTP_USER","<b>Login Ftp:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>exmple 12345</small>");
define("LM_FRONT_FTP_PASS","<b>Mot de passe Ftp:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>exemple 5412</small>");
define("LM_FRONT_FTP_DIR","<b>R&eacute;pertoire Ftp</b>");
define("LM_FRONT_FTP_DIR_SUB","<small>S'il vous pla&icirc;t indiquer le r&eacute;pertoire du ftp o&ugrave; vous aimeriez installer Joomla ou wordpress, exemple public_html / Joomla ou wordpress / ou htdocs / Joomla ou wordpress / et assurer vous d'avoir donn&eacute; les autorisations n&eacute;c&eacute;ssaires CHMOD</small>");
define("LM_TRANSFER_FTP_INCT","transfert Croissant:");
define("LM_TRANSFER_FTP_INCT_SUB","Transfert des fichiers par FTP en mode incr&eacute;mental afin d'&eacute;viter toute pages blanches ou des d&eacute;lais d'expiration");
define("LM_FRONT_BOTTOM","une erreur <a href='http://www.xcloner.com/contact/'>Page de Contact</a><br/>Propos&eacute; par <a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","Nous avons transf&eacute;r&eacute; la sauvegarde sur votre site ftp, pour continuer cliquez ici");
define("LM_NOPAKCAGE_ERROR","il n'y a aucun paquet s&eacute;lectionn&eacute;, erreur...");

// --- BACKEND AREA---//

//Amazon S3
define("LM_AMAZON_S3","Amazon S3");
define("LM_AMAZON_S3_ACTIVATE","Activer");
define("LM_AMAZON_S3_AWSACCESSKEY","Clef de l'Acc&egrave;s:");
define("LM_AMAZON_S3_AWSSECRETKEY","AWS Clef Secr&egrave;te:");
define("LM_AMAZON_S3_BUCKET","nom Bucket:");
define("LM_AMAZON_S3_DIRNAME","T&eacute;l&eacute;charger le R&eacute;pertoire:");


define("LM_DATABASE_EXCLUDE_TABLES","S&eacute;lectionner les tables &aacute; exclure de la sauvegarde");
define("LM_CONFIG_SYSTEM_FOLDER","Afficher les dossiers:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","s'il vous pla&icirc;t s&eacute;lectionner les dossiers &aacute; exclure de votre sauvegarde");
define("LM_CONFIG_SYSTEM_LANG","Langue du syst&egrave;me:");
define("LM_CONFIG_SYSTEM_LANG_SUB","Configurer la langue pour XCloner,par d&eacute;faut cela sera celle de Joomla ou wordpress si elle est disponible");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Syst&egrave;me par d&eacute;faut");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Activer lien de t&eacute;l&eacute;chargement direct:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","si cette case est coch&eacute;e, l'&eacute;cran 'View Backups',le lien de t&eacute;l&eacute;chargement sera un lien direct &aacute; partir de votre serveur afin de t&eacute;l&eacute;charger l'ensemble, s'il vous pla&icirc;t noter que le chemin de sauvegarde doit être dans le chemin d'acc&egrave;s racine de Joomla ou wordpress");
define("LM_CONFIG_DISPLAY","Param&egrave;tres d'affichage");
define("LM_CONFIG_SYSTEM","Param&egrave;tres syst&egrave;me");
define("LM_CONFIG_SYSTEM_FTP","Mode de transfert FTP");
define("LM_CONFIG_SYSTEM_FTP_SUB","Choisir comment les fichiers seront transf&eacute;r&eacute;s de serveur &aacute; serveur lorsque vous utilisez le protocole FTP");
define("LM_CONFIG_MEM","Sauvegarde en utilisant les fonctions du Serveur");
define("LM_CONFIG_MEM_SUB","<small>Si la valeur est active, il vous sera demand&eacute; d'avoir sur votre support pour serveur l'utilisation <b> pour zip ou tar </b>et / ou <b> mysqldump</b> en commandes et de pr&eacute;ciser leurs chemins, et aussi <b > exec () </b> l'acc&egrave;s dans votre PHP</small>");
define("LM_CRON_DB_BACKUP","Activer la sauvegarde de base de donn&eacute;es:");
define("LM_CRON_DB_BACKUP_SUB","<small>cochez <b>Oui</b> si vous voulez sauvegarder les donn&eacute;es mysql</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Inclure les sauvegardes dans le r&eacute;pertoire clone:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Si r&eacute;gl&eacute; sur <b>Oui</b>, la sauvegarde cr&eacute;e contiendra &eacute;galement des fichiers des sauvegardes pr&eacute;c&eacute;dentes, ce qui augmente &aacute; chaque fois sa taille</small>");

define("LM_TAB_MYSQL","MYSQL ou MYSQLI");
define("LM_CONFIG_MYSQL","Param&egrave;tres de connexion MySQL:");
define("LM_CONFIG_MYSQLH","Nom d'h&ocirc;te Mysql:");
define("LM_CONFIG_MYSQLU","Nom d'utilisateur MySQL:");
define("LM_CONFIG_MYSQLP","Mot de passe Mysql:");
define("LM_CONFIG_MYSQLD","Base de donn&eacute;es Mysql:");

define("LM_TAB_AUTH","Authentification");
define("LM_CONFIG_AUTH","Espace d'authentification de l'utilisateur");
define("LM_CONFIG_AUTH_USER","Utilisateur:");
define("LM_CONFIG_AUTH_PASS","Mot de passe:");
define("LM_CONFIG_AUTH_USER_SUB","Votre login utilisateur par d&eacute;faut &aacute; XCloner");
define("LM_CONFIG_AUTH_PASS_SUB","votre mot de passe de connexion par d&eacute;faut, laissez en blanc si vous ne voulez pas le changer");

define("LM_YES","Oui");
define("LM_NO","Non");
define("LM_ACTIVE","Activer");
define("LM_TAR_PATH","Chemin path ou commande:");
define("LM_TAR_PATH_SUB","(obligatoire si le type d'archive est TAR et la case coch&eacute;e est activ&eacute;e)");
define("LM_ZIP_PATH","Chemin du Zip ou de la commande:");
define("LM_ZIP_PATH_SUB","(obligatoire si le type d'archive est ZIP et la case coch&eacute;e est activ&eacute;e)");
define("LM_MYSQLDUMP_PATH","Chemin de mysqldump ou de commande: (obligatoire si la case Active est coch&eacute;e) <br/> Pour les grands dumps mysql s'il vous pla&icirc;t utiliser
<br/> <b> <small> mysqldump - quote-names - rapide - single-transaction - skip-comment </b> </small>");

// --- CONFIG ---//
define("LM_CONFIG_MANUAL","Processus de sauvegarde manuelle");
define("LM_CONFIG_MANUAL_BACKUP","Sauvegarde manuelle:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Cette option est indiqu&eacute;e si vous avez dans php des limitations de temps d'ex&eacute;cution sur votre serveur, il faudra javascript activ&eacute; sur votre navigateur");
define("LM_CONFIG_MANUAL_FILES","Fichiers &aacute; traiter par la requête:");
define("LM_CONFIG_DB_RECORDS","Enregistrements de base de donn&eacute;es selon la requête");
define("LM_CONFIG_MANUAL_REFRESH","Temps entre les requêtes:");
define("LM_CONFIG_SYSTEM_MDATABASES","Sauvegarde des bases de donn&eacute;es multiples:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","Cette option activ&eacute; XCloner peut sauvegarder plusieurs bases de donn&eacute;es");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Exclure les fichiers de plus de:");

define("LM_CONFIG_CRON_LOCAL","Serveur local*");
define("LM_CONFIG_CRON_REMOTE","Compte ftp &aacute; distance");
define("LM_CONFIG_CRON_EMAIL","Courrier &eacute;lectronique**");
define("LM_CONFIG_CRON_FULL","Int&eacute;gral (fichiers + base de donn&eacute;es)");
define("LM_CONFIG_CRON_FILES","Uniquement les fichiers");
define("LM_CONFIG_CRON_DATABASE","Base de donn&eacute;es uniquement");

define("LM_CONFIG_EDIT","Modification du fichier de configuration");
define("LM_CONFIG_BSETTINGS","Param&egrave;tres du chemin de sauvegarde");
define("LM_CONFIG_BSETTINGS_OPTIONS","Options g&eacute;n&eacute;ral de sauvegarde");
define("LM_CONFIG_BSETTINGS_SERVER","Utiliser les options serveur");
define("LM_CONFIG_BPATH","Chemin de sauvegarde:");
define("LM_CONFIG_UBPATH","D&eacute;marrer la sauvegarde:");
define("LM_CONFIG_BPATH_SUB","<small>Chemin o&ugrave; toutes les sauvegardes seront stock&eacute;es</small>");
define("LM_CONFIG_UBPATH_SUB","<small>d&eacute;signer un chemin pour la sauvegarde initiale, d'o&ugrave; XCloner va commencer tous les processus</small>");
define("LM_CRON_EXCLUDE","R&eacute;pertoires exclus");
define("LM_CRON_EXCLUDE_DIR","Exclure la liste des r&eacute;pertoires un par ligne: <br> s'il vous pla&icirc;t utiliser le chemin complet du r&eacute;pertoire du serveur");
define("LM_CRON_BNAME","Nom de la sauvegarde:");
define("LM_CRON_BNAME_SUB","<small>S'il est laiss&eacute; en blanc, cela va g&eacute;n&eacute;rer automatiquement un nom par d&eacute;faut &aacute; chaque nouvelle sauvegarde</small>");
define("LM_CRON_IP","Cron admis IP's:");
define("LM_CRON_IP_SUB","<small>Par d&eacute;faut, seul le serveur local aura acc&egrave;s &aacute; la tâche CRON, mais vous pouvez entrer aussi une autre adresse IP, une par ligne</small>");
define("LM_CRON_DELETE_FILES","Supprimer sauvegardes les plus anciennes");
define("LM_CRON_DELETE_FILES_SUB","Supprimer des sauvegardes anciennes de:");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE","Activer");
define("LM_CRON_SEMAIL","Email journal de cron &aacute;:");
define("LM_CRON_SEMAIL_SUB","Si une adresse e-mail est inscrite, apr&egrave;s l'ex&eacute;cution d'une tâche cron, le journal sera envoy&eacute; &aacute; cette adresse, des adresses multiples peuvent être ajout&eacute;s en les s&eacute;parants par <b>;</b>");
define("LM_CRON_MCRON","Nom de la configuration:");
define("LM_CRON_MCRON_AVAIL","Configurations disponibles:");
define("LM_CRON_MCRON_R","s'il vous pla&icirc;t donner un nom simple pour la configuration de votre nouvelle cron");
define("LM_CRON_MCRON_SUB","Avec cette option, vous serez en mesure d'enregistrer la configuration actuelle dans un fichier s&eacute;par&eacute; et de l'utiliser pour l'ex&eacute;cution de tâches cron multiples");
define("LM_CRON_SETTINGS_M","Multiples CronJobs Configuration");
define("LM_CONFIG_SPLIT_BACKUP_SIZE","Split de sauvegarde des archives si la taille plus grande que:");

// --- MENU ---//
define("LM_MENU_OPEN_ALL","ouvrir Menu");
define("LM_MENU_CLOSE_ALL","fermer Menu");
define("LM_MENU_ADMINISTRATION","Administration");
define("LM_MENU_CLONER","Xcloner");
define("LM_MENU_CONFIGURATION","Configurations");
define("LM_MENU_CRON","CRON");
define("LM_MENU_LANG","Traduction");
define("LM_MENU_ACTIONS","Action");
define("LM_MENU_Generate_backup","G&eacute;n&eacute;rer des sauvegardes");
define("LM_MENU_Restore_backup","Restaurer la sauvegarde");
define("LM_MENU_View_backups","Voir les sauvegardes");
define("LM_MENU_Documentation","Aide");
define("LM_MENU_ABOUT","A propos de");
define("LM_DELETE_FILE_FAILED","&eacute;chec de la suppression, s'il vous pla&icirc;t v&eacute;rifier les permissions sur les fichiers");
define("LM_Joomla ou wordpressPLUG_CP","XCloner - Votre site de sauvegarde et de restauration solution");
define("LM_MENU_FORUM","Forum en ligne");
define("LM_MENU_SUPPORT","Support en ligne");
define("LM_MENU_WEBSITE","Site Web");

define("LM_MAIN_Settings","Param&egrave;tres");
define("LM_MAIN_View_Backups","Voir les sauvegardes");
define("LM_MAIN_Generate_Backup","G&eacute;n&eacute;rer des sauvegardes");
define("LM_MAIN_Help","Aide");
define("LM_FTP_TRANSFER_MORE","Mode de connexion FTP");
define("LM_REFRESH_MODE","Rafra&icirc;chir sauvegarde");
define("LM_DEBUG_MODE","Activer le journal:");
define("LM_REFRESH_ERROR","Il y a eu une erreur d'extraction des donn&eacute;es JSON &aacute; partir du serveur, essayez &aacute; nouveau ou contacter les d&eacute;veloppeurs!");

// --- LANGUAGE --//
define("LM_LANG_NAME","Nom de la langue");
define("LM_LANG_MSG_DEL","Langue(s) supprim&eacute; avec succ&egrave;s!");
define("LM_LANG_NEW","Nom de la nouvelle langue:");
define("LM_LANG_EDIT_FILE","&eacute;dition du fichier:");
define("LM_LANG_EDIT_FILE_SUB","Ne pas oublier de sauvegarder votre traduction toutes les 5 minutes, appuyez simplement sur le bouton Appliquer pour mettre &aacute; jour");

// --- TABS --//
define("LM_TAB_GENERAL","G&eacute;n&eacute;ral");
define("LM_TAB_G_STRUCTURE","Structures");
define("LM_TAB_SYSTEM","Syst&egrave;me");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Info");
define("LM_TAB_G_DATABASE","Options de base de donn&eacute;es");
define("LM_TAB_G_FILES","Options Fichiers");
define("LM_TAB_G_COMMENTS","Commentaires sauvegardes");
define("LM_G_EXCLUDE_COMMENT","<br>S'il vous pla&icirc;t entrer ici les dossiers &aacute; exclure,un par ligne!
     <br><b> vous pouvez d&eacute;sactiver la fonction du cache lorsque vous effectuez une sauvegarde, ou ne pas exclure le dossier cache de la sauvegarde </b>");
define("LM_TAB_G_COMMENTS_H2","Saisissez ci-dessous tout commentaire suppl&eacute;mentaire pour archiver:");
define("LM_TAB_G_COMMENTS_NOTE","S'il vous pla&icirc;t noter que les commentaires sont stock&eacute;s dans les archives <b>administrator/backups/.comments</b>");

// --- MESSAGES --//
// front end
define("LM_MSG_FRONT_1","Aucune sauvegarde disponible");
define("LM_MSG_FRONT_2","Chargement FTP a &eacute;chou&eacute; pour la destination");
define("LM_MSG_FRONT_3","Envoi effectu&eacute; pour");
define("LM_MSG_FRONT_4","Connexion FTP a &eacute;chou&eacute;!");
define("LM_MSG_FRONT_5","Tentative de connexion &aacute;");
define("LM_MSG_FRONT_6","pour l'utilisateur");

//backend
define("LM_MSG_BACK_1","Configuration mise &aacute; jour ...");
define("LM_MSG_BACK_2","Connexion FTP a &eacute;chou&eacute;!");
define("LM_MSG_BACK_3","D&eacute;placement de la sauvegarde FAITE! La sauvegarde s&eacute;lectionnez doit maintenant être disponible &aacute; l'emplacement pr&eacute;vu!");
define("LM_MSG_BACK_4","D&eacute;placement fait, d&eacute;marrer le processus de clonage sur l'h&ocirc;te distant");
define("LM_MSG_BACK_5","Ensemble non publi&eacute;es &aacute; partir de l'interface");
define("LM_MSG_BACK_6","Erreur...S'il vous pla&icirc;t v&eacute;rifier vos chemins!");
define("LM_MSG_BACK_7","Publi&eacute; avec succ&egrave;s pour Interface");
define("LM_MSG_BACK_8","Erreur...S'il vous pla&icirc;t v&eacute;rifier vos chemins!");
define("LM_MSG_BACK_9","Clones renomm&eacute; avec succ&egrave;s!");
define("LM_MSG_BACK_10","Le chemin d'acc&egrave;s de Joomla ou wordpress n'est pas au sein de votre r&eacute;pertoire de sauvegarde! Impossible d'utiliser le mode de t&eacute;l&eacute;chargement direct!");
define("LM_MSG_BACK_11","Tout est fait! Tout est fait! Le processus de sauvegarde manuel est fini! <a href='index2.php?option=com_cloner&task=view'>Cliquer ici pour continuer </a>");
define("LM_MSG_BACK_12","<h2>La sauvegarde a &eacute;chou&eacute;! S'il vous pla&icirc;t v&eacute;rifiez que vous avez le support de l'utilitaire zip (/ usr / bin / zip ou / usr / local / bin / zip) sur votre serveur et que le chemin d'acc&egrave;s soit correcte ou choisir le type d'archive Tar!</h2>");
define("LM_MSG_BACK_13","<h2>La sauvegarde a &eacute;chou&eacute;! S'il vous pla&icirc;t v&eacute;rifiez que vous avez le support de l'utilitaire zip (/ usr / bin / zip ou / usr / local / bin / zip) sur votre serveur et que le chemin d'acc&egrave;s soit correcte ou choisir le type d'archive ZIP!</h2>");
define("LM_MSG_BACK_14","<font color='red'>Il y a eu un probl&egrave;me dans la cr&eacute;ation de la sauvegarde de base de donn&eacute;es, s'il vous pla&icirc;t v&eacute;rifiez le chemin du serveur mysqldump!</font>");



define("LM_CRON_TOP","Commande de configuration Cron");
define("LM_CRON_SUB","<b>Utilisation de la fonction cron, vous pouvez configurer un g&eacute;n&eacute;rateur automatique de sauvegarde pour votre site web ! </b>
<br/> Pour l'installer, vous devez ajouter &aacute; votre panneau de configuration <b>crontab</b> l'une des commandes suivantes:");
define("LM_CRON_HELP","<b>Notes:<br>
 - Si vous avez dans votre php un emplacement diff&eacute;rent de celui / usr / bin / php s'il vous pla&icirc;t utiliser ce format /$"."php_path/php </b>
<br>

Pour plus d'informations sur comment configurer un cron pour
 <br>- Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>Cliquer Ici</a>
 <br>- Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>Cliquer Ici</a>
 <br>- Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>Cliquer Ici</a>
 <br>- Informations g&eacute;n&eacute;rales crontab Linux <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>Cliquer Ici</a>
<br> Si vous avez besoin d'aide pour configurer votre CRON, s'il vous pla&icirc;t visitez notre forum <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>");
define("LM_CRON_SETTINGS","Param&egrave;tres Cron");
define("LM_CRON_MODE","Mode de stockage sauvegarde:");
define("LM_CRON_MODE_INFO"," <br/>
      <small> S'il vous pla&icirc;t noter: * si le serveur local est choisi nous allons utiliser le chemin de sauvegarde par d&eacute;faut pour stocker la sauvegarde</small>
      <br/>
      <small> S'il vous pla&icirc;t noter: ** si le mode email est utilis&eacute;e, nous avons pas de garantie que la sauvegarde sera port&eacute;e au compte de messagerie en raison de la limitation fournisseur</small>");
define("LM_CRON_TYPE_INFO","<small><br/> s'il vous pla&icirc;t choisir votre type de sauvegarde que vous souhaitez cr&eacute;er</small>");
define("LM_CRON_MYSQL_DETAILS","Options Mysql");
define("LM_CRON_MYSQL_DROP","Ajouter Mysql Drop");
define("LM_CRON_TYPE","Type de sauvegarde:");
define("LM_CRON_FTP_DETAILS","Sauvegarder configuration FTP:");
define("LM_CRON_FTP_SERVER","Serveur ftp:");
define("LM_CRON_FTP_USER","Nom d'utilisateur FTP:");
define("LM_CRON_FTP_PASS","Mot de passe FTP:");
define("LM_CRON_FTP_PATH","chemin d'acc&egrave;s FTP:");
define("LM_CRON_FTP_DELB","Supprimer sauvegarde apr&egrave;s le transfert");
define("LM_CRON_EMAIL_DETAILS","d&eacute;tails Email :");
define("LM_CRON_EMAIL_ACCOUNT","Compte Email:");
define("LM_CRON_COMPRESS","Compresser les fichiers de sauvegarde:");
define("LM_RESTORE_TOP","Information restauration de votre sauvegarde");
define("LM_CREDIT_TOP","A propos de XCloner");
define("LM_CLONE_FORM_TOP","<h2>Fournir les d&eacute;tails de votre ftp ci-dessous:</h2>");

// --- Info Tab ---//

define("LM_CONFIG_INFO_T_SAFEMODE","Mode sans &eacute;chec PHP:");
define("LM_CONFIG_INFO_T_VERSION","V&eacute;rification de la version PHP:");
define("LM_CONFIG_INFO_T_MTIME","Temps maximal d'ex&eacute;cution:");
define("LM_CONFIG_INFO_T_MEML","Limite m&eacute;moire:");
define("LM_CONFIG_INFO_T_BDIR","Ouverture base PHP");
define("LM_CONFIG_INFO_T_EXEC","exec () support:");
define("LM_CONFIG_INFO_T_TAR","chemin d'acc&egrave;s Tar:");
define("LM_CONFIG_INFO_T_ZIP","chemin d'acc&egrave;s Zip:");
define("LM_CONFIG_INFO_T_MSQL","chemin d'acc&egrave;s mysqldump:");
define("LM_CONFIG_INFO_T_BPATH","Chemin de sauvegarde:");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","le chemin d'acc&egrave;s du lancement de la sauvegarde doit exister et être lisibles pour que XCloner puisse d&eacute;marrer le processus de sauvegarde");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP","Dossier temporaire");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","Le chemin d'acc&egrave;s <i>[Backup Start Path/administrator/backups]</i> doit être cr&eacute;e et être accessible en &eacute;criture pour que XCloner fonctionne correctement");



define("LM_CONFIG_INFO","Cet onglet affiche des informations syst&egrave;me g&eacute;n&eacute;ral et les chemins d'acc&egrave;s");
define("LM_CONFIG_INFO_PATHS","Info G&eacute;n&eacute;ral chemin d'acc&egrave;s:");
define("LM_CONFIG_INFO_PHP","Information configuration Php:");
define("LM_CONFIG_INFO_TIME","<small>Cela contr&ocirc;le le temps maximum d'&eacute;x&eacute;cution du script vers votre serveur</small>");
define("LM_CONFIG_INFO_MEMORY","<small> Ce contr&ocirc;le la quantit&eacute; maximale de m&eacute;moire le script peut allouer &aacute; ses processus </small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Cela contr&ocirc;le les chemins d'acc&egrave;s de votre script autoris&eacute; &aacute; acc&eacute;der, aucune valeur signifie qu'il peut acc&eacute;der &aacute; n'importe quel chemin d'acc&egrave;s</small>");
define("LM_CONFIG_INFO_SAFEMODE","<small> mode sans &eacute;chec devra être r&eacute;gl&eacute; sur Off pour que XCloner pour fonctionner correctement </small>");
define("LM_CONFIG_INFO_VERSION","<small> PHP> = 5.2.3 est n&eacute;cessaire</small>");
define("LM_CONFIG_INFO_TAR","<small>Si le script n'est pas en mesure de d&eacute;terminer le chemin d'acc&egrave;s de TAR automatiquement, vous pourriez avoir besoin de d&eacute;cocher la case activ&eacute; pr&egrave;s de la ligne TAR dans l'onglet G&eacute;n&eacute;ral</small>");
define("LM_CONFIG_INFO_ZIP","<small>Si le script n'est pas en mesure de d&eacute;terminer le chemin d'acc&egrave;s ZIP automatiquement, vous pourriez avoir besoin de d&eacute;cocher la case activ&eacute; pr&egrave;s de la ligne ZIP dans l'onglet G&eacute;n&eacute;ral</small>");
define("LM_CONFIG_INFO_MSQL","<small>Si le script n'est pas en mesure de d&eacute;terminer le chemin d'acc&egrave;s MYSQLDUMP automatiquement, vous pourriez avoir besoin de d&eacute;cocher la case activ&eacute; pr&egrave;s de la ligne mysqldump dans l'onglet G&eacute;n&eacute;ral</small>");
define("LM_CONFIG_INFO_EXEC","<small>Si cette fonction est d&eacute;sactiv&eacute;e, vous pouvez d&eacute;cocher les deux cases «actif» de l'onglet G&eacute;n&eacute;ral</small>");
define("LM_CONFIG_INFO_BPATH","<small>doit être accessible en &eacute;criture pour que XCloner acc&egrave;de aux sauvegardes d'archives</small>");

// --- TRANSFER DETAILS---//

define("LM_TRANSFER_URL","Adresse du site");
define("LM_TRANSFER_URL_SUB","<small>S'il vous pla&icirc;t fournir l'URL du site o&ugrave; sera d&eacute;plac&eacute; de sauvegarde, http://www.sitename.com/ exemple, nous avons besoin de cela parce que nous allons vous diriger l&aacute; pour acc&eacute;der au script de restauration</small>");
define("LM_TRANSFER_FTP_HOST","Nom d'h&ocirc;te FTP:");
define("LM_TRANSFER_FTP_HOST_SUB","exemple ftp.123456");
define("LM_TRANSFER_FTP_USER","Nom d'utilisateur FTP:");
define("LM_TRANSFER_FTP_USER_SUB","exemple '1234565'");
define("LM_TRANSFER_FTP_PASS","Mot de passe FTP :");
define("LM_TRANSFER_FTP_PASS_SUB","exemple 'test'");
define("LM_TRANSFER_FTP_DIR","R&eacute;pertoire ftp:");
define("LM_TRANSFER_FTP_DIR_SUB","S'il vous pla&icirc;t indiquer le r&eacute;pertoire ftp de l'endroit o&ugrave; vous souhaitez d&eacute;placer la sauvegarde, exemple public_html/ ou htdocs/ et assurez-vous qu'il a les permissions d'&eacute;criture pour tout le monde");

// --- GENERATE BACKUP---//

define("LM_BACKUP_NAME","<b>S'il vous pla&icirc;t choisissez votre nom de la sauvegarde</b>");
define("LM_BACKUP_NAME_SUB","<small>s'il est laiss&eacute; en blanc, cela va g&eacute;n&eacute;rer un nom par d&eacute;faut!</small>");


// -- General --//
define("LM_COM_TITLE"    , "XCloner Manager - ");
define("LM_COM_TITLE_CONFIRM"    , "Confirmer la s&eacute;lection des dossiers");

define("LM_COL_FILENAME"    , "Sauvegarde");
define("LM_COL_DOWNLOAD"    , "T&eacute;l&eacute;charger");
define("LM_COL_AVALAIBLE","Interface Programme");
define("LM_COL_SIZE"    , "Taille");
define("LM_COL_DATE"    , "Date");
define("LM_COL_FOLDER"    , "<b>Dossiers exclus et/ou fichiers</b>");

define("LM_DELETE_FILE_SUCCESS","fichiers supprim&eacute;s");
define("LM_DOWNLOAD_TITLE","T&eacute;l&eacute;charger");

define("LM_ARCHIVE_NAME"    , "Nom Archive");
define("LM_NUMBER_FOLDERS"    , "Nombre de dossiers");
define("LM_NUMBER_FILES"    , "Nombre de fichiers");
define("LM_SIZE_ORIGINAL"    , "Taille du fichier original");
define("LM_SIZE_ARCHIVE"    , "Taille de l'archive");
define("LM_DATABASE_ARCHIVE"    , "Base de donn&eacute;es de sauvegarde");

define("LM_CONFIRM_INSTRUCTIONS"    , "<b>S'il vous pla&icirc;t s&eacute;lectionnez les dossiers que vous souhaitez exclure de l'archive</b>  <br />
                                       - par d&eacute;faut, tous les dossiers sont inclus, si vous souhaitez exlure un dossier et un sous-dossiers il suffit de cocher la case &aacute; c&ocirc;t&eacute; de lui");
define("LM_CONFIRM_DATABASE"    , "Sauvegarde Base de donn&eacute;es");


define("LM_DATABASE_EXCLUDED","Exclus");
define("LM_DATABASE_CURRENT","Base de donn&eacute;es courante:");
define("LM_DATABASE_INCLUDE_DATABASES","Inclure d'autres bases");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","vous pouvez s&eacute;lectionner plusieurs bases de donn&eacute;es &aacute; inclure dans la sauvegarde en maintenant la touche CTRL enfonc&eacute;e et en s&eacute;lectionnant les &eacute;l&eacute;ments souhait&eacute;s avec votre souris, les bases de donn&eacute;es seront stock&eacute;es dans administrator / r&eacute;pertoire de sauvegarde de vos archives");

define("LM_DATABASE_MISSING_TABLES","Erreur: table d&eacute;finition non trouv&eacute;");
define("LM_DATABASE_BACKUP_FAILED","&eacute;chec de la sauvegarde, s'il vous pla&icirc;t v&eacute;rifiez que l'administrateur / r&eacute;pertoire des sauvegardes est accessible en &eacute;criture!");
define("LM_DATABASE_BACKUP_COMPLETED","Sauvegarde termin&eacute;e");
define("LM_RENAME_TOP","Renommer clones s&eacute;lectionn&eacute;s");
define("LM_RENAME","Renommer clone");
define("LM_RENAME_TO","&aacute;");
// --- CLONER RESTORE--- //

define("LM_CLONER_RESTORE","<h2> Comment faire pour restaurer une sauvegarde sur diff&eacute;rents endroits INFO! </h2> <br/>
<pre>
   Restaurer vos sauvegardes n'a jamais &eacute;t&eacute; aussi facile!
   Avec l'aide de notre fonction de clonage &aacute; partir du <a href='index2.php?option=com_cloner&task=view'> Voir les sauvegardes </a>
   vous pourrez d&eacute;placer votre sauvegarde n'importe o&ugrave; sur le site Internet.

   Voici ce que vous avez &aacute; faire:

   <b> Etape 1 - d&eacute;placer votre sauvegarde pour la restauration </b>

    - Aller dans XCloner 'Voir les Sauvegardes'
    - Apr&egrave;s avoir s&eacute;lectionn&eacute; votre sauvegarde cliquez sur le bouton 'Clone'
    - Entrer les d&eacute;tails ftp de l'endroit o&ugrave; vous souhaitez Cloner la sauvegarde
    - apr&egrave;s avoir appuy&eacute; pour soumettre la sauvegarde et la restauration le script sera transf&eacute;r&eacute; sur le nouvel h&ocirc;te et vous recevrez une url pour acc&eacute;der &aacute; l\'&eacute;tape suivante sur la base des url que vous avez fournis pour la localisation &aacute; distance
    - Apr&egrave;s avoir cliqu&eacute; sur le lien fourni, vous serez redirig&eacute; vers le nouvel emplacement exemple <b>http://my_restore_site.com/XCloner.php</b>

   <b> Note: </b> Si ce processus &eacute;choue pour une raison quelconque, vous devez faire ceci:
   1. T&eacute;l&eacute;charger la sauvegarde sur votre ordinateur
   2. T&eacute;l&eacute;charger le script de restauration, tous les fichiers
   administrator/components/com_xcloner-backupandrestore/restore/
   3. Envoyer la sauvegarde et la restauration du script &aacute; votre emplacement de restauration
   4. Lancer XCloner.php dans votre navigateur et suivez la restauration comme indiqu&eacute; ci-dessous

   <b> &eacute;tape 2 - le XCloner.php restauration: </b>

   <b> XCloner.php - le script de restauration </b>
    - &aacute; cette &eacute;tape, vous avez mis en place la sauvegarde que vous avez cr&eacute;&eacute; et le script de restauration
    - entrez vos nouvelles coordonn&eacute;es mysql, ce qui inclut votre nouveau nom d'h&ocirc;te MySQL, un utilisateur et mot de passe, et une nouvelle base de donn&eacute;es
    diff&eacute;rent de celui d'origine
    - Entrez votre nouvelle adresse URL et de suivant
    - Pour restaurer les fichiers que vous avez <b> 2 options: </b>

       - 1. restaurer les fichiers par FTP, le script va simuler un processus de transfert ftp sur votre serveur, cela va r&eacute;soudre le probl&egrave;me des autorisations de l'&eacute;tape 2.
       - 2. restaurer les fichiers directement, cela d&eacute;comlpresse les fichiers sur votre serveur, fonctionne plus rapidement, mais elle pourrait donner lieu &aacute; des probl&egrave;mes de droits si vous utilisez votre ftp beaucoup pour apporter des modifications sur le site

    - Une fois que vous cliquez sur Soumettre le script va tenter de d&eacute;placer les fichiers vers le nouveau chemin, directement ou par ftp et
    va installer la base de donn&eacute;e
    - Si tout va bien votre nouveau site est op&eacute;rationnel sur le nouvel emplacement

    Pour le support s'il vous pla&icirc;t consulter notre <a forums href='http://www.xcloner.com/support/forums/' target='_blank'> http://www.xcloner.com/support/forums/ </a>
    ou par courriel &aacute; <a href='mailto:info@xcloner.com'> info@xcloner.com </a>


</ pre>");
define("LM_CLONER_ABOUT"," <h2>Sauvegarde XCloner</h2>
       XCloner est un outil qui vous aidera &aacute; g&eacute;rer vos sauvegardes de votre site, G&eacute;n&eacute;rer / Restauration / D&eacute;placer afin que votre site sera toujours Garanti !
<br/> <br/>
       Caract&eacute;ristiques:
<ul>
<li>Script cron pour g&eacute;n&eacute;rer des sauvegardes automatiques </li>
<li>Plusieurs options de sauvegarde</li>
<li>Outil de restauration pour passer le site rapidement vers d'autres emplacements</li>
<li>Stocker la sauvegarde en local,ou &aacute; distance</li>
<li>AJAX/JSON interface de sauvegarde </li>
<li>Code autonome, pouvez sauvegarder n'importe quel PHP / Mysql site web</li>
<li>Base de donn&eacute;es et fichiers de backup suppl&eacute;mentaire</li>
<li>Balayage de syst&egrave;me de fichiers progressif</li>
<li>Amazon S3 support</li>
</ul>
<br/>
Pour les rapports et propositions s'il vous pla&icirc;t contacter l'auteur info@xcloner.com ou visiter son site sur <a href='http://www.xcloner.com'>http://www.xcloner.com</a>
                                                    <br/>XCloner.com © 2004-2011 </a> <br/> <p/> <br/>");
define("LM_LOGIN_TEXT","<pre>
<b>Notes:</b>
 1. Si vous êtes sur cet &eacute;cran pour la premi&egrave;re fois,par d&eacute;faut le nom d'utilisateur est <b> '<i>admin</i>' et le mot de passe est '<i>admin</i>'</b>

 2. si vous avez oubli&eacute; votre mot de passe, pour le r&eacute;initialiser, vous devez ajouter ce code:
 <b>$"."_CONFIG[\"jcpass\"] = md5(\"my_new_pass\");</b>
&aacute; la fin du fichier de configuration <b> cloner.config.php juste avant la ligne ?></b>
Ne pas oublier de remplacer le mot de passe <b>my_new_pass </b> par votre mot de passe r&eacute;el
</pre>");
?>