<?php

/*
Plugin Name: cu theme
Plugin URI: mohammadalikazeminejad.ir
Description: this plugin create custom theme admin panels in wordpress
Author: mohammadali kazeminejad
Version: 0.2
Author URI: mohammadalikazeminejad.ir
*/

function cu_admin_theme_style(){
wp_enqueue_style( 'sefr-admin-theme', plugins_url('css/wp-admin.css', __FILE__));
}

function cu_login_theme_style(){
wp_enqueue_style( 'sefr-login-theme', plugins_url('css/wp-login.css', __FILE__));

}

add_action( 'admin_enqueue_scripts', 'cu_admin_theme_style');
add_action( 'login_enqueue_scripts', 'cu_login_theme_style');
