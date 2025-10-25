<?php

namespace App\router;

class Route
{
    public static function router()
    {
        $self = new self();
        $base_dir = __DIR__ . '/../view';

        $path = $base_dir . $_SERVER['REQUEST_URI'] . '.php';

        if ($_SERVER['REQUEST_URI'] == '/') {
            $path = $base_dir . '/home.php';
            echo 'Adicionar pagina inicial da aplicação';
            die;
        }
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo 'Adicionar pagina inicial da aplicação';
            die;
        }

        #caso o arquivo nao exista iremos adiconar erro 404
        if (!file_exists($path)) {
            require_once $base_dir . '/error/404.php';
            die;
        }
        require_once $path;
        die;
    }
}
