<?php

namespace  Inc\Base;

class Enqueue
{
  public function register()
  {
    add_action('admin_enqueue_scripts', array($this, 'enqueue'));
  }
  function enqueue()
  {
    wp_enqueue_style('mypluginstyle', PLUGIN_DIR . 'assets/mystyle.css');
    wp_enqueue_script('mypluginscript',  PLUGIN_DIR . 'assets/myscript.js');
  }
}
