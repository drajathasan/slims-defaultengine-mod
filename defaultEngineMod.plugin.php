<?php
/**
 * Plugin Name: Modiikasi search engine default
 * Plugin URI: -
 * Description: -
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */

use SLiMS\Plugins;

$plugins = Plugins::getInstance();

include_once __DIR__ . '/DefaultEngine.php';
$plugins->registerSearchEngine(DefaultEngineMod::class);