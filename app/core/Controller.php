<?php

namespace app\Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {

        require  __DIR__ . '/../views/pages/' . $view . '.php';
    }
}
