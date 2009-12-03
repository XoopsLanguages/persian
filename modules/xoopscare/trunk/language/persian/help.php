<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("مسیر فیزیکی زوپس تعریف نشده است");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare(مراقب زوپس)</a> ماژولی است که با هدف کمک به شما برای تعمیر و نگهداری آسان و <b>خودکار</b> سایت زوپستان  ایجاد شده است.
البته حتی اگر ما هر کاری که در توانمان باشد برای ساختن بهترین ماژول ممکن به کار برده باشیم<b>ریسک استفاده از این ماژول بر عهده خود شماست!</b>

با استفاده از این ماژول شما میتوانید:
1/ دیتابیس خودتان را تعمیر کنید
2/ کوری های دیتابیس را اجرا کنید
3/ کد های php  را  اجرا کنید
4/ شاخه های templates_c و cache را پاک کنید
5/ نظر های اسپم را حذف کنید
6/ جدول sessions در دیتابیس را به راحتی خالی کنید

هر کدام از موارد بالا رو میتوانید تعریف کنید که اجرا شوند یا نشوند یا چه زمانی اجرا شوند (شما میتوانید جدول زمانی برای اجرای آنها تعریف کنید).

به علاوه، میتوانید تمام اعمالی را که توسط ماژول انجام می شود در فایلی ثبت کنید(لاگ کنید) و (اگر این امکان را در سرور خود داشته باشید)، از کرون برای انجام موارد بالا استفاده کنید.

اگر امکان استفاده از کرون را دارید به راحتی می توانید فایل <i>cron.php</i> واقع در ریشه ماژول را به کار ببرید.
برای این کار باید یک پسورد برای اجرای این فایل در بخش مدیریت ماژول تعریف کنید.
	سپس کرون را به صورت روبرو به کار ببرید : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>اگر از کرون بدون پسورد استفاده کنید، ماژول هیچ کاری را انجام نخواهد داد</b> این رویه فقط برای محافظت از سایت شما در برابر دسترسی افراد مختلف که میتوانند به راحتی فایل را اجرا کنند در پیش گرفته شده است.

اگر امکان استفاده از کرون را ندارید میتوانید بلاک ماژول را  جایی از سایت فعال و قابل دیدن توسط اعضا و مهمان ها کنید(هر جایی از سایت که میخواهید)،  و ماژول به طور خودکار در زمان لازم کار های  زمان بندی شده را انجام خواهد داد.

ترفند : میتوانید در بلاک از کش استفاده کنید.

اولین کاری که باید انجام دهید این است که به قسمت مدیریت ماژول بروید و ویژگی های ماژول را تنظیم کنید.
در اولین بخش <b>ویژگی های کلی</b>،اگر  میخواهید از کرون استفاده کنید پسورد آن را تنظیم کنید.
اگر میخواهید فایل ثبت وقایع ساخته شود، بخش <i>فایل ثبت وقایع</i> را پر کنید.
توجه: توصیه می شود به دلیل موارد امنیتی پسوند این فایل را <u>php</u> بگذارید.

در قسمتی به نام <b>تعمیر دیتابیس</b> فاصله زمانی را که میخواهید دیتابیس در آن تعمیر شود به روز وارد کنید.
اگر فاصله زمانی را روی صفر روز بگذارید کاری انجام نخواهد شد.
تعمیر دیتابیس شامل انجام کار  check, repair, analyse و optimize روی همه جدول های دیتابیس سایت زوپس شما می باشد.


در بخش با نام <b>کوری ها</b> اول فاصله زمانی را وارد کنید سپس اگر نیاز داشتید تعدادی کد های sql  را برای اجرا روی دیتابیس وارد کنید.
توجه:ماژول هیچ کاری روی کوری های شما انجام نمیدهد فقط آن ها را تک تک گرفته و اجرا می کند.

در بخش <b> کد های php</b>  مانند بخش قبلی تعدادی کد را که البته php  هستند بنویسید تا اجرا شود.

در بخش <b>شاخه های Cache و Templates_c</b> این امکان را دارید تا شاخه های cache  و templates_c را خالی از فایل کنید. این شاخه ها به عنوان شاخه های ذخیره فایل های موقت در ریشه سایت شما قرار دارند

در بخش <b>جلسه ها (sessions)</b> این امکان را دارید تا با وارد کردن فاصله زمانی مورد نظر جدول  session  دیتابیس زوپس خود را خالی کنید.


سر انجام در بخش <b>نظر های اسپم</b> می توانید تمام نظر های اسپم وارد شده به سایت خود را پاک کنید.
این بخش با  بخش <i>گزینه های سانسور کلمه</i> در ویژگی های ماژول سیستم کار میکند.
اول از بخش <i>ویژگی های ماژول سیستم</i> به بخش <i>گزینه های سانسور کلمات</i> بروید و سپس  باید گزینه فعال کردن سانسور برای کلمات نا خواسته؟ را  روی بله بگذارید.
بعد از آن در همان قسمت تعدادی کلمه را برای سانسور شدن بنویسید.
به طور پیش فرض کلمات سانسور شده با کلمه #OOPS# جایگزین می شوند
ماژول XoopsCare به دنبال کلماتی که باید سانسور شوند در عنوان و متن نظر ها جستجو می کند و کلماتی را که در ویژگی ها وارد کرده اید اعمال خواهد کرد.
به علاوه این ماژول می تواند IP  اسپم ها را از نظر ها استخراج کرده  و به طور خود کار آن IP  ها را وارد فهرست IP  های بسته شده کند.
سر انجام میتوانید کاری را که باید روی نظر های شناسایی شده به عنوان اسپم انجام شود انتخاب کنید. میتوانید آنها را روی سایت نگه دارید، از سایت خارج کنید، آنها را مخفی کنید یا آنها را حذف نمایید.

اگر از کرون برای  تمیز کردن سایت خود استفاده می کنید فاصله زمانی  که برای هر عمل وارد کرده اید مورد استفاده قرار نخواهد گرفت ولی باید فاصله زمانی غیر از صفر برای هر بخش وارد کنید.اگر فاصله زمانی صفر باشد عمل انجام نخواهد شد.

<a href="http://www.instant-zero.com" target="_blank">اگر از این ماژول خوشتان آمده به سازنده اصلی اطلاع دهید</a>
<a href="http://www.xoops.ir" target="_blank">فارسی شده و پشتیبانی توسط سایت رسمی فارسی زوپس</a>

endhelp;
?>
