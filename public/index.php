<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 23/02/16
 * Time: 20:52
 */

require_once '../vendor/autoload.php';

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>MVC Teste</title>
        <link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.css">
    </head>
    <body>

        <div class="container">
            <div class="row cabecalho">
                <h1>Site em MVC</h1>
            </div>

            <div class="row menu">
                <a href="/" class="btn btn-default">Home</a>
                <a href="/empresa" class="btn btn-default">Empresa</a>
                <a href="/nosso_trabalho" class="btn btn-default">Nosso Trabalho</a>
                <a href="/localizacao" class="btn btn-default">Localização</a>
                <a href="/fale_conosco" class="btn btn-default">Fale Conosco</a>
            </div>

            </br></br>

            <div class="row conteudo">
                <?php $init = new App\Init(); ?>
            </div>

            <div class="row rodape">

            </div>

        </div>

    </body>
</html>
