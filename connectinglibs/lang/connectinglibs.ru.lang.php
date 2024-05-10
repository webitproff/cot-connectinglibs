<?php


defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_name'] = 'Connecting Libs';
$L['info_desc'] = 'Подключение скомпилированных библиотек CSS и JavaScript для Cotonti';

/**
 * Plugin Config
 */

$L['cfg_connectinglibs_sep_uikit'] = 'UIkit front-end framework';
$L['cfg_connectinglibs_use_uikit'] = 'Подключаем UIkit 3';
$L['cfg_connectinglibs_use_uikit_hint'] = '<a href="https://getuikit.com/docs/introduction" target="_blank">Документация</a>';

$L['cfg_connectinglibs_sep_bootstrap'] = 'Bootstrap front-end framework';
$L['cfg_connectinglibs_use_bootstrap'] = 'Подключаем Bootstrap 5.3';
$L['cfg_connectinglibs_use_bootstrap_hint'] = '<a href="https://getbootstrap.com/" target="_blank">Документация</a>';

$L['cfg_connectinglibs_sep_fontawesome'] = 'Font Awesome 6.5.2';
$L['cfg_connectinglibs_use_fontawesome_css'] = 'Подключаем Font Awesome';
$L['cfg_connectinglibs_use_fontawesome_css_hint'] = 'Будет подключен файл «plugins/connectinglibs/libs/fontawesome/css/all.min.css». <a href="https://fontawesome.com/search?o=r&m=free" target="_blank">Поиск иконок и Документация</a>';

$L['cfg_connectinglibs_use_fontawesome_js'] = 'Подключаем скрипты Font Awesome';
$L['cfg_connectinglibs_use_fontawesome_js_hint'] = 'Будет подключен файл «plugins/connectinglibs/libs/fontawesome/js/all.min.js». Нужен в основном для анимации иконок.';

$L['cfg_connectinglibs_sep_jquery'] = 'jQuery v3.7.1';
$L['cfg_connectinglibs_use_jquery'] = 'Подключаем локальный jQuery v3.7.1';
$L['cfg_connectinglibs_use_jquery_hint'] = '<a href="https://jquery.com/" target="_blank">Документация</a>';

$L['cfg_connectinglibs_sep_style_file_1'] = 'Пользовательские стили файл №1';
$L['cfg_connectinglibs_use_custom_style_file_1'] = 'Подключаем стили в файле №1';
$L['cfg_connectinglibs_use_custom_style_file_1_link'] = 'URL-адрес для использования пользовательских стилей в файле № 1';
$L['cfg_connectinglibs_use_custom_style_file_1_link_hint'] = 'например, - https://domainname.com/assets/foldername/css/style.css';
$L['cfg_connectinglibs_use_custom_style_file_1_order'] = 'Порядок подключения (Приоритетность)';

$L['cfg_connectinglibs_sep_style_file_2'] = 'Пользовательские стили файл №2';
$L['cfg_connectinglibs_use_custom_style_file_2'] = 'Подключаем стили в файле №2';
$L['cfg_connectinglibs_use_custom_style_file_2_link'] = 'URL-адрес для использования пользовательских стилей в файле № 2';
$L['cfg_connectinglibs_use_custom_style_file_2_link_hint'] = 'например, - https://domainname.com/assets/css/super-styles.css';
$L['cfg_connectinglibs_use_custom_style_file_2_order'] = 'Порядок подключения (Приоритетность)';