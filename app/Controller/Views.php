<?php
/**
 * 
 */

namespace App\Controller;

class Views
{

    private $twig;
    private $loader;

    public function __construct()
    {
        $this->loader = new \Twig_Loader_Filesystem('../app/Views/');
        $this->twig = new \Twig_Environment($this->loader);

    }


    public function render($template, $params)
    {
            return $this->twig->render($template, $params);
    }
}