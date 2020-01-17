<?php

session_start();

ini_set('display_errors',1);
define('MAX_FILE_SIZE', 1 + 1024 * 1024);
define('THUMBNAIL_WIDTH', 400);
define('IMAGES_DIR', __DIR__ . '/images');
define('THUMBNAIL_DIR', __DIR__ . '/thumbs');

if (!function_exists('imagecreatetruecolor')) {
  echo 'GD not installed';
  exit;
}

require_once(__DIR__ . '/functions.php');

 ?>
