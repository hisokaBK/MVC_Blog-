<?php

namespace app\Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {
        var_dump(extract($data)) ;

        var_dump($data)  ;

        require  __DIR__ . '/../views/pages/' . $view . '.php';
    }
}
