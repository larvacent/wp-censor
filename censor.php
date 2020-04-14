<?php
/*
Plugin Name: 腾讯云 T-Sec 天御
Plugin URI: https://www.tintsoft.com
Description: 文本内容安全（Text Moderation System，TMS）服务使用了深度学习技术，可有效识别涉黄、涉政、涉恐等有害内容，支持用户配置词库，打击自定义的违规文本。
Version: 1.0
Author: 天智软件
Author URI: https://www.tintsoft.com
*/
// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

require_once 'censor_actions.php';

//激活插件钩子
register_activation_hook(__FILE__, 'censor_plugin_activation');
//停用插件钩子
register_deactivation_hook(__FILE__, 'censor_plugin_deactivation');

add_action('wp_insert_comment', 'censor_insert_comment', 10, 2);

//add_filter( 'preprocess_comment', array( 'Akismet', 'auto_check_comment' ), 1 );
//add_filter( 'rest_pre_insert_comment', array( 'Akismet', 'rest_auto_check_comment' ), 1 );

add_action('admin_menu', 'censor_add_setting_page');

