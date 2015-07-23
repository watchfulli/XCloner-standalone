<?php
define("LM_FRONT_CHOOSE_PACKAGE","<b>Elige el paquete a instalar: </b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Por favor, selecciona tu version de Joomla para instalar</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Instalar software Joomla via web</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Introduce tus datos ftp: </h2>");
define("LM_FRONT_WEBSITE_URL","<b>Url de la web: </b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Por favor, introduce la url de la web donde se instalará Joomla. Ejemplo: http://www.nombresitio.com/joomla</small>");
define("LM_FRONT_FTP_HOST","<b>servidor FTP:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>Beispiel ftp.seitenname.de</small>");
define("LM_FRONT_FTP_USER","<b>FTP Username:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>Ejemplo Juan</small>");
define("LM_FRONT_FTP_PASS","<b>contraseña FTP:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>ejemplo contraseñaJuan</small>");
define("LM_FRONT_FTP_DIR","<b>Directorio FTP: </b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Por favor introduce el directorio FTP donde te gustaría instalar Joomla. Ejemplo: public_html/Joomla o htdocs/joomla y asegurate de que tiene permisos para todos, generalmente 777</small>");
define("LM_TRANSFER_FTP_INCT","transferencia incremental:");
define("LM_TRANSFER_FTP_INCT_SUB","Intentará trnsferir los archivos por FTP en modo incremental para evitar páginas en blanco o timeouts.");
define("LM_FRONT_BOTTOM","No te ha funcionado? Por favor, envíanos un comentario con lo sucedido <a href='http://www.xcloner.com/contact/'>Pagina de contacto </a><br />Hecho por<a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","Hemos subido el paquete de utilidad de restauración a tu sitio FTP. Para continuar, pulsa aquí.");
define("LM_NOPAKCAGE_ERROR","No se ha seleccionado ningún paquete. Deteniendo...!");
define("LM_DATABASE_EXCLUDE_TABLES","Selecciona las tablas que desees excluir (opcional)");
define("LM_CONFIG_SYSTEM_FOLDER","Visualización de carpetas:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","Por favor, selecciona el modo en el que quieres seleccionar las carpetas excluidas desde la sección -Generar copia de seguridad-");
define("LM_CONFIG_SYSTEM_LANG","Lenguaje de sistema:");
define("LM_CONFIG_SYSTEM_LANG_SUB","<small>Configura el lenguaje XCloner.Si se deja en -default- mostrará el que viene por defecto en Joomla.</small>");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Lenguaje por defecto");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Activar vínculo de descarga directa:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","Si se activa, en la pantalla -Ver copias de seguridad-");
define("LM_CONFIG_DISPLAY","Configuración de vista");
define("LM_CONFIG_SYSTEM","Configuración de sistema");
define("LM_CONFIG_SYSTEM_FTP","Modo de transferencia FTP");
define("LM_CONFIG_SYSTEM_FTP_SUB","<small>Selecciona la manera en que se transferirán los archivos entre servidores con el protocolo ftp.</small>");
define("LM_CONFIG_MEM","Copia de seguridad usando funciones de servidor:");
define("LM_CONFIG_MEM_SUB","<small>Si se activa se requerirá que tu servidor permita <b>ZIP o TAR</b> y / o <b>comandos MySQLDump</b> y especificar sus rutas, y también permisos de <b>ejecución()</b> en tu php.</small>");
define("LM_CRON_DB_BACKUP","Permitir copia de seguridad de la base de datos:");
define("LM_CRON_DB_BACKUP_SUB","<small>Comprueba si te gustaría copiar los datos de mysql</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Incluir carpetas de copia de seguridad en Clonación:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Si se elige -sí- la copia de seguridad creada contendrá archivos de copia previos aumentando cada vez su tamaño</small>");
define("LM_TAB_MYSQL","MYSQL");
define("LM_CONFIG_MYSQL","configuración de conexión MySQL");
define("LM_CONFIG_MYSQLH","Servidor MySQL:");
define("LM_CONFIG_MYSQLU","usuario MySQL :");
define("LM_CONFIG_MYSQLP","Contraseña MySQL :");
define("LM_CONFIG_MYSQLD","Base de datos MySQL:");
define("LM_TAB_AUTH","autentificación");
define("LM_CONFIG_AUTH","Area de autentificación");
define("LM_CONFIG_AUTH_USER","Usuario:");
define("LM_CONFIG_AUTH_PASS","Contraseña:");
define("LM_CONFIG_AUTH_USER_SUB","<small>Este será tu usuario por defecto para Xcloner.</small>");
define("LM_CONFIG_AUTH_PASS_SUB","<small>Tu contraseña por defecto. Dejala en blanco si no quieres cambiarla.</small>");
define("LM_YES","Sí");
define("LM_NO","No");
define("LM_ACTIVE","Activo:");
define("LM_TAR_PATH","Ruta o comando Tar:");
define("LM_TAR_PATH_SUB","<small>(se requiere cuando el tipo de archivo es Tar y 'Activo' está marcado.)</small>");
define("LM_ZIP_PATH","Ruta o comando ZIP:");
define("LM_ZIP_PATH_SUB","<small>(Se requiere si el tipo de archivo es Zip y 'Activo' está marcado.)</small>");
define("LM_MYSQLDUMP_PATH","Ruta o comando MySQLDump:<br />(Se requiere si 'Activo' está marcado
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");
define("LM_CONFIG_MANUAL","Proceso de copia de seguridad manual");
define("LM_CONFIG_MANUAL_BACKUP","Copia de seguridad manual");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Esta opción es para cuando tienes limitaciones de tiempo de ejecución en tu servidor. Requiere que tengas activado javascript en tu navegador.");
define("LM_CONFIG_MANUAL_FILES","Archivos a procesar en la sesión manual:");
define("LM_CONFIG_MANUAL_REFRESH","Tiempo de refresco entre sesiones:");
define("LM_CONFIG_SYSTEM_MDATABASES","Copia de seguridad de bases de datos múltiples:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","esta opción controla cuándo XCloner puede hacer copia de seguridad de bases de datos múltiples");
define("LM_CONFIG_CRON_LOCAL","Servidor local*");
define("LM_CONFIG_CRON_REMOTE","Cuenta FTP remota");
define("LM_CONFIG_CRON_EMAIL","Correo**");
define("LM_CONFIG_CRON_FULL","Completo (archivos + BBDD)");
define("LM_CONFIG_CRON_FILES","Archivos solo");
define("LM_CONFIG_CRON_DATABASE","BBDD solo");
define("LM_CONFIG_EDIT","Editar archivo de configuración:");
define("LM_CONFIG_BSETTINGS","Ruta configuración de la copia de seguridad.");
define("LM_CONFIG_BSETTINGS_OPTIONS","Opciones del generador de copias de seguridad");
define("LM_CONFIG_BSETTINGS_SERVER","Opciones del uso del servidor");
define("LM_CONFIG_BPATH","Ruta para guardar copia de seguridad:");
define("LM_CONFIG_UBPATH","Ruta de inicio de copia de seguridad:");
define("LM_CONFIG_BPATH_SUB","<small>ésta es la ruta donde se guardarán todas las copias de seguridad.</small>");
define("LM_CONFIG_UBPATH_SUB","<small>Introduce aquí la ruta de inicio de la copia de seguridad desde donde XCloner comenzará todos los procesos.</small>");
define("LM_CRON_EXCLUDE","Carpetas excluidas");
define("LM_CRON_EXCLUDE_DIR","Carpetas excluidas, lista una por línea<br>por favor, usa la ruta completa del directorio del servidor");
define("LM_CRON_BNAME","Nombre de la copia de seguridad:");
define("LM_CRON_BNAME_SUB","<small>Si se deja en blanco, generaremos un nombre por defecto cada vez que una copia de seguridad cron se haga.</small>");
define("LM_CRON_IP","IP's Cron permitidas:");
define("LM_CRON_IP_SUB","<small>por defecto, solo el servidor local tendrá acceso al proceso cron pero puedes introducir otras IP's, una por línea.</small>");
define("LM_CRON_DELETE_FILES","Borrar viejas copias de seguridad");
define("LM_CRON_DELETE_FILES_SUB","Borrar copias de seguridad previas:");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE","Activo:");
define("LM_CRON_SEMAIL","Enviar log Cron a:");
define("LM_CRON_SEMAIL_SUB","<small>Si se escribe una dirección de correo, después de correr el proceso Cron se enviará un correo a esa dirección. Si son mas direcciones separar por ';'.</small>");
define("LM_CRON_MCRON","Nombre de la configuración:");
define("LM_CRON_MCRON_AVAIL","Configuraciones disponibles:");
define("LM_CRON_MCRON_R","Por favor introduce un nombre para tu configuración Cron.");
define("LM_CRON_MCRON_SUB","<small>Con esta opción podras salvar la configuración actual en un archivo separado y usarlo para correr procesos Cron múltiples.</small>");

define("LM_CRON_SETTINGS_M","Configuración de procesos Cron múltiples");
define("LM_MENU_OPEN_ALL","Abrir todos");
define("LM_MENU_CLOSE_ALL","Cerrar todos");
define("LM_MENU_ADMINISTRATION","Administración");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Configuración");
define("LM_MENU_CRON","Cron");
define("LM_MENU_LANG","Taductor");
define("LM_MENU_ACTIONS","Acciones");
define("LM_MENU_Generate_backup","Generar copia de seguridad");
define("LM_MENU_Restore_backup","Restaurar copia de seguridad");
define("LM_MENU_View_backups","Ver copias de seguridad");
define("LM_MENU_Documentation","Ayuda");
define("LM_MENU_ABOUT","Sobre XCloner");
define("LM_DELETE_FILE_FAILED","Ha fallado el borrado, por favor comprueba los permisos de archivos");
define("LM_JOOMLAPLUG_CP","XCloner - Tu solución de copias de seguridad");
define("LM_MENU_FORUM","Foro");
define("LM_MENU_SUPPORT","Soporte técnico");
define("LM_MENU_WEBSITE","Página web");
define("LM_MAIN_Settings","Configuración");
define("LM_MAIN_View_Backups","Ver copias de seguridad");
define("LM_MAIN_Generate_Backup","Generar copias de seguridad");
define("LM_MAIN_Help","Ayuda");
define("LM_FTP_TRANSFER_MORE","Modo conexión FTP");
define("LM_LANG_NAME","Nombre de idioma");
define("LM_LANG_MSG_DEL","Lenguaje borrado con éxito!");
define("LM_LANG_NEW","Nuevo nombre de idioma:");
define("LM_LANG_EDIT_FILE","Editar archivo:");
define("LM_LANG_EDIT_FILE_SUB","No olvides salvar tu traducción cada 5 minutos. Solo pulsa el botón aplicar para actualizar.");
define("LM_TAB_GENERAL","General");
define("LM_TAB_G_STRUCTURE","Estructura");
define("LM_TAB_SYSTEM","Sistema");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Info servidor");
define("LM_TAB_G_DATABASE","Opciones de BBDD");
define("LM_TAB_G_FILES","Opciones de archivos");
define("LM_G_EXCLUDE_COMMENT","<br>Por favor, introduce aquí las carpetas excluidas.
    <br><b>Puede que quieras deshabilitar el caché cuando hagas una copia de seguridad, o si no, excluir la carpeta caché de la copia de seguridad</b>");
define("LM_MSG_FRONT_1","Ningún paquete disponible");
define("LM_MSG_FRONT_2","Ha fallado la subida FTP para este destino");
define("LM_MSG_FRONT_3","Subida hecha para");
define("LM_MSG_FRONT_4","La conexión FTP ha fallado");
define("LM_MSG_FRONT_5","Intentando conectar a");
define("LM_MSG_FRONT_6","para el usuario");
define("LM_MSG_BACK_1","Configuración actualizada con éxito...");
define("LM_MSG_BACK_2","La conexión FTP ha fallado!");
define("LM_MSG_BACK_3","copia de seguridad movida con éxito!. La copia de seguridad debería ser visible en el lugar elegido.");
define("LM_MSG_BACK_4","transferencia realizada, comenzando el prceso de clonado en el servidor remoto");
define("LM_MSG_BACK_5","despublicado del frontend con éxito");
define("LM_MSG_BACK_6","Ha fallado la despublicación! Por favor, compruebe sus rutas");
define("LM_MSG_BACK_7","Publicado en el frontend con éxito!");
define("LM_MSG_BACK_8","Publicación fallida! Por favor, compruebe sus rutas");
define("LM_MSG_BACK_9","Clones renombrados con éxito!");
define("LM_MSG_BACK_10","La ruta Joomla no está dentro de la ruta de copia de seguridad! No podría usar el modo de descarga directa! Debería editar su Configuración -> Sistema y establecer el -Vinculo de descarga directa- a -No-");
define("LM_MSG_BACK_11","Proceso de copia de seguridad manual completada!<a href='index2.php?option=com_cloner&task=view'>Pulsar aquí para continuar</a>");
define("LM_MSG_BACK_12","<h2>Ha fallado la copia de seguridad!. Por favor, compruebe que tiene soporte para utilidades ZIP (/usr/bin/zip or /usr/local/bin/zip) en su servidor y la ruta que estableciste en la configuración es correcta, o elige el tipo de archivo Zip.</h2>");
define("LM_MSG_BACK_13","<h2>Ha fallado la copia de seguridad!. Por favor, compruebe que tiene soporte para utilidades TAR (/usr/bin/tar or /usr/local/bin/tar) en su servidor y la ruta que estableciste en la configuración es correcta, o elige el tipo de archivo Tar.</h2>");
define("LM_MSG_BACK_14","<font color='red'>Hubo un problema al generar la copia de seguridad de la base de datos, Por favor comprueba tu ruta al servidor mysqldump.</font>");
define("LM_CRON_TOP","Configurando la copia de seguridad Cron:");
define("LM_CRON_SUB","<b>Usando la función Cron puedes configurar un generador automático de copias de seguridad para tu web Joomla:</b><br>
Para configurarla necesitas añadir en tu panel de control Cron el comando siguiente:");
define("LM_CRON_HELP","Atención:
 - Si tu ruta php es diferente de /usr/bin/php Por favor, usa esta: format /$"."php_path/php


Weiterführende Informationen (englisch) wie man ein Cronjob konfiguriert für
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>click here</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>click here</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>click here</a>
 - General Linux crontab info <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>click here</a>

Wenn du Hilfe beim Setup des Cron Backups benötigst oder Probleme beim Cron Backups hast, dann wende dich bitte 
an unser Forum <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a> oder schreibe uns eine Email an <a href='mailto:admin@xcloner.com'>admin@xcloner.com</a>");
define("LM_CRON_SETTINGS","Configuración Cron");
define("LM_CRON_MODE","Modo de guardado e copias de seguridad:");
define("LM_CRON_MODE_INFO"," <br />
      <small>Fijese bien*: Si se elige -Servidor local- Usaremos la ruta de copias de seguridad por defecto de la sección General para guardar la copia de seguridad </small>
<br />
<small> Atención:** Si se usa el modo correo no garantizamos que la copia de seguridad alcance la cuenta de correo debido a limitaciones del proveedor</small>");
define("LM_CRON_TYPE_INFO","<small><br />Por favor, elije el tipo de copia que querrías crear.</small>");
define("LM_CRON_MYSQL_DETAILS","Opciones MySQL");
define("LM_CRON_MYSQL_DROP","Añade MySQL Drop:");
define("LM_CRON_TYPE","Modo Copia de seguridad:");
define("LM_CRON_FTP_DETAILS","Detalles del modo de guardado FTP:");
define("LM_CRON_FTP_SERVER","Servidor FTP:");
define("LM_CRON_FTP_USER","Usuario FTP:");
define("LM_CRON_FTP_PASS","Contraseña FTP:");
define("LM_CRON_FTP_PATH","Ruta FTP:");
define("LM_CRON_FTP_DELB","Borrar copia de seguridad tras transferir:");
define("LM_CRON_EMAIL_DETAILS","Detalles del modo correo:");
define("LM_CRON_EMAIL_ACCOUNT","Cuenta de correo:");
define("LM_CRON_COMPRESS","Comprimir archivos de copia de seguridad:");
define("LM_RESTORE_TOP","Info de restaurar copias de seguridad");
define("LM_CREDIT_TOP","Sobre XCloner:");
define("LM_CLONE_FORM_TOP","<h2>Introduce tus datos FTP abajo:</h2>");
define("LM_CONFIG_INFO_T_SAFEMODE","Modo de seguridad Php:");
define("LM_CONFIG_INFO_T_MTIME","Tiempo máximo de ejecución Php::");
define("LM_CONFIG_INFO_T_MEML","Límite de memoria Php:");
define("LM_CONFIG_INFO_T_BDIR","PHP open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() Ayuda función:");
define("LM_CONFIG_INFO_T_TAR","Ruta servidor utilidad Tar:");
define("LM_CONFIG_INFO_T_ZIP","Ruta servidor utilidad Zip:");
define("LM_CONFIG_INFO_T_MSQL","Ruta servidor utilidad MySQLDump:");
define("LM_CONFIG_INFO_T_BPATH","Ruta Copia de seguridad:");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","<small>La ruta de inicio del la copia de seguridad necesita existir y ser legible para que XCloner comience el proceso de copia.</small>");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP","Carpeta temporal:");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","<small>Esta ruta necesita ser creada y escribible para que XCloner funcione correctamente.</small>");
define("LM_CONFIG_INFO","Esta pestaña mostrará Las opciones generales de sistema y las rutas");
define("LM_CONFIG_INFO_PATHS","Información de rutas generales:");
define("LM_CONFIG_INFO_PHP","Información de la configuración PHp:");
define("LM_CONFIG_INFO_TIME","<small>Esto controla el tiempo máximo que se permite a tu script para correr en el servidor, en segundos.</small>");
define("LM_CONFIG_INFO_MEMORY","<small>Esto controla la memoria máxima que pueden usar los procesos del script.</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Esto controla las rutas a las que tu script puede acceder. Sin valor, significa que puede acceder a todas.</small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>El modo seguro necesita configurarse a Off para que XCloner funcione correctamente.</small>");
define("LM_CONFIG_INFO_TAR","<small>Si el script no puede determinar la ruta tar automáticamente necesitarás desmarcar la caja de verificación en la línea TAR en la pestaña 'General'.</small>");
define("LM_CONFIG_INFO_ZIP","<small>Si el script no puede determinar la ruta zip automáticamente, necesitarás desmarcar la caja de verificación en la línea ZIP en la pestaña 'General'</small>");
define("LM_CONFIG_INFO_MSQL","<small>Si el script no puede determinar la ruta mysqldump automáticamente, necesitarás desmarcar la caja de verificación en la línea MYSQLDUMP en la pestaña 'General'</small>");
define("LM_CONFIG_INFO_EXEC","<small>Si esta función está deshabilitada, Puedes necesitar desmarcar ambas cajas de verificación en la pestaña 'General'.</small>");
define("LM_CONFIG_INFO_BPATH","<small>necesita ser escribible para que XCloner pueda archivar copias de seguridad.</small>");
define("LM_TRANSFER_URL","URL sitio web:");
define("LM_TRANSFER_URL_SUB","<small>Por favor, escriba la url de su sitio web donde se moverá la copia de seguridad. Ejemplo: http://www.nombresitio.com/ Esto se necesita para dirijirte allí y que accedas al script de restauración</small>");
define("LM_TRANSFER_FTP_HOST","Servidor FTP:");
define("LM_TRANSFER_FTP_HOST_SUB","Ejemplo: ftp.nombre de sitio.com");
define("LM_TRANSFER_FTP_USER","Usuario FTP:");
define("LM_TRANSFER_FTP_USER_SUB","Ejemplo 'Juan'");
define("LM_TRANSFER_FTP_PASS","Contraseña FTP:");
define("LM_TRANSFER_FTP_PASS_SUB","Ejemplo: 'juancontraseña'");
define("LM_TRANSFER_FTP_DIR","Directorio FTP:");
define("LM_TRANSFER_FTP_DIR_SUB","Por favor, escribe el directorio FTP donde querrías mover la copia de seguridad. Ejemplo: public_html/ o htdocs/ . Asegúrate de que tiene permisos de escritura para todos. Normalmente 777.");
define("LM_BACKUP_NAME","<b>Por favor, elije el nombre de tu copia de seguridad</b>");
define("LM_BACKUP_NAME_SUB","<small>Si se deja en blanco, generará un nombre por defecto.</small>");
define("LM_COL_AVALAIBLE","Paquete Frontend");
define("LM_DELETE_FILE_SUCCESS","Archivo(s) borrado(s)");
define("LM_DOWNLOAD_TITLE","Descargar esta copia de seguridad");
define("LM_DATABASE_EXCLUDED","Excluidos");
define("LM_DATABASE_CURRENT","BBDD actual:");
define("LM_DATABASE_INCLUDE_DATABASES","Incluir BBDD extra");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","<small>Puedes seleccionar múltiples BBDD para incluir en la copia de seguridad presionando la tecla Ctrl y seleccionando con el ratón los objetos que se desee incluir.</small>");
define("LM_DATABASE_MISSING_TABLES","Error: Definiciones de tabla no encontradas");
define("LM_DATABASE_BACKUP_FAILED","Copia de seguridad fallida, por favor comprueba que la carpeta administrator/backups es escribible!");
define("LM_DATABASE_BACKUP_COMPLETED","Copia de seguridad completada");
define("LM_RENAME_TOP","Renombrar clones seleccionados");
define("LM_RENAME","Renombrar clone");
define("LM_RENAME_TO","a");
define("LM_CLONER_RESTORE","<h2>Como restaurar una copia de seguridad en diferentes lugares INFO!</h2>
<pre>
Restaurar tus copias de seguridad nunca fué tan fácil! Con la ayuda de tu funvión de clonado de <a href='index2.php?option=com_cloner&task=view'>Ver copias</a>
tu podrás mover tus copias a cualquier parte en internet

Esto es lo que debes hacer:
   
   <b>Paso 1 - mueve la copia al servidor de restauración</b>
  
    - Ir al área 'Ver copias de seguridad'	
    - Tras seleccionar tu copia, pulsa en el Botón 'Clónalo'
    - Introduce los detalles ftp donde querrías clonar la copia de seguridad
    - Tras pulsra en 'enviar' la copia y el script de restauración serán transferidos al nuevo servidor y se te dará una url para acceder al nuevo paso basado en la url que introdujiste lara acceso remoto. Ejemplo: <b>http://Misitioderestauración.com/XCloner.php</b>

<b>Atención:</b>Si este proceso falla por alguna razón. Debes hacer esto: 
     1. Descárgate la copia de seguridad en tu PC.
     2. Descárgate el script de restauración, los archivos, desde el directorio administrator/components/com_xcloner-backupandrestore/restore/
     3. Sube la copia de seguridad y el script a tu directorio de restauración.
     4. Lanza XCloner.php en tu navegador y sigue la pantalla de restauración tal y como especifica abajo
     Beispiel URL: <b>http://neue-seite.de/XCloner.php</b>
   
   <b>Paso 2: La pantalla de restauración de XCloner.php:</b>
   <b>XCloner.php - El script de restauración -</b>
        - En este paso ya tienes en posición el clon que has hecho basado en tu sitio Joomla y script de restauración
    - Introduzca los nuevos detalles de mysql. Esto incluye tu nuevo servidor MYSQL, usuario, contraseña y nombre de BBDD.
    - Introducetu nueva Url y contraseña
    - Para restaurar los archivos tienes <b>2 opciones:</b>
       
       	- 1. Restaurar los archivos pot ftp, el script simulará un proceso de subida ftp en tu servidor, esto solucionará los problemas de permisos del paso 2. 
       	- 2. Restaura los archivos directamente, esto desarchivará los archivos en tu servidor, será rápido pero podrá encontrar algun problema de permisos si el acceso ftp se usa muy a menudo para hacer cambios en el sitio
      			
    - Tras pulsar el botón de envío el script tratará de mover los archivos a la nueva ruta directamente o usando ftp e instalará la BBDD.  
    - Si todo va bientu clon del sitio estará subido y corriendo normalmente en su nuevo emplazamiento
    
  Para soporte, consulta nuestro foro <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
    o envíanos un correo a <a href='mailto:info@xcloner.com'>info@xcloner.com</a>.   

</pre>");
define("LM_CLONER_ABOUT","<h2>Copia de seguridad XCloner</h2><br />
      <pre>XCloner es una herramienta que te ayudará a manejar tus copias de seguridad de tus sitios Joomla, generar/restaurar/mover, de manera que tu sitio esté siempre seguro. <b>Características:</b>
       - Script Cron para generar copias de seguridad
       - Opciones para multiples copias de seguridad
       - Herramienta de restauración para mover el sitio web rápidamente a otros emplazamientos.
       - Multiples emplazamientos en donde podrías guardar la copia a salvo.

Para reportar problemas o enviarnos sugerencias, contáctenos a admin@xcloner.com o visítenos en  
<a href='http://www.xcloner.com'>http://www.xcloner.com</a>.
	   </pre>
     <br/><br/>

      XCloner.com © 2004-2010 | <a href='http://www.xcloner.com'>www.xcloner.com</a>
      <br/><p/><br/>");
define("LM_LOGIN_TEXT","<pre>
<b>Atención:</b>
 1. Si estás en esta pantalla por primera vez tu usuario por defecto es '<i>admin</i>' y la contraseña '<i>admin</i>'. 
    necesitarás cambiarla tras entrar en el sistema
 
 2. Si olvidas tu contraseña necesitarás resetearla con este código: 
        
	<b>$"."_CONFIG[\"jcpass\"] = md5(\"mi_nueva_contraseña\");</b>
</pre>
");
?>
