<?php  
  
  // Load Config
  require_once '/web/www/'.'/camagru/app/config/config.php';
  //load Helpers
  require_once '/web/www/'.'/camagru/app/helpers/url_helper.php';
  require_once '/web/www/'.'/camagru/app/helpers/session_helper.php';
  // Autoload Core Libraries
  require_once '/web/www/'.'/camagru/app/config/Controller.php';
  require_once '/web/www/'.'/camagru/app/config/Core.php';
  require_once '/web/www/'.'/camagru/app/config/database.php';

  // spl_autoload_register(function($className){
  //   require_once 'config/' . $className . '.php';
  // });

  
