<?php
/**
 *
 * Bootstrap Theme
 *
 *
 */
 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME {
     use Singleton;
     protected  function __construct()
     {
         wp_die('hello');
         $this->set_hooks();
     }
     protected function  set_hooks()
     {
         //actions and filters
     }
 }