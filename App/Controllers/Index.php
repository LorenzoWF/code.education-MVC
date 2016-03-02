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
        $input = array("tipo" => "input",
                       "array" => array("name" => "texto",
                                        "type" => "text",
                                        "class" => "form-control",
                                        "placeholder" => "Nome"));

        $botao = array("tipo" => "button",
                       "array" => array ("name" => "botao",
                                         "type" => "submit",
                                         "class" => "btn btn-success",
                                         "texto" => "Botao"));

        $paramForm = array("action" => "",
                           "method" => "post",
                           "class" => "",
                           "campos" => array($input, $botao));

        $form = $this->form($paramForm);

        $this->view->form = $form;

        $this->render('faleConosco');
    }

    public function newsletter()
    {
        $input = array("name" => "email",
                       "type" => "email",
                       "class" => "form-control",
                       "placeholder" => "Insira seu e-mail");

        $campo = $this->formElements($input);

        $this->view->campo = $campo;

        $this->render('newsletter');
    }

}