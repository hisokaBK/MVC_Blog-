<?php

namespace App\Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {
        extract($data);
        // $viewFile = __DIR__ . '/../views/pages/' . $view . '.php';
        // $layoutFile = __DIR__ . '/../Views/layouts/main.php';

        // if (!file_exists($viewFile)) {
        //     throw new \Exception("View $view not found");
        // }

        // require $layoutFile;

        require  __DIR__ . '/../views/pages/' . $view . '.php';
    }
}
