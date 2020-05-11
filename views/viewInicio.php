<?php
require './configs/header.php';
require './configs/menu.php';
?>

<link rel="stylesheet" href="./plugins/css/inicio.css">

<script type="text/javascript" src="./plugins/js/inicio.js"></script>

<div id="banner">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-color: rgba(255, 255, 255, 0.2);">
                <img src="./assets/qualidadenoatendimento.png" class="rounded mx-auto img-fluid d-block imgCarrosel" alt="...">
                <div class="d-none d-md-block" style="margin-top:20px; margin-bottom:50px; text-align: center;">
                    <h5>Qualidade no atendimento</h5>
                    <p>Contamos com uma equipe pretativa que preza pela satisfação do cliente</p>
                </div>
            </div>
            <div class="carousel-item justify-content-center" style="background-color: rgba(255, 255, 255, 0.2);">
                <img src="./assets/diversossabores.jpg" class="rounded mx-auto img-fluid d-block imgCarrosel" alt="...">
                <div class="d-none d-md-block" style="margin-top:20px; margin-bottom:50px; text-align: center;">
                    <h5>Diversos sabores</h5>
                    <p>Temos pizzas dos mais variados gostos</p>
                </div>
            </div>
            <div class="carousel-item" style="background-color: rgba(255, 255, 255, 0.2);">
                <img src="./assets/entregarapida.png" class="rounded mx-auto img-fluid d-block  imgCarrosel" alt="...">
                <div class="d-none d-md-block" style="margin-top:20px; margin-bottom:50px; text-align: center;">
                    <h5>Rapidez na entrega</h5>
                    <p>Tenha sua pizza em até 1 hora ou ela sai de graça</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="sobre" >

    <h5 id="sobreTitulo"> Sobre nós </h5>

    <div id="sobreDesc">
    <p>Somos uma rede de pizzarias espalhadas por todas as regiõe do estado de Minas gerais. 
Prezamos a qualidade e satisfação do cliente
Em nossas lojas que oferecem delivery, prezamos pelo cumprimento do prazo de entrega 
estabelecido ou o dinheiro pago é reembolsado.
Possuímos diversos sabores, e também temos  a opção do cliente montar sua própria pizza.
Somos uma rede de pizzarias espalhadas por todas as regiõe do estado de Minas gerais. 
Prezamos a qualidade e satisfação do cliente
Em nossas lojas que oferecem delivery, prezamos pelo cumprimento do prazo de entrega 
estabelecido ou o dinheiro pago é reembolsado.
Possuímos diversos sabores, e também temos  a opção do cliente montar sua própria pizza.
Somos uma rede de pizzarias espalhadas por todas as regiõe do estado de Minas gerais. 
Prezamos a qualidade e satisfação do cliente
Em nossas lojas que oferecem delivery, prezamos pelo cumprimento do prazo de entrega 
estabelecido ou o dinheiro pago é reembolsado.
Possuímos diversos sabores, e também temos  a opção do cliente montar sua própria pizza.
Somos uma rede de pizzarias espalhadas por todas as regiõe do estado de Minas gerais. 
Prezamos a qualidade e satisfação do cliente
Em nossas lojas que oferecem delivery, prezamos pelo cumprimento do prazo de entrega 
estabelecido ou o dinheiro pago é reembolsado.
Possuímos diversos sabores, e também temos  a opção do cliente montar sua própria pizza. </p>
    </div>

    <div id="imagemSobre">
        <img src="./assets/sobrenos.png">
    </div>
</div>

<div id="cardapio" style="height: 100vh;">

</div>

<div id="filiais" style="height: 100vh;"> </div>

<?php

require './configs/footer.php';

?>