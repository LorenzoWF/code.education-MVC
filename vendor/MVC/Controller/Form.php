<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 29/02/16
 * Time: 19:32
 */

namespace MVC\Controller;

use MVC\Controller\FormElements;

class Form extends FormElements
{
    private $html = "";

    public function __construct(array $paramForm)
    {
        $this->html .= "<form ";
        $this->html .= "action='".$paramForm['action']."' ";
        $this->html .= "method='".$paramForm['method']."' ";
        $this->html .= "class='".$paramForm['class']."' ";
        $this->html .= ">";

        foreach($paramForm['campos'] as $campo){
            $tipo = $campo['tipo'];
            $resultado = $this->$tipo($campo['array']);

            $this->html .= $resultado;
        }

        $this->html .= "</form>";
    }

    public function getHtml()
    {
        return $this->html;
    }
}