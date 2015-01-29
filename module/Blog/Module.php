<?php

namespace Blog;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements ConfigProviderInterface, AutoloaderProviderInterface
{
  // Get the configuration for this module
  public function getConfig() 
  {
    return include __DIR__ . '/config/module.config.php';
  }

  // Set up autoloading of files for this module
  public function getAutoloaderConfig()
  {
    return array(
         'Zend\Loader\StandardAutoloader' => array(
             'namespaces' => array(
                 // Autoload all classes from namespace 'Blog' from '/module/Blog/src/Blog'
                 __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
             )
         )
     );
  }
}