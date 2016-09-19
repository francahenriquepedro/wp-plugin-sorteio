<?php

/*
  Plugin Name: Sorteio
  Plugin URI: https://github.com/eleakim/wp-plugin-sorteio
  Description: Um plugin para WordPress que simula um sorteio. Apenas demonstrando a criação de um plugin para WordPress utilizando metodologias de Orientação à Objeto.
  Version: 1.0
  Author: Pedro H. de França
  Author URI: https://github.com/eleakim
  License: none
  Text Domain: sorteio
 */

define('SORTEIO_BASEPATH', plugin_dir_path(__FILE__));
require_once SORTEIO_BASEPATH . 'class.sorteio.php';

function sorteio_options_panel() {
    add_menu_page('Sorteio page title', 'Sorteio', 8, 'sorteio', 'sorteio_page_func');
}

add_action('admin_menu', 'sorteio_options_panel');

function sorteio_page_func() {
    include SORTEIO_BASEPATH . 'page.php';
}