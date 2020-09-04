<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Пользователь',
      'action' => 'Действие',
      'createdAt' => 'Дата',
      'userType' => 'User Type',
      'target' => 'Цель',
      'targetType' => 'Тип цели',
      'authToken' => 'Токен аутентификации',
      'ipAddress' => 'IP адрес',
      'authLogRecord' => 'Запись Лога Аутентификации',
    ),
    'links' => 
    array (
      'authToken' => 'Токен аутентификации',
      'authLogRecord' => 'Запись Лога Аутентификации',
      'user' => 'Пользователь',
      'target' => 'Цель',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Только мои',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Прочитано',
        'update' => 'Обновить',
        'delete' => 'Удалить',
        'create' => 'Создать',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Включено',
      'Disabled' => 'Отключено',
      'System' => 'Система',
      'Users' => 'Пользователи',
      'Email' => 'Эл. почта',
      'Data' => 'Данные',
      'Customization' => 'Кастомизация',
      'Available Fields' => 'Доступные поля',
      'Layout' => 'Макет',
      'Entity Manager' => 'Управление объектами',
      'Add Panel' => 'Добавить панель',
      'Add Field' => 'Добавить поле',
      'Settings' => 'Настройки',
      'Scheduled Jobs' => 'Планировщик заданий',
      'Upgrade' => 'Обновление',
      'Clear Cache' => 'Очистить кэш',
      'Rebuild' => 'Перестроить ПО',
      'Teams' => 'Группы',
      'Roles' => 'Роли',
      'Portal' => 'Портал',
      'Portals' => 'Порталы',
      'Portal Roles' => 'Роли порталов',
      'Portal Users' => 'Пользователи портала',
      'API Users' => 'Пользователи Интерфейса Программирования Приложений',
      'Outbound Emails' => 'Исходящая эл. почта',
      'Group Email Accounts' => 'Учетные записи эл. почты групп',
      'Personal Email Accounts' => 'Учетные записи эл. почты пользователей',
      'Inbound Emails' => 'Входящая эл. почта',
      'Email Templates' => 'Шаблоны эл. писем',
      'Import' => 'Импортирование',
      'Layout Manager' => 'Управление макетами',
      'User Interface' => 'Интерфейс пользователя',
      'Auth Tokens' => 'Токены сессий аутентификации',
      'Auth Log' => 'Лог Аутентификации',
      'Authentication' => 'Аутентификация',
      'Currency' => 'Валюта',
      'Integrations' => 'Интеграции',
      'Extensions' => 'Расширения',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard Templates',
      'Upload' => 'Загрузить',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Обновление...',
      'Upgraded successfully' => 'Успешно обновлено',
      'Installed successfully' => 'Успешно установлено',
      'Ready for upgrade' => 'Готово к обновлению',
      'Run Upgrade' => 'Установить обновление',
      'Install' => 'Установить',
      'Ready for installation' => 'Готово к установке',
      'Uninstalling...' => 'Удаление...',
      'Uninstalled' => 'Удалено',
      'Create Entity' => 'Создать объект',
      'Edit Entity' => 'Редактировать объект',
      'Create Link' => 'Создать ссылку',
      'Edit Link' => 'Редактировать ссылку',
      'Notifications' => 'Оповещения',
      'Jobs' => 'Задания',
      'Reset to Default' => 'Восстановить умолчания',
      'Email Filters' => 'Фильтры эл. почты',
      'Action History' => 'История действий',
      'Label Manager' => 'Управление метками',
      'Template Manager' => 'Менеджер Шаблонов',
      'Lead Capture' => 'Захват кандидата',
      'Attachments' => 'Вложения',
      'System Requirements' => 'Системные Требования',
      'PDF Templates' => 'PDF Templates',
      'PHP Settings' => 'Конфигурация PHP',
      'Database Settings' => 'Конфигурация Базы Данных',
      'Permissions' => 'Права Доступа',
      'Email Addresses' => 'Email Addresses',
      'Phone Numbers' => 'Phone Numbers',
      'Layout Sets' => 'Layout Sets',
      'Success' => 'Операция завершилась успешно',
      'Fail' => 'Операция завершилась неудачей',
      'is recommended' => 'рекомендовано',
      'extension is missing' => 'расширение отсутствует',
    ),
    'layouts' => 
    array (
      'list' => 'Список',
      'detail' => 'Детализация',
      'listSmall' => 'Список (сжатый)',
      'detailSmall' => 'Детализация (сжатая)',
      'detailPortal' => 'Детализация (Portal)',
      'detailSmallPortal' => 'Детализация (Cжатая, Portal)',
      'listSmallPortal' => 'Список (Сжатый, Portal)',
      'listPortal' => 'Список (Portal)',
      'relationshipsPortal' => 'Отношения (Portal)',
      'filters' => 'Фильтры поиска',
      'massUpdate' => 'Массовое обновление',
      'relationships' => 'Отношения',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => 'Боковые панели (Detail)',
      'sidePanelsEdit' => 'Боковые панели (Edit)',
      'sidePanelsDetailSmall' => 'Боковые панели (Detail Small)',
      'sidePanelsEditSmall' => 'Боковые панели (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Конвертировать лид',
      'listForAccount' => 'Список (для контрагента)',
      'listForContact' => 'Список (для контакта)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Адресс',
      'array' => 'Массив',
      'foreign' => 'Внешний',
      'duration' => 'Длительность',
      'password' => 'Пароль',
      'personName' => 'Имя человека',
      'autoincrement' => 'Автоинкрементый',
      'bool' => 'Boolean ',
      'currency' => 'Валюта',
      'currencyConverted' => 'Валюта (сконвертированная)',
      'date' => 'Дата',
      'datetime' => 'Дата-время',
      'datetimeOptional' => 'Дата/Дата-время',
      'email' => 'Эл. почта',
      'enum' => 'Список',
      'enumInt' => 'Список целые числа',
      'enumFloat' => 'Список дробные числа',
      'float' => 'Десятичная дробь',
      'int' => 'Целое число',
      'link' => 'Ссылка',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'linkOne' => 'Link One',
      'phone' => 'Телефон',
      'text' => 'Текст',
      'url' => 'Url',
      'varchar' => 'Строка',
      'file' => 'Файл',
      'image' => 'Изображение',
      'multiEnum' => 'Множественный список',
      'attachmentMultiple' => 'Несколько вложений',
      'rangeInt' => 'Целочисленный диапазон',
      'rangeFloat' => 'Дробовочисленный диапазон',
      'rangeCurrency' => 'Денежный диапазон',
      'wysiwyg' => 'Редактор',
      'map' => 'Карта',
      'number' => 'Номер',
      'colorpicker' => 'Выбор цвета',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'Json массив',
      'jsonObject' => 'Json объект ',
    ),
    'fields' => 
    array (
      'type' => 'Тип',
      'name' => 'Название',
      'label' => 'Отображаемое имя',
      'tooltipText' => 'Текст подсказки',
      'required' => 'Обязательное поле',
      'default' => 'По умолчанию',
      'maxLength' => 'Максимальная длина',
      'options' => 'Варианты',
      'after' => 'После (поля)',
      'before' => 'Перед (полем)',
      'link' => 'Ссылка',
      'field' => 'Поле',
      'min' => 'Минимальное значение',
      'max' => 'Максимальное значение',
      'translation' => 'Перевод',
      'previewSize' => 'Размер предпросмотра',
      'noEmptyString' => 'Пустое значение строки недопустимо',
      'defaultType' => 'Тип по умолчанию',
      'seeMoreDisabled' => 'Отключить обрезку текста',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Список объектов',
      'isSorted' => 'Сортировать (по алфавиту)',
      'audited' => 'Аудит (отслеживать изменения значений)',
      'trim' => 'Удалять лишние пробелы (Trim)',
      'height' => 'Высота (в пикс.)',
      'minHeight' => 'Минимальная высота (в пикс.)',
      'provider' => 'Поставщик',
      'typeList' => 'Список типов',
      'rows' => 'Количество строк в текстовом поле',
      'lengthOfCut' => 'Длина перед обрезкой',
      'sourceList' => 'Список источников',
      'prefix' => 'Префикс',
      'nextNumber' => 'Следующий номер',
      'padLength' => 'Определенная длина',
      'disableFormatting' => 'Отключить форматирование',
      'dynamicLogicVisible' => 'Условия, которые делают поле видимым',
      'dynamicLogicReadOnly' => 'Условия, которые делают поле только для чтения',
      'dynamicLogicRequired' => 'Условия, которые делают поле обязательным',
      'dynamicLogicOptions' => 'Условные варианты',
      'probabilityMap' => 'Стадия вероятности (%)',
      'notActualOptions' => 'Not Actual Options',
      'readOnly' => 'Только чтение',
      'maxFileSize' => 'Максимальный размер файла (Mb)',
      'isPersonalData' => 'Личные данные',
      'useIframe' => 'Использовать Iframe',
      'useNumericFormat' => 'Использовать числовой формат',
      'strip' => 'Стрип',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
      'displayAsList' => 'Display as List',
      'maxCount' => 'Max Item Count',
      'accept' => 'Accept',
      'viewMap' => 'View Map Button',
      'codeType' => 'Code Type',
      'lastChar' => 'Last Character',
      'onlyDefaultCurrency' => 'Only default currency',
      'displayRawText' => 'Display raw text (no markdown)',
    ),
    'strings' => 
    array (
      'rebuildRequired' => 'Rebuild is required',
    ),
    'messages' => 
    array (
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM will be upgraded to version **{version}**. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version **{version}**.',
      'upgradeBackup' => 'Перед обновлением рекомендуется сделать резервную копию ваших файлов и данных EspoCRM.',
      'thousandSeparatorEqualsDecimalMark' => 'Разделитель тысячных не может быть таким же, как разделитель десятичных.',
      'userHasNoEmailAddress' => 'У пользователя нет адреса эл. почты.',
      'selectEntityType' => 'Выберите тип объекта в левом меню.',
      'selectUpgradePackage' => 'Выберите пакет обновления',
      'downloadUpgradePackage' => 'Download upgrade package(s) [here]({url}).',
      'selectLayout' => 'Выберите интересующий макет в левом меню и отредактируйте его.',
      'selectExtensionPackage' => 'Выберите пакет расширения',
      'extensionInstalled' => 'Расширение {name} {version} было установлено.',
      'installExtension' => 'Расширение {name} {version} готово к установке.',
      'cronIsNotConfigured' => 'Запланированные задания не выполняются. Следовательно, входящие письма, уведомления и напоминания не работают. Пожалуйста, следуйте инструкциям [https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) для установки cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available. Please follow the [instructions](https://www.espocrm.com/documentation/administration/upgrading/) to upgrade your instance.',
      'newExtensionVersionIsAvailable' => 'Новая {extensionName} версия {latestVersion} доступна.',
      'uninstallConfirmation' => 'Вы действительно хотите удалить расширение?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.',
    ),
    'descriptions' => 
    array (
      'settings' => 'Системные настройки.',
      'scheduledJob' => 'Выполняемые с помощью cron задания.',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => 'Обновить EspoCRM.',
      'clearCache' => 'Очистить кэш сервера.',
      'rebuild' => 'Перестроить серверную часть ПО и очистить кэш сервера.',
      'users' => 'Управление пользователями.',
      'teams' => 'Управление группами.',
      'roles' => 'Управление ролями.',
      'portals' => 'Управление порталами',
      'portalRoles' => 'Управление ролями для порталов',
      'portalUsers' => 'Пользователи портала.',
      'outboundEmails' => 'Настройки SMTP для исходящих сообщений эл. почты.',
      'groupEmailAccounts' => 'Учетные записи эл. почты групп (IMAP). Импортирование сообщений эл. почты и автоматическая конвертация входящих эл. писем в обращения (Email-to-Case).',
      'personalEmailAccounts' => 'Учетные записи эл. почты пользователей.',
      'emailTemplates' => 'Шаблоны исходящих эл. писем.',
      'import' => 'Импортирование данных из CSV файла.',
      'layoutManager' => 'Редактирование макетов (списки, детализации, редактирование, поиск, массовое обновление).',
      'entityManager' => 'Создавайте и редактируйте объекты. Управлейте полями и отношениями.',
      'userInterface' => 'Настройки пользовательского интерфейса.',
      'authTokens' => 'Активные сессии аутентификации. IP-адрес и дата последнего подключения.',
      'authentication' => 'Настройки аутентификации.',
      'currency' => 'Настройки и курсы валют.',
      'extensions' => 'Установить или удалить расширения.',
      'integrations' => 'Интеграция со сторонними сервисами.',
      'notifications' => 'Настройка оповещений (в приложении и по эл. почте).',
      'inboundEmails' => 'Настройки для входящих сообщений эл. почты.',
      'emailFilters' => 'Сообщения эл. почты, соответствующие указанному фильтру, не будут импортированы.',
      'actionHistory' => 'Журнал действий пользователя.',
      'labelManager' => 'Настройте метки приложения.',
      'templateManager' => 'Настроить шаблоны сообщений.',
      'authLog' => 'История входа.',
      'leadCapture' => 'Точки входа API для Web-to-Lead.',
      'attachments' => 'Все вложения, хранящиеся в системе.',
      'systemRequirements' => 'Системные Требования для EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
      'webhooks' => 'Manage webhooks.',
      'emailAddresses' => 'All emailes addresses stored in the system.',
      'phoneNumbers' => 'All phone numbers stored in the system.',
      'dashboardTemplates' => 'Deploy dashboards to users.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'pdfTemplates' => 'Templates for printing to PDF.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Очень маленький',
        'small' => 'Маленький',
        'medium' => 'Средний',
        'large' => 'Большой',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'И',
      'or' => 'ИЛИ',
      'not' => 'НЕ',
    ),
    'systemRequirements' => 
    array (
      'requiredPhpVersion' => 'Версия PHP',
      'requiredMysqlVersion' => 'Версия MySQL',
      'requiredMariadbVersion' => 'MariaDB version',
      'host' => 'Сервер',
      'dbname' => 'Имя БД',
      'user' => 'Имя пользователя',
      'writable' => 'Writable',
      'readable' => 'Readable',
    ),
    'templates' => 
    array (
      'accessInfo' => 'Access Info',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailReceived' => 'Note about Received Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Password Change Link',
      'invitation' => 'Invitation',
      'reminder' => 'Reminder',
    ),
  ),
  'ApiUser' => 
  array (
    'labels' => 
    array (
      'Create ApiUser' => 'Create API User',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => 'Роль',
      'related' => 'Связанный',
      'file' => 'Файл',
      'type' => 'Тип',
      'field' => 'Поле',
      'sourceId' => 'ID Источника',
      'storage' => 'Хранилище',
      'size' => 'Размер (bytes)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Вложение',
        'Inline Attachment' => 'Встроенное вложение',
        'Import File' => 'Импортировать файл',
        'Export File' => 'Эспортировать файл',
        'Mail Merge' => 'Слияние писем',
        'Mass Pdf' => 'Mass Pdf',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Вставить документ',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Сирота',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => 'Имя пользователя',
      'ipAddress' => 'IP адрес',
      'requestTime' => 'Время запроса',
      'createdAt' => 'Запрос осуществлен с',
      'isDenied' => 'Отказано',
      'denialReason' => 'Причина отказа',
      'portal' => 'Портал',
      'user' => 'Пользователь',
      'authToken' => 'Токен аутентификации создан',
      'requestUrl' => 'URL запроса',
      'requestMethod' => 'Метод запроса',
      'authTokenIsActive' => 'Токен аутентификации активен',
      'authenticationMethod' => 'Authentication Method',
    ),
    'links' => 
    array (
      'authToken' => 'Токен аутентификации создан',
      'user' => 'Пользователь',
      'portal' => 'Портал',
      'actionHistoryRecords' => 'История действий',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Отказано',
      'accepted' => 'Согласен',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Недопустимые учетные данные',
        'INACTIVE_USER' => 'Неактивный пользователь',
        'IS_PORTAL_USER' => 'Пользователь портала',
        'IS_NOT_PORTAL_USER' => 'Не пользователь портала',
        'USER_IS_NOT_IN_PORTAL' => 'Пользователь не связан с порталом',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Пользователь',
      'ipAddress' => 'IP адрес',
      'lastAccess' => 'Дата последнего подключения',
      'createdAt' => 'Дата входа',
      'isActive' => 'Активен',
      'portal' => 'Портал',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'История действий',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активный',
      'inactive' => 'Неактивный',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Селать неактивным',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Селать неактивным',
    ),
  ),
  'Currency' => 
  array (
    'names' => 
    array (
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CHE' => 'WIR Euro',
      'CHF' => 'Swiss Franc',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'US Dollar',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar',
    ),
  ),
  'DashboardTemplate' => 
  array (
    'fields' => 
    array (
      'layout' => 'Layout',
      'append' => 'Append (don\'t remove user\'s tabs)',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create DashboardTemplate' => 'Create Template',
      'Deploy to Users' => 'Deploy to Users',
      'Deploy to Team' => 'Deploy to Team',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Название',
      'dateFrom' => 'Дата от',
      'dateTo' => 'Дата по',
      'autorefreshInterval' => 'Интервал автообновления',
      'displayRecords' => 'Отображать записей',
      'isDoubleHeight' => 'Высота 2x',
      'mode' => 'Режим',
      'enabledScopeList' => 'Что отображать',
      'users' => 'Пользователи',
      'entityType' => 'Тип объекта',
      'primaryFilter' => 'Первичный фильтр',
      'boolFilterList' => 'Дополнительные фильтры',
      'sortBy' => 'Сортировка (поле)',
      'sortDirection' => 'Сортировка (направление)',
      'expandedLayout' => 'Макет',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'URL',
      'dateFilter' => 'Фильтр даты',
      'team' => 'Team',
      'futureDays' => 'Следующие X дней',
      'useLastStage' => 'Сгруппировать по последнем достигнутом этапе',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Неделя (расписание)',
        'basicWeek' => 'Неделя',
        'month' => 'Месяц',
        'basicDay' => 'День',
        'agendaDay' => 'День (повестка дня)',
        'timeline' => 'Расписание',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Выберите тип объекта в параметрах панели.',
    ),
    'tooltips' => 
    array (
      'skipOwn' => 'Actions made by your user account won\'t be displayed.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Поле',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'in' => 'В',
        'notIn' => 'Не в',
        'inPast' => 'В Прошлом',
        'inFuture' => 'В Будущем',
        'isToday' => 'Сегодня',
        'isTrue' => 'Правда',
        'isFalse' => 'Неверно',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'contains' => 'Содержит',
        'notContains' => 'Не включает в себя',
        'has' => 'Содержит',
        'notHas' => 'Не включает в себя',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Тема',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateSent' => 'Дата отправки',
      'from' => 'От',
      'to' => 'Кому',
      'cc' => 'Копия (Cc)',
      'bcc' => 'Слепая копия (Bcc)',
      'replyTo' => 'Ответить',
      'replyToString' => 'Куда отвечать (строка)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'HTML-код',
      'body' => 'Тело',
      'bodyPlain' => 'Тело (Простое)',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'selectTemplate' => 'Выбрать шаблон',
      'fromEmailAddress' => 'From Address (link)',
      'toEmailAddresses' => 'Адреса эл. почты получателей',
      'emailAddress' => 'Адрес эл. почты',
      'deliveryDate' => 'Дата доставки',
      'account' => 'Контрагент',
      'users' => 'Пользователи',
      'replied' => 'Ответили',
      'replies' => 'Ответы',
      'isRead' => 'Прочитано',
      'isNotRead' => 'Не прочитано',
      'isImportant' => 'Это важное',
      'isReplied' => 'Ответили',
      'isNotReplied' => 'Не ответили',
      'isUsers' => 'Пользовательский',
      'inTrash' => 'В корзине',
      'sentBy' => 'Отправлено (кем)',
      'folder' => 'Папка',
      'inboundEmails' => 'Учетные записи групп',
      'emailAccounts' => 'Личные учетные записи',
      'hasAttachment' => 'Имеет Вложения',
      'assignedUsers' => 'Ответственные',
      'ccEmailAddresses' => 'CC адрес эл. почты',
      'bccEmailAddresses' => 'BCC Адреса эл. почты получателей',
      'replyToEmailAddresses' => 'Обратные адреса эл. почты',
      'messageId' => 'Id сообщения',
      'messageIdInternal' => 'Id сообщения (внутренний)',
      'folderId' => 'Id папки',
      'fromName' => 'Имя отправителя',
      'fromString' => 'Строка От',
      'fromAddress' => 'Адрес отправителя',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'Системный',
    ),
    'links' => 
    array (
      'replied' => 'Ответили',
      'replies' => 'Ответы',
      'inboundEmails' => 'Учетные записи групп',
      'emailAccounts' => 'Личные учетные записи',
      'assignedUsers' => 'Ответственные',
      'sentBy' => 'Отправлено (кем)',
      'attachments' => 'Вложения',
      'fromEmailAddress' => 'Адрес эл. почты отправителя',
      'toEmailAddresses' => 'Адрес эл. почты получателя',
      'ccEmailAddresses' => 'CC Адреса эл. почты получателей',
      'bccEmailAddresses' => 'BCC Адреса эл. почты получателей',
      'replyToEmailAddresses' => 'Обратные адреса эл. почты',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Черновик',
        'Sending' => 'Отправляется',
        'Sent' => 'Отправлено',
        'Archived' => 'В архиве',
        'Received' => 'Получено',
        'Failed' => 'Сбой',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Отправить эл. письмо в архив',
      'Archive Email' => 'Отправить эл. письмо в архив',
      'Compose' => 'Новое сообщение',
      'Reply' => 'Ответить',
      'Reply to All' => 'Ответить всем',
      'Forward' => 'Переслать',
      'Original message' => 'Оригинальное сообщение',
      'Forwarded message' => 'Пересылаемое сообщение',
      'Email Accounts' => 'Учетные записи эл. почты пользователей',
      'Inbound Emails' => 'Учетные записи эл. почты групп',
      'Email Templates' => 'Шаблоны эл. писем',
      'Send Test Email' => 'Отправить тестовое эл. письмо',
      'Send' => 'Отправить',
      'Email Address' => 'Адрес эл. почты',
      'Mark Read' => 'Пометить как прочитанное',
      'Sending...' => 'Отправляется...',
      'Save Draft' => 'Сохранить черновик',
      'Mark all as read' => 'Пометить все как прочитанные',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Пометить как важное',
      'Unmark Importance' => 'Снять пометку важности',
      'Move to Trash' => 'Переместить в корзину',
      'Retrieve from Trash' => 'Восстановить из корзины',
      'Move to Folder' => 'Переместить в папку',
      'Filters' => 'Фильтры',
      'Folders' => 'Папки',
      'No Subject' => 'No Subject',
      'View Users' => 'View Users',
      'Create Lead' => 'Создать кандидата',
      'Create Contact' => 'Создать контакт',
      'Add to Contact' => 'Добавить в контакты',
      'Add to Lead' => 'Добавить в кандидаты',
      'Create Task' => 'Создать задачу',
      'Create Case' => 'Создать обращение',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'SMTP is not configured: {link}',
      'testEmailSent' => 'Тестовое эл. письмо было отправлено',
      'emailSent' => 'Эл. письмо было отправлено',
      'savedAsDraft' => 'Сохранено как черновик',
      'sendConfirm' => 'Send the email?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => 'Тело эл. письма будет потеряно. Вы действительно хотите вставить шаблон?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Отправленные',
      'archived' => 'В архиве',
      'inbox' => 'Входящие',
      'drafts' => 'Черновики',
      'trash' => 'Корзина',
      'important' => 'Важное',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Пометить как прочитанное',
      'markAsNotRead' => 'Пометить как не прочитанное',
      'markAsImportant' => 'Пометить как важное',
      'markAsNotImportant' => 'Снять пометку важности',
      'moveToTrash' => 'Переместить в корзину',
      'moveToFolder' => 'Переместить в папку',
      'retrieveFromTrash' => 'Восстановить из корзины',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'host' => 'Сервер',
      'username' => 'Имя пользователя',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые папки',
      'ssl' => 'SSL',
      'fetchSince' => 'Получить эл. письма начиная с',
      'emailAddress' => 'Адрес эл. почты',
      'sentFolder' => 'Папка \'Отправленные\'',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'keepFetchedEmailsUnread' => 'Оставлять полученные эл. письма непрочитанными',
      'emailFolder' => 'Положить в папку',
      'useImap' => 'Получать эл. письма',
      'useSmtp' => 'Использовать SMTP',
      'smtpHost' => 'SMTP Хост',
      'smtpPort' => 'SMTP Порт',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Безопасность',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'SMTP Имя пользователя',
      'smtpPassword' => 'SMTP Пароль',
    ),
    'links' => 
    array (
      'filters' => 'Фильтры',
      'emails' => 'Эл. письма',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активная',
        'Inactive' => 'Неактивная',
      ),
      'smtpAuthMechanism' => 
      array (
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Создать учетную запись эл. почты',
      'IMAP' => 'IMAP',
      'Main' => 'Основное',
      'Test Connection' => 'Проверка соединения',
      'Send Test Email' => 'Отправить тестовое эл. письмо',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не удалось соединиться с IMAP сервером',
      'connectionIsOk' => 'Соединение с IMAP сервером прошло удачно',
    ),
    'tooltips' => 
    array (
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Можете добавить папку \'Отправленные\' для синхронизации эл. писем отправленных из внешнего клиента эл. почты.',
      'storeSentEmails' => 'Отправленные эл. письма будут храниться на IMAP сервере. Адрес эл. почты должен соответствовать адресу с которого производится отправка.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Основной',
      'Opted Out' => 'Отписан',
      'Invalid' => 'Неверный адрес',
    ),
    'fields' => 
    array (
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Orphan',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'От',
      'to' => 'Кому',
      'subject' => 'Тема',
      'bodyContains' => 'Тело письма содержит',
      'action' => 'Действие',
      'isGlobal' => 'Глобальный',
      'emailFolder' => 'Папка',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Создать фильтр эл. почты',
      'Emails' => 'Эл. письма',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Пропускать',
        'Move to Folder' => 'Положить в папку',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Просто название фильтра.',
      'subject' => 'Используйте символ *:

текст* - начинается с текста,
*текст* - содержит текст,
*текст - заканчивается текстом.',
      'bodyContains' => 'Тело эл. письма содержит любое из указанных слов или фраз.',
      'from' => 'Письма отправленные с указанного адреса. Оставьте пустым, если не требуется. Можете использовать специальный символ *.',
      'to' => 'Письма отправленные на указанный адрес. Оставьте пустым, если не требуется. Можете использовать специальный символ *.',
      'isGlobal' => 'Этот фильтр применяется для всех электронных писем, поступающих в систему.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Пропустить оповещения',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Создать папку',
      'Manage Folders' => 'Управление папками',
      'Emails' => 'Эл. письма',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'isHtml' => 'HTML-код',
      'body' => 'Тело',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'insertField' => 'Placeholders',
      'oneOff' => 'Одноразовый',
      'category' => 'Категория',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Создать шаблон эл. письма',
      'Info' => 'Информация',
      'Available placeholders' => 'Доступные заполнители',
    ),
    'messages' => 
    array (
      'infoText' => 'Доступные заполнители:

{OptOutUrl} &#8211; URL-адрес ссылки для отмены подписки;

{OptOutLink} &#8211; ссылка для отмены подписки.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Отметьте если собираетесь использовать этот шаблон только один раз. К примеру для массовой рассылки эл. писем.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальный',
    ),
    'placeholderTexts' => 
    array (
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL-адрес ссылки для отмены подписки',
      'optOutLink' => 'ссылка для отмены подписки',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Создать категорию',
      'Manage Categories' => 'Управление категориями',
      'EmailTemplates' => 'Шаблоны эл. писем',
    ),
    'fields' => 
    array (
      'order' => 'Порядок',
      'childList' => 'Child List',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Шаблоны эл. писем',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Поля',
      'Relationships' => 'Отношения',
      'Layouts' => 'Layouts',
      'Schedule' => 'График',
      'Log' => 'Лог',
      'Formula' => 'Формула',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'type' => 'Тип',
      'labelSingular' => 'Метка (единственное число)',
      'labelPlural' => 'Метка (множественное число)',
      'stream' => 'Лента',
      'label' => 'Метка',
      'linkType' => 'Тип ссылки',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Ссылка',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Сортировка (поле)',
      'sortDirection' => 'Сортировка (направление)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Поле Foreign Link Multiple',
      'disabled' => 'Отключено',
      'textFilterFields' => 'Поля текстовых фильтров',
      'audited' => 'Проверено',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Поле статуса',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'color' => 'Цвет',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Группы, которые не отражаются в Kanban View',
      'iconClass' => 'Значок',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => 'Полнотекстовый поиск',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Нет',
        'Base' => 'База',
        'Person' => 'Личность',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Событие',
        'BasePlus' => 'Base Plus',
        'Company' => 'Компания',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Многие-ко-многим',
        'oneToMany' => 'Один-ко-многим',
        'manyToOne' => 'Много-к-одному',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'От сына к отцу',
      ),
      'sortDirection' => 
      array (
        'asc' => 'По возрастанию',
        'desc' => 'По убыванию',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Объект был создан',
      'linkAlreadyExists' => 'Конфликт названий связей (link).',
      'linkConflict' => 'Связь (link) с таким названием уже существует.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Обновления этого поля записываются в ленту.',
      'textFilterFields' => 'Поля, используемые для текстового поиска.',
      'stream' => 'Есть ли у объекта Лента.',
      'disabled' => 'Отметьте, если вам не нужна эта сущность в вашей системе.',
      'linkAudited' => 'Создание связанной записи и привязка к существующей записи будет регистрироваться в Ленте.',
      'linkMultipleField' => 'Link Multiple field предоставляет удобный способ редактирования отношений. Не используйте его, если у вас может быть большое количество связанных записей.',
      'entityType' => '
Event - available in Calendar and Activities panel.',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => 'Требуется выполнить перестройку.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Экспортировать все поля',
      'fieldList' => 'Список полей',
      'format' => 'Формат',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'version' => 'Версия',
      'description' => 'Описание',
      'isInstalled' => 'Установлено',
      'checkVersionUrl' => 'URL для проверки наличия новых версий',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Удалить',
      'Install' => 'Установить',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Расширение {name} было удалено',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Подключить',
      'Disconnect' => 'Disconnect',
      'Disconnected' => 'Disconnected',
      'Connected' => 'Подключено',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Логичность динамики',
      'Name' => 'название',
      'Label' => 'Метка',
      'Type' => 'Тип',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Нет',
        'javascript: return this.dateTime.getNow(1);' => 'Сейчас',
        'javascript: return this.dateTime.getNow(5);' => 'Теперь (5 мин)',
        'javascript: return this.dateTime.getNow(15);' => 'Теперь (15 мин)',
        'javascript: return this.dateTime.getNow(30);' => 'Теперь (30 мин)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hour',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week',
      ),
      'dateDefault' => 
      array (
        '' => 'Нет',
        'javascript: return this.dateTime.getToday();' => 'Сегодня',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year',
      ),
      'barcodeType' => 
      array (
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Обновления будут регистрироваться в ленте.',
      'required' => 'Поле будет обязательным. Не может быть пустым.',
      'default' => 'Значение будет установлено по умолчанию при создании.',
      'min' => 'Минимально допустимое значение.',
      'max' => 'Максимально допустимое значение.',
      'seeMoreDisabled' => 'Если не отмечено, то длинные тексты будут сокращены.',
      'lengthOfCut' => 'Насколько долгим может быть текст, прежде чем он будет сокращен.',
      'maxLength' => 'Максимально допустимая длина текста.',
      'before' => 'Значение даты должно быть перед значением даты в указанном поле.',
      'after' => 'Значение даты должно быть после значения даты в указанном поле.',
      'readOnly' => 'Значение поля не может быть задано пользователем. Но может быть рассчитано по формуле.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => 'Если пустой или 0, то неограниченный',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Улица',
        'city' => 'Город',
        'state' => 'Штат',
        'country' => 'Страна',
        'postalCode' => 'Почтовый индекс',
        'map' => 'Карта',
      ),
      'personName' => 
      array (
        'salutation' => 'Обращение',
        'first' => 'Имя',
        'middle' => 'Middle',
        'last' => 'Фамилия',
      ),
      'currency' => 
      array (
        'converted' => '(Сконвертированная)',
        'currency' => '(Валюта)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Дата',
      ),
    ),
    'fieldInfo' => 
    array (
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relatioships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Эл. письмо',
      'User' => 'Пользователь',
      'Team' => 'Группа',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон эл. письма',
      'EmailTemplateCategory' => 'Категории шаблонов эл. писем',
      'EmailAccount' => 'Учетная запись эл. почты пользователя',
      'EmailAccountScope' => 'Учетная запись эл. почты пользователя',
      'OutboundEmail' => 'Исходящее эл. письмо',
      'ScheduledJob' => 'Задание планировщика',
      'ExternalAccount' => 'Внешняя учетная запись',
      'Extension' => 'Расширение',
      'Dashboard' => 'Панель виджетов',
      'InboundEmail' => 'Учетная запись эл. почты группы',
      'Stream' => 'Лента',
      'Import' => 'Импортировать',
      'Template' => 'Шаблон',
      'Job' => 'Задание',
      'EmailFilter' => 'Фильтр эл. почты',
      'Portal' => 'Портал',
      'PortalRole' => 'Роли портала',
      'Attachment' => 'Вложение',
      'EmailFolder' => 'Папка с эл. письмами',
      'PortalUser' => 'Пользователь портала',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Запись журнала запланированных работ',
      'PasswordChangeRequest' => 'Запрос на изменение пароля',
      'ActionHistoryRecord' => 'Запись истории действий',
      'AuthToken' => 'Токен аутентификации',
      'UniqueId' => 'Уникальный ID',
      'LastViewed' => 'Последние просмотренные',
      'Settings' => 'Настройки',
      'FieldManager' => 'Управление полями',
      'Integration' => 'Интеграция',
      'LayoutManager' => 'Управление макетами',
      'EntityManager' => 'Управление объектами',
      'Export' => 'Экспорт',
      'DynamicLogic' => 'Динамическая логика',
      'DashletOptions' => 'Настройки панели',
      'Admin' => 'Админ',
      'Global' => 'Глобальный',
      'Preferences' => 'Персональные Настройки',
      'EmailAddress' => 'Адрес эл. почты',
      'PhoneNumber' => 'Номер телефона',
      'AuthLogRecord' => 'Запись Лога Аутентификации',
      'AuthFailLogRecord' => 'Запись Сбоя Лога Аутентификации',
      'LeadCapture' => 'Точка входа захвата кандидата',
      'LeadCaptureLogRecord' => 'Запись лога захвата кандидата',
      'ArrayValue' => 'Значение массива',
      'DashboardTemplate' => 'Dashboard Template',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'Account' => 'Контрагент',
      'Contact' => 'Контакт',
      'Lead' => 'Кандидат',
      'Target' => 'Цель',
      'Opportunity' => 'Cделка',
      'Meeting' => 'Встреча',
      'Calendar' => 'Календарь',
      'Call' => 'Звонок',
      'Task' => 'Задача',
      'Case' => 'Обращение',
      'Document' => 'Документ',
      'DocumentFolder' => 'Папка с документами',
      'Campaign' => 'Кампания',
      'TargetList' => 'Список целей',
      'MassEmail' => 'Массовая рассылка эл. писем',
      'EmailQueueItem' => 'Элемент очереди эл. почты',
      'CampaignTrackingUrl' => 'Целевой URL-адрес',
      'Activities' => 'Действия',
      'KnowledgeBaseArticle' => 'Статья базы знаний',
      'KnowledgeBaseCategory' => 'Категория базы знаний',
      'CampaignLogRecord' => 'Запись Лога Кампании',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Эл. письма',
      'User' => 'Пользователи',
      'Team' => 'Группы',
      'Role' => 'Роли',
      'EmailTemplate' => 'Шаблоны эл. писем',
      'EmailTemplateCategory' => 'Категории шаблонов эл. писем',
      'EmailAccount' => 'Учетные записи эл. почты пользователей',
      'EmailAccountScope' => 'Учетные записи эл. почты пользователей',
      'OutboundEmail' => 'Исходящие эл. письма',
      'ScheduledJob' => 'Задания планировщика',
      'ExternalAccount' => 'Внешние учетные записи',
      'Extension' => 'Расширения',
      'Dashboard' => 'Панели виджетов',
      'InboundEmail' => 'Учетные записи эл. почты групп',
      'EmailAddress' => 'Email Addresses',
      'PhoneNumber' => 'Phone Numbers',
      'Stream' => 'Ленты',
      'Import' => 'Импорт',
      'Template' => 'Шаблоны',
      'Job' => 'Задания',
      'EmailFilter' => 'Фильтры эл. почты',
      'Portal' => 'Порталы',
      'PortalRole' => 'Роли порталов',
      'Attachment' => 'Вложения',
      'EmailFolder' => 'Папки Эл.почты',
      'PortalUser' => 'Пользователи портала',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => 'Записи журнала запланированных работ',
      'PasswordChangeRequest' => 'Запросы смены пароля',
      'ActionHistoryRecord' => 'История действий',
      'AuthToken' => 'Токены сессий аутентификации',
      'UniqueId' => 'Уникальные IDs',
      'LastViewed' => 'Последние просмотренные',
      'AuthLogRecord' => 'Лог Аутентификации',
      'AuthFailLogRecord' => 'Сбой Лога Аутентификации',
      'LeadCapture' => 'Захват кандидата',
      'LeadCaptureLogRecord' => 'Лог захвата кандидата',
      'ArrayValue' => 'Значения массива',
      'DashboardTemplate' => 'Dashboard Templates',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'Account' => 'Контрагенты',
      'Contact' => 'Контакты',
      'Lead' => 'Кандидаты',
      'Target' => 'Цели',
      'Opportunity' => 'Сделки',
      'Meeting' => 'Встречи',
      'Calendar' => 'Календари',
      'Call' => 'Звонки',
      'Task' => 'Задачи',
      'Case' => 'Обращения',
      'Document' => 'Документы',
      'DocumentFolder' => 'Папки с документами',
      'Campaign' => 'Кампании',
      'TargetList' => 'Списки целей',
      'MassEmail' => 'Массовые рассылки эл. писем',
      'EmailQueueItem' => 'Элементы очереди эл. почты',
      'CampaignTrackingUrl' => 'Целевые URL-адреса',
      'Activities' => 'Действия',
      'KnowledgeBaseArticle' => 'Статьи базы знаний',
      'KnowledgeBaseCategory' => 'Категории базы знаний',
      'CampaignLogRecord' => 'Записи Лога Кампании',
    ),
    'labels' => 
    array (
      'Misc' => 'Разное',
      'Merge' => 'Объединить',
      'None' => 'Нет',
      'Home' => 'Главная',
      'by' => 'по',
      'Proceed' => 'Proceed',
      'Saved' => 'Сохранено',
      'Error' => 'Ошибка',
      'Select' => 'Выбрать',
      'Not valid' => 'Некорректные данные',
      'Please wait...' => 'Пожалуйста, подождите...',
      'Please wait' => 'Пожалуйста, подождите',
      'Attached' => 'Attached',
      'Loading...' => 'Загрузка...',
      'Uploading...' => 'Загружается...',
      'Sending...' => 'Отправляется...',
      'Merging...' => 'Объединияется...',
      'Merged' => 'Объединено',
      'Removed' => 'Удалено',
      'Posted' => 'Добавлено',
      'Linked' => 'Ссылка добавлена',
      'Unlinked' => 'Ссылка убрана',
      'Done' => 'Готово',
      'Access denied' => 'В доступе отказано',
      'Not found' => 'Не найдено',
      'Access' => 'Доступ',
      'Are you sure?' => 'Вы уверены?',
      'Record has been removed' => 'Запись была удалена',
      'Wrong username/password' => 'Неверное имя пользователя/пароль',
      'Post cannot be empty' => 'Сообщение не может быть пустым',
      'Removing...' => 'Удаляется...',
      'Unlinking...' => 'Ссылка убирается...',
      'Posting...' => 'Размещается...',
      'Username can not be empty!' => 'Имя пользователя не может быть пустым!',
      'Cache is not enabled' => 'Кэш не подключен',
      'Cache has been cleared' => 'Кэш был очищен',
      'Rebuild has been done' => 'Перестройка ПО была выполнена',
      'Return to Application' => 'Вернуться к приложению',
      'Saving...' => 'Сохраняется...',
      'Modified' => 'Изменено',
      'Created' => 'Создано',
      'Create' => 'Создать',
      'create' => 'создать',
      'Overview' => 'Обзор',
      'Details' => 'Описание',
      'Add Field' => 'Добавить поле',
      'Add Dashlet' => 'Добавить виджет',
      'Filter' => 'Фильтр',
      'Edit Dashboard' => 'Редактировать панель',
      'Add' => 'Добавить',
      'Add Item' => 'Добавить',
      'Reset' => 'Сбросить',
      'Menu' => 'Меню',
      'More' => 'Больше',
      'Search' => 'Искать',
      'Only My' => 'Только мои',
      'Open' => 'Открыть',
      'Admin' => 'Администратор',
      'About' => 'О программе',
      'Refresh' => 'Обновить',
      'Remove' => 'Удалить',
      'Restore' => 'Restore',
      'Options' => 'Опции',
      'Username' => 'Имя пользователя',
      'Password' => 'Пароль',
      'Login' => 'Войти',
      'Log Out' => 'Выйти',
      'Preferences' => 'Персональные Настройки',
      'State' => 'Регион',
      'Street' => 'Улица',
      'Country' => 'Страна',
      'City' => 'Город',
      'PostalCode' => 'Индекс',
      'Followed' => 'Вы подписаны',
      'Follow' => 'Подписаться',
      'Followers' => 'Подписчики',
      'Clear Local Cache' => 'Очистить локальный кэш',
      'Actions' => 'Действия',
      'Delete' => 'Удалить',
      'Update' => 'Обновить',
      'Save' => 'Сохранить',
      'Edit' => 'Редактировать',
      'View' => 'Просмотреть',
      'Cancel' => 'Отменить',
      'Apply' => 'Применить',
      'Unlink' => 'Убрать ссылку',
      'Mass Update' => 'Обновить все',
      'Export' => 'Экспортировать',
      'No Data' => 'Нет данных',
      'No Access' => 'Нет доступа',
      'All' => 'Все',
      'Active' => 'Активный',
      'Inactive' => 'Неактивный',
      'Write your comment here' => 'Оставьте свою заметку здесь',
      'Post' => 'Разместить',
      'Stream' => 'Лента',
      'Show more' => 'Показать еще',
      'Dashlet Options' => 'Настройки панели',
      'Full Form' => 'Раширенная форма',
      'Insert' => 'Вставить',
      'Person' => 'Личность',
      'First Name' => 'Имя',
      'Last Name' => 'Фамилия',
      'Middle Name' => 'Middle Name',
      'Original' => 'Оригинал',
      'You' => 'Вы',
      'you' => 'вы',
      'change' => 'изменить',
      'Change' => 'Изменить',
      'Primary' => 'Основной',
      'Save Filter' => 'Сохранить фильтр',
      'Administration' => 'Администрирование',
      'Run Import' => 'Импортировать',
      'Duplicate' => 'Дубликат',
      'Notifications' => 'Оповещения',
      'Mark all read' => 'Пометить все как прочитанное',
      'See more' => 'Подробнее',
      'Today' => 'Сегодня',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчера',
      'Submit' => 'Отправить',
      'Close' => 'Закрыть',
      'Yes' => 'Да',
      'No' => 'Нет',
      'Select All Results' => 'Выбрать все результати',
      'Value' => 'Значение',
      'Current version' => 'Текущая версия',
      'List View' => 'Отображать в виде списка',
      'Tree View' => 'Отображать в виде дерева',
      'Unlink All' => 'Убрать все ссылки',
      'Total' => 'Всего',
      'Print to PDF' => 'Распечатать в PDF',
      'Default' => 'По умолчанию',
      'Number' => 'Номер',
      'From' => 'От',
      'To' => 'До',
      'Create Post' => 'Создать сообщение',
      'Previous Entry' => 'Предыдущая запись',
      'Next Entry' => 'Следующая запись',
      'View List' => 'Просмотреть список',
      'Attach File' => 'Прикрепить файл',
      'Skip' => 'Пропустить',
      'Attribute' => 'Атрибут',
      'Function' => 'Функция',
      'Self-Assign' => 'Назначить на себя',
      'Self-Assigned' => 'Назначен на себя',
      'Expand' => 'Развернуть',
      'Collapse' => 'Свернуть',
      'New notifications' => 'Новые уведомления',
      'Manage Categories' => 'Управление категориями',
      'Manage Folders' => 'Управление папками',
      'Convert to' => 'Конвертировать в',
      'View Personal Data' => 'Просмотреть личные данные',
      'Personal Data' => 'Личные данные',
      'Erase' => 'Стереть',
      'View Followers' => 'View Followers',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'View on Map',
      'Preview' => 'Preview',
      'Move Over' => 'Подвинуть',
      'Scheduler' => 'Scheduler',
      'Create InboundEmail' => 'Создать входящую эл. почту',
      'Activities' => 'Действия',
      'History' => 'История',
      'Attendees' => 'Участники',
      'Schedule Meeting' => 'Запланировать встречу',
      'Schedule Call' => 'Запланировать звонок',
      'Compose Email' => 'Написать эл. письмо',
      'Log Meeting' => 'Записать встречу',
      'Log Call' => 'Записать звонок',
      'Archive Email' => 'Отправить эл. письмо в архив',
      'Create Task' => 'Создать задачу',
      'Tasks' => 'Задачи',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Пожалуйста, подождите...',
      'posting' => 'Размещается...',
      'loading' => 'Загрузка ...',
      'saving' => 'Сохраняется ...',
      'confirmLeaveOutMessage' => 'Вы действительно хотите покинуть эту форму?',
      'notModified' => 'Вы не внесли изменения в запись',
      'duplicate' => 'Создаваемая запись является дубликатом уже существующей',
      'dropToAttach' => 'Перетащите чтоб прикрепить',
      'fieldIsRequired' => '{field} обязательно',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} должно быть после {otherField}',
      'fieldShouldBefore' => '{field} должно быть до {otherField}',
      'fieldShouldBeBetween' => '{field} должно быть между {min} и {max}',
      'fieldShouldBeLess' => '{field} должно быть меньше чем {value}',
      'fieldShouldBeGreater' => '{field} должно быть больше чем {value}',
      'fieldBadPasswordConfirm' => '{field} подтверждено неверно',
      'fieldMaxFileSizeError' => 'Размер файла не должен превышать {max} Мб.',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Выполняется загрузка',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'resetPreferencesDone' => 'Были восстановлены значения по умолчанию',
      'confirmation' => 'Вы уверены?',
      'unlinkAllConfirmation' => 'Вы действительно хотите убрать все связанные записи?',
      'resetPreferencesConfirmation' => 'Вы действительно хотите восстановить значения по умолчанию?',
      'removeRecordConfirmation' => 'Вы действительно хотите удалить запись?',
      'unlinkRecordConfirmation' => 'Вы действительно хотите убрать связанную запись?',
      'removeSelectedRecordsConfirmation' => 'Вы действительно хотите удалить выбранные записи?',
      'unlinkSelectedRecordsConfirmation' => 'Are you sure you want to unlink selected records?',
      'massUpdateResult' => '{count} записей было обновлено',
      'massUpdateResultSingle' => '{count} запись была обновлена',
      'recalculateFormulaConfirmation' => 'Вы уверены что хотите пересчитать формулу для выбраных записей?',
      'noRecordsUpdated' => 'Записи не были обновлены',
      'massRemoveResult' => '{count} записей было удалено',
      'massRemoveResultSingle' => '{count} запись была удалена',
      'noRecordsRemoved' => 'Записи не были удалены',
      'clickToRefresh' => 'Нажмите для обновления',
      'writeYourCommentHere' => 'Оставьте свою заметку здесь',
      'writeMessageToUser' => 'Оставить сообщение для {user}',
      'writeMessageToSelf' => 'Оставить сообщение для себя',
      'typeAndPressEnter' => 'Введите и нажмите enter',
      'checkForNewNotifications' => 'Проверить новые оповещения',
      'checkForNewNotes' => 'Проверить новые события в Ленте',
      'internalPost' => 'Сообщение будет видно только внутренним пользователям',
      'internalPostTitle' => 'Сообщение видно только внутренним пользователям',
      'done' => 'Готово',
      'notUpdated' => 'Not updated',
      'confirmMassFollow' => 'Вы уверены, что хотите подписаться на выбранные записи?',
      'confirmMassUnfollow' => 'Вы уверены, что хотите отписаться от выбранных записей?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Не на что подписываться',
      'massUnfollowZeroResult' => 'Не от чего отписываться',
      'erasePersonalDataConfirmation' => 'Отмеченные поля будут стерты навсегда. Вы уверены?',
      'maintenanceMode' => 'The application currently is in maintenance mode. Only admin users have access.

Maintenance mode can be disabled at Administration → Settings.',
      'massPrintPdfMaxCountError' => 'Невозможно напечатать больше {maxCount} записей.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Только мои',
      'onlyMyTeam' => 'My Team',
      'followed' => 'Вы подписаны',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Вы подписаны',
      'all' => 'Все',
    ),
    'massActions' => 
    array (
      'remove' => 'Удалить',
      'merge' => 'Объединить',
      'massUpdate' => 'Обновить все',
      'unlink' => 'Unlink',
      'export' => 'Экспортировать',
      'follow' => 'Подписаться',
      'unfollow' => 'Отписаться',
      'convertCurrency' => 'Конвертировать валюту',
      'recalculateFormula' => 'Пересчитать формулу',
      'printPdf' => 'Распечатать в PDF',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'firstName' => 'Имя',
      'lastName' => 'Фамилия',
      'middleName' => 'Middle Name',
      'salutationName' => 'Обращение',
      'assignedUser' => 'Ответственный',
      'assignedUsers' => 'Ответственные',
      'emailAddress' => 'Адрес эл. почты',
      'emailAddressData' => 'Данные адреса эл. почты',
      'emailAddressIsOptedOut' => 'Эл. адрес не участвует в рассылке массовых сообщений',
      'assignedUserName' => 'Имя ответственного',
      'teams' => 'Группы',
      'createdAt' => 'Создано в',
      'modifiedAt' => 'Изменено в',
      'createdBy' => 'Создано (кем)',
      'modifiedBy' => 'Изменено (кем)',
      'description' => 'Описание',
      'address' => 'Адрес',
      'phoneNumber' => 'Телефон',
      'phoneNumberMobile' => 'Телефон (Мобильный)',
      'phoneNumberHome' => 'Телефон (Домашний)',
      'phoneNumberFax' => 'Телефон (Факс)',
      'phoneNumberOffice' => 'Телефон (Офисный)',
      'phoneNumberOther' => 'Телефон (Дополнительно)',
      'phoneNumberData' => 'Данные телефонного номера',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'order' => 'Порядок',
      'parent' => 'Источник',
      'children' => 'Потомок',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Тип',
      'names' => 'Названия',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Отписалось (Списки целей)',
      'billingAddressCity' => 'Город',
      'billingAddressCountry' => 'Страна',
      'billingAddressPostalCode' => 'Индекс',
      'billingAddressState' => 'Регион',
      'billingAddressStreet' => 'Улица',
      'billingAddressMap' => 'Карта',
      'addressCity' => 'Город',
      'addressStreet' => 'Улица',
      'addressCountry' => 'Страна',
      'addressState' => 'Регион',
      'addressPostalCode' => 'Индекс',
      'addressMap' => 'Карта',
      'shippingAddressCity' => 'Город доставки',
      'shippingAddressStreet' => 'Улица доставки',
      'shippingAddressCountry' => 'Страна доставки',
      'shippingAddressState' => 'Регион доставки',
      'shippingAddressPostalCode' => 'Индекс доставки',
      'shippingAddressMap' => 'Карта (доставка)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Ответственный',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
      'team' => 'Группа',
      'roles' => 'Роли',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'parent' => 'Источник',
      'children' => 'Потомок',
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'leads' => 'Кандидаты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Эл. письма',
      'accounts' => 'Контрагенты',
      'cases' => 'Обращения',
      'documents' => 'Документы',
      'account' => 'Контрагент',
      'opportunity' => 'Cделка',
      'contact' => 'Контакт',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Лента',
      'Emails' => 'Моя почта',
      'Iframe' => 'Iframe',
      'Records' => 'Список записей',
      'Leads' => 'Мои кандидаты',
      'Opportunities' => 'Мои сделки',
      'Tasks' => 'Мои задачи',
      'Cases' => 'Мои обращения',
      'Calendar' => 'Календарь',
      'Calls' => 'Мои звонки',
      'Meetings' => 'Мои встречи',
      'OpportunitiesByStage' => 'Сделки по стадиям',
      'OpportunitiesByLeadSource' => 'Сделки по источнику кандидатов',
      'SalesByMonth' => 'Продажи по месяцам',
      'SalesPipeline' => 'Источники продаж',
      'Activities' => 'Мои действия',
    ),
    'notificationMessages' => 
    array (
      'assign' => 'Вам было назначено {entityType} {entity}',
      'emailReceived' => 'Получено эл. письмо от {from}',
      'entityRemoved' => '{user} удалил {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} оставил примечание к {entityType} {entity}',
      'attach' => '{user} прикрепил к {entityType} {entity}',
      'status' => '{user} обновил {field} (чего) {entityType} {entity}',
      'update' => '{user} обновил {entityType} {entity}',
      'postTargetTeam' => '{user} оставил сообщение для группы {target}',
      'postTargetTeams' => '{user} оставил сообщение для групп {target}',
      'postTargetPortal' => '{user} оставил сообщение для портала {target}',
      'postTargetPortals' => '{user} оставил сообщение для порталов {target}',
      'postTarget' => '{user} оставил сообщение для {target}',
      'postTargetYou' => '{user} оставил сообщение для Вас',
      'postTargetYouAndOthers' => '{user} оставил сообщение для {target} и для Вас',
      'postTargetAll' => '{user} оставил сообщение для всех',
      'postTargetSelf' => '{user} оставил сообщение у себя на ленте',
      'postTargetSelfAndOthers' => '{user} оставил сообщение для {target} и для себя',
      'mentionInPost' => '{user} упомянул {mentioned} в {entityType} {entity}',
      'mentionYouInPost' => '{user} упомянул Вас в {entityType} {entity}',
      'mentionInPostTarget' => '{user} упомянул {mentioned} в сообщении',
      'mentionYouInPostTarget' => '{user} упомянул Вас в сообщении для {target}',
      'mentionYouInPostTargetAll' => '{user} упомянул Вас в сообщении для всех',
      'mentionYouInPostTargetNoTarget' => '{user} упомянул Вас в сообщении',
      'create' => '{user} создал {entityType} {entity}',
      'createThis' => '{user} создал {entityType}',
      'createAssignedThis' => '{user} создал {entityType} назначил {assignee}',
      'createAssigned' => '{user} создал {entityType} {entity} (кому) {assignee}',
      'createAssignedYou' => '{user} создал {entityType} {entity} Вам',
      'createAssignedThisSelf' => '{user} создал этот {entityType} self-assigned',
      'createAssignedSelf' => '{user} создал {entityType} {entity} self-assigned',
      'assign' => '{user} назначил {entityType} {entity} (кому) {assignee}',
      'assignThis' => '{user} назначил {entityType} {assignee}',
      'assignYou' => '{user} назначил {entityType} {entity} Вам',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} назначил {entityType} на себя',
      'assignSelf' => '{user} назначил {entityType} {entity} на себя',
      'postThis' => '{user} оставил сообщение',
      'attachThis' => '{user} прикрепил',
      'statusThis' => '{user} обновил {field}',
      'updateThis' => '{user} обновил {entityType}',
      'createRelatedThis' => '{user} создал {relatedEntityType} {relatedEntity} относящееся к {entityType}',
      'createRelated' => '{user} создал {relatedEntityType} {relatedEntity} относящееся к {entityType} {entity}',
      'relate' => '{user} связал {relatedEntityType} {relatedEntity} с {entityType} {entity}',
      'relateThis' => '{user} связал {relatedEntityType} {relatedEntity} с этим {entityType}',
      'emailReceivedFromThis' => 'Получено эл. письмо от {from}',
      'emailReceivedInitialFromThis' => 'Получено эл. письмо от {from}, {entityType} создано',
      'emailReceivedThis' => 'Получено эл. письмо',
      'emailReceivedInitialThis' => 'Получено эл. письмо, создано {entityType}',
      'emailReceivedFrom' => 'Получено эл. письмо от {from}, относится к {entityType} {entity}',
      'emailReceivedFromInitial' => 'Получено эл. письмо от {from}, {entityType} {entity} создано',
      'emailReceived' => 'Получено эл. письмо относящееся к {entityType} {entity}',
      'emailReceivedInitial' => 'Получено эл. письмо: {entityType} {entity} создано',
      'emailReceivedInitialFrom' => 'Получено эл. письмо от {from}, {entityType} {entity} создано',
      'emailSent' => '{by} отправил эл. письмо относящееся к {entityType} {entity}',
      'emailSentThis' => '{by} отправил эл. письмо',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} оставил сообщение для {target} и для себя',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} оставила сообщение для {target} и для себя',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Январь',
        1 => 'Февраль',
        2 => 'Март',
        3 => 'Апрель',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Август',
        8 => 'Сентябрь',
        9 => 'Октябрь',
        10 => 'Ноябрь',
        11 => 'Декабрь',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Янв',
        1 => 'Февр',
        2 => 'Март',
        3 => 'Апр',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Авг',
        8 => 'Сент',
        9 => 'Окт',
        10 => 'Нояб',
        11 => 'Дек',
      ),
      'dayNames' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Вскр',
        1 => 'Пнд',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чтв',
        5 => 'Птн',
        6 => 'Сб',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Вс',
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'д',
      'h' => 'ч',
      'm' => 'м',
      's' => 'с',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Г-н.',
        'Mrs.' => 'Г-жа.',
        'Ms.' => 'Мисс.',
        'Dr.' => 'Д-р.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Африкаанс',
        'az_AZ' => 'Азербайджанский',
        'be_BY' => 'Белорусский',
        'bg_BG' => 'Болгарский',
        'bn_IN' => 'Бенгальский',
        'bs_BA' => 'Боснийский',
        'ca_ES' => 'Каталонский',
        'cs_CZ' => 'Чешский',
        'cy_GB' => 'Валлийский',
        'da_DK' => 'Датский',
        'de_DE' => 'Немецкий',
        'el_GR' => 'Греческий',
        'en_GB' => 'Английский (UK)',
        'es_MX' => 'Испанский (Мексика)',
        'en_US' => 'Английский (US)',
        'es_ES' => 'Испанский (Испания)',
        'et_EE' => 'Эстонский',
        'eu_ES' => 'Баскский',
        'fa_IR' => 'Персидский',
        'fi_FI' => 'Финский',
        'fo_FO' => 'Фарерский',
        'fr_CA' => 'Французский (Канада)',
        'fr_FR' => 'Французский (Франция)',
        'ga_IE' => 'Ирландский',
        'gl_ES' => 'Галицкий',
        'gn_PY' => 'Гуарани',
        'he_IL' => 'Иврит',
        'hi_IN' => 'Хинди',
        'hr_HR' => 'Хорватский',
        'hu_HU' => 'Венгерский',
        'hy_AM' => 'Армянский',
        'id_ID' => 'Индонезийский',
        'is_IS' => 'Исландский',
        'it_IT' => 'Итальянский',
        'ja_JP' => 'Японский',
        'ka_GE' => 'Грузинский',
        'km_KH' => 'Кхмерийский',
        'ko_KR' => 'Корейский',
        'ku_TR' => 'Курдский',
        'lt_LT' => 'Литовский',
        'lv_LV' => 'Латвийский',
        'mk_MK' => 'Македонский',
        'ml_IN' => 'Малайялам',
        'ms_MY' => 'Малайский',
        'nb_NO' => 'Норвежский букмол',
        'nn_NO' => 'Норвежский нюнорск',
        'ne_NP' => 'Непальский',
        'nl_NL' => 'Нидерландский',
        'pa_IN' => 'Панджабский',
        'pl_PL' => 'Польский',
        'ps_AF' => 'Пушту',
        'pt_BR' => 'Португальский (Бразилия)',
        'pt_PT' => 'Португальский (Португалия)',
        'ro_RO' => 'Румынский',
        'ru_RU' => 'Русский',
        'sk_SK' => 'Словацкий',
        'sl_SI' => 'Словенский',
        'sq_AL' => 'Албанский',
        'sr_RS' => 'Сербский',
        'sv_SE' => 'Шведский',
        'sw_KE' => 'Суахили',
        'ta_IN' => 'Тамильский',
        'te_IN' => 'Телугу',
        'th_TH' => 'Тайский',
        'tl_PH' => 'Тагальский',
        'tr_TR' => 'Турецкий',
        'uk_UA' => 'Украинский',
        'ur_PK' => 'Урду',
        'vi_VN' => 'Вьетнамский',
        'zh_CN' => 'Упрощенный китайский (Китай)',
        'zh_HK' => 'Традиционный китайский (Гонконг)',
        'zh_TW' => 'Традиционный китайский (Тайвань)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'После',
        'before' => 'До',
        'between' => 'Между',
        'today' => 'Сегодня',
        'past' => 'Прошлое',
        'future' => 'Будущее',
        'currentMonth' => 'Текущий месяц',
        'lastMonth' => 'Прошлый месяц',
        'nextMonth' => 'Следующий месяц',
        'currentQuarter' => 'Текущий квартал',
        'lastQuarter' => 'Прошлый квартал',
        'currentYear' => 'Текущий год',
        'lastYear' => 'Прошлый год',
        'lastSevenDays' => 'Последние 7 дней',
        'lastXDays' => 'Последние X дней',
        'nextXDays' => 'Следующие X дней',
        'ever' => 'Когда-нибудь',
        'isEmpty' => 'Пусто',
        'olderThanXDays' => 'Более давний чем Х дней',
        'afterXDays' => 'После X дней',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter',
      ),
      'searchRanges' => 
      array (
        'is' => 'Является',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'isOneOf' => 'Любой из',
        'isFromTeams' => 'Из группы',
        'isNot' => 'Не',
        'isNotOneOf' => 'Ни один из',
        'anyOf' => 'Любой из',
        'allOf' => 'All Of',
        'noneOf' => 'Ни один из',
        'any' => 'Any',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Равняется',
        'like' => 'Как (%)',
        'notLike' => 'не как (%)',
        'startsWith' => 'Начинается с',
        'endsWith' => 'Заканчивается',
        'contains' => 'Содержит',
        'notContains' => 'Не включает в себя',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'notEquals' => 'Не равен',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'between' => 'Между',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Нет',
        '0.5' => '30 секунд',
        1 => '1 минута',
        2 => '2 минуты',
        5 => '5 минут',
        10 => '10 минут',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Мобильный',
        'Office' => 'Офисный',
        'Fax' => 'Факс',
        'Home' => 'Домашний',
        'Other' => 'Дополнительно',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Всплывающее окно',
        'Email' => 'Эл. письмо',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Вы можете найти перевод здесь: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Полужирный',
          'italic' => 'Курсив',
          'underline' => 'Подчёркнутый',
          'strike' => 'Зачеркнутый',
          'clear' => 'Убрать стили шрифта',
          'height' => 'Высота линии',
          'name' => 'Название шрифта',
          'size' => 'Размер шрифта',
        ),
        'image' => 
        array (
          'image' => 'Изображение',
          'insert' => 'Вставить изображение',
          'resizeFull' => 'Восстановить размер',
          'resizeHalf' => 'Уменьшить до 50%',
          'resizeQuarter' => 'Уменьшить до 25%',
          'floatLeft' => 'Расположить слева',
          'floatRight' => 'Расположить справа',
          'floatNone' => 'Расположение по умолчанию',
          'dragImageHere' => 'Перетащите изображение сюда',
          'selectFromFiles' => 'Выбрать из файлов',
          'url' => 'URL изображения',
          'remove' => 'Удалить изображение',
        ),
        'link' => 
        array (
          'link' => 'Ссылка',
          'insert' => 'Вставить ссылку',
          'unlink' => 'Убрать ссылку',
          'edit' => 'Редактировать',
          'textToDisplay' => 'Отображаемый текст',
          'url' => 'URL для перехода',
          'openInNewWindow' => 'Открывать в новом окне',
        ),
        'video' => 
        array (
          'video' => 'Видео',
          'videoLink' => 'Ссылка на видео',
          'insert' => 'Вставить видео',
          'url' => 'URL видео',
          'providers' => '(YouTube, Vimeo, Vine, Instagram или DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Таблица',
        ),
        'hr' => 
        array (
          'insert' => 'Вставить горизонтальную линию',
        ),
        'style' => 
        array (
          'style' => 'Стиль',
          'normal' => 'Нормальный',
          'blockquote' => 'Цитата',
          'pre' => 'Код',
          'h1' => 'Заголовок 1',
          'h2' => 'Заголовок 2',
          'h3' => 'Заголовок 3',
          'h4' => 'Заголовок 4',
          'h5' => 'Заголовок 5',
          'h6' => 'Заголовок 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Маркированный список',
          'ordered' => 'Нумерованный список',
        ),
        'options' => 
        array (
          'help' => 'Помощь',
          'fullscreen' => 'На весь экран',
          'codeview' => 'Исходный код',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Параграф',
          'outdent' => 'Уменьшить отступ',
          'indent' => 'Увеличить отступ',
          'left' => 'Выровнять по левому краю',
          'center' => 'Выровнять по центру',
          'right' => 'Выровнять по правому краю',
          'justify' => 'Растянуть по ширине',
        ),
        'color' => 
        array (
          'recent' => 'Последний цвет',
          'more' => 'Еще цвета',
          'background' => 'Цвет фона',
          'foreground' => 'Цвет шрифта',
          'transparent' => 'Прозрачный',
          'setTransparent' => 'Сделать прозрачным',
          'reset' => 'Сбросить',
          'resetToDefault' => 'Восстановить умолчания',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Сочетания клавиш',
          'close' => 'Закрыть',
          'textFormatting' => 'Форматирование текста',
          'action' => 'Действие',
          'paragraphFormatting' => 'Форматирование параграфа',
          'documentStyle' => 'Стиль документа',
        ),
        'history' => 
        array (
          'undo' => 'Отмена',
          'redo' => 'Повтор',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'Список',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Classic Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Classic Sakura',
      'EspoVertical' => 'Vertical Espo',
      'SakuraVertical' => 'Vertical Sakura',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Vertical Violet',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Обратить импортирование',
      'Return to Import' => 'Вернуться к импортированию',
      'Run Import' => 'Импортировать',
      'Back' => 'Назад',
      'Field Mapping' => 'Сопоставление полей',
      'Default Values' => 'Значения по умолчанию',
      'Add Field' => 'Добавить поле',
      'Created' => 'Создано',
      'Updated' => 'Обновлено',
      'Result' => 'Результат',
      'Show records' => 'Показать записи',
      'Remove Duplicates' => 'Убрать дубликаты',
      'importedCount' => 'Импортировано: (count)',
      'duplicateCount' => 'Дубликатов: (count)',
      'updatedCount' => 'Обновлено: (count)',
      'Create Only' => 'Только создать',
      'Create and Update' => 'Создать и обновить',
      'Update Only' => 'Только обновить',
      'Update by' => 'Обновить по',
      'Set as Not Duplicate' => 'Пометить как не дубликат',
      'File (CSV)' => 'Файл (CSV)',
      'First Row Value' => 'Значение из первой строки',
      'Skip' => 'Пропустить',
      'Header Row Value' => 'Значение из строки заголовка',
      'Field' => 'Поле',
      'What to Import?' => 'Что импортировать?',
      'Entity Type' => 'Тип объекта',
      'What to do?' => 'Что делать?',
      'Properties' => 'Свойства',
      'Header Row' => 'Есть строка заголовков',
      'Person Name Format' => 'Формат личных имен',
      'John Smith' => 'Имя Фамилия',
      'Smith John' => 'Фамилия Имя',
      'Smith, John' => 'Фамилия, Имя',
      'Field Delimiter' => 'Разделитель полей',
      'Date Format' => 'Формат даты',
      'Decimal Mark' => 'Десятичный разделитель',
      'Text Qualifier' => 'Спецификатор текста',
      'Time Format' => 'Формат времени',
      'Currency' => 'Валюта',
      'Preview' => 'Предпросмотр',
      'Next' => 'Далее',
      'Step 1' => 'Шаг 1',
      'Step 2' => 'Шаг 2',
      'Double Quote' => 'Двойные кавычки',
      'Single Quote' => 'Одиночные кавычки',
      'Imported' => 'Импортировано',
      'Duplicates' => 'Дубликатов',
      'Skip searching for duplicates' => 'Пропустить поиск дубликатов',
      'Timezone' => 'Часовой пояс',
      'Remove Import Log' => 'Удалить журнал импорта',
      'New Import' => 'Новый импорт',
      'Import Results' => 'Результаты импорта',
      'Silent Mode' => 'Silent Mode',
    ),
    'messages' => 
    array (
      'utf8' => 'Должен быть в кодировке UTF-8',
      'duplicatesRemoved' => 'Дубликаты убраны',
      'inIdle' => 'Выполнить в фоновом режиме (для крупных данных, через cron)',
      'revert' => 'Это приведет к удалению всех импортированных записей навсегда.',
      'removeDuplicates' => 'Это приведет к удалению всех импортированных записей, которые были распознаны как дубликаты, навсегда.',
      'confirmRevert' => 'Это приведет к удалению всех импортированных записей навсегда. Вы уверены?',
      'confirmRemoveDuplicates' => 'Это приведет к удалению всех импортированных записей, которые были распознаны как дубликаты, навсегда. Вы уверены?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'Это приведет к удалению журнала импорта. Все импортированные записи будут сохранены. Используйте эту функцию, если вы уверены, что импорт в порядке.',
    ),
    'fields' => 
    array (
      'file' => 'Файл',
      'entityType' => 'Тип объекта',
      'imported' => 'Импортированные записи',
      'duplicates' => 'Дубликаты',
      'updated' => 'Обновленные записи',
      'status' => 'Статус',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Сбой',
        'In Process' => 'В процессе',
        'Complete' => 'Завершена',
      ),
      'personNameFormat' => 
      array (
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First',
      ),
    ),
    'strings' => 
    array (
      'saveAsDefault' => 'Save as default',
    ),
    'tooltips' => 
    array (
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.',
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'emailAddress' => 'Адрес эл. почты',
      'team' => 'Группа',
      'status' => 'Статус',
      'assignToUser' => 'Назначить пользователю',
      'host' => 'Сервер',
      'username' => 'Имя пользователя',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые папки',
      'trashFolder' => 'Корзина',
      'ssl' => 'SSL',
      'createCase' => 'Создавать обращения',
      'reply' => 'Автоответчик',
      'caseDistribution' => 'Распределение обращений',
      'replyEmailTemplate' => 'Ответить по шаблону',
      'replyFromAddress' => 'Адрес отправителя',
      'replyToAddress' => 'Обратный адрес',
      'replyFromName' => 'Имя отправителя',
      'targetUserPosition' => 'Должность (положение в группе) пользователя',
      'fetchSince' => 'Получить эл. письма начиная с',
      'addAllTeamUsers' => 'Для всех пользователей группы',
      'teams' => 'Группы',
      'sentFolder' => 'Отправленная папка',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'useImap' => 'Получать эл. письма',
      'useSmtp' => 'Использовать SMTP',
      'smtpHost' => 'SMTP Хост',
      'smtpPort' => 'SMTP Порт',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Безопасность',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'SMTP Имя пользователя',
      'smtpPassword' => 'SMTP Пароль',
      'fromName' => 'Имя отправителя',
      'smtpIsShared' => 'Общий SMTP',
      'smtpIsForMassEmail' => 'SMTP для массовой рассылки',
    ),
    'tooltips' => 
    array (
      'useSmtp' => 'The ability to send emails.',
      'reply' => 'Уведомлять отправителей, что их эл. письма были получены.

 Чтобы предотвратить зацикливание только одно эл. письмо будет отправлено конкретному получателю в течение некоторого периода времени.',
      'createCase' => 'Автоматически создавать обращения из входящих эл. писем',
      'replyToAddress' => 'Укажите адрес этого ящика эл. почты, чтобы ответы приходили на него.',
      'caseDistribution' => 'Как будут назначаться обращения: непосредственно пользователю или распределяться среди группы.',
      'assignToUser' => 'Эл. письма и обращения будут назначаться этому пользователю.',
      'team' => 'Эл. письма и обращения будут относиться к этой группе.',
      'teams' => 'Группы, которым будут назначены электронные письма.',
      'targetUserPosition' => 'Обращения будут распределены пользователям с определенной позицией.',
      'addAllTeamUsers' => 'Эл. письма бдут появляться в папке \'Входящие\' всех пользователей указанной группы.',
      'monitoredFolders' => 'Несколько папок должны быть написаны через запятую.',
      'smtpIsShared' => 'Если отмечено, пользователи смогут отправлять эл. письма с использованием этого SMTP. Доступность контролируется Ролями через разрешение для учетной записи электронной почты группы.',
      'smtpIsForMassEmail' => 'Если отмечено, SMTP будет доступен для массовой рассылки эл. писем.',
      'storeSentEmails' => 'Отправленные эл. письма будут храниться на сервере IMAP.',
    ),
    'links' => 
    array (
      'filters' => 'Фильтры',
      'emails' => 'Эл. письма',
      'assignToUser' => 'Назначить пользователю',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активная',
        'Inactive' => 'Неактивная',
      ),
      'caseDistribution' => 
      array (
        '' => 'Нет',
        'Direct-Assignment' => 'Прямое назначение',
        'Round-Robin' => 'По круговому циклу',
        'Least-Busy' => 'Наименее занятому',
      ),
      'smtpAuthMechanism' => 
      array (
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Создать учетную запись эл. почты',
      'IMAP' => 'IMAP',
      'Actions' => 'Действия',
      'Main' => 'Основное',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не удалось соединиться с IMAP сервером',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Включено',
      'clientId' => 'Идентификатор клиента (Client ID)',
      'clientSecret' => 'Секретный ключ (Client Secret)',
      'redirectUri' => 'URI перенаправления (Redirect URI)',
      'apiKey' => 'Ключ API',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Карты',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Выберите интерацию из меню.',
      'noIntegrations' => 'Нет доступных интергаций.',
    ),
    'help' => 
    array (
      'Google' => '**Obtain OAuth 2.0 credentials from the Google Developers Console.**

Visit [Google Developers Console](https://console.developers.google.com/project) to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Статус',
      'executeTime' => 'Выполнено в',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Осталось попыток',
      'failedAttempts' => 'Неудачных попыток',
      'serviceName' => 'Сервис',
      'method' => 'Метод',
      'methodName' => 'Метод',
      'scheduledJob' => 'Задание планировщика',
      'scheduledJobJob' => 'Название задания',
      'data' => 'Данные',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
      'job' => 'Job',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'В ожидании',
        'Success' => 'Успех',
        'Running' => 'Выполняется',
        'Failed' => 'Сбой',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Ширина (%)',
      'link' => 'Ссылка',
      'notSortable' => 'Не сортируемый',
      'align' => 'Выровнять',
      'panelName' => 'Название панели',
      'style' => 'Стиль',
      'sticked' => 'Sticked',
      'isLarge' => 'Большой размер шрифта',
      'hidden' => 'Hidden',
      'dynamicLogicVisible' => 'Условия, которые делают панель видимой',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'по левому краю',
        'right' => 'по правому краю',
      ),
      'style' => 
      array (
        'default' => 'По умолчанию',
        'success' => 'Успех',
        'danger' => 'Опасность',
        'info' => 'Информация',
        'warning' => 'Предупреждение',
        'primary' => 'Основной',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Новая панель',
      'Layout' => 'Макет',
    ),
    'tooltips' => 
    array (
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.',
    ),
  ),
  'LayoutSet' => 
  array (
    'fields' => 
    array (
      'layoutList' => 'Layouts',
    ),
    'labels' => 
    array (
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts',
    ),
    'tooltips' => 
    array (
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'campaign' => 'Кампания',
      'isActive' => 'Активный',
      'subscribeToTargetList' => 'Подписаться на список целей',
      'subscribeContactToTargetList' => 'Подписаться на контакт, если существует',
      'targetList' => 'Список целей',
      'fieldList' => 'Список полей, чтобы передавать',
      'optInConfirmation' => 'Двойное подтверждение подписки',
      'optInConfirmationEmailTemplate' => 'Шаблон письма для подтверждения подписки',
      'optInConfirmationLifetime' => 'Время подтверждения подписки (часы)',
      'optInConfirmationSuccessMessage' => 'Текст для показа после подтверждения подписки',
      'leadSource' => 'Источник кандидата',
      'apiKey' => 'Ключ API',
      'targetTeam' => 'Группа',
      'exampleRequestMethod' => 'Метод',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Skip confirmation if lead is already in target list',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check',
    ),
    'links' => 
    array (
      'targetList' => 'Список целей',
      'campaign' => 'Кампания',
      'optInConfirmationEmailTemplate' => 'Шаблон письма для подтверждения подписки',
      'targetTeam' => 'Группа',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => 'Лог',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Создать точку входа',
      'Generate New API Key' => 'Сгенерировать новый ключ API',
      'Request' => 'Запрос',
      'Confirm Opt-In' => 'Подтвердить подписку',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Создать новый ключ API',
      'optInConfirmationExpired' => 'Срок действия ссылки в подтверждение подписки истек.',
      'optInIsConfirmed' => 'Подписку подтверждено.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Markdown поддерживается.',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Номер',
      'data' => 'Данные',
      'target' => 'Цель',
      'leadCapture' => 'Захват кандидата',
      'createdAt' => 'Введен в',
      'isCreated' => 'Создан кандидат',
    ),
    'links' => 
    array (
      'leadCapture' => 'Захват кандидата',
      'target' => 'Цель',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Разместить',
      'attachments' => 'Вложения',
      'targetType' => 'Цель',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'portals' => 'Порталы',
      'type' => 'Тип',
      'isGlobal' => 'Глобальный',
      'isInternal' => 'Внутренний (для внутренних пользователей)',
      'related' => 'Связанный',
      'createdByGender' => 'Создано по полу',
      'data' => 'Данные',
      'number' => 'Номер',
    ),
    'filters' => 
    array (
      'all' => 'Все',
      'posts' => 'Сообщения',
      'updates' => 'Обновления',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'Себе',
        'users' => 'Определенному пользователю или пользователям',
        'teams' => 'Определенной группе или группам',
        'all' => 'Всем пользователям',
        'portals' => 'Всем пользователям портала',
      ),
      'type' => 
      array (
        'Post' => 'Разместить',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Напишите Ваше сообщение здесь',
    ),
    'links' => 
    array (
      'superParent' => 'Super Parent',
      'related' => 'Связанный',
    ),
  ),
  'PhoneNumber' => 
  array (
    'fields' => 
    array (
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Orphan',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'logo' => 'Логотип',
      'url' => 'URL',
      'portalRoles' => 'Роли',
      'isActive' => 'Активный',
      'isDefault' => 'Портал по умолчанию',
      'tabList' => 'Список вкладок',
      'quickCreateList' => 'Список для быстрого создания',
      'companyLogo' => 'Логотип',
      'theme' => 'Тема',
      'language' => 'Язык',
      'dashboardLayout' => 'Планировка панели виджетов',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'defaultCurrency' => 'Валюта по умолчанию',
      'layoutSet' => 'Layout Set',
      'customUrl' => 'Пользовательский URL',
      'customId' => 'Пользовательский ID',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'portalRoles' => 'Роли',
      'layoutSet' => 'Layout Set',
      'notes' => 'Заметки',
      'articles' => 'Статьи базы знаний',
    ),
    'tooltips' => 
    array (
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Указанные роли портала будут применены ко всем пользователям портала.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Создать портал',
      'User Interface' => 'Интерфейс пльзователя',
      'General' => 'Основное',
      'Settings' => 'Настройки',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Разрешение на экспорт',
      'massUpdatePermission' => 'Mass Update Permission',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Определяет, имеют ли пользователи портала возможность экспортировать записи.',
      'massUpdatePermission' => 'Defines whether portal users have an ability to do mass update of records.',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create PortalRole' => 'Создать роль портала',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Создать пользователя портала',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Тысячный разделитель',
      'decimalMark' => 'Десятичный разделитель',
      'defaultCurrency' => 'Валюта по умолчанию',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Аутентификация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Имя пользователя',
      'emailAddress' => 'Адрес эл. почты',
      'smtpPassword' => 'Пароль',
      'smtpEmailAddress' => 'Адрес эл. почты',
      'exportDelimiter' => 'Разделитель полей при экспорте',
      'receiveAssignmentEmailNotifications' => 'Получать оповещения по эл. почте при назначении',
      'receiveMentionEmailNotifications' => 'Уведомления по эл. почте об упоминаниях в сообщениях',
      'receiveStreamEmailNotifications' => 'Уведомления по электронной почте о сообщениях и обновлениях статуса',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'autoFollowEntityTypeList' => 'Автоподписка',
      'signature' => 'Подпись к эл. письмам',
      'dashboardTabList' => 'Список вкладок',
      'defaultReminders' => 'Напоминания по умолчанию.',
      'theme' => 'Тема',
      'useCustomTabList' => 'Настраиваемый список вкладок',
      'tabList' => 'Список вкладок',
      'emailReplyToAllByDefault' => 'Отправить ответ всем по умолчанию',
      'dashboardLayout' => 'Планировка панели виджетов',
      'emailReplyForceHtml' => 'Отправить ответ в HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Не заполнять предварительно назначенного пользователя при создании записи',
      'followEntityOnStreamPost' => 'Автоматически подписаться поле публикации в ленте',
      'followCreatedEntities' => 'Автоматически подписаться на созданные записи',
      'followCreatedEntityTypeList' => 'Автоматически подписаться на созданные записи конкретных типов объектов',
      'emailUseExternalClient' => 'Использовать внешний почтовый клиент',
      'scopeColorsDisabled' => 'Отключить цвета границ',
      'tabColorsDisabled' => 'Отключить цвета вкладок',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Оповещения',
      'User Interface' => 'Интерфейс пльзователя',
      'SMTP' => 'SMTP',
      'Misc' => 'Разное',
      'Locale' => 'Локаль',
      'Reset Dashboard to Default' => 'Сбросить настройки панели виджетов по умолчанию',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Пользователь будет автоматически подисан на все новые записи о выбранных типах объектов, будет видеть эту информацию в ленте и получать оповещения.',
      'doNotFillAssignedUserIfNotRequired' => 'При создании записи поле ответственного пользователя не будет заполнено пользователем, который создал запись, если это поле не обязательно.',
      'followCreatedEntities' => 'При создании новых записей они будут автоматически отслеживаться, даже если они назначены другому пользователю.',
      'followCreatedEntityTypeList' => 'При создании новых записей выбранных типов объектов они будут отслеживаться автоматически, даже если они назначены другому пользователю.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'roles' => 'Роли',
      'assignmentPermission' => 'Разрешение для назначения',
      'userPermission' => 'Разрешение видеть пользователей',
      'portalPermission' => 'Разрешение портала',
      'groupEmailAccountPermission' => 'Разрешение для учетной записи эл. почты группы',
      'exportPermission' => 'Разрешение на экспорт',
      'massUpdatePermission' => 'Mass Update Permission',
      'dataPrivacyPermission' => 'Разрешение на обработку конфиденциальных данных',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'teams' => 'Группы',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Позволяет ограничить возможность назначать задания и отправлять сообщения другим пользователям.

все - без ограничений

группа - могут назначать задания и отправлять сообщения только членам своей группы

нет - могут назначать задания и отправлять сообщения только себе',
      'userPermission' => 'Позволяет ограничить возможности пользователей просматривать деятельность, календарь и ленту других пользователей.

все - могут просматривать

группа - могут просматривать деятельность только членов своей группы

нет - не могут просматривать',
      'portalPermission' => 'Определяет доступ к информации портала, способность конвертировать контакты в пользователей портала и отправлять сообщения пользователям портала.',
      'groupEmailAccountPermission' => 'Определяет доступ к групповым учетным записям эл. почты, возможность отправлять эл. письма из SMTP группы.',
      'exportPermission' => 'Определяет, имеют ли пользователи возможность экспортировать записи.',
      'massUpdatePermission' => 'Defines whether users have an ability to do mass update of records.',
      'dataPrivacyPermission' => 'Позволяет просматривать и стирать личные данные.',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create Role' => 'Создать роль',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'не установлено',
        'enabled' => 'включено',
        'disabled' => 'отключено',
      ),
      'levelList' => 
      array (
        'all' => 'все',
        'team' => 'группа',
        'account' => 'контрагент',
        'contact' => 'контакт',
        'own' => 'владелец',
        'no' => 'нет',
        'yes' => 'да',
        'not-set' => 'не установлено',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Чтение',
      'edit' => 'Редактирование',
      'delete' => 'Удаление',
      'stream' => 'Лента',
      'create' => 'Создать',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Все изменения применятся только после очистки кэша.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'job' => 'Задание',
      'scheduling' => 'Планирование',
    ),
    'links' => 
    array (
      'log' => 'Лог',
    ),
    'labels' => 
    array (
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => 'Создать задание',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Очистка',
        'CheckInboundEmails' => 'Проверка входящей эл. почты групп',
        'CheckEmailAccounts' => 'Проверка входящей эл. почты пользователей',
        'SendEmailReminders' => 'Отправка напоминаний по эл. почте',
        'AuthTokenControl' => 'Контроль за токенами аутентификации',
        'SendEmailNotifications' => 'Отправить оповещения на эл. почту',
        'CheckNewVersion' => 'Проверить наличие новой версии',
        'ProcessWebhookQueue' => 'Process Webhook Queue',
        'ProcessMassEmail' => 'Отправка массовых рассылок эл. писем',
        'ControlKnowledgeBaseArticleStatus' => 'Контроль статуса статей базы знаний',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Заметка: Добавьте эту строку в crontab для запуска планировщика заданий Espo:',
        'mac' => 'Заметка: Добавьте эту строку в crontab для запуска планировщика заданий Espo:',
        'windows' => 'Заметка: Создайте пакетный файл со следующими командами для запуска планировщика заданий Espo используя планировщик заданий Windows:',
        'default' => 'Заметка: Добавьте эту команду в Cron (Планировщик заданий):',
      ),
      'status' => 
      array (
        'Active' => 'Активно',
        'Inactive' => 'Неактивно',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Определяет периодичность выполнения задания.

`*/5 * * * *` - каждые 5 минут

`0 */2 * * *` - каждые 2 часа

`30 1 * * *` - каждый день один раз в 01:30

`0 0 1 * *` - каждый первый день месяца',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Статус',
      'executionTime' => 'Время запуска',
      'target' => 'Цель',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Использовать кэш',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Тысячный разделитель',
      'decimalMark' => 'Десятичный разделитель',
      'defaultCurrency' => 'Валюта по умолчанию',
      'baseCurrency' => 'Базовая валюта',
      'currencyRates' => 'Курсы обмена',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'companyLogo' => 'Логотип компании',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Аутентификация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Имя пользователя',
      'emailAddress' => 'Адрес эл. почты',
      'smtpPassword' => 'Пароль',
      'outboundEmailFromName' => 'Имя отправителя',
      'outboundEmailFromAddress' => 'Адрес отправителя',
      'outboundEmailIsShared' => 'Может использоваться всеми пользователями',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'recordsPerPage' => 'Записей на страницу',
      'recordsPerPageSmall' => 'Записей на страницу (сжатый вид)',
      'tabList' => 'Список вкладок',
      'quickCreateList' => 'Список для быстрого создания',
      'exportDelimiter' => 'Разделитель полей при экспорте',
      'globalSearchEntityList' => 'Список объектов глобального поиска',
      'authenticationMethod' => 'Метод аутентификации',
      'ldapHost' => 'Сервер',
      'ldapPort' => 'Порт',
      'ldapAuth' => 'Аутентификация',
      'ldapUsername' => 'Имя пользователя',
      'ldapPassword' => 'Пароль',
      'ldapBindRequiresDn' => 'Привязка по домену',
      'ldapBaseDn' => 'Базовый домен',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Попробовать отделить имя пользователя',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Создать пользователя в EspoCRM',
      'ldapSecurity' => 'Безопасность',
      'ldapUserLoginFilter' => 'Фильтр логина пользователя',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Оптовые рефералы',
      'ldapUserNameAttribute' => 'Атрибут имени пользователя (username)',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'Атрибут должности пользователя',
      'ldapUserFirstNameAttribute' => 'Атрибут имени пользователя',
      'ldapUserLastNameAttribute' => 'Атрибут фамилии пользователя',
      'ldapUserEmailAddressAttribute' => 'Атрибут адреса эл. почты пользователя',
      'ldapUserTeams' => 'Группы пользователя',
      'ldapUserDefaultTeam' => 'Группа пользователя по умолчанию',
      'ldapUserPhoneNumberAttribute' => 'Атрибут номера телефона пользователя',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Отключение возможности экпортирования (будет доступно только администратору)',
      'assignmentNotificationsEntityList' => 'Объекты для оповещения при назначении',
      'assignmentEmailNotifications' => 'Оповещать по эл. почте при назначении',
      'assignmentEmailNotificationsEntityList' => 'Объекты для оповещения по эл. почте при назначении',
      'streamEmailNotifications' => 'Уведомления об обновлениях в ленте для внутренних пользователей',
      'portalStreamEmailNotifications' => 'Уведомления об обновлениях в ленте для пользователей портала',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'О чем уведомлять',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'Режим B2C',
      'avatarsDisabled' => 'Отключить использование аватар',
      'followCreatedEntities' => 'Подписываться на создаваемые объекты',
      'displayListViewRecordCount' => 'Показывать общее количество (при отображении в виде списка)',
      'theme' => 'Тема',
      'userThemesDisabled' => 'Отключить использование пользовательских тем',
      'emailMessageMaxSize' => 'Максимальный размер эл. письма (в Мб)',
      'massEmailMaxPerHourCount' => 'Максимальное число отсылаемых в час эл. писем',
      'personalEmailMaxPortionSize' => 'Максимальный размер части эл. почты для извлечения личной учетной записи',
      'inboundEmailMaxPortionSize' => 'Максимальный размер части эл. почты для выборки учетных записей групп',
      'maxEmailAccountCount' => 'Максимальное число персональных учетных записей эл. почты для пользователя',
      'authTokenLifetime' => 'Время жизни токена аутентификации (в часах)',
      'authTokenMaxIdleTime' => 'Максимальный срок простоя токена аутентификации (в часах)',
      'dashboardLayout' => 'Планировка панели виджетов (по умолчанию)',
      'siteUrl' => 'URL сайта',
      'addressPreview' => 'Просмотр формата адреса',
      'addressFormat' => 'Формат Адреса',
      'personNameFormat' => 'Person Name Format',
      'notificationSoundsDisabled' => 'Отключить звуковые напоминания',
      'newNotificationCountInTitle' => 'Display new notification number in page title',
      'applicationName' => 'Название приложения',
      'calendarEntityList' => 'Список объектов календаря',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => 'Отправить уведомления по эл. почте об упоминаниях в сообщениях',
      'massEmailDisableMandatoryOptOutLink' => 'Необязательное использование opt-out link',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'massEmailVerp' => 'Use VERP',
      'activitiesEntityList' => 'Список объектов действий',
      'historyEntityList' => 'Список объектов истории',
      'currencyFormat' => 'Формат валюты',
      'currencyDecimalPlaces' => 'Знаки после десятичной запятой',
      'aclStrictMode' => 'ACL Strict Mode',
      'aclAllowDeleteCreated' => 'Разрешить удаление созданных записей',
      'adminNotifications' => 'Системные уведомления на панели администрирования',
      'adminNotificationsNewVersion' => 'Показывать уведомление, когда доступна новая версия EspoCRM',
      'adminNotificationsNewExtensionVersion' => 'Показывать уведомления, когда доступны новые версии расширений',
      'textFilterUseContainsForVarchar' => 'Использовать оператор \'содержит\' при фильтрации полей varchar',
      'authTokenPreventConcurrent' => 'Только один токен аутентификации для каждого пользователя',
      'scopeColorsDisabled' => 'Отключить цвета границ',
      'tabColorsDisabled' => 'Отключить цвета вкладок',
      'tabIconsDisabled' => 'Отключить значки вкладок',
      'emailAddressIsOptedOutByDefault' => 'Отметить новые адреса эл. почты как те, которые не принимают участия в эл. рассылке',
      'outboundEmailBccAddress' => 'BCC Адрес для внешних клиентов',
      'cleanupDeletedRecords' => 'Очистить удаленные записи',
      'addressCountryList' => 'Address Country Autocomplete List',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Fiscal Year Start',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Disable Cron',
      'maintenanceMode' => 'Maintenance Mode',
      'useWebSocket' => 'Use WebSocket',
      'passwordRecoveryDisabled' => 'Disable password recovery',
      'passwordRecoveryForAdminDisabled' => 'Disable password recovery for admin users',
      'passwordRecoveryForInternalUsersDisabled' => 'Disable password recovery for internal users',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Length of generated passwords',
      'passwordStrengthLength' => 'Minimum password length',
      'passwordStrengthLetterCount' => 'Number of letters required in password',
      'passwordStrengthNumberCount' => 'Number of digits required in password',
      'passwordStrengthBothCases' => 'Password must contain letters of both upper and lower case',
      'auth2FA' => 'Enable 2-Factor Authentication',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Available 2FA methods',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'personNameFormat' => 
      array (
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Сообщения',
        'Status' => 'Обновления статуса',
        'EmailReceived' => 'Полученные эл. письма',
      ),
      'auth2FAMethodList' => 
      array (
        'Totp' => 'TOTP',
      ),
    ),
    'tooltips' => 
    array (
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => 'Число изначально отображаемых записей в виде списка',
      'recordsPerPageSmall' => 'Число записей в связанных панелях.',
      'outboundEmailIsShared' => 'Разрешить пользователям отправлять эл. письма через этот SMTP.',
      'followCreatedEntities' => 'Пользователи будут автоматически подписаны на создаваемые ими записи.',
      'emailMessageMaxSize' => 'Все входящие эл. письма, размер которых превышает заданный, будут пропущены.',
      'authTokenLifetime' => 'Определяет сколько времени могут существовать токены.
0 - без ограничений.',
      'authTokenMaxIdleTime' => 'Определяет как долго с момента последнего подключения могут существовать токены.
0 - без ограничений.',
      'userThemesDisabled' => 'Если отмечено, то пользователи не смогут выбрать другую тему.',
      'ldapUsername' => 'Имя пользователя системы, которое позволяет искать других пользователей. Например. "CN = LDAP System User, OU = users, OU = espocrm, DC = test, DC = lan".',
      'ldapPassword' => 'Пароль для доступа к серверу LDAP.',
      'ldapAuth' => 'Учетные данные для доступа к серверу LDAP.',
      'ldapUserNameAttribute' => 'E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'Атрибут ObjectClass для поиска пользователей. Например: "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Опция форматирования имени пользователя в форме DN.',
      'ldapBaseDn' => 'Базовый DN по умолчанию, используемый для поиска пользователей. Например: "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Возможность разделения имени пользователя с доменом.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Этот параметр позволяет EspoCRM создавать пользователя из LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP атрибут, который используется для определения имени пользователя. Например. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP атрибут, который используется для определения фамилии пользователя. Например. «sn».',
      'ldapUserTitleAttribute' => 'LDAP атрибут, который используется для определения названия пользователя. Например. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP атрибут, который используется для определения адреса электронной почты пользователя. Например. «mail»',
      'ldapUserPhoneNumberAttribute' => 'LDAP, который используется для определения номера телефона пользователя. Например. "telephoneNumber".',
      'ldapUserLoginFilter' => 'Фильтр, который позволяет ограничить пользователей, которые могут использовать EspoCRM. Например: "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Домен, который используется для авторизации на сервере LDAP.',
      'ldapAccountDomainNameShort' => 'Короткий домен, который используется для авторизации на сервере LDAP.',
      'ldapUserTeams' => 'Команды для созданного пользователя. Подробнее см. в профиле пользователя.',
      'ldapUserDefaultTeam' => 'Команда по умолчанию для созданного пользователя. Подробнее см. в профиле пользователя.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'По умолчанию EspoCRM адаптирован для B2B. Вы можете переключить его на B2C.',
      'currencyDecimalPlaces' => 'Количество знаков после десятичной запятой. Если пусто, будут отображаться все непустые десятичные знаки.',
      'aclStrictMode' => 'Включено: доступ к областям действий запрещен, если он не указан в ролях.

Отключено: доступ к областям действий разрешен, если он не указан в ролях.',
      'aclAllowDeleteCreated' => 'Пользователи смогут удалять записи, созданные ими, даже если у них нет доступа к удалению.',
      'textFilterUseContainsForVarchar' => 'Если не отмечено, используется оператор «начинается с». Вы можете использовать специальный символ \'%\'.',
      'streamEmailNotificationsEntityList' => 'Электронные уведомления о новых событиях в Ленте записей, которые отслеживаются. Пользователи будут получать оповещения по электронной почте только для указанных типов объектов.',
      'authTokenPreventConcurrent' => 'Пользователи не смогут войти в систему с нескольких устройств одновременно.',
      'emailAddressIsOptedOutByDefault' => 'При создании новой записи, эл. адрес будет отмечено как тот, который не участвует в эл. рассылке.',
      'cleanupDeletedRecords' => 'Удаленные записи будут стерты из базы данных через некоторое время.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron will not run.',
      'maintenanceMode' => 'Only administrators will have access to the system.',
    ),
    'labels' => 
    array (
      'System' => 'Система',
      'Locale' => 'Локаль',
      'Search' => 'Search',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'Configuration' => 'Конфигурация',
      'In-app Notifications' => 'Оповещения в приложении',
      'Email Notifications' => 'Оповещения по эл. почте',
      'Currency Settings' => 'Настройки валют',
      'Currency Rates' => 'Курсы обмена валют',
      'Mass Email' => 'Массовая рассылка эл. писем',
      'Test Connection' => 'Проверка соединения',
      'Connecting' => 'Подключение...',
      'Activities' => 'Действия',
      'Admin Notifications' => 'Уведомления админа',
      'Passwords' => 'Passwords',
      '2-Factor Authentication' => '2-Factor Authentication',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Соединение успешно установлено.',
    ),
  ),
  'Stream' => 
  array (
    'messages' => 
    array (
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax',
    ),
    'syntaxItems' => 
    array (
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'deleted text',
      'blockquote' => 'blockquote',
      'link' => 'link',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'roles' => 'Роли',
      'layoutSet' => 'Layout Set',
      'positionList' => 'Список должностей',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'notes' => 'Заметки',
      'roles' => 'Роли',
      'layoutSet' => 'Layout Set',
      'inboundEmails' => 'Учетные записи эл. почты групп',
    ),
    'tooltips' => 
    array (
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Роли доступа. Пользователи этой группы получают права доступа исходя из выбранных ролей.',
      'positionList' => 'Имеющиеся в этой группе должности. Например продавец, менеджер.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Создать группу',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'body' => 'Тело',
      'entityType' => 'Тип объекта',
      'header' => 'Шапка',
      'footer' => 'Подвал',
      'leftMargin' => 'Левый отступ',
      'topMargin' => 'Верхний отступ',
      'rightMargin' => 'Правый отступ',
      'bottomMargin' => 'Нижний отступ',
      'printFooter' => 'Отображать подвал',
      'printHeader' => 'Print Header on each page',
      'footerPosition' => 'Положение подвала',
      'headerPosition' => 'Header Position',
      'variables' => 'Доступные заполнители',
      'pageOrientation' => 'Ориентация страницы',
      'pageFormat' => 'Формат бумаги',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => 'Шрифт',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Создать шаблон',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Книжная',
        'Landscape' => 'Альбомная',
      ),
      'pageFormat' => 
      array (
        'Custom' => 'Custom',
      ),
      'placeholders' => 
      array (
        'pagebreak' => 'Page break',
        'today' => 'Сегодня (дата)',
        'now' => 'Теперь (дата-время)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'PDFA Symbol',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Symbol',
        'times' => 'Times',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => 'Используйте {pageNumber} для отображения номера страницы.',
      'variables' => 'Копировать-вставить нужный заполнитель для заголовка, тела или нижнего колонтитула.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'userName' => 'Имя пользователя',
      'title' => 'Должность',
      'type' => 'Type',
      'isAdmin' => 'Права администратора',
      'defaultTeam' => 'Группа по умолчанию',
      'emailAddress' => 'Эл. почта',
      'phoneNumber' => 'Телефон',
      'roles' => 'Роли',
      'portals' => 'Порталы',
      'portalRoles' => 'Роли порталов',
      'teamRole' => 'Должность (положение в группе)',
      'password' => 'Пароль',
      'currentPassword' => 'Текущий пароль',
      'passwordConfirm' => 'Подтвердить пароль',
      'newPassword' => 'Новый пароль',
      'newPasswordConfirm' => 'Подтвердить новый пароль',
      'yourPassword' => 'Your current password',
      'avatar' => 'Аватар',
      'isActive' => 'Активен',
      'isPortalUser' => 'Пользователь портала',
      'contact' => 'Контакты',
      'accounts' => 'Контрагенты',
      'account' => 'Контрагент',
      'sendAccessInfo' => 'Отправить пользователю эл. письмо с реквизитами доступа',
      'portal' => 'Портал',
      'gender' => 'Пол',
      'position' => 'Должность в группе',
      'ipAddress' => 'IP адрес',
      'passwordPreview' => 'Предпросмотр пароля',
      'isSuperAdmin' => 'Главный Администратор',
      'lastAccess' => 'Последнее подключение',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'dashboardTemplate' => 'Dashboard Template',
      'auth2FA' => '2FA',
      'authMethod' => 'Authentication Method',
      'auth2FAEnable' => 'Enable 2-Factor Authentication',
      'auth2FAMethod' => '2FA Method',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'acceptanceStatus' => 'Статус принятия',
      'acceptanceStatusMeetings' => 'Статус принятия (Встречи)',
      'acceptanceStatusCalls' => 'Статус принятия (Звонки)',
    ),
    'links' => 
    array (
      'defaultTeam' => 'Default Team',
      'teams' => 'Группы',
      'roles' => 'Роли',
      'notes' => 'Заметки',
      'portals' => 'Порталы',
      'portalRoles' => 'Роли порталов',
      'contact' => 'Контакт',
      'accounts' => 'Контрагенты',
      'account' => 'Учетная запись (Основная)',
      'tasks' => 'Задачи',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Dashboard Template',
      'targetLists' => 'Списки целей',
    ),
    'labels' => 
    array (
      'Create User' => 'Создать пользователя',
      'Generate' => 'Сгенерировать',
      'Access' => 'Доступ',
      'Preferences' => 'Персональные Настройки',
      'Change Password' => 'Изменить пароль',
      'Teams and Access Control' => 'Группы и уровень доступа',
      'Forgot Password?' => 'Забыли пароль?',
      'Password Change Request' => 'Запрос смены пароля',
      'Email Address' => 'Адрес эл. почты',
      'External Accounts' => 'Внешние учетные записи',
      'Email Accounts' => 'Учетные записи эл. почты',
      'Portal' => 'Портал',
      'Create Portal User' => 'Создать пользователя портала',
      'Proceed w/o Contact' => 'Продолжить без контакта',
      'Generate New API Key' => 'Generate New API Key',
      'Generate New Password' => 'Generate New Password',
      'Code' => 'Code',
      'Back to login form' => 'Back to login form',
      'Requirements' => 'Requirements',
      'Security' => 'Security',
      'Reset 2FA' => 'Reset 2FA',
      'Secret' => 'Secret',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Все записи, созданные этим пользователем, по умолчанию будут относиться к этой группе.',
      'userName' => 'Допускаются латинские буквы a-z, цифры 0-9, точки, дефисы, символы @ и подчеркивания.',
      'isAdmin' => 'Пользователь с правами администратора может получить доступ ко всему.',
      'isActive' => 'Если флажок не установлен, то пользователь не сможет войти в систему.',
      'teams' => 'Группы к которым принадлежит данный пользователь. Уровень доступа наследуется от ролей группы.',
      'roles' => 'Дополнительные роли доступа. Используйте это если пользователь не принадлежит ни к одной группе или вам необходимо расширить уровень доступа только для этого пользователя.',
      'portalRoles' => 'Дополнительные роли портала. Используйте это если необходимо расширить уровень доступа только для этого пользователя.',
      'portals' => 'Порталы к которым имеет доступ этот пользователь.',
    ),
    'messages' => 
    array (
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Must be at least {length} characters long.',
      'passwordStrengthLetterCount' => 'Must contain at least {count} letter(s).',
      'passwordStrengthNumberCount' => 'Must contain at least {count} digit(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => 'Пароль будет выслан на адрес эл. почты пользователя.',
      'passwordChanged' => 'Пароль был изменен',
      'userCantBeEmpty' => 'Имя пользователя не может быть пустым',
      'wrongUsernamePasword' => 'Неверное имя пользователя/пароль',
      'emailAddressCantBeEmpty' => 'Адрес эл. почты не может быть пустым',
      'userNameEmailAddressNotFound' => 'Имя пользователя/Адрес эл. почты не найдены',
      'forbidden' => 'Запрещено, повторите попытку позже',
      'uniqueLinkHasBeenSent' => 'Уникальная ссылка была отправлена на указанный адрес эл. почты.',
      'passwordChangedByRequest' => 'Пароль был изменен.',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => 'Имя пользователя уже существует',
      'wrongCode' => 'Wrong code',
      'codeIsRequired' => 'Code is required',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfimation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 factor authentication required',
      'auth2FARequired' => 'You need to set up 2 factor authentication. Use an authenticator application on your mobile phone (e.g. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Не установлен',
        'Male' => 'Мужской',
        'Female' => 'Женский',
        'Neutral' => 'Нейтральный',
      ),
      'type' => 
      array (
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'System',
        'super-admin' => 'Super-Admin',
        'api' => 'API',
      ),
      'authMethod' => 
      array (
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Только моя группа',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активные',
      'activePortal' => 'Активный портал',
      'activeApi' => 'API Active',
    ),
  ),
  'Webhook' => 
  array (
    'labels' => 
    array (
      'Create Webhook' => 'Create Webhook',
    ),
    'fields' => 
    array (
      'event' => 'Event',
      'url' => 'URL',
      'isActive' => 'Is Active',
      'user' => 'API User',
      'entityType' => 'Entity Type',
      'field' => 'Field',
      'secretKey' => 'Secret Key',
    ),
    'links' => 
    array (
      'user' => 'User',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'website' => 'Сайт',
      'phoneNumber' => 'Телефон',
      'billingAddress' => 'Платежный адрес',
      'shippingAddress' => 'Почтовый адрес',
      'description' => 'Описание',
      'sicCode' => 'Код SIC',
      'industry' => 'Вид деятельности',
      'type' => 'Тип',
      'contactRole' => 'Должность',
      'contactIsInactive' => 'Неактивный',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'originalLead' => 'Изначальный кандидат',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'documents' => 'Документы',
      'meetingsPrimary' => 'Встречи (развернуто)',
      'callsPrimary' => 'Звонки (развернуто)',
      'tasksPrimary' => 'Задачи (развернуто)',
      'emailsPrimary' => 'Письма (развернуто)',
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'portalUsers' => 'Пользователи портала',
      'originalLead' => 'Изначальный кандидат',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Заказчик',
        'Investor' => 'Вкладчик',
        'Partner' => 'Партнер',
        'Reseller' => 'Посредник',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Аиационно-космическая',
        'Agriculture' => 'Сельское хохяйство',
        'Advertising' => 'Реклама',
        'Apparel & Accessories' => 'Одежда и аксессуары',
        'Architecture' => 'Архитектура',
        'Automotive' => 'Автомобильные',
        'Banking' => 'Банкинг',
        'Biotechnology' => 'Биотехнология',
        'Building Materials & Equipment' => 'Строительные материалы и оборудование',
        'Chemical' => 'Химия',
        'Construction' => 'Сроительство',
        'Computer' => 'Компьютеры',
        'Defense' => 'Защита',
        'Creative' => 'Творчество',
        'Culture' => 'Культура',
        'Consulting' => 'Консалтинг',
        'Education' => 'Образование',
        'Electronics' => 'Электроника',
        'Electric Power' => 'Электроэнергия',
        'Energy' => 'Энергия',
        'Entertainment & Leisure' => 'Развлечение и досуг',
        'Finance' => 'Финансы',
        'Food & Beverage' => 'Еда и напитки',
        'Grocery' => 'Бакалея',
        'Hospitality' => 'Гостеприимство',
        'Healthcare' => 'Здравоохранение',
        'Insurance' => 'Страхование',
        'Legal' => 'Право',
        'Manufacturing' => 'Производство',
        'Mass Media' => 'СМИ',
        'Mining' => 'Горная промышленность',
        'Music' => 'Музыка',
        'Marketing' => 'Маркетинг',
        'Publishing' => 'Издательство',
        'Petroleum' => 'Нефть',
        'Real Estate' => 'Недвижимость',
        'Retail' => 'Розничная торговля',
        'Shipping' => 'Доставка',
        'Service' => 'Сервис',
        'Support' => 'Служба поддержки',
        'Sports' => 'Спорт',
        'Software' => 'Программного обеспечения',
        'Technology' => 'Технологии',
        'Telecommunications' => 'Телекоммуникации',
        'Television' => 'Телевидение',
        'Testing, Inspection & Certification' => 'Тестирование, проверка и сертификация',
        'Transportation' => 'Транспорт',
        'Travel' => 'Путешествия',
        'Venture Capital' => 'Венчурный капитал',
        'Wholesale' => 'Оптовая торговля',
        'Water' => 'Вода',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Создать контрагента',
      'Copy Billing' => 'Копировать адрес',
      'Set Primary' => 'Установить как основной',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Заказчики',
      'partners' => 'Партнеры',
      'recentlyCreated' => 'Недавно созданный',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Месяц',
      'week' => 'Неделя',
      'day' => 'День',
      'agendaWeek' => 'Неделя',
      'agendaDay' => 'День',
      'timeline' => 'Расписание',
    ),
    'labels' => 
    array (
      'Today' => 'Сегодня',
      'Create' => 'Создать',
      'Shared' => 'Общий',
      'Add User' => 'Добавить пользователя',
      'current' => 'текущий',
      'time' => 'время',
      'User List' => 'Список пользователей',
      'Manage Users' => 'Управлять пользователями',
      'View Calendar' => 'Просмотреть календарь',
      'Create Shared View' => 'Создать общий просмотр',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'direction' => 'Категория',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'reminders' => 'Напоминания',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Статус принятия',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланирован',
        'Held' => 'Состоялся',
        'Not Held' => 'Не состоялся',
      ),
      'direction' => 
      array (
        'Outbound' => 'Исходящий',
        'Inbound' => 'Входящий',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Согласен',
        'Declined' => 'Не согласен',
        'Tentative' => 'Есть сомнения',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Состоялось',
      'setNotHeld' => 'Не состоялось',
    ),
    'labels' => 
    array (
      'Create Call' => 'Создать звонок',
      'Set Held' => 'Состоялось',
      'Set Not Held' => 'Не состоялось',
      'Send Invitations' => 'Отправить приглашения',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'description' => 'Описание',
      'status' => 'Статус',
      'type' => 'Тип',
      'startDate' => 'Дата начала',
      'endDate' => 'Дата окончания',
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'sentCount' => 'Отправлено',
      'openedCount' => 'Открыто',
      'clickedCount' => 'Проследовало по ссылке',
      'optedOutCount' => 'Отписалось',
      'bouncedCount' => 'Возвратов писем',
      'optedInCount' => 'Подписан',
      'hardBouncedCount' => 'Жестких возвратов',
      'softBouncedCount' => 'Мягких возвратов',
      'leadCreatedCount' => 'Кандидатов создано',
      'revenue' => 'Доход',
      'revenueConverted' => 'Доход (сконвертированный)',
      'budget' => 'Бюджет',
      'budgetConverted' => 'Бюджет (сконвертированный)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Шаблон контактов',
      'leadsTemplate' => 'Шаблон кандидатов',
      'accountsTemplate' => 'Шаблон контрагентов',
      'usersTemplate' => 'Шаблон пользователей',
      'mailMergeOnlyWithAddress' => 'Пропустить записи без заполненного адреса',
    ),
    'links' => 
    array (
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'accounts' => 'Контрагенты',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'opportunities' => 'Сделки',
      'campaignLogRecords' => 'Журнал',
      'massEmails' => 'Массовые рассылки эл. писем',
      'trackingUrls' => 'Целевые URL-адреса',
      'contactsTemplate' => 'Шаблон контактов',
      'leadsTemplate' => 'Шаблон кандидатов',
      'accountsTemplate' => 'Шаблон контрагентов',
      'usersTemplate' => 'Шаблон пользователей',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Эл. письмо',
        'Web' => 'Интернет',
        'Television' => 'Телевидение',
        'Radio' => 'Радио',
        'Newsletter' => 'Информационный бюллетень',
        'Mail' => 'Письмо',
      ),
      'status' => 
      array (
        'Planning' => 'Запланирована',
        'Active' => 'Активна',
        'Inactive' => 'Не активна',
        'Complete' => 'Завершена',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Создать кампанию',
      'Target Lists' => 'Списки целей',
      'Statistics' => 'Статистика',
      'hard' => 'жесткий',
      'soft' => 'мягкий',
      'Unsubscribe' => 'Отписаться',
      'Mass Emails' => 'Массовые рассылки эл. писем',
      'Email Templates' => 'Шаблоны эл. писем',
      'Unsubscribe again' => 'Отписаться снова',
      'Subscribe again' => 'Подписаться снова',
      'Create Target List' => 'Создать список целей',
      'Mail Merge' => 'Слияние писем',
      'Generate Mail Merge PDF' => 'Сгенерировать PDF-слияние',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активна',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Вы были удалены из нашего списка рассылки.',
      'subscribedAgain' => 'Вы снова подписаны.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Цели которые должны получить сообщения.',
      'excludingTargetLists' => 'Цели которые не должны получить сообщения.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Действие',
      'actionDate' => 'Дата',
      'data' => 'Данные',
      'campaign' => 'Кампания',
      'parent' => 'Цель',
      'object' => 'Объект',
      'application' => 'Приложение',
      'queueItem' => 'Элемент очереди',
      'stringData' => 'Строка данных',
      'stringAdditionalData' => 'Строка дополнительных данных',
      'isTest' => 'Тестовый',
    ),
    'links' => 
    array (
      'queueItem' => 'Элемент очереди',
      'parent' => 'Источник',
      'object' => 'Объект',
      'campaign' => 'Кампания',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Отправлено',
        'Opened' => 'Открыто',
        'Opted Out' => 'Отписалось',
        'Bounced' => 'Возвратов писем',
        'Clicked' => 'Проследовало по ссылке',
        'Lead Created' => 'Кандидатов создано',
        'Opted In' => 'Подписан',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Все',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Отправлено',
      'opened' => 'Открыто',
      'optedOut' => 'Отписалось',
      'optedIn' => 'Подписан',
      'bounced' => 'Возвратов писем',
      'clicked' => 'Проследовало по ссылке',
      'leadCreated' => 'Кандидатов создано',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'Целевой URL-адрес',
      'action' => 'Action',
      'urlToUse' => 'Код для подстановки вместо целевого URL-адреса',
      'message' => 'Message',
      'campaign' => 'Кампания',
    ),
    'links' => 
    array (
      'campaign' => 'Кампания',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Создать целевой URL-адрес',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Redirect' => 'Redirect',
        'Show Message' => 'Show Message',
      ),
    ),
    'tooltips' => 
    array (
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'number' => 'Номер',
      'status' => 'Статус',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'contacts' => 'Контакты',
      'priority' => 'Приоритет',
      'type' => 'Тип',
      'description' => 'Описание',
      'inboundEmail' => 'Учетная запись эл. почты группы',
      'lead' => 'Лид',
      'attachments' => 'Вложения',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Учетная запись эл. почты группы',
      'account' => 'Контрагент',
      'contact' => 'Контакт (основной)',
      'Contacts' => 'Контакты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Эл. письма',
      'articles' => 'Статьи базы знаний',
      'lead' => 'Лид',
      'attachments' => 'Вложения',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новое',
        'Assigned' => 'Назначено',
        'Pending' => 'В ожидании',
        'Closed' => 'Закрыто',
        'Rejected' => 'Отклонено',
        'Duplicate' => 'Дубликат',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Обычный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
      'type' => 
      array (
        'Question' => 'Вопрос',
        'Incident' => 'Происшествие',
        'Problem' => 'Проблема',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Создать обращение',
      'Close' => 'Закрыть',
      'Reject' => 'Отклонить',
      'Closed' => 'Закрыто',
      'Rejected' => 'Отклонено',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открытые',
      'closed' => 'Закрытые',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'title' => 'Account Title',
      'account' => 'Контрагент',
      'accounts' => 'Контрагенты',
      'phoneNumber' => 'Телефон',
      'accountType' => 'Тип контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Адрес',
      'opportunityRole' => 'Роль в сделке',
      'accountRole' => 'Должность',
      'description' => 'Описание',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'portalUser' => 'Пользователь портала',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => 'Изначальный кандидат',
      'acceptanceStatus' => 'Статус принятия',
      'accountIsInactive' => 'Неактивный контрагент',
      'acceptanceStatusMeetings' => 'Статус принятия (Встречи)',
      'acceptanceStatusCalls' => 'Статус принятия (Звонки)',
    ),
    'links' => 
    array (
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'account' => 'Контрагент (основной)',
      'accounts' => 'Контрагенты',
      'casesPrimary' => 'Обращения (основной)',
      'tasksPrimary' => 'Задачи (развернуто)',
      'opportunitiesPrimary' => 'Opportunities (Primary)',
      'portalUser' => 'Пользователь портала',
      'originalLead' => 'Изначальный кандидат',
      'documents' => 'Документы',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Создать контакт',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '',
        'Decision Maker' => 'Принимающий решение',
        'Evaluator' => 'Оценщик',
        'Influencer' => 'Консультант',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Пользователи порталов',
      'notPortalUsers' => 'Не пользователи порталов',
      'accountActive' => 'Активный',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Создать документ',
      'Details' => 'Описание',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'file' => 'Файл',
      'type' => 'Тип',
      'publishDate' => 'Опубликован',
      'expirationDate' => 'Актуален до',
      'description' => 'Описание',
      'accounts' => 'Контрагенты',
      'folder' => 'Папка',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенты',
      'opportunities' => 'Сделки',
      'folder' => 'Папка',
      'leads' => 'Лиды',
      'contacts' => 'Контакты',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Действующий',
        'Draft' => 'Черновик',
        'Expired' => 'Просрочен',
        'Canceled' => 'Отменен',
      ),
      'type' => 
      array (
        '' => 'Нет',
        'Contract' => 'Контракт',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Лицензионное соглашение',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Действующий',
      'draft' => 'Черновик',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Создать папку',
      'Manage Categories' => 'Управление папками',
      'Documents' => 'Документы',
    ),
    'links' => 
    array (
      'documents' => 'Документы',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'target' => 'Цель',
      'sentAt' => 'Дата отправки',
      'attemptCount' => 'Попыток',
      'emailAddress' => 'Адрес эл. почты',
      'massEmail' => 'Массовая рассылка эл. писем',
      'isTest' => 'Тест',
    ),
    'links' => 
    array (
      'target' => 'Цель',
      'massEmail' => 'Массовая рассылка эл. писем',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'В ожидании',
        'Sent' => 'Отправлено',
        'Failed' => 'Сбой',
        'Sending' => 'Отправляется',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'В ожидании',
      'sent' => 'Отправлено',
      'failed' => 'Сбой',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Создать статью',
      'Any' => 'Любой',
      'Send in Email' => 'Отправить на имейл',
      'Move Up' => 'Переместить вверх',
      'Move Down' => 'Переместить вниз',
      'Move to Top' => 'Переместить в начало',
      'Move to Bottom' => 'Переместить в нижнюю часть',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'type' => 'Тип',
      'attachments' => 'Вложения',
      'publishDate' => 'Опубликована',
      'expirationDate' => 'Актуальна до',
      'description' => 'Описание',
      'body' => 'Тело',
      'categories' => 'Категории',
      'language' => 'Язык',
      'portals' => 'Порталы',
    ),
    'links' => 
    array (
      'cases' => 'Обращения',
      'opportunities' => 'Сделки',
      'categories' => 'Категории',
      'portals' => 'Порталы',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'На рассмотрении',
        'Draft' => 'Черновик',
        'Archived' => 'В архиве',
        'Published' => 'Опубликована',
      ),
      'type' => 
      array (
        'Article' => 'Статья',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Статья будет доступна только на определенных порталах.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Опубликована',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Создать категорию',
      'Manage Categories' => 'Управление категориями',
      'Articles' => 'Статьи',
    ),
    'links' => 
    array (
      'articles' => 'Статьи',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Конвертирован в',
      'Create Lead' => 'Создать кандидата',
      'Convert' => 'Конвертировать',
      'convert' => 'конвертация',
    ),
    'fields' => 
    array (
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'title' => 'Должность',
      'website' => 'Сайт',
      'phoneNumber' => 'Телефон',
      'accountName' => 'Контрагент',
      'doNotCall' => 'Не звонить',
      'address' => 'Адрес',
      'status' => 'Статус',
      'source' => 'Источник',
      'opportunityAmount' => 'Сумма сделки',
      'opportunityAmountConverted' => 'Сумма сделки (сконвертированная)',
      'description' => 'Описание',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'convertedAt' => 'Converted At',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'industry' => 'Вид деятельности',
      'acceptanceStatus' => 'Статус принятия',
      'opportunityAmountCurrency' => 'Валюта суммы сделки',
      'acceptanceStatusMeetings' => 'Статус принятия (Встречи)',
      'acceptanceStatusCalls' => 'Статус принятия (Звонки)',
    ),
    'links' => 
    array (
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'cases' => 'Сделки',
      'documents' => 'Документы',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новый',
        'Assigned' => 'Назначен',
        'In Process' => 'В процессе',
        'Converted' => 'Конвертирован',
        'Recycled' => 'Удален',
        'Dead' => 'Мертв',
      ),
      'source' => 
      array (
        '' => 'Нет',
        'Call' => 'Звонок',
        'Email' => 'Эл. письмо',
        'Existing Customer' => 'Существующий клиент',
        'Partner' => 'Партнер',
        'Public Relations' => 'Связи с общественностью',
        'Web Site' => 'Сайт',
        'Campaign' => 'Кампания',
        'Other' => 'Другое',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активный',
      'actual' => 'Актуальный',
      'converted' => 'Конвертированны',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'startAt' => 'Дата начала',
      'fromAddress' => 'Адрес отправителя',
      'fromName' => 'Имя отправителя',
      'replyToAddress' => 'Обратный адрес',
      'replyToName' => 'Имя для обратного адреса',
      'campaign' => 'Кампания',
      'emailTemplate' => 'Шаблон эл. письма',
      'inboundEmail' => 'Учетная запись эл. почты',
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'optOutEntirely' => 'Отписать навсегда',
      'smtpAccount' => 'SMTP-аккаунт',
    ),
    'links' => 
    array (
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'queueItems' => 'Элементы очереди эл. почты',
      'campaign' => 'Кампания',
      'emailTemplate' => 'Шаблон эл. письма',
      'inboundEmail' => 'Учетная запись эл. почты',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Черновик',
        'Pending' => 'В ожидании',
        'In Process' => 'В процессе',
        'Complete' => 'Завершена',
        'Canceled' => 'Отменена',
        'Failed' => 'Сбой',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Создать массовую рассылку эл. писем',
      'Send Test' => 'Отправить тестовое эл. письмо',
      'System SMTP' => 'Системный SMTP',
      'system' => 'система',
      'group' => 'группа',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Выберите хотя бы одну цель',
      'testSent' => 'Должно отправиться тестовое эл. письмо',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Адреса эл. почты получателей, которые отписались будут помечены как отписавшиеся и больше не будут получать массовые рассылки эл. писем.',
      'targetLists' => 'Цели которые должны получить сообщения.',
      'excludingTargetLists' => 'Цели которые не должны получить сообщения.',
      'storeSentEmails' => 'Эл. письма будут храниться в CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальные',
      'complete' => 'Завершенные',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'reminders' => 'Напоминания',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Статус принятия',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'Acceptance' => 'Acceptance',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланирована',
        'Held' => 'Состоялась',
        'Not Held' => 'Не состоялась',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Согласен',
        'Declined' => 'Не согласен',
        'Tentative' => 'Есть сомнения',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Состоялось',
      'setNotHeld' => 'Не состоялось',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Создать встречу',
      'Set Held' => 'Состоялось',
      'Set Not Held' => 'Не состоялось',
      'Send Invitations' => 'Отправить приглашения',
      'on time' => 'во время',
      'before' => 'до начала',
      'All-Day' => 'All-Day',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня',
    ),
    'messages' => 
    array (
      'selectAcceptanceStatus' => 'Set your acceptance status.',
      'nothingHasBeenSent' => 'Ничего не было отправлено',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'account' => 'Контрагент',
      'stage' => 'Стадия',
      'amount' => 'Сумма',
      'probability' => 'Вероятность успеха, %',
      'leadSource' => 'Источник кандидата',
      'doNotCall' => 'Не звонить',
      'closeDate' => 'Дата закрытия',
      'contacts' => 'Контакты',
      'contact' => 'Contact (Primary)',
      'description' => 'Описание',
      'amountConverted' => 'Сумма (сконвертированная)',
      'amountWeightedConverted' => 'Сумма (средневзвешенная)',
      'campaign' => 'Кампания',
      'originalLead' => 'Изначальный кандидат',
      'amountCurrency' => 'Валюта суммы',
      'contactRole' => 'Роль контактов',
      'lastStage' => 'Последняя стадия',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'contact' => 'Contact (Primary)',
      'documents' => 'Документы',
      'campaign' => 'Кампания',
      'originalLead' => 'Изначальный кандидат',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Привлечение клиента',
        'Qualification' => 'Оценка возможности',
        'Proposal' => 'Предложение',
        'Negotiation' => 'Согласование',
        'Needs Analysis' => 'Требует анализа',
        'Value Proposition' => 'Выбор предложения/оферты',
        'Id. Decision Makers' => 'Определение ответственного лица',
        'Perception Analysis' => 'Проведение анализа',
        'Proposal/Price Quote' => 'Отправлено предложение/оферта',
        'Negotiation/Review' => 'Согласование/рассмотрение',
        'Closed Won' => 'Закрыто - Успех',
        'Closed Lost' => 'Закрыто - Провал',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Создать сделку',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открыть',
      'won' => 'Успешные',
      'lost' => 'Провальные',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'description' => 'Описание',
      'entryCount' => 'Количество',
      'optedOutCount' => 'Количество пользователей, которые сняли подписку',
      'campaigns' => 'Кампании',
      'endDate' => 'Дата окончания',
      'targetLists' => 'Списки целей',
      'includingActionList' => 'Включая',
      'excludingActionList' => 'Исключая',
      'targetStatus' => 'Статус цели',
      'isOptedOut' => 'Отписалось',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенты',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'campaigns' => 'Кампании',
      'massEmails' => 'Массовые рассылки эл. писем',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Эл. письмо',
        'Web' => 'Интернет',
        'Television' => 'Телевидение',
        'Radio' => 'Радио',
        'Newsletter' => 'Информационный бюллетень',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Отписан',
        'Listed' => 'В списке',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Создать список целей',
      'Opted Out' => 'Отписавшиеся',
      'Cancel Opt-Out' => 'Отменить отписку',
      'Opt-Out' => 'Отписать',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'dateStartDate' => 'Дата начала (весь день)',
      'dateEndDate' => 'Дата окончания (весь день)',
      'priority' => 'Приоритет',
      'description' => 'Описание',
      'isOverdue' => 'Просрочена',
      'account' => 'Контрагент',
      'dateCompleted' => 'Дата завершения',
      'attachments' => 'Вложения',
      'reminders' => 'Напоминания',
      'contact' => 'Контакт',
    ),
    'links' => 
    array (
      'attachments' => 'Вложения',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Не началась',
        'Started' => 'Началась',
        'Completed' => 'Завершена',
        'Canceled' => 'Отменена',
        'Deferred' => 'Отложена',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Обычный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Создать задачу',
      'Complete' => 'Завершить',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальные',
      'completed' => 'Завершенные',
      'deferred' => 'Отложенные',
      'todays' => 'На сегодня',
      'overdue' => 'Просроченные',
    ),
  ),
);
?>