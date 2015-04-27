<?php

 return array(
     'controllers' => array(
         'invokables' => array(
             'Producto\Controller\Producto' => 'Producto\Controller\ProductoController',
         ),
     ),


     'router' => array(
         'routes' => array(
             'album' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/producto[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Producto\Controller\Producto',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     

    'view_manager' => array(
    'display_not_found_reason' => true,
    'display_exceptions'       => true,
    'doctype'                  => 'HTML5',
    'not_found_template'       => 'error/404',
    'exception_template'       => 'error/index',
    'template_map' => array(
        'producto/index/index'    => __DIR__ . '/../view/producto/producto/index.phtml',
        'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',        
        'error/404'               => __DIR__ . '/../view/error/404.phtml',
        'error/index'             => __DIR__ . '/../view/error/index.phtml',
    ),
    'template_path_stack' => array(
        'producto' =>    __DIR__ . '/../view',
      

    ),
    ),





 );