<?php

// Database configuration.

//$databases['default']['default'] = array(
//  'driver'    => 'mysql',
//  'database'  => 'drupal',
//  'username'  => 'root',
//  'password'  => '',
//  'host'      => 'db',
//);

// Current $base_url with protocol included.
$domain = $_SERVER['HTTP_HOST']; // Adjust if you need.
$current_domain_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://') . $domain;

// Name of folder in sites/*
$sites_folder = 'default';

$base_url = $current_domain_url;

// File system
$conf['file_public_path'] = 'sites/' . $sites_folder . '/files';
$conf['file_private_path'] = $conf['file_public_path'] . '/private';
$conf['file_temporary_path'] = '/tmp';

// Stage file proxy.
$conf['stage_file_proxy_origin'] = 'https://www.example.com/';

// Increase JPG image quality for better images.
$conf['image_jpeg_quality'] = 99;

// Disable user registration.
//$conf['user_register'] = 0;

// mobile_tools module redirect.
$conf['mobile_tools_desktop_url'] = 'http://' . $domain;

// Autoswitch XML sitemap base URL.
$conf['xmlsitemap_base_url'] = $current_domain_url;

// Share sessions between HTTP and HTTPS hosts.
$conf['https'] = TRUE;

// Disable securepages module if exists.
$conf['securepages_enable'] = FALSE;

// Disable Security Kit HTTPS infinite loop redirect
// caused by conflict with Security Kit + Secure Pages.
$conf['seckit_ssl'] = [
  'hsts' => FALSE,
  'hsts_max_age' => 1000,
  'hsts_subdomains' => FALSE,
];

// Development settings
error_reporting(-1);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/**
 * Error reporting
 * 0 = None
 * 1 = Errors and warnings
 * 2 = All messages, including notices
 */
$conf['error_level'] = 2;

// Add comments in HTML for detecting templates.
$conf['theme_debug'] = TRUE;

// Emails debug (requires Devel module enabled).
$conf['mail_system']['default-system'] = 'DevelMailLog';
$conf['devel_debug_mail_directory'] = 'E:\emails';

// Caching.
$conf['cache'] = FALSE; // Disable caching for anonymous.
$conf['cache_lifetime'] = 0; // Disable agressive cachinh.
$conf['page_cache_maximum_age'] = 86400; // 1 day.

// Memcache settings.
$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['memcache_servers'] = [
  'memcache:11211' => 'default',
];

// JS/CSS aggregation.
$conf['preprocess_js'] = FALSE;
$conf['preprocess_css'] = FALSE;

// Less devel mode (regenerate less on each page load).
$conf['less_devel'] = TRUE;

// Acquia environment-specific configuration.
if (!isset($_SERVER['AH_SITE_ENVIRONMENT'])) {
  $_SERVER['AH_SITE_ENVIRONMENT'] = 'local';
}
switch ($_SERVER['AH_SITE_ENVIRONMENT']) {
  case 'dev':
    break;
  case 'test':
    break;
  case 'prod':
    break;
  default:
    break;
}
