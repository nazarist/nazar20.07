<?php

namespace MyProject\Views;

class View
{
    private $templatePath;

    public function __construct(string $templatePath)
    {
        $this->templatePath = $templatePath;
    }

    public function renderHtml(string $templateNme, array $vars = [])
    {
        extract($vars);

        ob_start();
        include $this->templatePath . '/' . $templateNme;
        $buffer = ob_get_contents();
        ob_end_clean();

        echo $buffer;
    }
}