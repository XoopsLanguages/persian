<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Assocated with editor_registry.php
 */
// نام ویرایشگر
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// مقدار باید همانند /tinymce/jscripts/langs/your_language_code باشد، برای مثال، "en" برای انگلیسی، "fr" برای فرانسوی
// برای جزئیات بیشتر به http://tinymce.moxiecode.com/download_i18n.php مراجعه کنید
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'fa');
// فهرست فونتها، فرمت: "نام=ارزش1،ارزش2؛نام=ارزش"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'گرفتن تصویر %s با شکست مواجه شد');
