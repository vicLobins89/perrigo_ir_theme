<?php
/**
 * Template Name: Holding Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php wp_head(); ?>
<?php $options = get_option('rh_settings'); ?>
<?php
echo '<div style="text-align: center;">';
echo '<a id="logo" href="'. home_url() .'"><img src="'. $options['logo'] .'" alt="'. get_bloginfo('name') .'" /></a>';
echo '<h1>Coming Soon</h1>';
echo '</div>';
?>