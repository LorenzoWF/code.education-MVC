<?php

/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 27/02/16
 * Time: 23:28
 */

namespace App;

use MVC\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
        $ar['nosso_trabalho'] = array('route' => '/nosso_trabalho', 'controller' => 'index', 'action' => 'nossoTrabalho');
        $ar['localizacao'] = array('route' => '/localizacao', 'controller' => 'index', 'action' => 'localizacao');
        $ar['fale_conosco'] = array('route' => '/fale_conosco', 'controller' => 'index', 'action' => 'faleConosco');
        $this->setRoutes($ar);
    }
}