<?php
/** Sakha (Yakut, саха)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Amire80
 * @author Andrijko Z.
 * @author Bert Jickty
 * @author Gartem
 * @author HalanTul
 * @author Kaganer
 * @author Meno25
 * @author Nemo bis
 * @author Urhixidur
 */

$fallback = 'ru';

$namespaceNames = [
	NS_MEDIA            => 'Миэдьийэ',
	NS_SPECIAL          => 'Аналлаах',
	NS_TALK             => 'Ырытыы',
	NS_USER             => 'Кыттааччы',
	NS_USER_TALK        => 'Кыттааччы_ырытыыта',
	NS_PROJECT_TALK     => '$1_ырытыыта',
	NS_FILE             => 'Билэ',
	NS_FILE_TALK        => 'Билэ_ырытыыта',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki-ни_ырытыы',
	NS_TEMPLATE         => 'Халыып',
	NS_TEMPLATE_TALK    => 'Халыыбы_ырытыы',
	NS_HELP             => 'Көмө',
	NS_HELP_TALK        => 'Көмөнү_ырытыы',
	NS_CATEGORY         => 'Категория',
	NS_CATEGORY_TALK    => 'Категорияны_ырытыы',
];

$namespaceAliases = [
	'Ойуу' => NS_FILE,
	'Ойуу_ырытыыта' => NS_FILE_TALK,
	'Ойууну_ырытыы' => NS_FILE_TALK,
	'Халыып_ырытыыта' => NS_TEMPLATE_TALK,
	'Көмө_ырытыыта' => NS_HELP_TALK,
	'Категория_ырытыыта' => NS_CATEGORY_TALK,
];

// Remove Russian aliases
$namespaceGenderAliases = [];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Көхтөөх_кыттааччылар' ],
	'Allmessages'               => [ 'Тиһик_биллэриилэрэ' ],
	'AllMyUploads'              => [ 'Билэлэрим_барыта' ],
	'Allpages'                  => [ 'Сирэй_барыта' ],
	'Badtitle'                  => [ 'Сатаммат_аат' ],
	'Blankpage'                 => [ 'Кураанах_сирэй' ],
	'Block'                     => [ 'Хааччахтаа' ],
	'BlockList'                 => [ 'Хааччах_испииһэгэ' ],
	'Booksources'               => [ 'Төрүт_кинигэлэр' ],
	'BrokenRedirects'           => [ 'Быстыбыт_утаарыылар' ],
	'Categories'                => [ 'Категориялар' ],
	'ChangeEmail'               => [ 'E-mail-ы_уларыт' ],
	'ChangePassword'            => [ 'Аһарыгы_уларыт' ],
	'ComparePages'              => [ 'Сирэйдэри_тэҥнээһин' ],
	'Confirmemail'              => [ 'E-mail-ы_бигэргэт' ],
	'Contributions'             => [ 'Суруйуу' ],
	'CreateAccount'             => [ 'Бэлиэ-ааты_оҥор' ],
	'Deadendpages'              => [ 'Бүтэй_сирэйдэр' ],
	'DeletedContributions'      => [ 'Сотуллубут_суруйуу' ],
	'Diff'                      => [ 'Уларытыылар' ],
	'DoubleRedirects'           => [ 'Хос_утаарыылар' ],
	'EditWatchlist'             => [ 'Кэтиир_испииһэги_уларытыы' ],
	'Emailuser'                 => [ 'Кыттааччыга_сурук' ],
	'ExpandTemplates'           => [ 'Халыып_тэнийиитэ' ],
	'Export'                    => [ 'Хачайдаан_таһаарыы' ],
	'Fewestrevisions'           => [ 'Сэдэхтик_уларытыллыбыт' ],
	'FileDuplicateSearch'       => [ 'Хос_билэни_көрдөөһүн' ],
	'Filepath'                  => [ 'Билэ_суола' ],
	'Import'                    => [ 'Импорт' ],
	'Invalidateemail'           => [ 'Аадырыһы_бигэргэтиини_суох_гын' ],
	'JavaScriptTest'            => [ 'JavaScript_тургутуу' ],
	'LinkSearch'                => [ 'Сигэни_көрдөөһүн' ],
	'Listadmins'                => [ 'Дьаһабыллар_испииһэктэрэ' ],
	'Listbots'                  => [ 'Буоттар_испииһиэктэрэ' ],
	'ListDuplicatedFiles'       => [ 'Хос_билэ_испииһэгэ' ],
	'Listfiles'                 => [ 'Билэ_испииһэгэ' ],
	'Listgrouprights'           => [ 'Кыттааччылар_бөлөхтөрүн_бырааба' ],
	'Listredirects'             => [ 'Утаарыы_испииһэгэ' ],
	'Listusers'                 => [ 'Кыттааччы_испииһэгэ' ],
	'Lockdb'                    => [ 'БО_хааччахтааһын' ],
	'Log'                       => [ 'Сурунааллар' ],
	'Lonelypages'               => [ 'Тулаайах_сирэйдэр' ],
	'Longpages'                 => [ 'Уһун_сирэйдэр' ],
	'MergeHistory'              => [ 'Устуоруйаларын_холбооһун' ],
	'MIMEsearch'                => [ 'MIME_туһанан көрдөөһүн' ],
	'Mostcategories'            => [ 'Ордук_элбэх_категориялаахтар' ],
	'Mostimages'                => [ 'Ордук_элбэхтик_туттуллар_билэлэр' ],
	'Mostinterwikis'            => [ 'Элбэх_интэрбиики_сигэлээхтэр' ],
	'Mostlinked'                => [ 'Ордук_элбэхтик_туттуллар_сирэйдэр' ],
	'Mostlinkedcategories'      => [ 'Ордук_элбэхтик_туттуллар_категориялар' ],
	'Mostlinkedtemplates'       => [ 'Ордук_элбэхтик_туттуллар_халыыптар' ],
	'Mostrevisions'             => [ 'Ордук_элбэх_барыллаах' ],
	'Movepage'                  => [ 'Сирэй_аатын_уларыт' ],
	'Mycontributions'           => [ 'Суруйуум' ],
	'MyLanguage'                => [ 'Тылым' ],
	'Mypage'                    => [ 'Тус_сирэйим' ],
	'Mytalk'                    => [ 'Тус_ырытар_сирим' ],
	'Myuploads'                 => [ 'Хачайдааһыннарым' ],
	'Newimages'                 => [ 'Саҥа_билэлэр' ],
	'Newpages'                  => [ 'Саҥа_сирэйдэр' ],
	'PasswordReset'             => [ 'Аһарыгы_уларытыы' ],
	'PermanentLink'             => [ 'Куруук_баар_сигэ' ],
	'Preferences'               => [ 'Туруоруулар' ],
	'Prefixindex'               => [ 'Аатын_саҕаланыытынан_ыйынньык' ],
	'Protectedpages'            => [ 'Көмүскэммит_сирэйдэр' ],
	'Protectedtitles'           => [ 'Көмүскэммит_ааттар' ],
	'Randompage'                => [ 'Түбэспиччэ_сирэй' ],
	'Randomredirect'            => [ 'Түбэспиччэ_утаарыы' ],
	'Recentchanges'             => [ 'Саҥа_уларытыы' ],
	'Recentchangeslinked'       => [ 'Ситимнээх_уларытыылар' ],
	'Revisiondelete'            => [ 'Улартыыны_суох_гыныы' ],
	'Search'                    => [ 'Көрдөөһүн' ],
	'Shortpages'                => [ 'Кылгас_сирэйдэр' ],
	'Specialpages'              => [ 'Анал_сирэйдэр' ],
	'Statistics'                => [ 'Ыстатыыстыка' ],
	'Tags'                      => [ 'Тиэктэр' ],
	'Unblock'                   => [ 'Хааччаҕы_устуу' ],
	'Uncategorizedcategories'   => [ 'Категорията_суох_категориялар' ],
	'Uncategorizedimages'       => [ 'Категорията_суох_билэлэр' ],
	'Uncategorizedpages'        => [ 'Категорията_суох_сирэйдэр' ],
	'Uncategorizedtemplates'    => [ 'Категорията_суох_халыыптар' ],
	'Undelete'                  => [ 'Сөргүт' ],
	'Unlockdb'                  => [ 'БО_хааччаҕын_устуу' ],
	'Unusedcategories'          => [ 'Туттуллубат_категориялар' ],
	'Unusedimages'              => [ 'Туттуллубат_билэлэр' ],
	'Unusedtemplates'           => [ 'Туттуллубат_халыыптар' ],
	'Upload'                    => [ 'Хачайдааһын' ],
	'UploadStash'               => [ 'Кистэммит_хачайдааһын' ],
	'Userlogin'                 => [ 'Киирии' ],
	'Userlogout'                => [ 'Түмүктээһин' ],
	'Userrights'                => [ 'Быраабы_салайыы' ],
	'Version'                   => [ 'Торум' ],
	'Wantedcategories'          => [ 'Көрдөнөр_категориялар' ],
	'Wantedfiles'               => [ 'Көрдөнөр_билэлэр' ],
	'Wantedpages'               => [ 'Көрдөнөр_сирэйдэр' ],
	'Wantedtemplates'           => [ 'Көрдөнөр_халыыптар' ],
	'Watchlist'                 => [ 'Кэтиир_испииһэк' ],
	'Whatlinkshere'             => [ 'Манна_сигэниилэр' ],
	'Withoutinterwiki'          => [ 'Интэрбиикитэ_суох' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#утаарыы', '#утр', '#REDIRECT' ],
	'notoc'                     => [ '0', '__ИҺИНЭЭҔИТЭ_СУОХ__', '__ИҺН_СУОХ__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__ГАЛЕРЕЯТА_СУОХ__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__БУЛГУЧЧУ_ИҺИНЭЭҔИЛЭЭХ__', '__БЛГ_ИҺН__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ИҺИНЭЭҔИТЭ__', '__ИҺН__', '__TOC__' ],
	'noeditsection'             => [ '0', '__САЛААНЫ_УЛАРЫППАККА__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'БУ_ЫЙ', 'БУ_ЫЙ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'БУ_ЫЙ_1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'БУ_ЫЙ_ААТА', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'БУ_ЫЙ_ААТА_АРТҺК', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'БУ_ЫЙ_ААТА_АББР', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'БУ_КҮН', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'БУ_КҮН_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'БУ_КҮН_ААТА', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'БУ_СЫЛ', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'БУ_КЭМ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'БУ_ЧААС', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'ОЛОХТООХ_ЫЙ', 'ОЛОХТООХ_ЫЙ_2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'ОЛОХТООХ_ЫЙ_1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'ОЛОХТООХ_ЫЙ_ААТА', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ОЛОХТООХ_ЫЙ_ААТА_АРТҺК', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'ОЛОХТООХ_ЫЙ_ААТА_АББР', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'ОЛОХТООХ_КҮН', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ОЛОХТООХ_КҮН_2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ОЛОХТООХ_КҮН_ААТА', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ОЛОХТООХ_СЫЛ', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ОЛОХТООХ_КЭМ', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ОЛОХТООХ_ЧААС', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'СИРЭЙ_АХСААНА', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ЫСТАТЫЙА_АХСААНА', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'БИЛЭ_АХСААНА', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'КЫТТААЧЧЫ_АХСААНА', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'КӨХТӨӨХ_КЫТТААЧЧЫ_АХСААНА', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'УЛАРЫТЫЫ_АХСААНА', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'СИРЭЙ_ААТА', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'СИРЭЙ_ААТА_2', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ААТ_ДАЛА', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ААТ_ДАЛА_2', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'ААТ_ДАЛЫН_НҮӨМЭРЭ', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'ЫРЫТЫЫ_ДАЛА', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ЫРЫТЫЫ_ДАЛА_2', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'ЫСТАТЫЙА_ДАЛА', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ЫСТАТЫЙА_ДАЛА_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'СИРЭЙ_ТОЛОРУ_ААТА', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'СИРЭЙ_ТОЛОРУ_ААТА_2', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ИҺИНЭЭҔИ_СИРЭЙ_ААТА', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ИҺИНЭЭҔИ_СИРЭЙ_ААТА_2', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'СИРЭЙ_ААТЫН_ТӨРДӨ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'СИРЭЙ_ААТЫН_ТӨРДӨ_2', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ЫРЫТАР_СИРЭЙ_ААТА', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ЫРЫТАР_СИРЭЙ_ААТА_2', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'ЫСТАТЫЙА_СИРЭЙИН_ААТА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ЫСТАТЫЙА_СИРЭЙИН_ААТА_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'СУРУК:', 'СРК:', 'MSG:' ],
	'subst'                     => [ '0', 'УГАН_БИЭРИИ:', 'УГУУ:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'УГУУКМСКЛ:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'БИИКИТЭ_СУОХ_СУРУК:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'мини', 'ойуучаан', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'мини=$1', 'ойуучаан=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'уҥа', 'right' ],
	'img_left'                  => [ '1', 'хаҥас', 'left' ],
	'img_none'                  => [ '1', 'суох', 'none' ],
	'img_width'                 => [ '1', '$1пкс', '$1px' ],
	'img_center'                => [ '1', 'орто', 'center', 'centre' ],
	'img_framed'                => [ '1', 'раамка', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'раамката_суох', 'frameless' ],
	'img_page'                  => [ '1', 'сирэй=$1', 'сирэй $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'үөһээуҥа', 'үөһээуҥа=$1', 'үөһээуҥа $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'кирбии', 'border' ],
	'img_baseline'              => [ '1', 'олох-дьураа', 'baseline' ],
	'img_sub'                   => [ '1', 'алын', 'sub' ],
	'img_super'                 => [ '1', 'үрүт', 'super', 'sup' ],
	'img_top'                   => [ '1', 'үрдүнэн', 'top' ],
	'img_text_top'              => [ '1', 'тиэкис-үрдүгэр', 'text-top' ],
	'img_middle'                => [ '1', 'ортотунан', 'middle' ],
	'img_bottom'                => [ '1', 'аллараа', 'bottom' ],
	'img_text_bottom'           => [ '1', 'тиэкис-аллара', 'text-bottom' ],
	'img_link'                  => [ '1', 'сигэ=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'альт=$1', 'alt=$1' ],
	'int'                       => [ '0', 'ИС:', 'INT:' ],
	'sitename'                  => [ '1', 'СИТИМ-СИР_ААТА', 'SITENAME' ],
	'ns'                        => [ '0', 'АД:', 'NS:' ],
	'nse'                       => [ '0', 'АДК:', 'NSE:' ],
	'localurl'                  => [ '0', 'ОЛОХТООХ_ААДЫРЫС:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ОЛОХТООХ_ААДЫРЫС_2:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'ЫСТАТЫЙА_СУОЛА', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'СИРЭЙ_НҮӨМЭРЭ', 'PAGEID' ],
	'server'                    => [ '0', 'СИЭРБЭР', 'SERVER' ],
	'servername'                => [ '0', 'СИЭРБЭР_ААТА', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'СКРИП_СУОЛА', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'ИСТИИЛ_СУОЛА', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'ТҮҺҮК:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'АҤАРДАМ:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__ААТЫН_УЛАРЫППАККА__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__ТИЭКИҺИН_УЛАРЫППАККА__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'БУ_НЭДИЭЛЭ', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'НЭДИЭЛЭ_БУ_КҮНЭ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'ОЛОХТООХ_НЭДИЭЛЭ', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'ОЛОХТООХ_НЭДИЭЛЭ_КҮНЭ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'ТОРУМ_НҮӨМЭРЭ', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ТОРУМ_НҮӨМЭРЭ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ТОРУМ_НҮӨМЭРЭ_2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'ТОРУМ_ЫЙА', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'ТОРУМ_ЫЙА_1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'ТОРУМ_СЫЛА', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'ТОРУМ_КЭМИН_БЭЛИЭТЭ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'КЫТТААЧЧЫ_ТОРУМА', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'ЭЛБЭХ_АХСААН:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'ТОЛОРУ_ААДЫРЫС:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ТОЛОРУ_ААДЫРЫС_2:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'БАСТАКЫ_БУУКУБА_КЫРА:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'БАСТАКЫ_БУУКУБА_УЛАХАН:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'КЫРА_БУУКУБАННАН:', 'LC:' ],
	'uc'                        => [ '0', 'УЛАХАН_БУУКУБАННАН:', 'UC:' ],
	'raw'                       => [ '0', 'ТАҤАСТАММАТАХ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ААТЫН_КӨРДӨР', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'Н', 'R' ],
	'newsectionlink'            => [ '1', '__САҤА_САЛААҔА_СИГЭ__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__САҤА_САЛААҔА_СИГЭТЭ_СУОХ__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'БИЛИҤҤИ_ТОРУМ', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'КУОДТАММЫТ_ААДЫРЫС:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ТИЭГИ_КУОДТАА', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'БИЛИҤҤИ_КЭМ_БЭЛИЭТЭ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'ОЛОХТООХ_КЭМ_БЭЛИЭТЭ', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'СУРУК-БИЧИК_ХАЙЫСХАТА', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ТЫЛ:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'ИҺИНЭЭҔИТИН_ТЫЛА', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'ААТ_ДАЛЫГАР_СИРЭЙ_АХСААНА:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'ДЬАҺАБЫЛ_АХСААНА', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ЧЫЫҺЫЛАНЫ_ФОРМААТТАА', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ХАҤАСТАН_ТОЛОР', 'PADLEFT' ],
	'padright'                  => [ '0', 'УҤАТТАН_ТОЛОР', 'PADRIGHT' ],
	'special'                   => [ '0', 'аналлаах', 'special' ],
	'defaultsort'               => [ '1', 'АНААН_ЭТИЛЛИБЭТЭҔИНЭ_НАРДААҺЫН', 'НААРДААҺЫН_КҮЛҮҮҺЭ', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'БИЛЭ_СУОЛА:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'тиэк', 'тег', 'тэг', 'tag' ],
	'hiddencat'                 => [ '1', '__КИСТЭММИТ_КАТЕГОРИЯ__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'КАТЕГОРИЯ_СИРЭЙИН_АХСААНА', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'СИРЭЙ_КЭЭМЭЙЭ', 'PAGESIZE' ],
	'index'                     => [ '1', '__ИНДЕКС__', '__INDEX__' ],
	'noindex'                   => [ '1', '__ИНДЕКСТЭЭМЭ__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'БӨЛӨХХӨ_АХСААНА', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__ХАЛБАҤНААБАТ_УТААРЫЫ__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'КӨМҮСКЭЛ_ТАҺЫМА', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'күн-дьыл_формаата', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'СУОЛ', 'PATH' ],
	'url_wiki'                  => [ '0', 'БИИКИ', 'WIKI' ],
	'url_query'                 => [ '0', 'КӨРДӨБҮЛ', 'QUERY' ],
	'pagesincategory_all'       => [ '0', 'барыта', 'all' ],
	'pagesincategory_pages'     => [ '0', 'сирэйдэр', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'иһинээҕи_категория', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'билэ', 'билэлэр', 'files' ],
];

$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'xg j, Y',
	'mdy both' => 'H:i, xg j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y xg j',
	'ymd both' => 'H:i, Y xg j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

$bookstoreList = [
	'Поиск по библиотекам «Сигла»' => 'http://www.sigla.ru/results.jsp?f=7&t=3&v0=$1',
	'Findbook.ru' => 'http://findbook.ru/search/d0?ptype=4&pvalue=$1',
	'Яндекс.Маркет' => 'http://market.yandex.ru/search.xml?text=$1',
	'ОЗОН' => 'http://www.ozon.ru/?context=advsearch_book&isbn=$1',
	'Books.Ru' => 'http://www.books.ru/shop/search?query=$1',
	'Amazon.com' => 'https://www.amazon.com/exec/obidos/ISBN=$1'
];

$separatorTransformTable = [
	',' => "\u{00A0}", # nbsp
	'.' => ','
];
$minimumGroupingDigits = 2;

$linkTrail = '/^([a-zабвгҕдеёжзийклмнҥоөпрсһтуүфхцчшщъыьэюя]+)(.*)$/sDu';
