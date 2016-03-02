<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 29/02/16
 * Time: 20:00
 */

namespace MVC\Controller;


class FormElements
{
    private $html;

    public function button(array $parametros)
    {
        $this->html = "";

        $this->html .= "<button";

        if (isset($parametros['name'])){
            $this->html .= " name='".$parametros['name']."'";
        }

        if (isset($parametros['id'])){
            $this->html .= " id='".$parametros['id']."'";
        }

        if (isset($parametros['class'])){
            $this->html .= " class='".$parametros['class']."'";
        }

        if (isset($parametros['type'])){
            $this->html .= " type='".$parametros['type']."'";
        }

        if (isset($parametros['texto'])){
            $this->html .= ">".$parametros['texto'];
        }

        $this->html .= "</button>";

        return $this->html;
    }

    public function input(array $parametros)
    {
        $this->html = "";

        $this->html .= "<input";

        if (isset($parametros['name'])){
            $this->html .= " name='".$parametros['name']."'";
        }

        if (isset($parametros['id'])){
            $this->html .= " id='".$parametros['id']."'";
        }

        if (isset($parametros['class'])){
            $this->html .= " class='".$parametros['class']."'";
        }

        if (isset($parametros['type'])){
            $this->html .= " type='".$parametros['type']."'";
        }

        if (isset($parametros['placeholder'])){
            $this->html .= " placeholder='".$parametros['placeholder']."'";
        }

        $this->html .= ">";

        return $this->html;
    }

    public function label(array $parametros)
    {
        $this->html = "";

        $this->html .= "<label";

        if (isset($parametros['for'])){
            $this->html .= " for='".$parametros['for']."'";
        }

        if (isset($parametros['texto'])){
            $this->html .= ">".$parametros['texto'];
        }

        $this->html .= "</label>";

        return $this->html;
    }
}