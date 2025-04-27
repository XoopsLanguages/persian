<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','مجوزها');
define('_MD_A_MYMENU_MYPREFERENCES','تنظیمات');
// index.php
define('_AM_TH_DATETIME', 'زمان');
define('_AM_TH_USER', 'کاربر');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'نوع');
define('_AM_TH_DESCRIPTION', 'توضیحات');
define('_AM_TH_BADIPS','IPهای بد<br><br><span style="font-weight:normal;">هر IP را در یک خط بنویسید<br>خالی بودن به معنای مجاز بودن همه IPها است</span>');
define('_AM_TH_GROUP1IPS','IPهای مجاز برای گروه=1<br><br><span style="font-weight:normal;">هر IP را در یک خط بنویسید.<br>192.168. یعنی 192.168.*<br>خالی بودن به معنای مجاز بودن همه IPها است</span>');
define('_AM_LABEL_COMPACTLOG', 'فشردهسازی گزارش');
define('_AM_BUTTON_COMPACTLOG', 'فشردهسازی!');
define('_AM_JS_COMPACTLOGCONFIRM', 'رکوردهای تکراری (IP، نوع) حذف خواهند شد');
define('_AM_LABEL_REMOVEALL', 'حذف همه رکوردها');
define('_AM_BUTTON_REMOVEALL', 'حذف همه!');
define('_AM_JS_REMOVEALLCONFIRM', 'تمام گزارشها به طور کامل حذف خواهند شد. آیا مطمئنید؟');
define('_AM_LABEL_REMOVE', 'حذف رکوردهای انتخاب شده:');
define('_AM_BUTTON_REMOVE', 'حذف!');
define('_AM_JS_REMOVECONFIRM', 'حذف درست است؟');
define('_AM_MSG_IPFILESUPDATED', 'فایلهای IP بهروزرسانی شدهاند');
define('_AM_MSG_BADIPSCANTOPEN', 'فایل برای IPهای بد قابل باز کردن نیست');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'فایل برای IPهای گروه=1 قابل باز کردن نیست');
define('_AM_MSG_REMOVED', 'رکوردها حذف شدند');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'لطفا دسترسی نوشتن به دایرکتوری تنظیمات را فعال کنید: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'مدیر پیشوند');
define('_AM_MSG_DBUPDATED', 'پایگاه داده با موفقیت بهروزرسانی شد!');
define('_AM_CONFIRM_DELETE', 'تمام دادهها حذف خواهند شد. آیا مطمئنید؟');
define('_AM_TXT_HOWTOCHANGEDB',"اگر میخواهید پیشوند را تغییر دهید,<br> فایل %s/data/secure.php را بهصورت دستی ویرایش کنید.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'امن نیست');
define('_AM_ADV_TRUSTPATHPUBLIC', 'اگر میتوانید تصویری -NG- ببینید یا لینک به صفحه عادی برمیگردد، مسیر XOOPS_TRUST_PATH شما به درستی قرار نگرفته است. بهترین مکان برای قرار دادن XOOPS_TRUST_PATH خارج از DocumentRoot است. اگر نمیتوانید این کار را انجام دهید، باید .htaccess (DENY FROM ALL) را درست زیر XOOPS_TRUST_PATH قرار دهید.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'بررسی کنید که فایلهای PHP داخل TRUST_PATH فقط خواندنی تنظیم شده باشند (باید خطای 404،403 یا 500 باشد)');
define('_AM_ADV_REGISTERGLOBALS',"اگر 'ON' باشد، این تنظیم باعث بروز انواع حملات تزریقی میشود. اگر میتوانید، 'register_globals off' را در php.ini تنظیم کنید، یا اگر ممکن نیست، .htaccess در دایرکتوری XOOPS خود را ویرایش کنید:");
define('_AM_ADV_ALLOWURLFOPEN',"اگر 'ON' باشد، این تنظیم به مهاجمان اجازه میدهد اسکریپتهای دلخواه را روی سرورهای از راه دور اجرا کنند.<br>فقط مدیر سایت میتواند این گزینه را تغییر دهد.<br>اگر شما مدیر هستید، php.ini یا httpd.conf را ویرایش کنید.<br><b>نمونهای از httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>در غیر این صورت، این موضوع را به مدیران خود اطلاع دهید.");
define('_AM_ADV_USETRANSSID',"اگر 'ON' باشد، شناسه نشست شما در تگهای لنگر و غیره نمایش داده خواهد شد.<br>برای جلوگیری از سرقت نشست، یک خط به .htaccess در XOOPS_ROOT_PATH اضافه کنید.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"این تنظیم خطر 'SQL Injection' را به همراه دارد.<br>فراموش نکنید که 'Force sanitizing *' را در تنظیمات این ماژول فعال کنید.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'رفتن به مدیر پیشوند');
define('_AM_ADV_MAINUNPATCHED', 'شما باید فایل mainfile.php خود را مطابق با دستورالعملهای README ویرایش کنید.');
define('_AM_ADV_DBFACTORYPATCHED', 'پایگاه داده شما برای مقابله با SQL Injection آماده است');
define('_AM_ADV_DBFACTORYUNPATCHED', 'پایگاه داده شما برای مقابله با SQL Injection آماده نیست. برخی اصلاحات لازم است.');
define('_AM_ADV_SUBTITLECHECK', 'بررسی کنید که آیا محافظ به درستی کار میکند');
define('_AM_ADV_CHECKCONTAMI', 'آلودهسازی');
define('_AM_ADV_CHECKISOCOM', 'نظرات ایزولهشده');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'و خط زیر را در آن قرار دهید:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'پیشوند');
define('_AM_PROTECTOR_TABLES', 'جداول');
define('_AM_PROTECTOR_UPDATED', 'بهروزرسانی شد');
define('_AM_PROTECTOR_COPY', 'کپی');
define('_AM_PROTECTOR_ACTIONS', 'عملیات');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'مسدود کردن IPها در رکوردهای انتخابشده:');
define('_AM_BUTTON_BAN_BY_IP', 'مسدود کردن IP!');
define('_AM_JS_BANCONFIRM', 'آیا مسدود کردن IPها درست است؟');
define('_AM_MSG_BANNEDIP', 'IPها مسدود شدند');
define('_AM_ADMINSTATS_TITLE', 'خلاصه گزارش محافظ');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'ماه گذشته');
define('_AM_ADMINSTATS_LAST_WEEK', 'هفته گذشته');
define('_AM_ADMINSTATS_LAST_DAY', 'روز گذشته');
define('_AM_ADMINSTATS_LAST_HOUR', 'ساعت گذشته');
