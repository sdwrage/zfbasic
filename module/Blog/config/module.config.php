<?php
return array(
  // Service Manager
  'service_manager' => array(
    'invokables' => array(
      'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService',
    ),
  ),
  // Setup view manager config
  'view_manager' => array(
    'template_path_stack' => array(
      __DIR__ . '/../view',
    ),
  ),

  // Start of Controller config
  'controllers' => array(
    'factories' => array(
      'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory'
    ),
  ),

  // Start of Router Config
  'router' => array(
    'routes' => array(
      'post' => array(            // Route Name
        'type' => 'literal',      // The type of route this is
        'options' => array(       // The route options
          'route' => '/blog',     // the literal route for this route name
          'defaults' => array(    // the defaults (controller/action) for this route name
            'controller'  => 'Blog\Controller\List',
            'action'      => 'index',
          ),
        ),
      ),
    ),
  ),
);
