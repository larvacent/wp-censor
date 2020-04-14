<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */
require_once 'vendor/autoload.php';

define('CENSOR_VERSION', '1.0.0');
define('CENSOR_PLUGIN_DIR', plugin_basename(dirname(__FILE__)));

function censor_plugin_activation()
{
    $default_options = [
        'region' => "ap-guangzhou",
        'secret_id' => "",
        'secret_key' => "",
    ];
    $censor_options = get_option('censor_options');
    if (!$censor_options) {
        add_option('censor_options', $default_options, '', 'yes');
    };
}

function censor_plugin_deactivation()
{
    $censor_options = get_option('censor_options');
    update_option('censor_options', $censor_options);
}

function censor_add_setting_page()
{
    if (!function_exists('censor_setting_page')) {
        require_once 'censor_setting_page.php';
    }
    add_menu_page('T-Sec 天御', 'T-Sec 天御', 'manage_options', __FILE__, 'censor_setting_page');
}

function censor_client()
{
    $censor_options = get_option('censor_options', true);
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    $cred = new TencentCloud\Common\Credential($censor_options['secret_id'], $censor_options['secret_key']);
    return new TencentCloud\Cms\V20190321\CmsClient($cred, $censor_options['region']);
}

function censor_check($content)
{
    $req = new TencentCloud\Cms\V20190321\Models\TextModerationRequest();
    $req->setContent(base64_encode($content));
    /** @var TencentCloud\Cms\V20190321\Models\TextModerationResponse $resp */
    $resp = censor_client()->TextModeration($req);
    if ($resp->getData()->EvilFlag == 0 || $resp->getData()->EvilType == 100) {
        return true;
    }
    return false;
}

function censor_insert_comment($id, $comment)
{
    if (is_object($comment) && !censor_check($comment->comment_content)) {
        wp_spam_comment($comment->comment_ID);
    }
}