<?php
/*
Plugin Name: WP-ZFF Zend Framework Full
Plugin URI: http://passavanti.name/wp-zff-zend-framework-full
Description: WP-ZFF Zend Framework Full will make the latest Zend and ZendX libraries available for any plugin to use simply by calling the class name. <strong>Requires PHP 5.2.4 or greater</strong>
Version: 1.11.12-1
Author: Brian Passavanti
Author URI: http://passavanti.name

Copyright 2010  BRIAN_PASSAVANTI  (email : gottaloveit@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function wp_zff_load()
{
        define('WP-ZFF',true);
        set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) );
        require_once 'Zend/Loader/Autoloader.php';
        Zend_Loader_Autoloader::getInstance();
}

function wp_zff_init()
{
        do_action('load_wp_zff');
}

add_action('plugins_loaded','wp_zff_init');
add_action('load_wp_zff','wp_zff_load');
