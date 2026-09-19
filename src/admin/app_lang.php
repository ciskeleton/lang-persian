<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'اجزا';
$lang['admin_content'] = 'محتوا';
$lang['admin_database_backup'] = 'پشتیبان های پایگاه داده';
$lang['admin_extensions'] = 'گسترش ها';
$lang['admin_firewall'] = 'فایروال';
$lang['admin_help'] = 'راهنما';
$lang['admin_languages'] = 'زبان ها';
$lang['admin_logs'] = 'لاگ های سیستم';
$lang['admin_media'] = 'کتابخانه رسانه';
$lang['admin_modules'] = 'ماژول‌ها';
$lang['admin_plugins'] = 'افزونه‌ها';
$lang['admin_reports'] = 'گزارش فعالیت';
$lang['admin_settings'] = 'تنظیمات سیستم';
$lang['admin_sysinfo'] = 'اطلاعات سیستم';
$lang['admin_system'] = 'سیستم';
$lang['admin_system_firewall'] = 'فایروال سیستم';
$lang['admin_themes'] = 'قالب‌ها';
$lang['admin_updates'] = 'به‌روزرسانی‌های سیستم';
$lang['admin_users'] = 'کاربران';
$lang['admin_view_site'] = 'مشاهده سایت';
$lang['per_page'] = 'در هر صفحه';

// Generic Messages
$lang['admin_footer_thankyou'] = 'از شما بابت ساختن با <a href="%s" target="_blank">%s</a> تشکر می کنیم.';
$lang['admin_items_active_count'] = '=0{هیچ مورد فعالی وجود ندارد.} other{<b>#</b> از <b>%s</b> مورد فعال هستند.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'نصب';
$lang['admin_install_error'] = 'نصب بسته ناموفق بود.';
$lang['admin_install_error_com'] = 'نصب ناموفق بود: %s';
$lang['admin_install_location_app'] = 'فقط این برنامه';
$lang['admin_install_location_core'] = 'همه برنامه‌ها';
$lang['admin_install_location_select'] = '&#151; انتخاب محل &#151;';
$lang['admin_install_success'] = 'بسته با موفقیت نصب شد.';
$lang['admin_install_upload'] = 'بارگذاری';
$lang['admin_install_upload_error'] = 'بارگذاری بسته ناموفق بود.';
$lang['admin_install_upload_success'] = 'بسته با موفقیت بارگذاری شد.';
$lang['admin_install_upload_tip'] = 'با بارگذاری فایل <b>.zip</b> آن در اینجا، یک بسته نصب کنید.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'امکان تمیز کردن فایل های پشتیبان قدیمی وجود ندارد.';
$lang['admin_database_backup_clean_success'] = '%d فایل پشتیبان حذف شدند. %d فضای دیسک آزاد شد.';
$lang['admin_database_backup_create'] = 'ایجاد پشتیبان';
$lang['admin_database_backup_create_confirm'] = 'آیا مطمئن هستید که می خواهید اکنون پشتیبان ایجاد کنید؟';
$lang['admin_database_backup_create_error'] = 'امکان ایجاد فایل پشتیبان وجود ندارد. لطفاً اطمینان حاصل کنید که پوشه <b>%s</b> قابل نوشتن است.';
$lang['admin_database_backup_create_success'] = 'فایل پشتیبان پایگاه داده <b>%s</b> با موفقیت ایجاد شد.';
$lang['admin_database_backup_delete_confirm'] = 'آیا مطمئن هستید که می خواهید این فایل های پشتیبان را حذف کنید؟';
$lang['admin_database_backup_delete_error'] = 'امکان حذف فایل های پشتیبان انتخاب شده وجود ندارد.';
$lang['admin_database_backup_delete_success'] = 'فایل های پشتیبان با موفقیت حذف شدند.';
$lang['admin_database_backup_download_error'] = 'امکان دانلود فایل پشتیبان انتخاب‌شده وجود ندارد.';
$lang['admin_database_backup_download_success'] = 'فایل پشتیبان با موفقیت دانلود شد.';
$lang['admin_database_backup_lock_confirm'] = 'آیا مطمئن هستید که می خواهید این فایل های پشتیبان را قفل کنید؟';
$lang['admin_database_backup_lock_error'] = 'امکان قفل کردن فایل های پشتیبان انتخاب شده وجود ندارد.';
$lang['admin_database_backup_lock_success'] = 'فایل های پشتیبان با موفقیت قفل شدند.';
$lang['admin_database_backup_locked_error'] = 'امکان حذف فایل های پشتیبان قفل شده وجود ندارد.';
$lang['admin_database_backup_missing_error'] = 'فایل پشتیبان یافت نشد.';
$lang['admin_database_backup_unlock_confirm'] = 'آیا مطمئن هستید که می خواهید این فایل های پشتیبان را باز کنید؟';
$lang['admin_database_backup_unlock_error'] = 'امکان باز کردن فایل های پشتیبان انتخاب شده وجود ندارد.';
$lang['admin_database_backup_unlock_success'] = 'فایل های پشتیبان با موفقیت از قفل خارج شدند.';
$lang['admin_database_prune'] = 'حذف';
$lang['admin_database_prune_confirm'] = 'آیا مطمئن هستید که می خواهید پایگاه داده را کوتاه کنید؟ یک پشتیبان قبل از اجرا ایجاد خواهد شد.';
$lang['admin_database_prune_error'] = 'امکان پاک سازی پایگاه داده وجود ندارد.';
$lang['admin_database_prune_next'] = 'پاکسازی بعدی: <b>%s</b>';
$lang['admin_database_prune_success'] = 'پایگاه داده با موفقیت اصلاح شد.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'حذف گزارش ها';
$lang['admin_logs_delete_confirm'] = 'آیا مطمئن هستید که می خواهید فایل های گزارش انتخاب شده را حذف کنید؟';
$lang['admin_logs_delete_error'] = 'امکان حذف فایل های لاگ وجود ندارد.';
$lang['admin_logs_delete_success'] = 'فایل های لاگ با موفقیت حذف شدند.';
$lang['admin_logs_error_disabled'] = 'در حال حاضر لاگ گذاری فعال نیست.';
$lang['admin_logs_error_empty'] = 'هیچ لاگی یافت نشد.';
$lang['admin_logs_error_missing'] = 'یا فایل لاگ یافت نشد، یا خالی بود.';
$lang['admin_logs_tip'] = 'لاگ ها می توانند فایل های بسیار بزرگی ایجاد کنند. برای سایت های زنده، حذف لاگ های قدیمی را در نظر بگیرید.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'آیا مطمئنید می‌خواهید ایمیل‌های انتخاب‌شده را حذف کنید؟';
$lang['admin_emails_delete_error'] = 'امکان حذف ایمیل‌های انتخاب‌شده وجود ندارد.';
$lang['admin_emails_delete_success'] = 'ایمیل‌های انتخاب‌شده با موفقیت حذف شدند.';
$lang['admin_emails_email_from'] = 'ارسال از';
$lang['admin_emails_mail_queue'] = 'صف ایمیل‌ها';
$lang['admin_emails_mailer'] = 'ایمیل جمعی';
$lang['admin_emails_search'] = 'جستجوی ایمیل‌ها بر اساس موضوع یا محتوا...';
$lang['admin_emails_send_error'] = 'افزودن ایمیل به صف با شکست مواجه شد. لطفاً دوباره تلاش کنید.';
$lang['admin_emails_send_none'] = 'هیچ کاربری مطابق معیارهای انتخاب‌شده یافت نشد.';
$lang['admin_emails_send_success'] = 'ایمیل به صف اضافه شد و به زودی ارسال خواهد شد.';
$lang['admin_emails_send_to_banned'] = 'ارسال به کاربران مسدود شده.';
$lang['admin_emails_send_to_deleted'] = 'ارسال به کاربران حذف شده.';
$lang['admin_emails_send_to_disabled'] = 'ارسال به کاربران غیرفعال.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'اضافه کردن کاربر';
$lang['admin_users_all_users'] = 'تمام کاربران';
$lang['admin_users_ban_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی را مسدود کنید؟';
$lang['admin_users_ban_error'] = 'امکان مسدود کردن کاربران انتخابی وجود ندارد.';
$lang['admin_users_ban_success'] = 'کاربران انتخابی با موفقیت مسدود شدند.';
$lang['admin_users_delete_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی را حذف کنید؟';
$lang['admin_users_delete_error'] = 'امکان حذف کاربران انتخابی وجود ندارد.';
$lang['admin_users_delete_success'] = 'کاربران انتخابی با موفقیت حذف شدند.';
$lang['admin_users_disable_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی را غیرفعال کنید؟';
$lang['admin_users_disable_error'] = 'امکان غیرفعال کردن کاربران انتخابی وجود ندارد.';
$lang['admin_users_disable_success'] = 'کاربران انتخابی با موفقیت غیرفعال شدند.';
$lang['admin_users_edit'] = 'ویرایش کاربر';
$lang['admin_users_edit_error'] = 'امکان به روزرسانی کاربر وجود ندارد.';
$lang['admin_users_edit_success'] = 'کاربر با موفقیت به روزرسانی شد.';
$lang['admin_users_enable_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی را فعال کنید؟';
$lang['admin_users_enable_error'] = 'امکان فعال کردن کاربران انتخابی وجود ندارد.';
$lang['admin_users_enable_success'] = 'کاربران انتخابی با موفقیت فعال شدند.';
$lang['admin_users_groups'] = 'گروه ها';
$lang['admin_users_lock_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخاب‌شده را قفل کنید؟';
$lang['admin_users_lock_error'] = 'قفل کردن کاربران انتخاب‌شده ممکن نشد.';
$lang['admin_users_lock_success'] = 'کاربران انتخاب‌شده با موفقیت قفل شدند.';
$lang['admin_users_logged'] = 'کاربران وارد شده';
$lang['admin_users_manage'] = 'مدیریت کاربران';
$lang['admin_users_remove_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی و تمام داده‌های آنها را به طور دائم حذف کنید؟';
$lang['admin_users_remove_error'] = 'امکان حذف دائمی کاربران انتخابی و تمام داده‌های آنها وجود ندارد.';
$lang['admin_users_remove_success'] = 'کاربران انتخابی و تمام داده‌های آنها با موفقیت حذف شدند.';
$lang['admin_users_restore_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی را بازیابی کنید؟';
$lang['admin_users_restore_error'] = 'امکان بازیابی کاربران انتخابی وجود ندارد.';
$lang['admin_users_restore_success'] = 'کاربران انتخابی با موفقیت بازیابی شدند.';
$lang['admin_users_search'] = 'جستجو نام یا ایمیل...';
$lang['admin_users_unban_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخابی را از مسدودیت خارج کنید؟';
$lang['admin_users_unban_error'] = 'امکان خارج کردن کاربران انتخابی از مسدودیت وجود ندارد.';
$lang['admin_users_unban_success'] = 'کاربران انتخابی با موفقیت از مسدودیت خارج شدند.';
$lang['admin_users_unlock_confirm'] = 'آیا مطمئن هستید که می‌خواهید کاربران انتخاب‌شده را باز کنید؟';
$lang['admin_users_unlock_error'] = 'باز کردن کاربران انتخاب‌شده امکان‌پذیر نبود.';
$lang['admin_users_unlock_success'] = 'کاربران انتخاب‌شده با موفقیت باز شدند.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'پاک کردن گزارشات';
$lang['admin_reports_clear_confirm'] = 'آیا مطمئن هستید که می خواهید گزارشات فعالیت ها را پاک کنید؟';
$lang['admin_reports_clear_error'] = 'امکان پاک کردن گزارشات فعالیت ها وجود ندارد.';
$lang['admin_reports_clear_success'] = 'گزارشات فعالیت ها با موفقیت پاک شدند.';
$lang['admin_reports_latest_actions'] = 'آخرین اقدامات';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'آیا مطمئن هستید که می خواهید فایل های انتخاب شده را حذف کنید؟';
$lang['admin_media_delete_error'] = 'امکان حذف فایل ها وجود ندارد.';
$lang['admin_media_delete_success'] = 'فایل ها با موفقیت حذف شدند.';
$lang['admin_media_file_delete_error'] = 'امکان حذف فایل وجود ندارد.';
$lang['admin_media_file_delete_success'] = 'فایل با موفقیت حذف شد.';
$lang['admin_media_file_update_error'] = 'امکان به روزرسانی فایل وجود ندارد.';
$lang['admin_media_file_update_success'] = 'فایل با موفقیت به روزرسانی شد.';
$lang['admin_media_search'] = 'جستجو بر اساس نام، توضیحات یا نام فایل...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{هیچ ماژول فعالی وجود ندارد.} other{<b>#</b> از <b>%s</b> ماژول فعال هستند.}';
$lang['admin_modules_add'] = 'اضافه کردن ماژول';
$lang['admin_modules_delete_confirm'] = 'آیا مطمئن هستید که می خواهید ماژول <b>%s</b> را حذف کنید؟';
$lang['admin_modules_delete_error'] = 'امکان حذف ماژول وجود ندارد.';
$lang['admin_modules_delete_success'] = 'ماژول با موفقیت حذف شد.';
$lang['admin_modules_disable_all_confirm'] = 'آیا مطمئن هستید که می‌خواهید همه ماژول‌ها را غیرفعال کنید؟';
$lang['admin_modules_disable_all_error'] = 'قادر به غیرفعال‌سازی همه ماژول‌ها نیستیم.';
$lang['admin_modules_disable_all_success'] = 'همه ماژول‌ها با موفقیت غیرفعال شدند.';
$lang['admin_modules_disable_confirm'] = 'آیا مطمئن هستید که می خواهید ماژول <b>%s</b> را غیرفعال کنید؟';
$lang['admin_modules_disable_error'] = 'امکان غیرفعال کردن ماژول وجود ندارد.';
$lang['admin_modules_disable_success'] = 'ماژول با موفقیت غیرفعال شد.';
$lang['admin_modules_enable_all_confirm'] = 'آیا مطمئن هستید که می‌خواهید همه ماژول‌ها را فعال کنید؟';
$lang['admin_modules_enable_all_error'] = 'قادر به فعال‌سازی همه ماژول‌ها نیستیم.';
$lang['admin_modules_enable_all_success'] = 'همه ماژول‌ها با موفقیت فعال شدند.';
$lang['admin_modules_enable_confirm'] = 'آیا مطمئن هستید که می خواهید ماژول <b>%s</b> را فعال کنید؟';
$lang['admin_modules_enable_error'] = 'امکان فعال سازی ماژول وجود ندارد.';
$lang['admin_modules_enable_success'] = 'ماژول با موفقیت فعال شد.';
$lang['admin_modules_install_confirm'] = 'آیا مطمئن هستید که می‌خواهید این ماژول را نصب کنید؟';
$lang['admin_modules_install_error'] = 'نصب ماژول ناموفق بود.';
$lang['admin_modules_install_success'] = 'ماژول با موفقیت نصب شد.';
$lang['admin_modules_install_tip'] = 'ماژول‌ها قابلیت‌ها و امکانات جدیدی به سایت شما اضافه می‌کنند. ماژول‌های موجود را در <a href="%s" target="_blank" rel="noopener">دایرکتوری ماژول‌ها</a> مرور کنید یا یک فایل <b>.zip</b> بارگذاری کنید.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{هیچ افزونه فعالی وجود ندارد.} other{<b>#</b> از <b>%s</b> افزونه فعال هستند.}';
$lang['admin_plugins_add'] = 'افزودن افزونه';
$lang['admin_plugins_delete_confirm'] = 'آیا مطمئن هستید که می‌خواهید افزونه را حذف کنید: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'امکان حذف افزونه وجود ندارد.';
$lang['admin_plugins_delete_success'] = 'افزونه با موفقیت حذف شد.';
$lang['admin_plugins_disable_all_confirm'] = 'آیا مطمئن هستید که می‌خواهید همه پلاگین‌ها را غیرفعال کنید؟';
$lang['admin_plugins_disable_all_error'] = 'قادر به غیرفعال‌سازی همه پلاگین‌ها نیستیم.';
$lang['admin_plugins_disable_all_success'] = 'همه پلاگین‌ها با موفقیت غیرفعال شدند.';
$lang['admin_plugins_disable_confirm'] = 'آیا مطمئن هستید که می‌خواهید افزونه را غیرفعال کنید: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'امکان غیرفعال‌سازی افزونه وجود ندارد.';
$lang['admin_plugins_disable_success'] = 'افزونه با موفقیت غیرفعال شد.';
$lang['admin_plugins_enable_all_confirm'] = 'آیا مطمئن هستید که می‌خواهید همه پلاگین‌ها را فعال کنید؟';
$lang['admin_plugins_enable_all_error'] = 'قادر به فعال‌سازی همه پلاگین‌ها نیستیم.';
$lang['admin_plugins_enable_all_success'] = 'همه پلاگین‌ها با موفقیت فعال شدند.';
$lang['admin_plugins_enable_confirm'] = 'آیا مطمئن هستید که می‌خواهید افزونه را فعال کنید: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'امکان فعال‌سازی افزونه وجود ندارد.';
$lang['admin_plugins_enable_success'] = 'افزونه با موفقیت فعال شد.';
$lang['admin_plugins_install_confirm'] = 'آیا مطمئن هستید که می‌خواهید این افزونه را نصب کنید؟';
$lang['admin_plugins_install_error'] = 'نصب افزونه ناموفق بود.';
$lang['admin_plugins_install_success'] = 'افزونه با موفقیت نصب شد.';
$lang['admin_plugins_install_tip'] = 'افزونه‌ها امکانات موجود را با گزینه‌ها یا یکپارچه‌سازی‌های بیشتر گسترش می‌دهند. از <a href="%s" target="_blank" rel="noopener">دایرکتوری افزونه‌ها</a> نصب کنید یا یک فایل <b>.zip</b> بارگذاری کنید.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'اضافه کردن قالب';
$lang['admin_themes_delete_confirm'] = 'آیا مطمئن هستید که می خواهید این پوسته را حذف کنید: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'امکان حذف تم وجود ندارد.';
$lang['admin_themes_delete_error_active'] = 'شما نمی توانید تم فعال فعلی را حذف کنید.';
$lang['admin_themes_delete_success'] = 'تم با موفقیت حذف شد.';
$lang['admin_themes_disable_confirm'] = 'آیا مطمئن هستید که می‌خواهید قالب <b>%s</b> را غیرفعال کنید؟';
$lang['admin_themes_disable_error'] = 'غیرفعال‌سازی قالب امکان‌پذیر نیست.';
$lang['admin_themes_disable_success'] = 'قالب با موفقیت غیرفعال شد.';
$lang['admin_themes_enable_confirm'] = 'آیا مطمئن هستید که می خواهید این پوسته را فعال کنید: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'امکان فعال سازی قالب وجود ندارد.';
$lang['admin_themes_enable_success'] = 'قالب با موفقیت فعال شد.';
$lang['admin_themes_install_confirm'] = 'آیا مطمئن هستید که می‌خواهید این قالب را نصب کنید؟';
$lang['admin_themes_install_error'] = 'نصب قالب ناموفق بود.';
$lang['admin_themes_install_success'] = 'قالب با موفقیت نصب شد.';
$lang['admin_themes_install_tip'] = 'قالب‌ها ظاهر و چیدمان سایت شما را تغییر می‌دهند. از <a href="%s" target="_blank" rel="noopener">کتابخانه قالب‌ها</a> انتخاب کنید یا یک فایل <b>.zip</b> بارگذاری کنید.';
$lang['admin_themes_none_tip'] = 'این برنامه بدون قالب در حال اجرا است. برای سفارشی‌سازی رابط عمومی، یک قالب نصب کنید.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'منوها';
$lang['admin_menus_assign_error'] = 'به‌روزرسانی محل منوها امکان‌پذیر نیست.';
$lang['admin_menus_assign_success'] = 'محل منوها با موفقیت به‌روزرسانی شد.';
$lang['admin_menus_header'] = 'تعداد <b>%s</b> موقعیت منو موجود است.';
$lang['admin_menus_location'] = 'محل';
$lang['admin_menus_locations'] = 'محل‌های منو';
$lang['admin_menus_manage'] = 'مدیریت منوها';
$lang['admin_menus_menu'] = 'منوی تخصیص‌یافته';
$lang['admin_menus_none'] = '&#151; هیچ &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'افزودن زبان';
$lang['admin_languages_default_confirm'] = 'آیا مطمئن هستید که می خواهید این زبان را به زبان پیش فرض سایت تبدیل کنید؟';
$lang['admin_languages_default_error'] = 'امکان تغییر زبان پیش فرض وجود ندارد.';
$lang['admin_languages_default_error_nochange'] = 'این زبان قبلاً زبان پیش فرض است.';
$lang['admin_languages_default_success'] = 'زبان پیش فرض با موفقیت تغییر یافت.';
$lang['admin_languages_disable_all_confirm'] = 'آیا مطمئن هستید که میخواهید تمام زبانها را غیرفعال کنید؟';
$lang['admin_languages_disable_all_error'] = 'امکان غیرفعالسازی تمام زبانها وجود ندارد.';
$lang['admin_languages_disable_all_success'] = 'تمام زبانها با موفقیت غیرفعال شدند.';
$lang['admin_languages_disable_confirm'] = 'آیا مطمئن هستید که می خواهید زبان <b>%s</b> را غیرفعال کنید؟';
$lang['admin_languages_disable_error'] = 'امکان غیرفعال کردن زبان وجود ندارد.';
$lang['admin_languages_disable_error_default'] = 'زبان پیش‌فرض را نمی‌توان غیرفعال کرد.';
$lang['admin_languages_disable_error_nochange'] = 'این زبان قبلاً غیرفعال شده است.';
$lang['admin_languages_disable_success'] = 'زبان با موفقیت غیرفعال شد.';
$lang['admin_languages_enable_all_confirm'] = 'آیا مطمئن هستید که میخواهید تمام زبانها را فعال کنید؟';
$lang['admin_languages_enable_all_error'] = 'امکان فعالسازی تمام زبانها وجود ندارد.';
$lang['admin_languages_enable_all_success'] = 'تمام زبانها با موفقیت فعال شدند.';
$lang['admin_languages_enable_confirm'] = 'آیا مطمئن هستید که می خواهید زبان <b>%s</b> را فعال کنید؟';
$lang['admin_languages_enable_error'] = 'امکان فعال سازی زبان وجود ندارد.';
$lang['admin_languages_enable_error_nochange'] = 'این زبان قبلاً فعال شده است.';
$lang['admin_languages_enable_success'] = 'زبان با موفقیت فعال شد.';
$lang['admin_languages_install_confirm'] = 'آیا مطمئن هستید که می‌خواهید این زبان را نصب کنید؟';
$lang['admin_languages_install_error'] = 'نصب زبان ناموفق بود.';
$lang['admin_languages_install_success'] = 'زبان با موفقیت نصب شد.';
$lang['admin_languages_install_tip'] = 'زبان‌ها ترجمه‌هایی را برای رابط کاربری و محتوای سایت شما اضافه می‌کنند. زبان‌های موجود را در <a href="%s" target="_blank" rel="noopener">فهرست زبان‌ها</a> مرور کنید یا برای نصب زبان خود، یک بسته <b>.zip</b> بارگذاری کنید.';
$lang['admin_languages_tip'] = 'زبان پیش فرض سایت را فعال، غیرفعال و تنظیم کنید. زبان های فعال برای بازدیدکنندگان سایت در دسترس هستند.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'بسته از قبل وجود دارد.';
$lang['package_archive_download_failed'] = 'دانلود آرشیو بسته با شکست مواجه شد.';
$lang['package_backup_create_error'] = 'ایجاد پشتیبان از بسته با شکست مواجه شد.';
$lang['package_backup_dir_failed'] = 'ایجاد پوشه پشتیبان %s با شکست مواجه شد';
$lang['package_backup_missing'] = 'فایل پشتیبان وجود ندارد.';
$lang['package_backup_path_error'] = 'مسیر فایل پشتیبان قابل حل/پیدا شدن نیست.';
$lang['package_backup_request_invalid'] = 'درخواست پشتیبان نامعتبر است.';
$lang['package_backup_restore_error'] = 'بازیابی پشتیبان بسته با شکست مواجه شد.';
$lang['package_catalog_type_unknown'] = 'نوع کاتالوگ ناشناخته است.';
$lang['package_checksum_error'] = 'تایید مجموع بررسی (Checksum) بسته با شکست مواجه شد.';
$lang['package_copy_files_error'] = 'کپی کردن فایل‌های بسته به مقصد انجام نشد.';
$lang['package_copy_updates_error'] = 'کپی کردن فایل‌های به‌روزرسانی به مقصد انجام نشد.';
$lang['package_dest_dir_failed'] = 'ایجاد پوشه مقصد %s با شکست مواجه شد';
$lang['package_destination_error'] = 'مقصد بسته قابل تعیین نیست.';
$lang['package_download_dir_failed'] = 'ایجاد پوشه دانلود %s با شکست مواجه شد';
$lang['package_download_empty'] = 'دانلود بسته یک پاسخ خالی بازگرداند.';
$lang['package_download_request_invalid'] = 'درخواست دانلود بسته نامعتبر است.';
$lang['package_extract_failed'] = 'استخراج فایل زیپ %s با شکست مواجه شد';
$lang['package_invalid_lang_files'] = 'زبان نامعتبر — فایل‌های زبانی مورد نیاز برنامه وجود ندارند.';
$lang['package_invalid_lang_structure'] = 'زبان نامعتبر — پوشه‌های admin و/یا ci3 وجود ندارند.';
$lang['package_invalid_missing_info'] = '%s نامعتبر: فایل "info.php" وجود ندارد.';
$lang['package_invalid_module_structure'] = 'ماژول نامعتبر — پوشه‌های config و/یا controllers مورد نیاز وجود ندارند.';
$lang['package_invalid_plugin_boot'] = 'افزونه (Plugin) نامعتبر — فایل "boot.php" وجود ندارد.';
$lang['package_invalid_plugin_contents'] = 'افزونه (Plugin) نامعتبر — افزونه‌ها نمی‌توانند شامل کنترلرها یا نماها (views) باشند.';
$lang['package_invalid_theme_boot'] = 'قالب نامعتبر — فایل "boot.php" وجود ندارد.';
$lang['package_invalid_theme_views'] = 'قالب نامعتبر — پوشه views وجود ندارد.';
$lang['package_no_root_dir'] = 'بسته شامل پوشه ریشه (Root) نیست.';
$lang['package_not_downloadable'] = 'بسته به صورت عمومی قابل دانلود نیست.';
$lang['package_not_in_registry'] = 'بسته در رجیستری عمومی موجود نیست.';
$lang['package_request_invalid'] = 'درخواست بسته نامعتبر است.';
$lang['package_rollback_request_invalid'] = 'درخواست بازگشت (Rollback) نامعتبر است.';
$lang['package_root_mismatch'] = 'ریشه آرشیو بسته با %s مطابقت ندارد';
$lang['package_single_root_required'] = 'بسته باید دقیقا شامل یک پوشه ریشه باشد.';
$lang['package_source_error'] = 'منبع بسته قابل تعیین نیست.';
$lang['package_system_core_restricted'] = 'اجزای سیستم را نمی‌توان به عنوان بسته نصب کرد.';
$lang['package_temp_dir_failed'] = 'ایجاد پوشه موقت %s با شکست مواجه شد';
$lang['package_type_unknown'] = 'نوع بسته ناشناخته است.';
$lang['package_update_request_invalid'] = 'درخواست به‌روزرسانی بسته نامعتبر است.';
$lang['package_update_root_mismatch'] = 'ریشه آرشیو به‌روزرسانی با %s مطابقت ندارد.';
$lang['package_upload_dir_failed'] = 'ایجاد پوشه بارگذاری %s با شکست مواجه شد';
$lang['package_url_invalid'] = 'آدرس توزیع بسته نامعتبر است.';
$lang['package_write_failed'] = 'نوشتن بسته در %s با شکست مواجه شد';
$lang['package_zip_not_found'] = 'فایل زیپ بسته وجود ندارد: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'به‌روزرسانی‌های جدید موجود است!';
$lang['update_backup_error'] = 'ایجاد نسخه پشتیبان از بسته موجود امکان‌پذیر نیست. به‌روزرسانی لغو شد.';
$lang['update_check_disabled'] = 'بررسی خودکار به‌روزرسانی غیرفعال است. برای مشاهده به‌روزرسانی‌ها آن را فعال کنید.';
$lang['update_check_error'] = 'در حال حاضر امکان اجرای بررسی به‌روزرسانی وجود ندارد.';
$lang['update_check_success'] = 'بررسی به‌روزرسانی با موفقیت انجام شد.';
$lang['update_install_error'] = 'نصب بسته امکان‌پذیر نبود. نسخه قبلی حفظ شد.';
$lang['update_install_success'] = 'بسته با موفقیت به جدیدترین نسخه به‌روزرسانی شد.';
$lang['update_interval_3days'] = 'هر 3 روز';
$lang['update_interval_biweekly'] = 'هر 2 هفته';
$lang['update_interval_daily'] = 'هر روز';
$lang['update_interval_monthly'] = 'یک بار در ماه';
$lang['update_interval_weekly'] = 'یک بار در هفته';
$lang['update_not_available'] = 'وب‌سایت شما به‌روز است.';
$lang['update_rollback_error'] = 'بازگردانی نسخه قبلی امکان‌پذیر نیست. ممکن است نیاز به دخالت دستی باشد.';
$lang['update_rollback_success'] = 'نسخه قبلی با موفقیت بازگردانی شد.';
$lang['updates_available'] = 'به‌روزرسانی‌های موجود';
$lang['updates_check_now'] = 'اکنون بررسی کنید';
$lang['updates_check_now_confirm'] = 'آیا مطمئن هستید که می‌خواهید اکنون به‌روزرسانی‌ها را بررسی کنید؟';
$lang['updates_current_version'] = 'نسخه فعلی';
$lang['updates_enable'] = 'فعال‌سازی به‌روزرسانی‌ها';
$lang['updates_last_check'] = 'آخرین بررسی: %s';
$lang['updates_latest_version'] = 'جدیدترین نسخه';
$lang['updates_next_check'] = 'بررسی زمان‌بندی شده بعدی: %s';
$lang['updates_previous_version'] = 'نسخه قبلی';
$lang['updates_recent'] = 'اخیراً به‌روزرسانی شده';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'مسدود کردن آدرس IP مشخص شده ناموفق بود.';
$lang['admin_firewall_ban_success'] = 'آدرس IP با موفقیت مسدود شد.';
$lang['admin_firewall_block_ip'] = 'مسدود کردن آدرس IP';
$lang['admin_firewall_delete_confirm'] = 'آیا مطمئن هستید که می‌خواهید آدرس‌های IP انتخاب شده را رفع مسدودیت کنید?';
$lang['admin_firewall_delete_error'] = 'رفع مسدودیت آدرس‌های IP انتخاب شده ناموفق بود.';
$lang['admin_firewall_delete_success'] = 'آدرس‌های IP انتخاب شده با موفقیت رفع مسدودیت شدند.';
$lang['admin_firewall_duration'] = 'مدت زمان مسدودسازی';
$lang['admin_firewall_permanent'] = 'دائمی';
$lang['admin_firewall_reason'] = 'دلیل مسدودسازی';
$lang['admin_firewall_tip'] = 'مشاهده و مدیریت آدرس‌های IP که توسط فایروال به دلیل تخلفات مکرر یا فعالیت مشکوک مسدود شده‌اند.';

// Settings
$lang['404_ban_duration'] = 'مدت زمان مسدود شدن به دلیل خطای ۴۰۴';
$lang['404_threshold'] = 'محدودیت دفعات خطای ۴۰۴';
$lang['uri_ban_duration'] = 'مدت زمان مسدودیت URI';
$lang['uri_strike_threshold'] = 'محدودیت دسترسی URI';
