<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'مهاجرت به Smarty 4 در XOOPS');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'نتایج اسکن');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'اجرای اسکن');
define('_XOOPS_SMARTY4_SCANNER_END', 'خروج از اسکنر');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'قانون');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'تطابق');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'فایل');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'تعداد رفعشده');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'نیاز به بررسی دستی');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'غیر قابل نوشتن');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'گزینههای اسکن مجدد');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'کادر "بله" را در زیر علامت بزنید و سپس دکمه اجرای اسکن را کلیک کنید تا به طور خودکار مشکلات یافتشده رفع شوند.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'علامتگذاری به عنوان تکمیلشده');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'پوشه قالب (اختیاری)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'پسوند قالب (اختیاری)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12 یک تغییر مهم معرفی میکند: Smarty 4</h3>

<p>متأسفانه، این تغییر ممکن است برخی از قالبهای قدیمیتر را مختل کند. بنابراین، قبل از ادامه ارتقا، لطفاً این مراحل را دنبال کنید:

<li>preflight.php را اجرا کنید تا هرگونه قالب قدیمی یا الگوهای ماژول بررسی شوند.</li>
<li>اگر مشکلی شناسایی شد، این سند را مطالعه کنید تا تغییرات لازم قبل از ادامه ارتقا را درک کنید.</li>
<li>پس از انجام تغییرات مورد نیاز، preflight.php را دوباره اجرا کنید.</li>
<li>اگر دیگر مشکلی وجود نداشته باشد، میتوانید فرآیند ارتقا را آغاز کنید.</li>
</p>
EOT,
);
