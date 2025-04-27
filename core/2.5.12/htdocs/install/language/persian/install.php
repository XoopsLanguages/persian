<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'نمایش/مخفی کردن متن راهنما');

// Configuration check page
define('SERVER_API', 'رابط برنامهنویسی سرور');
define('PHP_EXTENSION', 'افزونه %s');
define('CHAR_ENCODING', 'کدگذاری کاراکتر');
define('XML_PARSING', 'تجزیه XML');
define('REQUIREMENTS', 'نیازمندیها');
define('_PHP_VERSION', 'نسخه PHP');
define('RECOMMENDED_SETTINGS', 'تنظیمات پیشنهادی');
define('RECOMMENDED_EXTENSIONS', 'افزونههای پیشنهادی');
define('SETTING_NAME', 'نام تنظیم');
define('RECOMMENDED', 'توصیهشده');
define('CURRENT', 'فعلی');
define('RECOMMENDED_EXTENSIONS_MSG', 'این افزونهها برای استفاده معمولی لازم نیستند، اما ممکن است برای بهرهبرداری از برخی ویژگیهای خاص (مانند پشتیبانی از چندزبانه یا RSS) ضروری باشند. بنابراین، توصیه میشود که آنها را نصب کنید.');
define('NONE', 'هیچکدام');
define('SUCCESS', 'موفقیت');
define('WARNING', 'هشدار');
define('FAILED', 'ناموفق');

// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'جادوگر نصب XOOPS');
define('LANGUAGE_SELECTION', 'انتخاب زبان');
define('LANGUAGE_SELECTION_TITLE', 'زبان خود را انتخاب کنید');
define('INTRODUCTION', 'معرفی');
define('INTRODUCTION_TITLE', 'به جادوگر نصب XOOPS خوش آمدید');
define('CONFIGURATION_CHECK', 'بررسی پیکربندی');
define('CONFIGURATION_CHECK_TITLE', 'بررسی پیکربندی سرور شما');
define('PATHS_SETTINGS', 'تنظیمات مسیرها');
define('PATHS_SETTINGS_TITLE', 'تنظیمات مسیرها');
define('DATABASE_CONNECTION', 'اتصال به پایگاه داده');
define('DATABASE_CONNECTION_TITLE', 'اتصال به پایگاه داده');
define('DATABASE_CONFIG', 'پیکربندی پایگاه داده');
define('DATABASE_CONFIG_TITLE', 'پیکربندی پایگاه داده');
define('CONFIG_SAVE', 'ذخیره پیکربندی');
define('CONFIG_SAVE_TITLE', 'ذخیره پیکربندی سیستم شما');
define('TABLES_CREATION', 'ایجاد جداول');
define('TABLES_CREATION_TITLE', 'ایجاد جداول پایگاه داده');
define('INITIAL_SETTINGS', 'تنظیمات اولیه');
define('INITIAL_SETTINGS_TITLE', 'لطفاً تنظیمات اولیه خود را وارد کنید');
define('DATA_INSERTION', 'درج دادهها');
define('DATA_INSERTION_TITLE', 'ذخیره تنظیمات شما در پایگاه داده');
define('WELCOME', 'خوش آمدید');
define('WELCOME_TITLE', 'به سایت XOOPS شما خوش آمدید');

// Settings (labels and help text)
define('XOOPS_PATHS', 'مسیرهای فیزیکی XOOPS');
define('XOOPS_URLS', 'مکانهای وب');
define('XOOPS_ROOT_PATH_LABEL', 'مسیر فیزیکی ریشه اسناد XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'مسیر فیزیکی به پوشه اسناد XOOPS (ارائهشده) بدون اسلش پایانی');
define('XOOPS_LIB_PATH_LABEL', 'پوشه کتابخانه XOOPS');
define('XOOPS_LIB_PATH_HELP', 'مسیر فیزیکی به پوشه کتابخانه XOOPS بدون اسلش پایانی، برای سازگاری رو به جلو. این پوشه را خارج از ' . XOOPS_ROOT_PATH_LABEL . ' قرار دهید تا ایمن باشد.');
define('XOOPS_DATA_PATH_LABEL', 'پوشه فایلهای داده XOOPS');
define('XOOPS_DATA_PATH_HELP', 'مسیر فیزیکی به پوشه فایلهای داده XOOPS (قابل نوشتن) بدون اسلش پایانی، برای سازگاری رو به جلو. این پوشه را خارج از ' . XOOPS_ROOT_PATH_LABEL . ' قرار دهید تا ایمن باشد.');
define('XOOPS_URL_LABEL', 'مکان وبسایت (URL)');
define('XOOPS_URL_HELP', 'URL اصلی که برای دسترسی به نصب XOOPS شما استفاده خواهد شد');
define('LEGEND_CONNECTION', 'اتصال به سرور');
define('LEGEND_DATABASE', 'پایگاه داده');
define('DB_HOST_LABEL', 'نام میزبان سرور');
define('DB_HOST_HELP', 'نام میزبان سرور پایگاه داده. اگر مطمئن نیستید، <em>localhost</em> در اکثر موارد کار میکند');
define('DB_USER_LABEL', 'نام کاربری');
define('DB_USER_HELP', 'نام حساب کاربری که برای اتصال به سرور پایگاه داده استفاده خواهد شد');
define('DB_PASS_LABEL', 'رمز عبور');
define('DB_PASS_HELP', 'رمز عبور حساب کاربری پایگاه داده شما');
define('DB_NAME_LABEL', 'نام پایگاه داده');
define('DB_NAME_HELP', 'نام پایگاه داده در میزبان. نصبکننده در صورت عدم وجود، تلاش میکند پایگاه داده را ایجاد کند');
define('DB_CHARSET_LABEL', 'مجموعه کاراکتر پایگاه داده');
define('DB_CHARSET_HELP', 'MySQL شامل پشتیبانی از مجموعه کاراکتر است که به شما امکان میدهد دادهها را با استفاده از مجموعههای کاراکتر مختلف ذخیره کرده و مقایسهها را بر اساس انواع مختلف مرتبسازی انجام دهید.');
define('DB_COLLATION_LABEL', 'مرتبسازی پایگاه داده');
define('DB_COLLATION_HELP', 'مرتبسازی مجموعهای از قوانین برای مقایسه کاراکترها در یک مجموعه کاراکتر است.');
define('DB_PREFIX_LABEL', 'پیشوند جدول');
define('DB_PREFIX_HELP', 'این پیشوند به تمام جداول جدید ایجادشده اضافه میشود تا از تداخل نام در پایگاه داده جلوگیری شود. اگر مطمئن نیستید، پیشفرض را نگه دارید');
define('DB_PCONNECT_LABEL', 'استفاده از اتصال مداوم');
define('DB_PCONNECT_HELP', 'پیشفرض "خیر" است. اگر مطمئن نیستید، آن را خالی بگذارید');
define('DB_DATABASE_LABEL', 'پایگاه داده');
define('LEGEND_ADMIN_ACCOUNT', 'حساب مدیر');
define('ADMIN_LOGIN_LABEL', 'ورود مدیر');
define('ADMIN_EMAIL_LABEL', 'ایمیل مدیر');
define('ADMIN_PASS_LABEL', 'رمز عبور مدیر');
define('ADMIN_CONFIRMPASS_LABEL', 'تأیید رمز عبور');

// Buttons
define('BUTTON_PREVIOUS', 'قبلی');
define('BUTTON_NEXT', 'ادامه');

// Messages
define('XOOPS_FOUND', '%s یافت شد');
define('CHECKING_PERMISSIONS', 'بررسی مجوزهای فایل و پوشه...');
define('IS_NOT_WRITABLE', '%s قابل نوشتن نیست.');
define('IS_WRITABLE', '%s قابل نوشتن است.');
define('XOOPS_PATH_FOUND', 'مسیر یافت شد.');
define('XOOPS_TABLES_FOUND', 'جداول سیستم XOOPS در پایگاه داده شما وجود دارند.');
define('XOOPS_TABLES_CREATED', 'جداول سیستم XOOPS ایجاد شدند.');
define('SAVED_MAINFILE', 'تنظیمات ذخیره شدند');
define('SAVED_MAINFILE_MSG', 'نصبکننده تنظیمات مشخصشده را در <em>mainfile.php</em> و <em>secure.php</em> ذخیره کرد.');
define('DATA_ALREADY_INSERTED', 'دادههای XOOPS در پایگاه داده یافت شدند.');
define('DATA_INSERTED', 'دادههای اولیه در پایگاه داده درج شدند.');
define('DATABASE_CREATED', 'پایگاه داده %s ایجاد شد!');
define('TABLE_NOT_CREATED', 'ناتوانی در ایجاد جدول %s');
define('TABLE_CREATED', 'جدول %s ایجاد شد.');
define('ROWS_INSERTED', '%d ورودی به جدول %s درج شد.');
define('ROWS_FAILED', 'درج %d ورودی به جدول %s ناموفق بود.');
define('TABLE_ALTERED', 'جدول %s بهروزرسانی شد.');
define('TABLE_NOT_ALTERED', 'بهروزرسانی جدول %s ناموفق بود.');
define('TABLE_DROPPED', 'جدول %s حذف شد.');
define('TABLE_NOT_DROPPED', 'حذف جدول %s ناموفق بود.');

// Error messages
define('ERR_COULD_NOT_ACCESS', 'نمیتوان به پوشه مشخصشده دسترسی پیدا کرد. لطفاً بررسی کنید که وجود دارد և توسط سرور قابل خواندن است.');
define('ERR_NO_XOOPS_FOUND', 'هیچ نصب XOOPS در پوشه مشخصشده یافت نشد.');
define('ERR_INVALID_EMAIL', 'ایمیل نامعتبر');
define('ERR_REQUIRED', 'اطلاعات مورد نیاز است.');
define('ERR_PASSWORD_MATCH', 'دو رمز عبور مطابقت ندارند');
define('ERR_NEED_WRITE_ACCESS', 'سرور باید دسترسی نوشتن به فایلها و پوشههای زیر داشته باشد<br>(مانند <em>chmod 775 directory_name</em> در سرور UNIX/LINUX)<br>اگر در دسترس نیستند یا به درستی ایجاد نشدهاند، لطفاً به صورت دستی ایجاد کنید و مجوزهای مناسب را تنظیم کنید.');
define('ERR_NO_DATABASE', 'نمیتوان پایگاه داده را ایجاد کرد. برای جزئیات با مدیر سرور تماس بگیرید.');
define('ERR_NO_DBCONNECTION', 'نمیتوان به سرور پایگاه داده متصل شد.');
define('ERR_WRITING_CONSTANT', 'نوشتن ثابت %s ناموفق بود.');
define('ERR_COPY_MAINFILE', 'نمیتوان فایل توزیع را به %s کپی کرد');
define('ERR_WRITE_MAINFILE', 'نمیتوان در %s نوشت. لطفاً مجوز فایل را بررسی کنید و دوباره امتحان کنید.');
define('ERR_READ_MAINFILE', 'نمیتوان %s را برای خواندن باز کرد');
define('ERR_INVALID_DBCHARSET', 'مجموعه کاراکتر "%s" پشتیبانی نمیشود.');
define('ERR_INVALID_DBCOLLATION', 'مرتبسازی "%s" پشتیبانی نمیشود.');
define('ERR_CHARSET_NOT_SET', 'مجموعه کاراکتر پیشفرض برای پایگاه داده XOOPS تنظیم نشده است.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'پشتیبانی');
define('LOGIN', 'احراز هویت');
define('LOGIN_TITLE', 'احراز هویت');
define('USER_LOGIN', 'ورود مدیر');
define('USERNAME', 'نام کاربری:');
define('PASSWORD', 'رمز عبور:');
define('ICONV_CONVERSION', 'تبدیل مجموعه کاراکتر');
define('ZLIB_COMPRESSION', 'فشردهسازی Zlib');
define('IMAGE_FUNCTIONS', 'توابع تصویر');
define('IMAGE_METAS', 'دادههای متا تصویر (exif)');
define('FILTER_FUNCTIONS', 'توابع فیلتر');
define('ADMIN_EXIST', 'حساب مدیر از قبل وجود دارد.');
define('CONFIG_SITE', 'پیکربندی سایت');
define('CONFIG_SITE_TITLE', 'پیکربندی سایت');
define('MODULES', 'نصب ماژولها');
define('MODULES_TITLE', 'نصب ماژولها');
define('THEME', 'انتخاب قالب');
define('THEME_TITLE', 'انتخاب قالب پیشفرض');
define('INSTALLED_MODULES', 'ماژولهای زیر نصب شدهاند.');
define('NO_MODULES_FOUND', 'هیچ ماژولی یافت نشد.');
define('NO_INSTALLED_MODULES', 'هیچ ماژولی نصب نشده است.');
define('THEME_NO_SCREENSHOT', 'تصویر پیشنمایش یافت نشد');
define('IS_VALOR', ' => ');

// Password message
define('PASSWORD_LABEL', 'قدرت رمز عبور');
define('PASSWORD_DESC', 'رمز عبور وارد نشده است');
define('PASSWORD_GENERATOR', 'تولیدکننده رمز عبور');
define('PASSWORD_GENERATE', 'تولید');
define('PASSWORD_COPY', 'کپی');
define('PASSWORD_VERY_WEAK', 'بسیار ضعیف');
define('PASSWORD_WEAK', 'ضعیف');
define('PASSWORD_BETTER', 'بهتر');
define('PASSWORD_MEDIUM', 'متوسط');
define('PASSWORD_STRONG', 'قوی');
define('PASSWORD_STRONGEST', 'قویترین');

// 2.5.7
define('WRITTEN_LICENSE', 'کلید مجوز XOOPS %s نوشته شد: <strong>%s</strong>');

// 2.5.8
define('CHMOD_CHGRP_REPEAT', 'دوباره امتحان کنید');
define('CHMOD_CHGRP_IGNORE', 'به هر حال استفاده کنید');
define('CHMOD_CHGRP_ERROR', 'نصبکننده ممکن است نتواند فایل پیکربندی %1$s را بنویسد.<p>PHP فایلها را تحت کاربر %2$s و گروه %3$s مینویسد.<p>پوشه %4$s/ دارای کاربر %5$s و گروه %6$s است');

// 2.5.9
define('CURL_HTTP', 'کتابخانه URL مشتری (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'دامنه کوکی برای وبسایت');
define('XOOPS_COOKIE_DOMAIN_HELP', 'دامنه برای تنظیم کوکیها. میتواند خالی باشد، میزبان کامل از URL (www.example.com)، یا دامنه ثبتشده بدون زیردامنهها (example.com) برای اشتراک در زیردامنهها (www.example.com و blog.example.com).');
define('INTL_SUPPORT', 'توابع بینالمللیسازی');
define('XOOPS_SOURCE_CODE', 'XOOPS در GitHub');
define('XOOPS_INSTALLING', 'در حال نصب');
define('XOOPS_ERROR_ENCOUNTERED', 'خطا');
define('XOOPS_ERROR_SEE_BELOW', 'پیامها را در زیر ببینید.');
define('MODULES_AVAILABLE', 'ماژولهای موجود');
define('INSTALL_THIS_MODULE', 'افزودن %s');

// 2.5.11
define('ERR_COPY_CONFIG_FILE', 'نمیتوان فایل پیکربندی %s را کپی کرد');
