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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('دسترسی محدود');

setlocale(LC_ALL, 'fa_IR');

// !!مهم!! قبل از هر کاراکتر از کاراکترهای رزرو شده، '\' را وارد کنید: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// قبل از 't','r','n' دو '\' وارد کنید
define('_TODAY', "\T\o\d\a\y G:i");
define('_YESTERDAY', "\Y\\e\s\\t\\e\\r\d\a\y G:i");
define('_MONTHDAY', 'n/j G:i');
define('_YEARMONTHDAY', 'Y/n/j G:i');
define('_ELAPSE', '%s پیش');
define('_TIMEFORMAT_DESC', "فرمتهای معتبر: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" یا \"custom\" - فرمت طبق فاصله زمانی از زمان حال؛ \"e\" - زمان گذشته; \"mysql\" - Y-m-d H:i:s;<br>" . "رشته مشخصشده - به <a href=\"https://php.net/manual/en/function.date.php\" rel=\"external\">راهنمای PHP</a> مراجعه کنید.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * یک Xoops Local
 *
 * @package             هسته
 * @subpackage          زبان
 *
 * @author              تایون جیانگ <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 پروژه XOOPS (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * فرمتهای عددی
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * فرمت پول
     *
     * @param  string $format
     * @param  string $number
     * @return پول  فرمتشده
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'en_US');

        return money_format($format, $number);
    }
}
