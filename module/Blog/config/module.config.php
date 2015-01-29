<?php
return array(
  // Setup view manager config
  'view_manager' => array(
    'template_stack_path' => array(
      __DIR__ . '/../view'
    ),
  ),
  
  // Start of Controller config
  'controllers' => array(
    'invokables' => array(
      'Blog\Controller\List' => 'Blog\Controller\ListController'
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