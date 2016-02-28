<?php

/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 28/02/16
 * Time: 00:06
 */
namespace App\Controllers;

class Index
{
    public function index()
    {
        $conteudo1 = "Esse é o conteudo 1 da página Home gerado aleatóriamente";
        $conteudo2 = "Esse é o conteudo 2 da página Home gerado aleatóriamente";

        $selecao = array($conteudo1, $conteudo2);

        $chave = array_rand($selecao);

        echo $selecao[$chave];
    }

    public function empresa()
    {
        $conteudo1 = "Esse é o conteudo 1 da página Empresa gerado aleatóriamente";
        $conteudo2 = "Esse é o conteudo 2 da página Empresa gerado aleatóriamente";

        $selecao = array($conteudo1, $conteudo2);

        $chave = array_rand($selecao);

        echo $selecao[$chave];
    }

    public function nossoTrabalho()
    {
        $conteudo1 = "Esse é o conteudo 1 da página Nosso Trabalho gerado aleatóriamente";
        $conteudo2 = "Esse é o conteudo 2 da página Nosso Trabalho gerado aleatóriamente";

        $selecao = array($conteudo1, $conteudo2);

        $chave = array_rand($selecao);

        echo $selecao[$chave];
    }

    public function localizacao()
    {
        $conteudo1 = "Esse é o conteudo 1 da página Localização gerado aleatóriamente";
        $conteudo2 = "Esse é o conteudo 2 da página Localização gerado aleatóriamente";

        $selecao = array($conteudo1, $conteudo2);

        $chave = array_rand($selecao);

        echo $selecao[$chave];
    }

    public function faleConosco()
    {
        ?>
        <div class="row form">
            <div class="col-md-5">
                <form action="">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" placelholder="Insira seu nome">

                    <label for="">E-mail:</label>
                    <input type="email" class="form-control" placelholder="Insira seu nome">

                    <label for="">Mensagem:</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </form>
            </div>
        </div>

        <?php
    }

}