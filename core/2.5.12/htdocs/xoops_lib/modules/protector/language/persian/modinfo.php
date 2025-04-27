<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // The name of this module
    define($constpref . '_NAME', 'محافظ');

    // A brief description of this module
    define($constpref . '_DESC', 'این ماژول سایت XOOPS شما را از حملات مختلف مانند DoS، تزریق SQL و آلودگی متغیرها محافظت میکند.');

    // Menu
    define($constpref . '_ADMININDEX', 'مرکز محافظ');
    define($constpref . '_ADVISORY', 'مشاوره امنیتی');
    define($constpref . '_PREFIXMANAGER', 'مدیر پیشوند');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'مجوزها');

    // Configs
    define($constpref . '_GLOBAL_DISBL', 'موقتاً غیرفعال');
    define($constpref . '_GLOBAL_DISBLDSC', 'تمام محافظتها به طور موقت غیرفعال هستند.<br>فراموش نکنید پس از رفع مشکل این گزینه را خاموش کنید');

    define($constpref . '_DEFAULT_LANG', 'زبان پیشفرض');
    define($constpref . '_DEFAULT_LANGDSC', 'مجموعه زبان برای نمایش پیامها قبل از پردازش common.php را مشخص کنید');

    define($constpref . '_RELIABLE_IPS', 'آیپیهای قابل اعتماد');
    define($constpref . '_RELIABLE_IPSDSC', 'آیپیهایی را که میتوانید به آنها اعتماد کنید با | جدا کنید. ^ با ابتدای رشته مطابقت دارد، $ با انتهای رشته.');

    define($constpref . '_LOG_LEVEL', 'سطح ثبت وقایع');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'زمان تعلیق آیپی ممنوعشده (ثانیه)');

    define($constpref . '_LOGLEVEL0', 'هیچ');
    define($constpref . '_LOGLEVEL15', 'آرام');
    define($constpref . '_LOGLEVEL63', 'آرام');
    define($constpref . '_LOGLEVEL255', 'کامل');

    define($constpref . '_HIJACK_TOPBIT', 'بیتهای آیپی محافظتشده برای جلسه');
    define($constpref . '_HIJACK_TOPBITDSC', 'ضد ربودن جلسه:<br>پیشفرض 24/56 (نتمسک برای IPV4/IPV6). (همه بیتها محافظت میشوند)<br>وقتی آیپی شما پایدار نیست، محدوده آیپی را با تعداد بیتها تنظیم کنید.<br>(مثال) اگر آیپی شما در محدوده 192.168.0.0-192.168.0.255 تغییر کند، اینجا 24 (بیت) تنظیم کنید');
    define($constpref . '_HIJACK_DENYGP', 'گروههای غیرمجاز برای تغییر آیپی در جلسه');
    define($constpref . '_HIJACK_DENYGPDSC', 'ضد ربودن جلسه:<br>گروههایی را انتخاب کنید که اجازه تغییر آیپی در یک جلسه را ندارند.<br>(توصیه میکنم مدیر را فعال کنید.)');
    define($constpref . '_SAN_NULLBYTE', 'پاکسازی بایتهای نال');
    define($constpref . '_SAN_NULLBYTEDSC', 'کاراکتر پایانی "\\0" اغلب در حملات مخرب استفاده میشود.<br>یک بایت نال به فاصله تبدیل خواهد شد.<br>(به شدت توصیه میشود روشن باشد)');
    define($constpref . '_DIE_NULLBYTE', 'خروج در صورت یافتن بایتهای نال');
    define($constpref . '_DIE_NULLBYTEDSC', 'کاراکتر پایانی "\\0" اغلب در حملات مخرب استفاده میشود.<br>(به شدت توصیه میشود روشن باشد)');
    define($constpref . '_DIE_BADEXT', 'خروج در صورت بارگذاری فایلهای مخرب');
    define($constpref . '_DIE_BADEXTDSC', 'اگر کسی سعی کند فایلهایی با پسوندهای مخرب مانند .php بارگذاری کند، این ماژول XOOPS شما را خارج میکند.<br>اگر اغلب فایلهای php را در B-Wiki یا PukiWikiMod ضمیمه میکنید، این گزینه را خاموش کنید.');
    define($constpref . '_CONTAMI_ACTION', 'اقدام در صورت یافتن آلودگی');
    define($constpref . '_CONTAMI_ACTIONDS', 'اقدامی را انتخاب کنید که وقتی کسی سعی میکند متغیرهای جهانی سیستم را در XOOPS آلوده کند.<br>(گزینه توصیهشده صفحه خالی است)');
    define($constpref . '_ISOCOM_ACTION', 'اقدام در صورت یافتن نظر جداگانه');
    define($constpref . '_ISOCOM_ACTIONDSC', 'ضد تزریق SQL:<br>اقدامی را انتخاب کنید وقتی یک "/*" جداگانه یافت شود.<br>"پاکسازی" به معنای افزودن یک "*/" دیگر در انتها است.<br>(گزینه توصیهشده پاکسازی است)');
    define($constpref . '_UNION_ACTION', 'اقدام در صورت یافتن UNION');
    define($constpref . '_UNION_ACTIONDSC', 'ضد تزریق SQL:<br>اقدامی را انتخاب کنید وقتی سینتکس مانند UNION از SQL یافت شود.<br>"پاکسازی" به معنای تغییر "union" به "uni-on" است.<br>(گزینه توصیهشده پاکسازی است)');
    define($constpref . '_ID_INTVAL', 'اجبار intval به متغیرهایی مانند id');
    define($constpref . '_ID_INTVALDSC', 'همه درخواستهای با نام "*id" به عنوان عدد صحیح در نظر گرفته میشوند.<br>این گزینه شما را از برخی انواع XSS و تزریق SQL محافظت میکند.<br>اگرچه توصیه میکنم این گزینه را روشن کنید، ممکن است با برخی ماژولها مشکل ایجاد کند.');
    define($constpref . '_FILE_DOTDOT', 'محافظت از پیمایش دایرکتوری');
    define($constpref . '_FILE_DOTDOTDSC', 'این گزینه ".." را از همه درخواستهایی که به نظر میرسد پیمایش دایرکتوری باشند حذف میکند');

    define($constpref . '_BF_COUNT', 'ضد حمله بیرحمانه');
    define($constpref . '_BF_COUNTDSC', 'حداکثر تعداد دفعاتی که یک مهمان میتواند در 10 دقیقه برای ورود تلاش کند را تنظیم کنید. اگر تعداد تلاشهای ناموفق برای ورود از این مقدار بیشتر شود، آدرس آیپی مهمان ممنوع خواهد شد.');

    define($constpref . '_BWLIMIT_COUNT', 'محدودیت پهنای باند');
    define($constpref . '_BWLIMIT_COUNTDSC', 'حداکثر دسترسی به mainfile.php در طول زمان نظارت را مشخص کنید. این مقدار باید برای محیطهای عادی با پهنای باند کافی CPU صفر باشد. تعداد کمتر از 10 نادیده گرفته خواهد شد.');

    define($constpref . '_DOS_SKIPMODS', 'ماژولهای خارج از بررسی DoS/خزنده');
    define($constpref . '_DOS_SKIPMODSDSC', 'نامهای دایرکتوری ماژولها را با | جدا کنید. این گزینه برای ماژولهای چت و غیره مفید خواهد بود.');

    define($constpref . '_DOS_EXPIRE', 'زمان نظارت برای بارگذاریهای بالا (ثانیه)');
    define($constpref . '_DOS_EXPIREDSC', 'این مقدار زمان نظارت برای بارگذاری مجدد مکرر (حمله F5) و خزندههای با بار بالا را مشخص میکند.');

    define($constpref . '_DOS_F5COUNT', 'تعداد بد برای حمله F5');
    define($constpref . '_DOS_F5COUNTDSC', 'جلوگیری از حملات DoS.<br>این مقدار تعداد بارگذاریهای مجدد را مشخص میکند که به عنوان حمله مخرب در نظر گرفته میشود.');
    define($constpref . '_DOS_F5ACTION', 'اقدام علیه حمله F5');

    define($constpref . '_DOS_CRCOUNT', 'تعداد بد برای خزندهها');
    define($constpref . '_DOS_CRCOUNTDSC', 'جلوگیری از خزندههای با بار بالا.<br>این مقدار تعداد دسترسیهایی را مشخص میکند که به عنوان خزنده بد رفتار در نظر گرفته میشود.');
    define($constpref . '_DOS_CRACTION', 'اقدام علیه خزندههای با بار بالا');

    define($constpref . '_DOS_CRSAFE', 'عامل کاربر خوشآمد');
    define($constpref . '_DOS_CRSAFEDSC', 'یک الگوی regex پرل برای عامل کاربر.<br>اگر مطابقت داشته باشد، خزنده هرگز به عنوان خزنده با بار بالا در نظر گرفته نمیشود.<br>مثال) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'هیچ (فقط ثبت وقایع)');
    define($constpref . '_OPT_SAN', 'پاکسازی');
    define($constpref . '_OPT_EXIT', 'صفحه خالی');
    define($constpref . '_OPT_BIP', 'ممنوعیت آیپی (بدون محدودیت)');
    define($constpref . '_OPT_BIPTIME0', 'ممنوعیت آیپی (مهلتدار)');

    define($constpref . '_DOSOPT_NONE', 'هیچ (فقط ثبت وقایع)');
    define($constpref . '_DOSOPT_SLEEP', 'خواب');
    define($constpref . '_DOSOPT_EXIT', 'صفحه خالی');
    define($constpref . '_DOSOPT_BIP', 'ممنوعیت آیپی (بدون محدودیت)');
    define($constpref . '_DOSOPT_BIPTIME0', 'ممنوعیت آیپی (مهلتدار)');
    define($constpref . '_DOSOPT_HTA', 'DENY توسط .htaccess (آزمایشی)');

    define($constpref . '_BIP_EXCEPT', 'گروههایی که هرگز به عنوان آیپی بد ثبت نمیشوند');
    define($constpref . '_BIP_EXCEPTDSC', 'کاربری که به گروه مشخصشده در اینجا تعلق دارد هرگز ممنوع نخواهد شد.<br>(توصیه میکنم مدیر را فعال کنید.)');

    define($constpref . '_DISABLES', 'غیرفعال کردن ویژگیهای خطرناک در XOOPS');

    define($constpref . '_DBLAYERTRAP', 'فعالسازی تله لایه پایگاه داده ضد تزریق SQL');
    define($constpref . '_DBLAYERTRAPDSC', 'تقریباً همه حملات تزریق SQL با این ویژگی خنثی خواهند شد. این ویژگی نیاز به پشتیبانی از databasefactory دارد. میتوانید آن را در صفحه مشاوره امنیتی بررسی کنید. این تنظیم باید روشن باشد. هرگز آن را به صورت اتفاقی خاموش نکنید.');
    define($constpref . '_DBTRAPWOSRV', 'عدم بررسی _SERVER برای ضد تزریق SQL');
    define($constpref . '_DBTRAPWOSRVDSC', 'برخی سرورها همیشه تله لایه پایگاه داده را فعال میکنند. این باعث تشخیصهای اشتباه به عنوان حمله تزریق SQL میشود. اگر چنین خطاهایی دریافت کردید، این گزینه را روشن کنید. باید بدانید که این گزینه امنیت تله لایه پایگاه داده ضد تزریق SQL را تضعیف میکند.');

    define($constpref . '_BIGUMBRELLA', 'فعالسازی ضد XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'این شما را از تقریباً همه حملات از طریق آسیبپذیریهای XSS محافظت میکند. اما 100% نیست');

    define($constpref . '_SPAMURI4U', 'ضد اسپم: URLها برای کاربران عادی');
    define($constpref . '_SPAMURI4UDSC', 'اگر این تعداد URL در دادههای POST از کاربران غیر مدیر یافت شود، POST به عنوان اسپم در نظر گرفته میشود. 0 به معنای غیرفعال کردن این ویژگی است.');
    define($constpref . '_SPAMURI4G', 'ضد اسپم: URLها برای مهمانها');
    define($constpref . '_SPAMURI4GDSC', 'اگر این تعداد URL در دادههای POST از مهمانها یافت شود، POST به عنوان اسپم در نظر گرفته میشود. 0 به معنای غیرفعال کردن این ویژگی است.');

    // 3.40b
    define($constpref . '_ADMINHOME', 'خانه');
    define($constpref . '_ADMINABOUT', 'درباره');

    // 3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'توقف اسپم انجمن');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'دادههای POST را با اسپمرهای ثبتشده در پایگاه داده www.stopforumspam.com بررسی میکند. نیاز به کتابخانه CURL php دارد.');

    // 3.60
    define($constpref . '_ADMINSTATS', 'نمای کلی');
    define($constpref . '_BANIP_TIME0DSC', 'زمان تعلیق بر حسب ثانیه برای ممنوعیتهای خودکار آیپی');
}
