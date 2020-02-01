<?php
declare(strict_types=1);

class HomeController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/home.css');

    }

}

