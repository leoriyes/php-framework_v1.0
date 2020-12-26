<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \framework\App();

\framework\App::$app->setProperty('test', 'value');

// throw new Exception('Страница не найдена', 404);
// debug(\framework\Router::getRoutes());