<?php
// inc/shortcodes/init.php

$shortcode_files = glob(__DIR__ . '/*.php');

foreach ($shortcode_files as $file) {
    if (basename($file) !== 'init.php') {
        require_once $file;
    }
}
