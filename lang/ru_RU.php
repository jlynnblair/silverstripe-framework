<?php

/**
 * Russian (Russia) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('ru_RU', $lang) && is_array($lang['ru_RU'])) {
	$lang['ru_RU'] = array_merge($lang['en_US'], $lang['ru_RU']);
} else {
	$lang['ru_RU'] = $lang['en_US'];
}

$lang['ru_RU']['BasicAuth']['ENTERINFO'] = 'Пожалуйста, введите имя пользователя и пароль.';
$lang['ru_RU']['BasicAuth']['ERRORNOTADMIN'] = 'Такой пользователь не является администратором.';
$lang['ru_RU']['BasicAuth']['ERRORNOTREC'] = 'Такое имя пользователя или пароль не существует';
$lang['ru_RU']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Вы изменили свой пароль на';
$lang['ru_RU']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Для того, чтобы войти, используйте сейчас следующие учетные данные:';
$lang['ru_RU']['ChangePasswordEmail.ss']['HELLO'] = 'Здравствуйте';
$lang['ru_RU']['ComplexTableField.ss']['ADDITEM'] = 'Добавить';
$lang['ru_RU']['ComplexTableField.ss']['DELETE'] = 'удалить';
$lang['ru_RU']['ComplexTableField.ss']['DELETEROW'] = 'Удалить эту строку';
$lang['ru_RU']['ComplexTableField.ss']['EDIT'] = 'редактировать';
$lang['ru_RU']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Ничего не найдено';
$lang['ru_RU']['ComplexTableField.ss']['SHOW'] = 'показать';
$lang['ru_RU']['ComplexTableField.ss']['SORTASC'] = 'Сортировать по возрастанию';
$lang['ru_RU']['ComplexTableField.ss']['SORTDESC'] = 'Сортировать по убыванию';
$lang['ru_RU']['ComplexTableField_popup.ss']['NEXT'] = 'Следующ.';
$lang['ru_RU']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Предыдущ.';
$lang['ru_RU']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Вы должны войти с паролем для Системы Управления (CMS), чтобы увидеть черновое или архивное содержимое. <a href="%s">Нажмите сюда, чтобы вернуться на опубликованный сайт.</a>';
$lang['ru_RU']['Controller']['FILE'] = 'Файл';
$lang['ru_RU']['Controller']['IMAGE'] = 'Изображение';
$lang['ru_RU']['Date']['AGO'] = 'назад';
$lang['ru_RU']['Date']['AWAY'] = 'назад';
$lang['ru_RU']['Date']['DAY'] = 'день';
$lang['ru_RU']['Date']['DAYS'] = 'дней';
$lang['ru_RU']['Date']['HOUR'] = 'час';
$lang['ru_RU']['Date']['HOURS'] = 'час.';
$lang['ru_RU']['Date']['MIN'] = 'мин.';
$lang['ru_RU']['Date']['MINS'] = 'мин.';
$lang['ru_RU']['Date']['MONTH'] = 'месяц';
$lang['ru_RU']['Date']['MONTHS'] = 'месяца(ев)';
$lang['ru_RU']['Date']['SEC'] = 'сек.';
$lang['ru_RU']['Date']['SECS'] = 'сек.';
$lang['ru_RU']['Date']['YEAR'] = 'год';
$lang['ru_RU']['Date']['YEARS'] = 'лет';
$lang['ru_RU']['DateField']['VALIDDATEFORMAT'] = 'Пожалуйста, введите верный формат даты (ДД/ММ/ГГГГ).';
$lang['ru_RU']['DropdownField']['CHOOSE'] = '(Выберите)';
$lang['ru_RU']['EmailField']['VALIDATION'] = 'Пожалуйста, введите адрес email.';
$lang['ru_RU']['ErrorPage']['CODE'] = 'Код ошибки';
$lang['ru_RU']['FileIframeField']['NOTEADDFILES'] = 'Вы можете добавлять файлы только после того, как сохраните хотя бы раз.';
$lang['ru_RU']['ForgotPasswordEmail.ss']['HELLO'] = 'Здравствуйте';
$lang['ru_RU']['Form']['DATENOTSET'] = '(Дата не установлена)';
$lang['ru_RU']['Form']['FIELDISREQUIRED'] = 'Поле %s является обязательным';
$lang['ru_RU']['Form']['LANGAOTHER'] = 'Другие языки';
$lang['ru_RU']['Form']['LANGAVAIL'] = 'Доступные языки';
$lang['ru_RU']['Form']['NOTSET'] = '(не установлено)';
$lang['ru_RU']['Form']['SAVECHANGES'] = 'Сохранить изменения';
$lang['ru_RU']['Form']['VALIDATIONALLDATEVALUES'] = 'Убедитесь, что вы установили все значения времени';
$lang['ru_RU']['Form']['VALIDATIONBANKACC'] = 'Пожалуйста введите верный банковский номер';
$lang['ru_RU']['Form']['VALIDATIONCREDITNUMBER'] = 'Пожалуйста, убедитесь, что номер карты %s введен Вами верно.';
$lang['ru_RU']['Form']['VALIDATIONFAILED'] = 'Проверка данных неудачна';
$lang['ru_RU']['Form']['VALIDATIONNOTUNIQUE'] = 'Введенное значение не уникально';
$lang['ru_RU']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Пароли не совпадают';
$lang['ru_RU']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Пароли не могут быть пустыми';
$lang['ru_RU']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Пароль должен содержать минимум одну цифру и один буквенно-числовой символ.';
$lang['ru_RU']['Form']['VALIDCURRENCY'] = 'Пожалуйста, введите верную валюту.';
$lang['ru_RU']['GhostPage']['NOLINKED'] = 'Эта "ghost" страница не имеет связанной с ней страницы.';
$lang['ru_RU']['GSTNumberField']['VALIDATION'] = 'Пожалуйста, введите верный номер GST';
$lang['ru_RU']['HtmlEditorField']['ALTTEXT'] = 'Описание';
$lang['ru_RU']['HtmlEditorField']['ANCHOR'] = 'Вставить/Редактировать якорь';
$lang['ru_RU']['HtmlEditorField']['BULLETLIST'] = 'Маркированный список';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Ровнять по центру';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Выравнивание по ширине';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Ровнять слева';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Ровнять справа';
$lang['ru_RU']['HtmlEditorField']['BUTTONBOLD'] = 'Полужирный (Ctrl+B)';
$lang['ru_RU']['HtmlEditorField']['BUTTONCANCEL'] = 'Отмена';
$lang['ru_RU']['HtmlEditorField']['BUTTONEDITIMAGE'] = 'Редактир. изображ.';
$lang['ru_RU']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Вставить Flash';
$lang['ru_RU']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Вставить изображ.';
$lang['ru_RU']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Вставить ссылку';
$lang['ru_RU']['HtmlEditorField']['BUTTONITALIC'] = 'Курсив (Ctrl+I)';
$lang['ru_RU']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Удалить ссылку';
$lang['ru_RU']['HtmlEditorField']['BUTTONSTRIKE'] = 'Прочеркивание';
$lang['ru_RU']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Почеркивание (Ctrl+U)';
$lang['ru_RU']['HtmlEditorField']['CHARMAP'] = 'Вставить символ';
$lang['ru_RU']['HtmlEditorField']['COPY'] = 'Копировать (Ctrl+C)';
$lang['ru_RU']['HtmlEditorField']['CREATEFOLDER'] = 'создать папку';
$lang['ru_RU']['HtmlEditorField']['CSSCLASS'] = 'Выравнивание/Стиль';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSCENTER'] = 'По центру без текста по бокам';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSLEFT'] = 'Слева с обтеканием текста';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Справа с обтеканием текста';
$lang['ru_RU']['HtmlEditorField']['CUT'] = 'Вырезать (Ctrl+X)';
$lang['ru_RU']['HtmlEditorField']['DELETECOL'] = 'Удалить столбец';
$lang['ru_RU']['HtmlEditorField']['DELETEROW'] = 'Удалить строку';
$lang['ru_RU']['HtmlEditorField']['EDITCODE'] = 'Редактировать код HTML';
$lang['ru_RU']['HtmlEditorField']['EMAIL'] = 'Адрес email';
$lang['ru_RU']['HtmlEditorField']['FILE'] = 'Файл';
$lang['ru_RU']['HtmlEditorField']['FLASH'] = 'Вставить Flash';
$lang['ru_RU']['HtmlEditorField']['FOLDER'] = 'Папка';
$lang['ru_RU']['HtmlEditorField']['FOLDERCANCEL'] = 'отменить';
$lang['ru_RU']['HtmlEditorField']['FORMATADDR'] = 'Адрес';
$lang['ru_RU']['HtmlEditorField']['FORMATH1'] = 'Заголовок 1';
$lang['ru_RU']['HtmlEditorField']['FORMATH2'] = 'Заголовок 2';
$lang['ru_RU']['HtmlEditorField']['FORMATH3'] = 'Заголовок 3';
$lang['ru_RU']['HtmlEditorField']['FORMATH4'] = 'Заголовок 4';
$lang['ru_RU']['HtmlEditorField']['FORMATH5'] = 'Заголовок 5';
$lang['ru_RU']['HtmlEditorField']['FORMATH6'] = 'Заголовок 6';
$lang['ru_RU']['HtmlEditorField']['FORMATP'] = 'Абзац';
$lang['ru_RU']['HtmlEditorField']['HR'] = 'Горизонтальная линия';
$lang['ru_RU']['HtmlEditorField']['IMAGE'] = 'Вставить изображение';
$lang['ru_RU']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Размеры';
$lang['ru_RU']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Высота';
$lang['ru_RU']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Ширина';
$lang['ru_RU']['HtmlEditorField']['INDENT'] = 'Увеличить отступ';
$lang['ru_RU']['HtmlEditorField']['INSERTCOLAFTER'] = 'Вставить столбец справа';
$lang['ru_RU']['HtmlEditorField']['INSERTCOLBEF'] = 'Вставить столбец слева';
$lang['ru_RU']['HtmlEditorField']['INSERTROWAFTER'] = 'Вставить строку ниже';
$lang['ru_RU']['HtmlEditorField']['INSERTROWBEF'] = 'Вставить строку выше';
$lang['ru_RU']['HtmlEditorField']['INSERTTABLE'] = 'Вставить таблицу';
$lang['ru_RU']['HtmlEditorField']['LINK'] = 'Вставить/Редактировать гиперссылку для выделенного текста';
$lang['ru_RU']['HtmlEditorField']['LINKDESCR'] = 'Описание ссылки';
$lang['ru_RU']['HtmlEditorField']['LINKEMAIL'] = 'Адрес email';
$lang['ru_RU']['HtmlEditorField']['LINKEXTERNAL'] = 'Другой сайт';
$lang['ru_RU']['HtmlEditorField']['LINKFILE'] = 'Скачивание файла';
$lang['ru_RU']['HtmlEditorField']['LINKINTERNAL'] = 'Страницу данного сайта';
$lang['ru_RU']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Открыть ссылку в новом окне?';
$lang['ru_RU']['HtmlEditorField']['LINKTO'] = 'Ссылка на';
$lang['ru_RU']['HtmlEditorField']['OK'] = 'ок';
$lang['ru_RU']['HtmlEditorField']['OL'] = 'Нумерованый список';
$lang['ru_RU']['HtmlEditorField']['OUTDENT'] = 'Уменьшить отступ';
$lang['ru_RU']['HtmlEditorField']['PAGE'] = 'Страница';
$lang['ru_RU']['HtmlEditorField']['PASTE'] = 'Вставить (Ctrl+V)';
$lang['ru_RU']['HtmlEditorField']['REDO'] = 'Вернуть (Ctrl+Y)';
$lang['ru_RU']['HtmlEditorField']['UNDO'] = 'Отменить (Ctrl+Z)';
$lang['ru_RU']['HtmlEditorField']['UNLINK'] = 'Удалить гиперссылку';
$lang['ru_RU']['HtmlEditorField']['UPLOAD'] = 'загрузить';
$lang['ru_RU']['HtmlEditorField']['URL'] = 'URL';
$lang['ru_RU']['HtmlEditorField']['VISUALAID'] = 'Показать/Скрыть направляющие';
$lang['ru_RU']['ImageField']['NOTEADDIMAGES'] = 'Вы можете добавлять изображения после того, как сохраните хотя бы раз.';
$lang['ru_RU']['ImageUplaoder']['ONEFROMFILESTORE'] = 'На другой из хранилища файлов';
$lang['ru_RU']['ImageUploader']['ATTACH'] = 'Присоединить %s';
$lang['ru_RU']['ImageUploader']['DELETE'] = 'Удалить %s';
$lang['ru_RU']['ImageUploader']['FROMCOMPUTER'] = 'С Вашего компьютера';
$lang['ru_RU']['ImageUploader']['FROMFILESTORE'] = 'Из хранилища файлов';
$lang['ru_RU']['ImageUploader']['ONEFROMCOMPUTER'] = 'На другой с Вашего компьютера';
$lang['ru_RU']['ImageUploader']['REALLYDELETE'] = 'Вы действительно хотите удалить %s?';
$lang['ru_RU']['ImageUploader']['REPLACE'] = 'Заменить %s';
$lang['ru_RU']['Image_iframe.ss']['TITLE'] = 'Iframe загрузки изображений';
$lang['ru_RU']['Member']['ADDRESS'] = 'Адрес';
$lang['ru_RU']['Member']['BUTTONCHANGEPASSWORD'] = 'Изменить пароль';
$lang['ru_RU']['Member']['BUTTONLOGIN'] = 'Войти';
$lang['ru_RU']['Member']['BUTTONLOGINOTHER'] = 'Войти под другим именем';
$lang['ru_RU']['Member']['BUTTONLOSTPASSWORD'] = 'Я забыл пароль';
$lang['ru_RU']['Member']['CONFIRMNEWPASSWORD'] = 'Подтвердить новый пароль';
$lang['ru_RU']['Member']['CONFIRMPASSWORD'] = 'Подтвердить пароль';
$lang['ru_RU']['Member']['CONTACTINFO'] = 'Контактная информация';
$lang['ru_RU']['Member']['EMAIL'] = 'Email';
$lang['ru_RU']['Member']['EMAILPASSWORDAPPENDIX'] = 'Ваш пароль изменен. Пожалуйста, сохраняйте это письмо для дальнейшего использования.';
$lang['ru_RU']['Member']['EMAILPASSWORDINTRO'] = 'Ваш новый пароль';
$lang['ru_RU']['Member']['EMAILSIGNUPINTRO1'] = 'Спасибо за регистрацию в качестве нового пользователя, ваши данные для дальнейшего использования указаны ниже.';
$lang['ru_RU']['Member']['EMAILSIGNUPINTRO2'] = 'Вы можете войти на сайт, используя параметры доступа, указанные ниже';
$lang['ru_RU']['Member']['EMAILSIGNUPSUBJECT'] = 'Спасибо за регистрацию';
$lang['ru_RU']['Member']['ERRORNEWPASSWORD'] = 'Вы ввели Ваш новый пароль по-разному, попробуйте снова';
$lang['ru_RU']['Member']['ERRORPASSWORDNOTMATCH'] = 'Введенный пароль неверен, попробуйте снова';
$lang['ru_RU']['Member']['ERRORWRONGCRED'] = 'Вероятно адрес email или пароль введены неверно. Попробуйте снова.';
$lang['ru_RU']['Member']['FIRSTNAME'] = 'Имя';
$lang['ru_RU']['Member']['GREETING'] = 'Добро пожаловать';
$lang['ru_RU']['Member']['INTERFACELANG'] = 'Язык интерфейса';
$lang['ru_RU']['Member']['LOGGEDINAS'] = 'Вы вошли как %s.';
$lang['ru_RU']['Member']['MOBILE'] = 'Мобильный';
$lang['ru_RU']['Member']['NAME'] = 'Имя';
$lang['ru_RU']['Member']['NEWPASSWORD'] = 'Новый пароль';
$lang['ru_RU']['Member']['PASSWORD'] = 'Пароль';
$lang['ru_RU']['Member']['PASSWORDCHANGED'] = 'Ваш пароль изменен, на Ваш email выслана копия.';
$lang['ru_RU']['Member']['PERSONALDETAILS'] = 'Личные данные';
$lang['ru_RU']['Member']['PHONE'] = 'Телефон';
$lang['ru_RU']['Member']['REMEMBERME'] = 'Запомнить меня?';
$lang['ru_RU']['Member']['SUBJECTPASSWORDCHANGED'] = 'Ваш пароль изменен';
$lang['ru_RU']['Member']['SUBJECTPASSWORDRESET'] = 'Ссылка для переустановки пароля';
$lang['ru_RU']['Member']['SURNAME'] = 'Фамилия';
$lang['ru_RU']['Member']['USERDETAILS'] = 'Данные пользователя';
$lang['ru_RU']['Member']['VALIDATIONMEMBEREXISTS'] = 'Этот адрес email уже зарегистрирован';
$lang['ru_RU']['Member']['WELCOMEBACK'] = 'С возвращением, %s';
$lang['ru_RU']['Member']['YOUROLDPASSWORD'] = 'Ваш прежний пароль';
$lang['ru_RU']['MemberAuthenticator']['TITLE'] = 'Email и Пароль';
$lang['ru_RU']['NumericField']['VALIDATION'] = '\'%s\' не является цифрой, в этом поле могут быть только цифры';
$lang['ru_RU']['PhoneNumberField']['VALIDATION'] = 'Пожалуйста, введите верный номер телефона';
$lang['ru_RU']['RedirectorPage']['HASBEENSETUP'] = 'Страница перенаправления установлена без указания места перенаправления.';
$lang['ru_RU']['RedirectorPage']['HEADER'] = 'Эта страница будет перенаправлять пользователей на другую страницу';
$lang['ru_RU']['RedirectorPage']['OTHERURL'] = 'URL другого сайта';
$lang['ru_RU']['RedirectorPage']['REDIRECTTO'] = 'Перенаправлять на';
$lang['ru_RU']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Другой сайт';
$lang['ru_RU']['RedirectorPage']['REDIRECTTOPAGE'] = 'Страницу Вашего сайта';
$lang['ru_RU']['RedirectorPage']['YOURPAGE'] = 'Страница Вашего сайта';
$lang['ru_RU']['Security']['ALREADYLOGGEDIN'] = 'У Вас нет доступа к этой странице. Если у вас имеется другая учетная запись, имеющая доступ к этой странице, введите ее данные ниже.';
$lang['ru_RU']['Security']['BUTTONSEND'] = 'Отправить мне ссылку переустановки пароля';
$lang['ru_RU']['Security']['CHANGEPASSWORDBELOW'] = 'Ниже Вы можете изменить свой пароль.';
$lang['ru_RU']['Security']['CHANGEPASSWORDHEADER'] = 'Измените свой пароль';
$lang['ru_RU']['Security']['ENTERNEWPASSWORD'] = 'Пожалуйста, введите новый пароль.';
$lang['ru_RU']['Security']['ERRORPASSWORDPERMISSION'] = 'Вы должны войти в систему, чтобы изменить Ваш пароль!';
$lang['ru_RU']['Security']['LOGGEDOUT'] = 'Вы вышли. Если Вы хотите войти снова, введите ваши учетные данные ниже.';
$lang['ru_RU']['Security']['LOSTPASSWORDHEADER'] = 'Восстановление пароля';
$lang['ru_RU']['Security']['NOTEPAGESECURED'] = 'Эта страница защищена. Пожалуйста, введите свои учетные данные для входа.';
$lang['ru_RU']['Security']['NOTERESETPASSWORD'] = 'Введите Ваш адрес email, и Вам будет отправлена ссылка, по которой Вы сможете переустановить свой пароль';
$lang['ru_RU']['Security']['PASSWORDSENTHEADER'] = 'Ссылка для переустановки пароля отправлена для \'%s\'';
$lang['ru_RU']['Security']['PASSWORDSENTTEXT'] = 'Спасибо! Ссылка для переустановки пароля была отправлена для \'%s\'.';
$lang['ru_RU']['SimpleImageField']['NOUPLOAD'] = 'Не загружено ни одного изображения';
$lang['ru_RU']['SiteTree']['ACCESSANYONE'] = 'Все';
$lang['ru_RU']['SiteTree']['ACCESSHEADER'] = 'Кто может просматривать эту страницу на моем сайте?';
$lang['ru_RU']['SiteTree']['ACCESSLOGGEDIN'] = 'Авторизованные пользователи';
$lang['ru_RU']['SiteTree']['ACCESSONLYTHESE'] = 'Только эти пользователи (выберите из списка)';
$lang['ru_RU']['SiteTree']['ADDEDTODRAFT'] = 'Добавлено к черновому сайту';
$lang['ru_RU']['SiteTree']['ALLOWCOMMENTS'] = 'Разрешить комментарии для этой страницы?';
$lang['ru_RU']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Это содержимое также находится на виртуальных страницах в разделах %s.';
$lang['ru_RU']['SiteTree']['BUTTONCANCELDRAFT'] = 'Отменить изменения черновика';
$lang['ru_RU']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Удалить черновик и вернуться к уже опубликованной странице';
$lang['ru_RU']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Сохр. и опублик.';
$lang['ru_RU']['SiteTree']['BUTTONUNPUBLISH'] = 'Отмена публикации';
$lang['ru_RU']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Удалить эту страницу с опубликованного сайта';
$lang['ru_RU']['SiteTree']['EDITANYONE'] = 'Все у кого есть доступ к Системе (CMS)';
$lang['ru_RU']['SiteTree']['EDITHEADER'] = 'Кто может редактировать это в Системе (CMS)?';
$lang['ru_RU']['SiteTree']['EDITONLYTHESE'] = 'Только эти пользователи (выберите из списка)';
$lang['ru_RU']['SiteTree']['GROUP'] = 'Группа';
$lang['ru_RU']['SiteTree']['HASBROKENLINKS'] = 'Эта страница содержит неверные ссылки.';
$lang['ru_RU']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Домен(ы)';
$lang['ru_RU']['SiteTree']['HTMLEDITORTITLE'] = 'Содержимое';
$lang['ru_RU']['SiteTree']['LINKSALREADYUNIQUE'] = '%s уже уникальна';
$lang['ru_RU']['SiteTree']['LINKSCHANGEDTO'] = 'изменено %s -> %s';
$lang['ru_RU']['SiteTree']['MENUTITLE'] = 'Метка в навигации';
$lang['ru_RU']['SiteTree']['METAADVANCEDHEADER'] = 'Дополнительные возможности...';
$lang['ru_RU']['SiteTree']['METADESC'] = 'Описание';
$lang['ru_RU']['SiteTree']['METAEXTRA'] = 'Пользовательские мета-тэги';
$lang['ru_RU']['SiteTree']['METAHEADER'] = 'Мета-тэги для поисковых систем';
$lang['ru_RU']['SiteTree']['METAKEYWORDS'] = 'Ключевые слова';
$lang['ru_RU']['SiteTree']['METANOTEPRIORITY'] = 'Указать вручную приоритет Google Sitemaps для этой страницы (%s)';
$lang['ru_RU']['SiteTree']['METAPAGEPRIO'] = 'Приоритет страницы';
$lang['ru_RU']['SiteTree']['METATITLE'] = 'Заголовок';
$lang['ru_RU']['SiteTree']['MODIFIEDONDRAFT'] = 'Изменено на черновом сайте';
$lang['ru_RU']['SiteTree']['NOBACKLINKS'] = 'На эту страницу нет ссылок с других страниц';
$lang['ru_RU']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Использовать эту страницу в качестве домашней для следующих доменов: 
(несколько доменов разделяйте запятыми)';
$lang['ru_RU']['SiteTree']['PAGESLINKING'] = 'На эту страницу ссылаются следующие страницы:';
$lang['ru_RU']['SiteTree']['PAGETITLE'] = 'Название страницы';
$lang['ru_RU']['SiteTree']['PAGETYPE'] = 'Тип страницы';
$lang['ru_RU']['SiteTree']['PRIORITYLEASTIMPORTANT'] = 'Мин. важность';
$lang['ru_RU']['SiteTree']['PRIORITYMOSTIMPORTANT'] = 'Макс. важность';
$lang['ru_RU']['SiteTree']['PRIORITYNOTINDEXED'] = 'Не индексировать';
$lang['ru_RU']['SiteTree']['REMOVEDFROMDRAFT'] = 'Удалено с чернового сайта';
$lang['ru_RU']['SiteTree']['SHOWINMENUS'] = 'Показывать в меню?';
$lang['ru_RU']['SiteTree']['SHOWINSEARCH'] = 'Показывать в поиске?';
$lang['ru_RU']['SiteTree']['TABACCESS'] = 'Доступ';
$lang['ru_RU']['SiteTree']['TABBACKLINKS'] = 'Обратные ссылки';
$lang['ru_RU']['SiteTree']['TABBEHAVIOUR'] = 'Поведение';
$lang['ru_RU']['SiteTree']['TABCONTENT'] = 'Содержимое';
$lang['ru_RU']['SiteTree']['TABMAIN'] = 'Основное';
$lang['ru_RU']['SiteTree']['TABMETA'] = 'Мета-данные';
$lang['ru_RU']['SiteTree']['TABREPORTS'] = 'Отчеты';
$lang['ru_RU']['SiteTree']['TOPLEVEL'] = 'Содержимое сайта (Верхний уровень)';
$lang['ru_RU']['SiteTree']['URL'] = 'URL';
$lang['ru_RU']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Этот URL используется другой страницей. URL должен быть уникальным для каждой страницы';
$lang['ru_RU']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'В адресе URL могут быть использованы только буквы, цифры и дефисы.';
$lang['ru_RU']['TableField']['ISREQUIRED'] = 'В %s \'%s\' обязательно';
$lang['ru_RU']['TableField.ss']['CSVEXPORT'] = 'Экспортировать в CSV';
$lang['ru_RU']['ToggleCompositeField.ss']['HIDE'] = 'Скрыть';
$lang['ru_RU']['ToggleCompositeField.ss']['SHOW'] = 'Показать';
$lang['ru_RU']['ToggleField']['LESS'] = 'меньше';
$lang['ru_RU']['ToggleField']['MORE'] = 'больше';
$lang['ru_RU']['TypeDropdown']['NONE'] = 'Не указано';
$lang['ru_RU']['VirtualPage']['CHOOSE'] = 'Выберите страницу, на которую ссылаетесь,';
$lang['ru_RU']['VirtualPage']['EDITCONTENT'] = 'Нажмите здесь для редактирования содержимого';
$lang['ru_RU']['VirtualPage']['HEADER'] = 'Это виртуальная страница';

?>