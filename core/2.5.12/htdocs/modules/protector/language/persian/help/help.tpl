<div id="help-template" class="outer">
    <h1 class="head">راهنما: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="بازگشت به مدیریت محافظ"> محافظ <img src="<{xoAdminIcons 'home.png'}>" alt="بازگشت به مدیریت محافظ"/></a></h1>
    <h4 class="odd">توضیحات</h4>

    <p class="even">محافظ ماژولی برای دفاع از سیستم مدیریت محتوای XOOPS شما در برابر حملات مخرب مختلف است.</p>
    <h4 class="odd">نصب/حذف</h4>

    <p>ابتدا، اگر قبلاً این کار را انجام ندادهاید، XOOPS_TRUST_PATH را در mainfile.php تعریف کنید.</p>
    <br>

    <p>پوشه html/modules/protector موجود در آرشیو را در XOOPS_ROOT_PATH/modules/ کپی کنید.</p>

    <p>پوشه xoops_trust_path/modules/protector موجود در آرشیو را در XOOPS_TRUST_PATH/modules/ کپی کنید.</p>
    <br>

    <p>مجوز نوشتن را برای XOOPS_TRUST_PATH/modules/protector/configs فعال کنید.</p>
    <h4 class="odd">= نحوه نجات =</h4>

    <p class="even">اگر توسط محافظ مسدود شدهاید، فقط فایلهای موجود در XOOPS_TRUST_PATH/modules/protector/configs/ را حذف کنید.</p>
    <h4 class="odd">مقدمهای برای افزونههای فیلتر موجود در این آرشیو.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        یک افزونه ضد هرزنامه.
        <br>
        تمام ارسالها از IP ثبت شده در RBL رد خواهند شد.
        <br>
        این افزونه میتواند عملکرد ارسال، به ویژه ماژولهای گفتگو را کند کند.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        یک افزونه ضد هرزنامه.
        <br>
        تمام ارسالها از IP ثبت شده در http:BL رد خواهند شد.
        <br>
        قبل از استفاده، HTTPBL_KEY را از http://www.projecthoneypot.org/ دریافت کرده و آن را در فایل فیلتر تنظیم کنید.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        یک افزونه ضد هرزنامه.
        <br>
        ارسالهای بدون نویسههای چند بایتی رد خواهند شد.
        <br>
        این افزونه فقط برای سایتهای ژاپنی، چینی سنتی، چینی ساده شده و کرهای مناسب است.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        تمام دادههای ارسالی توسط مهمانان توسط HTMLPurifier پاکسازی خواهند شد.
        <br>
        اگر اجازه ارسال HTML توسط مهمانان را میدهید، اکیداً توصیه میکنم آن را فعال کنید.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        این افزونه از ثبت نام رباتها در سایت شما جلوگیری میکند.
        <br>
        نیازمند فعال بودن جاوا اسکریپت در مرورگر بازدیدکنندگان است.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        پیامی را برای بازدیدکنندگانی که بیش از تعداد مشخص شده گذرواژههای اشتباه را امتحان کردهاند، تعیین کنید.
        <br>
        تمام افزونههایی که نام آنها با *_message.php شروع میشود، پیام مربوط به دسترسیهای رد شده را مشخص میکنند.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        هنگامی که محدودیت پهنای باند به طور ناگهانی فعال میشود، این افزونه آن را در error_log آپاچی ثبت میکند.
    </p>

    <p>تمام افزونههایی که نام آنها با *_errorlog.php شروع میشود، برخی اطلاعات را در error_log آپاچی ثبت میکنند.</p>
    <h4 class="odd">آموزش</h4>

    <p class="even">آموزش به زودی ارائه خواهد شد.</p>
</div>
