<?php
/**** Routes ****/
$routes['default_route'] = 'home';
$routes['/about'] = 'home/about';
$routes['testing/(:num)'] = 'news/$1';
$routes['dashboard'] = 'admin/dashboard';
$routes['posts/(:any)/'] = 'news/$1';

///API Routes
$routes['api/json/(:any)/'] = 'api/json/';