<?php
declare(strict_types=1);

class ManageController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/manage.css');
    }

}

