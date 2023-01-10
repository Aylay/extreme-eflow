<?php

$templatepath = get_template_directory();
global $post;

if (is_admin()) {
  include($templatepath.'/functions/admin.php');
} elseif (!defined('XMLRPC_REQUEST') && !defined('DOING_CRON')) {
  include($templatepath.'/functions/front.php');
}
include($templatepath.'/functions/all.php');

add_theme_support('post-thumbnails');