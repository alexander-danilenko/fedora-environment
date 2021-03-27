<?php

/* Development services ======================================================*/
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

/* Devel services ============================================================*/
$config['devel.settings']['error_handlers'][1] = 1; // Standard drupal errors.
$config['devel.settings']['devel_dumper'] = 'var_dumper';

/* Performance ===============================================================*/
$config['system.performance']['cache']['page']['max_age'] = 24 * 3600;
$config['system.performance']['css'] = ['preprocess' => FALSE, 'gzip' => FALSE];
$config['system.performance']['js'] = ['preprocess' => FALSE, 'gzip' => FALSE];

/* Memcache ==================================================================*/

//$settings['memcache']['servers'] = ['memcached:11211' => 'default'];
//$settings['memcache']['key_prefix'] = '';
//$settings['memcache']['bins'] = ['default' => 'default'];

//$settings['cache']['bins']['bootstrap'] = 'cache.backend.memcache';
//$settings['cache']['bins']['config'] = 'cache.backend.memcache';
//$settings['cache']['bins']['container'] = 'cache.backend.memcache';
//$settings['cache']['bins']['data'] = 'cache.backend.memcache';
//$settings['cache']['bins']['default'] = 'cache.backend.memcache';
//$settings['cache']['bins']['discovery'] = 'cache.backend.memcache';
//$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.memcache';
//$settings['cache']['bins']['entity'] = 'cache.backend.memcache';
//$settings['cache']['bins']['menu'] = 'cache.backend.memcache';
//$settings['cache']['bins']['page'] = 'cache.backend.memcache';
//$settings['cache']['bins']['render'] = 'cache.backend.memcache';

/* Disabled cache bins =======================================================*/

//$settings['cache']['bins']['bootstrap'] = 'cache.backend.null';
//$settings['cache']['bins']['config'] = 'cache.backend.null';
//$settings['cache']['bins']['container'] = 'cache.backend.null';
//$settings['cache']['bins']['data'] = 'cache.backend.null';
//$settings['cache']['bins']['default'] = 'cache.backend.null';
//$settings['cache']['bins']['discovery'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
//$settings['cache']['bins']['entity'] = 'cache.backend.null';
//$settings['cache']['bins']['menu'] = 'cache.backend.null';
//$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['render'] = 'cache.backend.null';

/* Error reporting ===========================================================*/

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//$config['system.logging']['error_level'] = 'hide'; /* Hide all errors/warnings/notices. */
//$config['system.logging']['error_level'] = 'some'; /* Errors and warnings. No notices. */
//$config['system.logging']['error_level'] = 'all';  /* All messages. */
$config['system.logging']['error_level'] = 'verbose'; /* All messages, with backtrace information. */

/* Other configuration =======================================================*/
$settings['http_client_config']['timeout'] = 60; // Guzzle client timeout.
