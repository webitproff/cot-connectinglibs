<?php


defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_name'] = 'Connecting Libs';
$L['info_desc'] = 'Connecting compiled CSS and JavaScript libraries for Cotonti';

/**
 * Plugin Config
 */

$L['cfg_connectinglibs_sep_uikit'] = 'UIkit front-end framework';
$L['cfg_connectinglibs_use_uikit'] = 'Connecting UIKit 3';
$L['cfg_connectinglibs_use_uikit_hint'] = '<a href="https://getuikit.com/docs/introduction" target="_blank">Documentation</a>';

$L['cfg_connectinglibs_sep_bootstrap'] = 'Bootstrap front-end framework';
$L['cfg_connectinglibs_use_bootstrap'] = 'Подключаем Bootstrap 5.3';
$L['cfg_connectinglibs_use_bootstrap_hint'] = '<a href="https://getbootstrap.com/" target="_blank">Documentation</a>';

$L['cfg_connectinglibs_sep_fontawesome'] = 'Font Awesome 6.5.2';
$L['cfg_connectinglibs_use_fontawesome_css'] = 'Connecting Font Awesome';
$L['cfg_connectinglibs_use_fontawesome_css_hint'] = 'The file will be connected «plugins/connectinglibs/libs/fontawesome/css/all.min.css». <a href="https://fontawesome.com/search?o=r&m=free" target="_blank">Поиск иконок и Documentation</a>';

$L['cfg_connectinglibs_use_fontawesome_js'] = 'Connecting Font Awesome scripts';
$L['cfg_connectinglibs_use_fontawesome_js_hint'] = 'The file will be connected «plugins/connectinglibs/libs/fontawesome/js/all.min.js». It is mainly needed for icon animation.';

$L['cfg_connectinglibs_sep_jquery'] = 'jQuery v3.7.1';
$L['cfg_connectinglibs_use_jquery'] = 'Connecting the local jQuery v3.7.1';
$L['cfg_connectinglibs_use_jquery_hint'] = '<a href="https://jquery.com/" target="_blank">Documentation</a>';

$L['cfg_connectinglibs_sep_style_file_1'] = 'Custom styles file #1';
$L['cfg_connectinglibs_use_custom_style_file_1'] = 'Connecting styles in file #1';
$L['cfg_connectinglibs_use_custom_style_file_1_link'] = 'The URL for using custom styles in file #1';
$L['cfg_connectinglibs_use_custom_style_file_1_link_hint'] = 'for example, - https://domainname.com/assets/foldername/css/style.css';
$L['cfg_connectinglibs_use_custom_style_file_1_order'] = 'Connection order (Priority)';

$L['cfg_connectinglibs_sep_style_file_2'] = 'Connecting styles in file #2';
$L['cfg_connectinglibs_use_custom_style_file_2'] = 'Connecting styles in file #2';
$L['cfg_connectinglibs_use_custom_style_file_2_link'] = 'The URL for using custom styles in file #2';
$L['cfg_connectinglibs_use_custom_style_file_2_link_hint'] = 'for example, - https://domainname.com/assets/css/super-styles.css';
$L['cfg_connectinglibs_use_custom_style_file_2_order'] = 'Connection order (Priority)';