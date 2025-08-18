<?php

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLink extends BaseController
{

  public function register()
  {
    add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
  }

  public function settings_link($links)
  {

    $links   = (array) $links;  
    $links[] = '<a href="admin.php?page=ahmed_plugin">Settings</a>';
    return $links;
  }
}
