<?php

return array(
    'name' => /*_wp*/('Custommenu'),
    'description' => /*_wp*/('Storefront’s product filtering by brand (manufacturer)'),
    'vendor'=>'webasyst',
    'version'=>'1.0.0',
    'img'=>'img/brands.png',
    'icons'=>array(
        16 => 'img/brands.png',
    ),
    'handlers' => array(
      'backend_menu' => 'addBackendSettings',
      'custom_menu' => 'displayMenu',

      //...
    ),

);
//EOF
