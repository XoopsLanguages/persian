<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('دسترسی محدود');
/**
 * محلی سازی توابع ایمیل
 *
 * محلی سازی انگلیسی صرفاً برای نمایش است
 */
// نام کلاس را تغییر ندهید
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * سازنده
     */
    public function __construct()
    {
        parent::__construct();
        // فرض بر این است که نیازی به تغییر مجموعه نویسه‌ها نیست
        $this->charSet = strtolower(_CHARSET);
        // شما باید مقدار کد زبان را مشخص کنید تا فایل موجود باشد: XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["کد-زبان-شما"].php
        $this->multimailer->setLanguage('fa');
    }

    /**
     * زبان‌های چند بایتی تشویق می‌شوند تا روش مناسب خود را برای رمزگذاری نام فرستنده ایجاد کنند
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // در صورت نیاز خط زیر را فعال کنید
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     * زبان‌های چند بایتی تشویق می‌شوند تا روش مناسب خود را برای رمزگذاری موضوع ایجاد کنند
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // در صورت نیاز خط زیر را فعال کنید
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
