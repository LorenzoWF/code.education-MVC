<?php

/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 28/02/16
 * Time: 02:32
 */

namespace MVC\Controller;

use MVC\Controller\Form;
use MVC\Controller\FormElements;

abstract class Action
{
    protected $view;
    protected $action;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function form(array $paramForm)
    {
        $form = new Form($paramForm);
        $html = $form->getHtml();

        return $html;
    }

    public function formElements(array $input)
    {
        $form = new FormElements();
        $html = $form->input($input);

        return $html;
    }

    public function render($action, $layout = true)
    {
        $this->action = $action;
        if ($layout == true && file_exists("../App/Views/layout.phtml")){
            include_once '../App/Views/layout.phtml';
        } else{
            $this->content();
        }
    }

    public function content()
    {
        $atual = get_class($this);
        $singleClassName = strtolower(str_replace("App\\Controllers\\","",$atual));

        include_once '../App/Views/'.$singleClassName."/".$this->action.'.phtml';
    }
}