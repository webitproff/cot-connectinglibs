<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */
//linkFile,linkFileFooter,addFile,addEmbed

defined('COT_CODE') or die('Wrong URL');

if ($env['ext'] !== 'admin') {
	// connect to bootstrap
	if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_bootstrap']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_bootstrap'] == 1) {
	  Resources::addFile(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/js-css-frame/bootstrap/css/bootstrap.min.css', 'css', 200);
	  Resources::linkFileFooter(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/js-css-frame/bootstrap/js/bootstrap.bundle.min.js', 'js', 200);
	}
	// connect to uikit
	if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_uikit']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_uikit'] == 1) {
	  Resources::addFile(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/js-css-frame/uikit/css/uikit.min.css', 'css', 300);
	  Resources::linkFileFooter(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/js-css-frame/uikit/js/uikit.min.js', 'js', 300);
	}
	// connect to fontawesome
	if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_fontawesome_css']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_fontawesome_css'] == 1) {
	  Resources::addFile(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/fontawesome/css/all.min.css', 'css', 350);
		if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_fontawesome_js']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_fontawesome_js'] == 1) {
		  Resources::linkFileFooter(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/fontawesome/js/all.min.js', 'js', 300);
		}
	}
	//connect to jquery
	if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_jquery']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_jquery'] == 1) {
	  Resources::addFile(Cot::$cfg['plugins_dir'] . '/' . 'connectinglibs/libs/jquery/3.7.1/jquery.min.js', 'js', 100);
	}
	//connect to jquery custom style in file 1
	if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_1_link']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_1'] == 1) {
	  Resources::linkFile(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_1_link'], 'css', Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_1_order']);
	}
	//connect to jquery custom style in file 2
	if (!empty(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_2_link']) && Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_2'] == 1) {
	  Resources::linkFile(Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_2_link'], 'css', Cot::$cfg['plugin']['connectinglibs']['connectinglibs_use_custom_style_file_2_order']);
	}

}






