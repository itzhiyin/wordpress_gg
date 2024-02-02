<?php
if (!defined('ABSPATH')) {
    die('-1');
}
//一键崩溃
if(in_array('yjbk', $wordpress_gg_datas)) {
add_action( 'wp_head', 'wordpress_gg_yjbk_js' );
}



