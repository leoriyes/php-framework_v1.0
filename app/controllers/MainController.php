<?php

namespace app\controllers;

use framework\App;
use framework\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $posts = \R::findAll('test');
        $names = ['John', 'Alex', 'Mike'];

        $cache = Cache::instance();
        $data = $cache->get('test');

        if(!$data) {
            $cache->set('test', $names);
        }
        debug($data);

        $this->setMeta(App::$app->getProperty('project_name'), 'Описание страницы', 'Ключевые слова');
        $this->set(compact('posts'));
    }
}