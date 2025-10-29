<?php

namespace app\router;

use app\controller\cliente\InsertCliente;

class Route
{
    #Metodo GET para carregar paginas.
    private function get()
    {
        #Diretorio da camada de visualização.
        $base_dir =  __DIR__ . '/../view';
        #Captura o caminha completo até o arquivo.
        $path = $base_dir . $_SERVER['REQUEST_URI'] . '.php';
        if ($_SERVER['REQUEST_URI'] === '/home') {
            require_once $base_dir . '/home.php';
            die;
        }
        if ($_SERVER['REQUEST_URI'] === '/') {
            require_once $base_dir . '/home.php';
            die;
        }
        #Caso o arquivo não exista adicionar o erro 404.
        if (!file_exists($path)) {
            require_once $base_dir . '/error/404.php';
            die;
        }
        require_once $path;
        die;
    }
    private function post()
    {
        $request_uri = $_SERVER["REQUEST_URI"];
        $request = explode('/', $request_uri);
        $option = $request[1];
        $resource = $request[2];
        switch ($option) {
            case 'cliente':
                if ($resource === 'insert') {
                    InsertCliente::Insert();
                }
                if ($resource === 'update') {
                }
                if ($resource === 'delete') {
                }
                break;

            default:
                # code...
                break;
        }
        die;
    }
    public static function router()
    {
        $self = new self;
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') {
            $self->get();
        }
        if ($method === 'POST') {
            $self->post();
        }
    }
}