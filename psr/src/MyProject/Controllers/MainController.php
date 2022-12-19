<?php

namespace MyProject\Controllers;

use MyProject\Views\View;

class MainController
{
    private $

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $articles = [
            ['title' => 'article one', 'text' => 'Всем привет, это текст первой статьи'],
            ['title' => 'article two', 'text' => 'bla2 bla2 bla2'],
        ];
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }

    public function sayBay(string $name)
    {
        echo "bay $name";
    }
}
