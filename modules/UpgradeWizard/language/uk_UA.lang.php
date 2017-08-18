<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Встановлено наступні модулі:',
	'DESC_MODULES_QUEUED'						=> 'Готові до установки наступні модулі:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Не вдалося визначити групу',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Не вдалося визначити власника',
	'ERR_UW_CONFIG_WRITE'						=> 'Помилка при додаванні в файл config.php інформації про нову версію.',
	'ERR_UW_CONFIG'								=> 'Зробіть файл config.php доступним для запису і перезавантажте цю сторінку.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Директорія недоступна для запису',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Файл не копіюється',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Проблема видалення пакета',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Не вдалося прочитати файл.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Файл не може бути переміщений або записаний в',
	'ERR_UW_FLAVOR_2'							=> 'Встановлювана версія:',
	'ERR_UW_FLAVOR'								=> 'Поточна версія SugarCRM System:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log не може бути створений / записаний. Будь ласка, встановіть відповідні права доступу на директорію SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'Значення параметра mbstring.func_overload більше 1. Будь ласка, поміняйте це значення у файлі php.ini і перезавантажте веб-сервер.',
	'ERR_UW_MYSQL_VERSION'						=> '&#39;Необхідна версія MySQL 4.1.2 або вище. виявлено:',
	'ERR_UW_OCI8_VERSION'				        => 'Поточна версія Oracle на підтримується системою Sugar. Необхідно встановити версію, яка буде сумісна з додатком Sugar. Будь ласка, зверніть увагу на версії Oracle, які підтримуються, в Таблиці Сумісності в Нотатках про нову версію Sugar. Поточна версія:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Будь ласка, вкажіть файл і спробуйте ще раз!',
	'ERR_UW_NO_FILES'							=> 'Не вказані файли для копіювання.',
	'ERR_UW_NO_MANIFEST'						=> 'В архіві відсутній файл manifest.php. Продовження установки неможливо.',
	'ERR_UW_NO_VIEW'							=> 'Сторінка не визначена. Будь ласка, перейдіть в панель адміністратора для переходу на цю сторінку.',
	'ERR_UW_NO_VIEW2'							=> 'Сторінка не визначена. Будь ласка, перейдіть в панель адміністратора для переходу на цю сторінку.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Завантажений невірний файл.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Неможливо створити тимчасову директорію. Переконайтеся, що для цього достатньо прав.',
	'ERR_UW_ONLY_PATCHES'						=> 'На цій сторінці ви можете завантажувати тільки оновлення.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Виявлені помилки при попередній перевірці',
	'ERR_UW_UPLOAD_ERR'							=> 'Помилка завантаження файлу, ласка, спробуйте ще раз! <br/> \\ N',
	'ERR_UW_VERSION'							=> 'Версія SugarCRM:',
    'ERR_UW_WRONG_TYPE'							=> 'Невірна сторінка',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Завантажений файл більше, ніж вказано в upload_max_filesize в php.ini.',
													2 => 'Завантажений файл більше, ніж вказано в MAX_FILE_SIZE в HTML формі.',
													3 => 'Завантаження був тільки частково завантажений.',
													4 => 'Файл не було завантажено',
													5 => 'Невідома помилка',
													6 => 'Не створено тимчасової папки',
													7 => 'Помилка запису файла на диск',
													8 => 'Завантаження файлу зупинене розширенням',
),

    'ERROR_HT_NO_WRITE'                         => 'Неможливо записати до файлу:%s',
    'ERROR_MANIFEST_TYPE'                       => 'У Manifest-файлі повинен бути вказаний тип пакета.',
    'ERROR_PACKAGE_TYPE'                        => 'У Manifest-файлі вказано невідомий тип пакета',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Завантажений файл не сумісний з встановленою версією Sugar Suite:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Завантажений файл не сумісний з встановленою версією Sugar Suite:',

    'ERROR_UW_CONFIG_DB'                        => 'Помилка збереження конфігураційної змінної% s в БД (ключ% s, значення% s)',
    'ERR_NOT_ADMIN'                             => "У Вас немає доступу до адміністрування.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'У Вас немає прав для доступу до цієї сторінки.',

    'LBL_BUTTON_BACK'							=> '< Назад',
	'LBL_BUTTON_CANCEL'							=> 'Скасувати',
	'LBL_BUTTON_DELETE'							=> 'Видалити пакет',
	'LBL_BUTTON_DONE'							=> 'Виконано',
	'LBL_BUTTON_EXIT'							=> 'Вихід',
	'LBL_BUTTON_INSTALL'						=> 'Попереднє оновлення',
	'LBL_BUTTON_NEXT'							=> 'Наступний',
	'LBL_BUTTON_RECHECK'						=> 'перевірити ще раз',
	'LBL_BUTTON_RESTART'						=> 'Перезапустити',

	'LBL_UPLOAD_UPGRADE'						=> 'Завантаження пакету поновлення Sugar',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Файл завантаження не найден',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Створення резервної копії',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Резервні файли цього оновлення можуть бути знайдені в',
	'LBL_UW_BACKUP'								=> 'Створення резервної копії',
	'LBL_UW_CANCEL_DESC'						=> 'Майстер оновлення був зупинений. Всі тимчасові файли і архіви були видалені. <br/> <br/> Натисніть кнопку "Готово" для повторного запуску майстра.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Зміни в схемі кодування:',
	'LBL_UW_CHECK_ALL'							=> 'Позначити всі',
	'LBL_UW_CHECKLIST'							=> 'Стадії оновлення',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Резервні копії перезаписуваних файлів знаходяться в директорії:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Необхідно вручну перезаписати такі файли:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Оновлення: перезаписати файли вручну',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Будь ласка, для перезапису файлів використовуйте найбільш зручний для вас спосіб. Поки Ви цього не зробите, система буде знаходитися в нестабільному стані і відновлення не буде завершено.',
	'LBL_UW_COMPLETE'							=> 'Завершено',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Ця версія SugarCRM містить нове ліцензійну угоду. Бажаєте продовжити?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Всі системні вимоги виконано',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Настройка PHP: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Модуль cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Модуль IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Module',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Параметр MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Налаштування PHP: Максимальний розмір використовуваної пам&#39;яті',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Налаштування PHP: потік',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Мінімальна версія MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Мінімальна версія бази даних',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Розташування php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Мінімальна версія PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Налаштування PHP: безпечний режим',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Перевірка налаштувань сервера',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'виявлені налаштування',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML -парсінг',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'підтримка Zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Успішно скопійовані файли',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Таблиця змін на схемі користувача',

	'LBL_UW_DB_CHOICE1'							=> 'Майстер поновлення',
	'LBL_UW_DB_CHOICE2'							=> 'Виконання SQL-запиту вручну',
	'LBL_UW_DB_INSERT_FAILED'					=> 'ВСТАВКА не виконана - результати порівняння розрізняються',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Привілеї бази даних',
	'LBL_UW_DB_ISSUES'							=> 'Проблеми бази даних',
	'LBL_UW_DB_METHOD'							=> 'Метод оновлення бази даних',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Всі доступні привілеї',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Необхідні привілеї',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Були встановлені наступні оновлення:',
	'LBL_UW_END_DESC'							=> 'Вітаємо, система успішно оновлена.',
	'LBL_UW_END_DESC2'							=> 'Якщо ви вручну виконуєте такі дії як перезапис файлів або SQL-запит - зробіть це зараз. Система буде нестабільна до тих пір, поки ви не закінчите оновлення.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Оновлення завершено.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Натисніть на Готово для виходу з Майстра Оновлення',
	'LBL_UW_END_LOGOUT'							=> 'Оновлення завершено. <br/> <br/> Ласка, вийдіть і увійдіть в систему заново, якщо ви плануєте в даний момент продовжити оновлення використовуючи Майстер оновлення.',
	'LBL_UW_END_LOGOUT2'						=> 'Вийти',
	'LBL_UW_REPAIR_INDEX'						=> 'Для збільшення швидкодії бази даних, будь ласка, виконайте скрипт <a href="index.php?module=Administration&action=RepairIndex" target="_blank"> відновлення індексів </a>.',

	'LBL_UW_FILE_DELETED'						=> "було видалено.",
	'LBL_UW_FILE_GROUP'							=> 'Група',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Права доступу до файлів',
	'LBL_UW_FILE_ISSUES'						=> 'Проблеми з файлом',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Для даного файлу необхідно порівняння версій вручну',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Всі файли доступні для запису</b>',
	'LBL_UW_FILE_OWNER'							=> 'Власник',
	'LBL_UW_FILE_PERMS'							=> 'права доступу',
	'LBL_UW_FILE_UPLOADED'						=> 'було завантажено',
	'LBL_UW_FILE'								=> 'Назва файлу',
	'LBL_UW_FILES_QUEUED'						=> 'Наступні оновлення готові до установки:',
	'LBL_UW_FILES_REMOVED'						=> "Наступні файли будуть видалені з системи: <br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Натисніть Далі для завантаження оновлень.</b>",
	'LBL_UW_FROZEN'								=> 'Перед тим як продовжити, необхідно виконати наступні дії:',
	'LBL_UW_HIDE_DETAILS'						=> 'Приховати деталі',
	'LBL_UW_IN_PROGRESS'						=> 'У процесі',
	'LBL_UW_INCLUDING'							=> 'Включаючи',
	'LBL_UW_INCOMPLETE'							=> 'Не закінчено',
	'LBL_UW_INSTALL'							=> 'установка файлу',
	'LBL_UW_MANUAL_MERGE'						=> 'Перезапис файлу:',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Модуль готовий до видалення. Натисніть кнопку \"Завершити\".",
	'LBL_UW_MODULE_READY'						=> "Модуль готовий до інсталяції.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> '<i>Немає встановлених оновлень. </i><br>',
	'LBL_UW_NONE'								=> 'Не визначено',
	'LBL_UW_NOT_AVAILABLE'						=> 'Не доступно',
	'LBL_UW_OVERWRITE_DESC'						=> "Всі змінені файли будуть перезаписані, включаючи файли вихідного коду, а також шаблони. Продовжити?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Перезаписати всі файли',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Ручний перезапис - зберегти все',
	'LBL_UW_OVERWRITE_FILES'					=> 'Метод перезапису',
	'LBL_UW_PATCH_READY'						=> 'Оновлення готове до установки. Натисніть кнопку "Завершити" для старту.',
	'LBL_UW_PATCH_READY2'						=> '<h2> Примітки: Знайдені макети закладок користувача </h2> <br/> <br /> Наступні файли містять нові поля або сторінки, відредаговані в Studio. Оновлення, яке Ви встановлюєте, містить інші версії файлів. Для <u> кожного файлу </u> Ви можете: <br> <ul> <li> [<b> Default </b>] Зберегти Вашу версію файлу, залишивши опції невідзначеними. Файли з пакету оновлення будуть пропущені. </Li> or <li> Встановити оновлені версії файлів, зазначивши відповідну опцію. Ваші макети буде необхідно заново відтворити в Studio. </Li> </ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Створити завдання для перезапису вручну?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Попередня перевірка',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'розрізняються',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Відправити собі лист з нагадуванням про перезапис вручну?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Перераховані файли будуть змінені. Зніміть позначки з тих файлів, для яких буде виконаний перезапис вручну. <i> Файли, які не потребують зміни залишилися невідзначеними; установка позначки призведе до їх перезапису.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Не потрібно перезапис файлів вручну.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Немає необхідності.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Файли, залишені без змін:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Попередня перевірка пройдена успішно.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Натисніть кнопку "Далі" для застосування змін.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Note: </b> Будь ласка, зверніть увагу, що процес оновлення є обов&#39;язковим, і натиснувши на кнопку "Продовжити" ви повинні будете завершити процес. Якщо Ви не хочете продовжувати. натисніть кнопку скасування.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Перезаписати всі файли',

	'LBL_UW_REBUILD_TITLE'						=> 'Результати оновлення',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Зміни схеми',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Показати виявлені налаштування',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Показати відсутні права доступу до бази даних.',
	'LBL_UW_SHOW_DETAILS'						=> 'Показати деталі',
	'LBL_UW_SHOW_DIFFS'							=> 'Показати файли, необхідні для перезапису вручну',
	'LBL_UW_SHOW_NW_FILES'						=> 'Показати файли з недостатніми правами доступу',
	'LBL_UW_SHOW_SCHEMA'						=> 'Показати скрипт зміни схеми',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Показати некоректні запити',
	'LBL_UW_SHOW'								=> 'Показати',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Пропущені файли',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Пропущені файли перезаписані - обрати перезапис вручну.',
	'LBL_UW_SQL_RUN'							=> 'Перевіряти, коли запит був виконаний вручну',
	'LBL_UW_START_DESC'							=> 'Ласкаво просимо в майстер оновлень. Майстер створений для того, щоб допомогти адміністратору при оновленні системи SugarCRM.',
	'LBL_UW_START_DESC2'						=> 'Настійно рекомендуємо перед оновленням системи зробити резервні копії як бази даних, так і системних файлів (всіх файлів у папці SugarCRM). Також рекомендуємо спочатку провести тестове оновлення на копії вашої системи.',
	'LBL_UW_START_DESC3'						=> 'Натисніть кнопку "Продовжити" для перевірки системи, щоб переконатися в тому, що вона готова до оновлення. Перевірка включає в себе права доступу до файлів, привілеї баз даних і настройки сервера.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Майстер оновлення зараз продовжить оновлення системи.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Ласкаво просимо в новий Майстер оновлення',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Йде перевірка, будь ласка, зачекайте. Операція може зайняти близько 30 секунд.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Виявлення всіх необхідних файлів для перевірки.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Файли',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Знайдено',

	'LBL_UW_TITLE_CANCEL'						=> 'Скасувати',
	'LBL_UW_TITLE_COMMIT'						=> 'Виконати оновлення',
	'LBL_UW_TITLE_END'							=> 'підведення підсумків',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Попередня перевірка',
	'LBL_UW_TITLE_START'						=> 'Ласкаво просимо!',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Системна перевірка',
	'LBL_UW_TITLE_UPLOAD'						=> 'Завантажити пакет',
	'LBL_UW_TITLE'								=> 'Майстер оновлення',
	'LBL_UW_UNINSTALL'							=> 'Деінсталляція',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Прийняти ліцензіїні умови',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Конвертувати ліцензію',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Оновлені/змінені модулі',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Наступні модулі були визначені як налаштовані користувачем і тому вони залишені без змін',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Наступні модулі були визначені як налаштовані в Студії і тому вони були оновлені',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Виконується початковий етап оновлення',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Виконується перевірка системи',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Виконується перевірка ліцензії',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Виконується попередня перевірка',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Виконується копіювання файлів',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Виконується основний етап оновлення',
    'LBL_UW_COMMIT_DESC'						=> 'Натисніть "Продовжити", щоб запустити додаткові скрипти для оновлення.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Виконується оновлення скриптів',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Виконується заключний етап оновлення',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'виконується',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'витрачений час',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Оновлення скасовано, виконується очистка',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Оновлення може зайняти деякий час',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Виконується перевірка завантаженого пакету поновлення',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Завантаження пакету поновлення',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Ви хочете, щоб система видалила схему 451',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Майстер Оновлення видаляє стару схему 451',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Очистити старі схеми вручну після завершення поновлення',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Метод очищення старих схем',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Показати старі схеми які можуть бути видалені',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Пропущені запити',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Необхіднв PHP версії 5 або вище.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Ваша версія PHP не підтримується в Sugar. Вам необхідно буде встановити версію, яка підтримується програмою Sugar. Будь ласка, зверніться до Матриці Сумісності в нотатках до Версії, щоб дізнатися, які версії PHP підтримуються. Ваша поточна версія:',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Включений режим зворотної сумісності PHP. Для продовження відключіть параметр zend.ze1_compatibility_mode',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Дія',
    'LBL_ML_CANCEL'             => 'Скасувати',
    'LBL_ML_COMMIT'=>'Підтвердити',
    'LBL_ML_DESCRIPTION' => 'Опис',
    'LBL_ML_INSTALLED' => 'Дата установки',
    'LBL_ML_NAME' => 'Назва',
    'LBL_ML_PUBLISHED' => 'Дата публікації',
    'LBL_ML_TYPE' => 'Тип',
    'LBL_ML_UNINSTALLABLE' => 'Неможливо встановити',
    'LBL_ML_VERSION' => 'Версія',
	'LBL_ML_INSTALL'=>'Встановити',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Трекер',
	'LBL_CURRENT_PHP_VERSION' => '(Ваша поточна php версія',
	'LBL_RECOMMENDED_PHP_VERSION' => 'Рекомендована версія PHP - 5.2.x)',
	'LBL_MODULE_NAME' => 'Майстер оновлення',
	'LBL_MODULE_NAME_SINGULAR' => 'Майстер оновлення',
	'LBL_UPLOAD_SUCCESS' => 'Завантажений файл не сумісний з встановленою версією Sugar:',
	'LBL_UW_TITLE_LAYOUTS' => 'затвердити макети',
	'LBL_LAYOUT_MODULE_TITLE' => 'Розташування',
	'LBL_LAYOUT_MERGE_DESC' => 'Доступні нові поля, які були додані під час оновлення і можуть бути автоматично застосовані до існуючого зовнішнього вигляду ваших модулів. Більше про нові поля можна дізнатися в Release Notes версії, до якої Ви оновлюєте систему. <br/> <br/> Якщо Ви не хочете додавати нові поля, приберіть позначку з модуля і Ваші користувача настройки залишаться без змін. Поля будуть доступні в Студії після завершення оновлення.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Натисніть "продовжити", щоб підтвердити зміни і закінчити оновлення.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Натисніть "продовжити", щоб закінчити оновлення.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'затвердити макети',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Підтвердити результати макетів',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Наступні сакети були успішно перезаписані',
	'LBL_SELECT_FILE' => 'Вибрати файл:',
	'LBL_LANGPACKS' => 'Мовні пакети' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Завантажувач модулів' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Оновлення додатків' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Теми' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Бізнес-процес' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Оновлення' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Обробка' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Загальна видимість',
);
