<?php

function censor_setting_page()
{
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient privileges!');
    }
    $censor_options = get_option('censor_options');
    if ($censor_options && isset($_GET['_wpnonce']) && wp_verify_nonce($_GET['_wpnonce']) && !empty($_POST)) {
        if ($_POST['type'] == 'censor_info_set') {
            foreach ($censor_options as $k => $v) {
                $censor_options[$k] = (isset($_POST[$k])) ? sanitize_text_field(trim(stripslashes($_POST[$k]))) : '';
            }
            update_option('censor_options', $censor_options);
            ?>
            <div class="update-nag">设置保存完毕!!!</div>
            <?php
        }
    }
    ?>
    <style>
        table {
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid #cccccc;
            padding: 5px;
        }

        .buttoncss {
            background-color: #4CAF50;
            border: none;
            cursor: pointer;
            color: white;
            padding: 15px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }

        .buttoncss:hover {
            background-color: #008CBA;
            color: white;
        }

        input {
            border: 1px solid #ccc;
            padding: 5px 0px;
            border-radius: 3px;
            padding-left: 5px;
        }
    </style>
    <div style="margin:5px;">
        <h2>T-Sec 天御设置</h2>
        <hr/>
        <p> 文本内容安全 精准识别涉黄、涉政、涉恐文本，释放业务风险，节省审核人力</p>
        <p>插件网站： <a href="https://www.tintsoft.com" target="_blank">天智软件</a></p>
        <hr/>
        <form action="<?php echo wp_nonce_url('./admin.php?page=' . CENSOR_PLUGIN_DIR . '/censor_actions.php'); ?>"
              name="form" method="post">
            <table>
                <tr>
                    <td style="text-align:right;">
                        <b>接入地域：</b>
                    </td>
                    <td>
                        <input type="text" name="region" value="<?php echo esc_attr($censor_options['region']); ?>"
                               size="50"
                               placeholder="接入的天御地域 比如：ap-shanghai"/>
                        <p>接入的天御地域，支持就近接入。</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">
                        <b>SecretId 设置：</b>
                    </td>
                    <td><input type="text" name="secret_id" value="<?php echo esc_attr($censor_options['secret_id']); ?>"
                               size="50" placeholder="secretID"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;">
                        <b>SecretKey 设置：</b>
                    </td>
                    <td>
                        <input type="text" name="secret_key"
                               value="<?php echo esc_attr($censor_options['secret_key']); ?>" size="50"
                               placeholder="secretKey"/>
                        <p>登入 <a href="https://console.cloud.tencent.com/cam" target="_blank">访问管理</a>
                            找到你要使用的账户，然后创建或使用现有的 <code>SecretId | SecretKey</code>。如果没有设置的需要创建一组。点击 <code>新建密钥</code>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th>

                    </th>
                    <td><input type="submit" name="submit" value="保存设置" class="buttoncss"/></td>
                </tr>
            </table>
            <input type="hidden" name="type" value="censor_info_set">
        </form>
    </div>
    <?php
}
?>