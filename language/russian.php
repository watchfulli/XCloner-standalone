<?php
define("LM_FRONT_CHOOSE_PACKAGE","<b>Выберите пакет для установки:</b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Пожалуйста, выберите версию Joomla, которую вы хотите установить</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Установка Joomla</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Укажите FTP настройки:</h2>");
define("LM_FRONT_WEBSITE_URL","<b>Сайт:</b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Пожалуйста, укажите URL сайта, где будет  будет установлена Joomla, например, http://www.sitename.com/Joomla</small>");
define("LM_FRONT_FTP_HOST","<b>FTP хоста:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>например ftp.sitename.com</small>");
define("LM_FRONT_FTP_USER","<b>FTP имя пользователя:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>например john</small>");
define("LM_FRONT_FTP_PASS","<b>FTP пароль:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>например johnpass</small>");
define("LM_FRONT_FTP_DIR","<b>FTP каталог:</b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Пожалуйста, укажите FTP-каталог, где вы хотите установить Joomla, например public_html / Joomla / или htdocs / Joomla / и убедитесь, что он имеет право на запись для всех</small>");
define("LM_TRANSFER_FTP_INCT","Дополнительные передачи:");
define("LM_TRANSFER_FTP_INCT_SUB","будем пытаться передавать файлы по FTP в пошаговом режиме, чтобы избежать пустых страниц или тайм-ауты");
define("LM_FRONT_BOTTOM","Не работает у вас? Пожалуйста, расскажите нам, что произошло -> <a href='http://www.xcloner.com/contact/'>Contact page</a><br />
                         Powered by <a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","Мы загрузили утилиту восстановления пакетов на ваш FTP-сайт, чтобы продолжить нажмите здесь");
define("LM_NOPAKCAGE_ERROR","Не существует выбранного пакета, прерывание...!");
define("LM_AMAZON_S3","Amazon S3 хранение");
define("LM_AMAZON_S3_ACTIVATE","Активировать");
define("LM_AMAZON_S3_AWSACCESSKEY","AWS ключ доступа:");
define("LM_AMAZON_S3_AWSSECRETKEY","AWS секретный ключ:");
define("LM_AMAZON_S3_BUCKET","Bucket имя:");
define("LM_AMAZON_S3_DIRNAME","Загрузить каталог:");
define("LM_AMAZON_S3_SSL","Включить SSL передачи");
define("LM_DATABASE_EXCLUDE_TABLES","Выберете таблицы БД (с помощью CTRL), которые вы хотите исключить из резервной копии:");
define("LM_CONFIG_SYSTEM_FOLDER","Папки отображения:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","Пожалуйста, выберите режим, который вы хотели бы выбрать исключить папки из раздела 'Создание Backup'");
define("LM_CONFIG_SYSTEM_LANG","Язык системы:");
define("LM_CONFIG_SYSTEM_LANG_SUB","настраивает XCloner язык, если он установлен по умолчанию, он будет отображаться язык по умолчанию Joomla при наличии");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","Система по умолчанию");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Включить Прямая ссылка для скачивания:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","Если выбрана эта опция, в экране 'Просмотр резервных копий, ссылку на скачивание будет прямой ссылке с сервера для загрузки пакета, пожалуйста, обратите внимание, что резервный путь должен быть в корневом каталоге Joomla'");
define("LM_CONFIG_DISPLAY","Параметры дисплея");
define("LM_CONFIG_SYSTEM","Настройки системы");
define("LM_CONFIG_SYSTEM_FTP","FTP режим передачи");
define("LM_CONFIG_SYSTEM_FTP_SUB","выбрать, как файлы будут переданы с сервера на сервер при использовании FTP-протокола");
define("LM_CONFIG_MEM","Резервное копирование с помощью функции сервера");
define("LM_CONFIG_MEM_SUB","<small>Если установлен активный, вам будет необходимо иметь на сервере поддержку<b>zip or tar</b> и / или <b>mysqldump</b> Команды и указать пути к ним, а также <b>exec()</b> Доступ в PHP</small>");
define("LM_CRON_DB_BACKUP","Включить резервное копирование баз данных:");
define("LM_CRON_DB_BACKUP_SUB","<small>Выберите эту опцию, чтобы включить MySQL данные в резервную копию.</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Включить резервное копирование БЭКАПА в сам БЭКАП:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>Если выбрана эта опция,то каждая новая резервная копия будет добавлятся в предыдущие резервные копии, тем самым увеличивая размер новой копии каждый раз.</small>");
define("LM_TAB_MYSQL","MYSQL");
define("LM_CONFIG_MYSQL","Настройки Подключение к MySQL:");
define("LM_CONFIG_MYSQLH","Mysql имя хоста:");
define("LM_CONFIG_MYSQLU","Mysql имя пользователя:");
define("LM_CONFIG_MYSQLP","Mysql пароль:");
define("LM_CONFIG_MYSQLD","Mysql база данных:");
define("LM_TAB_AUTH","Логин/Пароль");
define("LM_CONFIG_AUTH","Настройки доступа пользователя");
define("LM_CONFIG_AUTH_USER","Имя пользователя:");
define("LM_CONFIG_AUTH_PASS","Пароль:");
define("LM_CONFIG_AUTH_USER_SUB","это будет ваш логин XCloner");
define("LM_CONFIG_AUTH_PASS_SUB","по умолчанию логин пароль, оставьте пустым, если вы не хотите, изменять его");
define("LM_YES","Да");
define("LM_NO","Нет");
define("LM_ACTIVE","Активный");
define("LM_TAR_PATH","Путь Tar или команды:");
define("LM_TAR_PATH_SUB","(требуется, если тип архива Tar и активный флажок)");
define("LM_ZIP_PATH","Путь Zip или команды:");
define("LM_ZIP_PATH_SUB","(требуется, если архив типа Zip и активный флажок)");
define("LM_MYSQLDUMP_PATH","Mysqldump пути или команды: (требуется, если активный флажок)<br /> Для больших MySQL, пожалуйста, используйте
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");
define("LM_CONFIG_MANUAL","Процесс резервного копирования руководство");
define("LM_CONFIG_MANUAL_BACKUP","PHP ограничения времени:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Выберите эту опцию, если у вас есть PHP ограничения времени выполнения на сервере. Это потребует включить JavaScript в вашем браузере");
define("LM_CONFIG_MANUAL_FILES","Файлы для обработки каждого запроса:");
define("LM_CONFIG_DB_RECORDS","База данных записей в запросе");
define("LM_CONFIG_MANUAL_REFRESH","Время между запросами:");
define("LM_CONFIG_SYSTEM_MDATABASES","Резервное копирование нескольких баз данных:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","Этот параметр определяет,  может ли XCloner  делать резервное копирование нескольких баз данных");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Исключить файлы размером более:");
define("LM_CONFIG_CRON_LOCAL","Локальный сервер*");
define("LM_CONFIG_CRON_REMOTE","Удаленный FTP");
define("LM_CONFIG_CRON_EMAIL","Email**");
define("LM_CONFIG_CRON_FULL","Полная (файлы + база данных)");
define("LM_CONFIG_CRON_FILES","Только файлы");
define("LM_CONFIG_CRON_DATABASE","Только база данных");
define("LM_CONFIG_EDIT","Редактирование конфигурационного файла:");
define("LM_CONFIG_BSETTINGS","Настройки папки резервного копирования");
define("LM_CONFIG_BSETTINGS_OPTIONS","Параметры резервной копии");
define("LM_CONFIG_BSETTINGS_SERVER","Настройки сервера");
define("LM_CONFIG_BPATH","Папка резервного копирования:");
define("LM_CONFIG_UBPATH","Резервное копирование 'начальный путь':");
define("LM_CONFIG_BPATH_SUB","<small>это папка, где будут храниться все ваши резервные копии сайта</small>");
define("LM_CONFIG_UBPATH_SUB","<small>это основная папка, которую XCloner будет использовать для выбора резервного копирования файлов и каталогов</small>");
define("LM_CRON_EXCLUDE","Исключение справочников");
define("LM_CRON_EXCLUDE_DIR","Исключен список каталогов на одну строку:<br>пожалуйста, используйте полный путь к серверу каталогов");
define("LM_CRON_BNAME","Имя резервной копии:");
define("LM_CRON_BNAME_SUB","<small>Если оставить пустым, мы будем генерировать имя по умолчанию каждый раз на новую резервную копию</small>");
define("LM_CRON_IP","Cron разрешен с IP-адресов:");
define("LM_CRON_IP_SUB","<small>По умолчанию, только на локальном сервере можно будет иметь доступ к крону, но вы можете ввести другой IP адрес в строке</small>");
define("LM_CRON_DELETE_FILES","Удаление старых резервных копий");
define("LM_CRON_DELETE_FILES_SUB","Удалять резервные копии старше:");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE","Активировать");
define("LM_CRON_SEMAIL","E-mail крон журнала:");
define("LM_CRON_SEMAIL_SUB","Если адрес электронной почты указан, после запуска крона, будет выслан на этот адрес; несколько адресов могут быть добавлены и разделенны ;");
define("LM_CRON_MCRON","Имя конфигурации:");
define("LM_CRON_MCRON_AVAIL","Доступные конфигурации:");
define("LM_CRON_MCRON_R","Пожалуйста, задайте простое имя для новой конфигурации крона");
define("LM_CRON_MCRON_SUB","С помощью этой опции вы сможете сохранить текущую конфигурацию в отдельный файл и использовать его для запуска нескольких Cronjobs");
define("LM_CRON_SETTINGS_M","Несколько конфигурации Cronjobs");
define("LM_CONFIG_SPLIT_BACKUP_SIZE","Сплит архивов, если размер больше, чем:");
define("LM_MENU_OPEN_ALL","Открыть все");
define("LM_MENU_CLOSE_ALL","Закрыть все");
define("LM_MENU_ADMINISTRATION","Управление");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Настройки");
define("LM_MENU_CRON","Cron");
define("LM_MENU_LANG","Выбор языка");
define("LM_MENU_ACTIONS","Действия");
define("LM_MENU_Generate_backup","Создание резервной копии");
define("LM_MENU_Restore_backup","Восстановление резервной копии");
define("LM_MENU_View_backups","Просмотр резервных копий");
define("LM_MENU_Documentation","Документация");
define("LM_MENU_ABOUT","Об XCloner");
define("LM_DELETE_FILE_FAILED","Удаление не удалось, пожалуйста, проверьте права доступа к файлу");
define("LM_JOOMLAPLUG_CP","XCloner - Ваш сайт резервного копирования и восстановления");
define("LM_MENU_FORUM","Форум");
define("LM_MENU_SUPPORT","Поддержка");
define("LM_MENU_WEBSITE","Сайт");
define("LM_MAIN_Settings","Настройки");
define("LM_MAIN_View_Backups","Просмотр резервных копий");
define("LM_MAIN_Generate_Backup","Создание резервной копии");
define("LM_MAIN_Help","Помощь");
define("LM_FTP_TRANSFER_MORE","FTP режим подключения");
define("LM_REFRESH_MODE","Обновить резервное копирование");
define("LM_DEBUG_MODE","Включить LOG:");
define("LM_REFRESH_ERROR","Обнаружена ошибка при получении JSON данных с сервера, попробуйте еще раз или свяжитесь с разработчиками!");
define("LM_LANG_NAME","Название языка");
define("LM_LANG_MSG_DEL","Язык(и) успешно удален(ы)!");
define("LM_LANG_NEW","Новый язык:");
define("LM_LANG_EDIT_FILE","Редактирование файлов:");
define("LM_LANG_EDIT_FILE_SUB","Не забудьте сохранять ваш перевод каждые 5 минут, просто нажмите кнопку Применить для обновления");
define("LM_TAB_GENERAL","Общие");
define("LM_TAB_G_STRUCTURE","Структура");
define("LM_TAB_SYSTEM","Система");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Информация");
define("LM_TAB_G_DATABASE","Параметры базы данных");
define("LM_TAB_G_FILES","Файлы");
define("LM_TAB_G_COMMENTS","Резервное копирование Комментарии");
define("LM_G_EXCLUDE_COMMENT","<br>Пожалуйста, введите здесь исключенные папки, по одной на строку!
    <br><b>Вы можете отключить кэш функцию, когда делаете резервную копию, или не отключать папку кэша из резервной копии</b>");
define("LM_TAB_G_COMMENTS_H2","Введите ниже любые дополнительные комментарии к архиву:");
define("LM_TAB_G_COMMENTS_NOTE","Обратите внимание, что комментарии хранятся в архиве, файл <b>administrator/backups/.comments</b>");
define("LM_MSG_FRONT_1","Нет пакета avalaible");
define("LM_MSG_FRONT_2","Не удалось закачать файл для назначения");
define("LM_MSG_FRONT_3","Добавлено для");
define("LM_MSG_FRONT_4","FTP соединение не удается!");
define("LM_MSG_FRONT_5","Попытка подключения к");
define("LM_MSG_FRONT_6","для пользователя");
define("LM_MSG_BACK_1","Config успешно обновляется ...");
define("LM_MSG_BACK_2","FTP соединение не удается!");
define("LM_MSG_BACK_3","Резервное копирование продолжается! Выбор резервного копирования вы должны быть доступны на условии расположения!");
define("LM_MSG_BACK_4","Перемещение сделано, начиная с клонов процесса на удаленном компьютере");
define("LM_MSG_BACK_5","Успешно неопубликованные от интерфейса");
define("LM_MSG_BACK_6","Отмена публикации не удалось! Пожалуйста, проверьте ваши пути!");
define("LM_MSG_BACK_7","Успешно опубликованы в интерфейсе");
define("LM_MSG_BACK_8","Публикация не удалась! Пожалуйста, проверьте ваши пути!");
define("LM_MSG_BACK_9","Копия успешно переименована!");
define("LM_MSG_BACK_10","Путь Joomla не входит в ваши резервные пути! Невозможно использовать режим прямого скачивания! Вы должны редактировать свои Конфигурация-> вкладка Система и установите 'Прямая ссылка для скачивания', чтобы не");
define("LM_MSG_BACK_11","Все сделано! Руководство процессом резервного копирования закончено! <a href='index2.php?option=com_cloner&task=view'>Нажмите здесь, чтобы продолжить</a>");
define("LM_MSG_BACK_12","<h2>Резервное копирование не удалось! Пожалуйста, проверьте, что у вас есть поддержка Zip Utility(/usr/bin/zip or /usr/local/bin/zip) на вашем сервере и путь, который вы установите в конфигурации, или выбрать тип Tar архив!</h2>");
define("LM_MSG_BACK_13","<h2>Резервное копирование не удалось! Пожалуйста, проверьте, что у вас есть поддержка утилиты(/usr/bin/tar or /usr/local/bin/tar) на вашем сервере и путь, который вы установите в конфигурации, или выбрать тип Zip архиве!</h2>");
define("LM_MSG_BACK_14","<font color='red'>Существовует проблема в создании резервной копии базы данных, пожалуйста, проверьте mysqldump путь к серверу!</font>");
define("LM_CRON_TOP","Настройка Cron команд");
define("LM_CRON_SUB","<b>Использование Cron функции вы можете настроить автоматический генератор резервного копирования для вашего сайта!</b>
<br />Чтобы установить его, необходимо добавить в ваш crontab панели управления одну из следующих команд:");
define("LM_CRON_HELP","Примечания:
 - если ваш PHP расположение Diferent, чем /usr/bin/php, пожалуйста, используйте этот формат /$"."php_path/php


Для получения дополнительной информации о том, как настроить крон для
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>click here</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>click here</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>click here</a>
 - General Linux crontab info <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>click here</a>

Если Вам нужна помощь в настройке вашего хрон, пожалуйста, посетите наш форум <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a>");
define("LM_CRON_SETTINGS","CRON настройки");
define("LM_CRON_MODE","Режим копирования CRON:");
define("LM_CRON_MODE_INFO"," <br />
      <small> примите к сведению: * если локальный сервер выбран, мы будем использовать путь по умолчанию резервное копирование из общего раздела для хранения резервной копии</small>
      <br />
      <small> Пожалуйста, обратите внимание: ** если письмо режим используется, мы не можем гарантировать, что резервная копия будет достигать учетной записи электронной почты в связи с ограничениями поставщика</small>");
define("LM_CRON_TYPE_INFO","<small><br /> пожалуйста, выберите тип резервной копии которую вы хотели бы создать</small>");
define("LM_CRON_MYSQL_DETAILS","Mysql Опции");
define("LM_CRON_MYSQL_DROP","Добавить Mysql Drop");
define("LM_CRON_TYPE","Тип резервной копии:");
define("LM_CRON_FTP_DETAILS","FTP настройки:");
define("LM_CRON_FTP_SERVER","FTP server:");
define("LM_CRON_FTP_USER","FTP имя пользователя:");
define("LM_CRON_FTP_PASS","FTP пароль:");
define("LM_CRON_FTP_PATH","FTP путь:");
define("LM_CRON_FTP_DELB","Удаление резервных копий после передачи");
define("LM_CRON_EMAIL_DETAILS","Email режим подробнее:");
define("LM_CRON_EMAIL_ACCOUNT","Email аккаунт:");
define("LM_CRON_COMPRESS","Сжатие резервных файлов:");
define("LM_RESTORE_TOP","Информация о восстановлении резервных копий");
define("LM_CREDIT_TOP","О XCloner");
define("LM_CLONE_FORM_TOP","<h2>Укажите настройки FTP:</h2>");
define("LM_CONFIG_INFO_T_SAFEMODE","Php Safe_mode:");
define("LM_CONFIG_INFO_T_VERSION","PHP Version Check:");
define("LM_CONFIG_INFO_T_MTIME","Php max_execution_time:");
define("LM_CONFIG_INFO_T_MEML","Php memory_limit:");
define("LM_CONFIG_INFO_T_BDIR","Php open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() function support:");
define("LM_CONFIG_INFO_T_TAR","Tar утилита путь к серверу:");
define("LM_CONFIG_INFO_T_ZIP","Zip утилита путь к серверу:");
define("LM_CONFIG_INFO_T_MSQL","Mysqldump Путь сервера утилиты:");
define("LM_CONFIG_INFO_T_BPATH","Путь резервного копирования:");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","резервный путь начало должнен существовать и быть читаемым для того, чтобы XCloner, чтобы начал процесс резервного копирования");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP","Временная папка");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","the path <i>[Резервное копирование Начало пути/administrator/backups]</i> должны быть созданы и быть доступным для записи для того, чтобы XCloner чтобы работать должным образом");
define("LM_CONFIG_INFO","Эта вкладка показывает общую информацию о системе и пути");
define("LM_CONFIG_INFO_PATHS","Общая информация путей:");
define("LM_CONFIG_INFO_PHP","Php сведенья о конфигурации:");
define("LM_CONFIG_INFO_TIME","<small>Это позволяет контролировать максимальное время (в секундах), сценарий может быть запущен на сервере</small>");
define("LM_CONFIG_INFO_MEMORY","<small>Это позволяет контролировать максимальный объем памяти сценарий может выделить для его процессов</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>Это контролирует пути вашего сценария будет разрешен доступ, никакого значения означает, что он может получить доступ к любому пути </small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>в безопасном режиме, нужно будет установить в Off для того, чтобы XCloner работал должным образом </small>");
define("LM_CONFIG_INFO_VERSION","<small>PHP >=5.2.3 требуется, чтобы пользоваться всеми функциями</small>");
define("LM_CONFIG_INFO_TAR","<small>Если скрипт не может определить смолы путь автоматически, вам придется снять 'Активные' флажок рядом TAR линии в закладке Общие</small>");
define("LM_CONFIG_INFO_ZIP","<small>Если скрипт не может определить почтовый путь автоматически, вам придется снять 'Активные' флажок рядом ZIP линии в закладке Общие</small>");
define("LM_CONFIG_INFO_MSQL","<small>Если скрипт не может определить mysqldump путь автоматически, вам придется снять 'Активные' флажок вблизи линии Mysqldump в закладке Общие</small>");
define("LM_CONFIG_INFO_EXEC","<small>Если эта функция отключена, вы можете снять как 'Активные' флажков на вкладке Общие</small>");
define("LM_CONFIG_INFO_BPATH","<small>должно быть доступным для записи для того, чтобы XCloner в ​​архив резервных копий</small>");
define("LM_TRANSFER_URL","URL cайта:");
define("LM_TRANSFER_URL_SUB","<small>Пожалуйста, укажите URL сайта, куда будет произведено резервное копирование (например, http://www.sitename.com/)</small>");
define("LM_TRANSFER_FTP_HOST","FTP хоста:");
define("LM_TRANSFER_FTP_HOST_SUB","например - ftp.sitename.com");
define("LM_TRANSFER_FTP_USER","FTP имя пользователя:");
define("LM_TRANSFER_FTP_USER_SUB","например 'john'");
define("LM_TRANSFER_FTP_PASS","FTP пароль:");
define("LM_TRANSFER_FTP_PASS_SUB","например 'johnpass'");
define("LM_TRANSFER_FTP_DIR","FTP каталог:");
define("LM_TRANSFER_FTP_DIR_SUB","Пожалуйста, укажите FTP-каталог, куда бы вы хотели бы поместить бэкап (например, public_html/ or htdocs/) и проверьте, что данная папка имеет право на запись 'для всех'");
define("LM_BACKUP_NAME","<b>Пожалуйста, выберите имя резервного копирования</b>");
define("LM_BACKUP_NAME_SUB","<small>Если оставить пустым, мы будем генерировать имя по умолчанию!</small>");
define("LM_COM_TITLE","XCloner Менеджер -");
define("LM_COM_TITLE_CONFIRM","Подтвердите Выбор папки");
define("LM_COL_FILENAME","Резервная копия");
define("LM_COL_DOWNLOAD","Скачать");
define("LM_COL_AVALAIBLE","Frontend пакета");
define("LM_COL_SIZE","Размер");
define("LM_COL_DATE","Дата бэкапа");
define("LM_COL_FOLDER","<b>Исключенные папки и/или файлы</b>");
define("LM_DELETE_FILE_SUCCESS","Удаленные файлы");
define("LM_DOWNLOAD_TITLE","Скачать");
define("LM_ARCHIVE_NAME","Имя архива");
define("LM_NUMBER_FOLDERS","Количество папок");
define("LM_NUMBER_FILES","Количество файлов");
define("LM_SIZE_ORIGINAL","Размер оригинального файла");
define("LM_SIZE_ARCHIVE","Размер архива");
define("LM_DATABASE_ARCHIVE","Резервное копирование базы данных");
define("LM_CONFIRM_INSTRUCTIONS","<b>Пожалуйста, выберите папки, которые Вы хотите исключить из резервной копии</b>
<br />- По умолчанию все папки включены, если вы хотите исключить определенную папку и ее подпапки просто установите флажок рядом с ним");
define("LM_CONFIRM_DATABASE","Резервное копирование базы данных");
define("LM_DATABASE_EXCLUDED","Исключенные");
define("LM_DATABASE_CURRENT","Текущая база данных:");
define("LM_DATABASE_INCLUDE_DATABASES","Включая дополнительные базы данных");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","Вы можете выбрать несколько баз данных включить в резервную копию, удерживая нажатой клавишу CTRL и выбрать нужный пункт с помощью мыши<br />
базы данных будет храниться вadministrator/backups каталог в архиве");
define("LM_DATABASE_MISSING_TABLES","Ошибка: Таблица Определения не найдена");
define("LM_DATABASE_BACKUP_FAILED","Ошибка резервного копирования, убедитесь, что administrator/backups каталог доступен для записи!");
define("LM_DATABASE_BACKUP_COMPLETED","Резервное копирование завершено");
define("LM_RENAME_TOP","Переименовать выбранную копию");
define("LM_RENAME","Переименовать копию");
define("LM_RENAME_TO"," к");
define("LM_CLONER_RESTORE","<h2><b>Инструкция 'Как восстановить резервную копию сайта'</b></h2><br/>
<pre>
  <b>Вы не поверите, но восстановление резервной копий сайта не было еще таким простым</b>
  С помощью функций копирования 'CLONE' - <a href='index2.php?option=com_cloner&task=view'>Просмотр резервных копий</a>,
  Вы сможете переместить бэкап своего сайта на любой хостинг в интернете. 
  
  Вот что вам для этого нужно:
----------------------------------------------------------------------------------
   <b>Шаг 1 - Копирование резервной копии сайта на хостинг</b>

    - перейдите в меню XCloner -> <a href='index2.php?option=com_cloner&task=view'>Просмотр резервных копий</a>
    - после этого, выберете ВАШУ резервную копию и нажмите на кнопку 'CLONE'
    - Введите настройки FTP доступа, которые вам выдал хостинг-провайдер
    - после этого, резервная копия сайта и скрипт восстановления будут перемещены 
на сервер хостинг-провайдера и вам будет предоставлен URL-адрес для доступа к следующему шагу
    - после нажатия на соответствующую ссылку, вы 
попадете на новую страницу (образец url <b>http://адрес вашего сайта/XCloner.php)</b>

   <b>ВАЖНО:</b> Если выше описанный процесс не может быть выполнен по 
   какой-либо причине, то вам нужно сделать следующее:
   
   	1. Скачать резервную копию сайта к себе на компьютер
   	2. Скачать скрипты восстановления из каталога:
	
   		<strong>Joomla : administrator/components/com_xcloner-backupandrestore/restore/</strong>
		<strong>Wordpress : wp-content/plugins/xcloner-backup-and-restore/</strong>
		<strong>Standalone: restore/</strong>
	
   	3. Загрузить резервную копию и сценарии востановления по FTP на новый хостинг
   	4. Запустить скрипт XCloner.php в вашем интернет браузере (<b>http://адрес вашего сайта/XCloner.php)</b>)
	и следовать дальнейшим инструкциям
----------------------------------------------------------------------------------
   <b>Шаг 2 - Восстановление копии сайта с помощью скрипта XCloner.php</b>

Что у Вас должно быть перед этим шагом: 

	- Загруженные по FTP резервная копия сайта и скрипты восстановления на хостинге
	- Созданная новая база данных через панель управления хостинга

Далее:

- Введите в браузере адрес <b>http://адрес вашего сайта/XCloner.php)</b>
- Введите найстроки MySQL, чтобы подключится к базе данных 
(имя хоста, имя пользователя и пароль, а также имя базы данных)
- Введите новый URL-адрес расположения сайта и путь
- Для восстановления файлов у вас есть <b>2 опции:</b>

       	- 1) Восстановить файлы бэкапа через FTP настройки
(таким образом,сценарий будет имитировать процесс загрузки фаилов на FTP сервер)
       	- 2) Восстановить файлы напрямую (установленна по умолчанию)
(таким образом, скрипт восстановления просто разархивирует вашу копию и все)

    - после того, нажмите 'Start install', чтобы восстановить файлы и баззы данных
    - если все пойдет хорошо, то новая копия сайта будет работать на хостинге

    Для получения поддержки обратитесь к нашему форуму <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
    или чере email: <a href='mailto:info@xcloner.com'>info@xcloner.com</a>


</pre>");
define("LM_CLONER_ABOUT","<h2>XCloner компанент резервного копирования</h2>
      XCloner - это инструмент, который поможет вам управлять резервными копиями сайта, Generate/Restore/Move так что ваш сайт будет всегда обеспечен!
	  <br /><br />
      Особенности:
       <ul>
			<li>cron script для создания автоматического резервного копирования</li>
			<li>несколько вариантов резервного копирования</li>
			<li>быстрое восстановление сайта в другом месте</li>
			<li>храниние резервных копии локально или удаленно</li>
			<li>AJAX/JSON резервный интерфейс</li>
			<li>автономный код, можно создавать резервные копии любых PHP / MySQL веб-сайтов</li>
			<li>инкрементные базы данных и резервного копирования файлов</li>
			<li>дополнительное сканирование файловой системы</li>
			<li>amazon S3 поддержка</li>
       </ul>
	   <br />

       Для доклада или предложения, пожалуйста, свяжитесь с нами по info@xcloner.com или посетите наш сайт <a href='http://www.xcloner.com'>http://www.xcloner.com</a>

      <br/><br/>

	  XCloner.com &copy; 2004-2011 | <a href=\"http://www.xcloner.com\">www.xcloner.com</a><br/><p/><br/> 
	  
");
	  
define("LM_LOGIN_TEXT","
<pre>
<b>Примечания:</b>

 1. Если вы находитесь на этой странице в первый раз,то по умолчанию
     имя пользователя '<i>admin</i>' and пароль '<i>admin</i>', вы ОБЯЗАТЕЛЬНО должны изменить их после входа в систему

 2. Если вы забыли свой пароль,то чтобы его восстановить 
нужно добавить этот код:

	<b>$"."_CONFIG[\"jcpass\"] = md5(\"my_new_pass\");</b>

В конец конфигурационного файла cloner.config.php перед линии ?>     

Не забудьте заменить <b>my_new_pass</b> вашим НОВЫМ паролем

</pre>
");
?>