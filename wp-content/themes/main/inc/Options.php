<?php
/**
 * Author: NguyenBa <banv.drei@gmail.com>
 * Last Edited: 01 September 2020
 * Edited By: NguyenBa
 */

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    // acf_add_options_sub_page(array(
    //     'page_title' 	=> 'Other',
    //     'menu_title'	=> 'Other Settings',
    //     'parent_slug'	=> 'theme-general-settings',
    // ));

    // LDP The Origami
    acf_add_options_page(array(
        'page_title' => 'Home',
        'menu_title' => 'Trang chủ',
        'menu_slug' => 'home-page',
        'capability' => 'edit_posts',
        'position' => '1',
        'icon_url' => 'dashicons-admin-home',
        'redirect'		=> false
    ));
    acf_add_options_page(array(
        'page_title' => 'Project',
        'menu_title' => 'Dự án',
        'menu_slug' => 'product-page',
        'capability' => 'edit_posts',
        'position' => '1.1',
        'icon_url' => 'dashicons-admin-home',
        'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Library',
        'menu_title'	=> 'Library',
        'parent_slug'	=> 'ldp-the-origami',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Agency',
        'menu_title'	=> 'Agency',
        'parent_slug'	=> 'ldp-the-origami',
    ));
}