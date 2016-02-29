<?php

/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 28/02/16
 * Time: 00:06
 */
namespace App\Controllers;

use MVC\Controller\Action;

class Index extends Action
{
    public function index()
    {
        $nomes = array("Lorenzo", "Mirella", "Rodrigo");

        $this->view->nomes = $nomes;

        $this->render('index');
    }

    public function empresa()
    {
        $this->render('empresa');
    }

    public function nossoTrabalho()
    {
        $this->render('nossoTrabalho', false);
    }

    public function localizacao()
    {
        $this->render('localizacao', false);
    }

    public function faleConosco()
    {
        $this->render('faleConosco');
    }

}