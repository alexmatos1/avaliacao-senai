<?php

/* @var $this yii\web\View */

$this->title = 'Senai';

use yii\helpers\Url;

?>
<!DOCTYPE html>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<style>
    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{
        background-color: #2b669a;
    }
    .navbar-inverse .navbar-toggle{
        background-color: #2b669a
    }

    .navbar-inverse{
        background-color: #FFFFFF;
        border-color: #FFFFFF;
    }
    #wrapper {
        transition: all 0.4s ease 0s;
    }

    #sidebar-wrapper {
        margin-left: -250px;
        left: 250px;
        width: 250px;
        background: #000;
        position: fixed;
        height: 100%;
        overflow-y: auto;
        z-index: 1000;
        transition: all 0.4s ease 0s;
    }

    #wrapper.active {
        padding-left: 0;
    }

    #wrapper.active #sidebar-wrapper {
        left: 0;
    }

    #page-content-wrapper {
        width: 100%;
    }



    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .sidebar-nav li {
        line-height: 40px;
        text-indent: 20px;
    }

    .sidebar-nav li a {
        color: #999999;
        display: block;
        text-decoration: none;
        padding-left: 60px;
    }

    .sidebar-nav li a span:before {
        position: absolute;
        left: 0;
        color: #41484c;
        text-align: center;
        width: 20px;
        line-height: 18px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li.active {
        color: #fff;
        background: rgba(255,255,255,0.2);
        text-decoration: none;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        height: 65px;
        line-height: 60px;
        font-size: 18px;
    }

    .sidebar-nav > .sidebar-brand a {
        color: #999999;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }



    .content-header {
        height: 65px;
        line-height: 65px;
    }

    .content-header h1 {
        margin: 0;
        margin-left: 20px;
        line-height: 65px;
        display: inline-block;
    }

    #menu-toggle {
        text-decoration: none;
    }

    .btn-menu {
        color: #000;
    }

    .inset {
        padding: 20px;
    }

    @media (max-width:767px) {

        #wrapper {
            padding-left: 0;
        }

        #wrapper.active {
            position: relative;
            left: 250px;
        }

        #wrapper.active #sidebar-wrapper {
            left: 250px;
            width: 250px;
            transition: all 0.4s ease 0s;
        }

        .inset {
            padding: 15px;
        }


    }
    .progress {
        position: fixed;
        bottom: 0;
        width: 100%;
        margin-bottom: 40px;
    }
    #prin{
        background-color: #cecece
    }

</style>

<div id="wrapper">

    <!-- Page content -->
    <div id="page-content-wrapper">

        <div class="page-content inset" data-spy="scroll" data-target="#spy">
            <div class="row">



            </div>
            <div class="row">
                <div id="pag1" class="col-md-12 well row" style="background-color: #FFFFFF; border: none" onmouseenter="progresso(this.id)">
                    <div class="col-md-8" style="padding: 0px">
                        <img src="<?= Url::base();?>/image/Tela1/img-aula1.png" alt="" style="width: 100%">
                    </div>
                    <div class="col-md-4 t1" style="background-color: #0a4d87;">
                        <p style="text-align: center; color: #2e93bb; font-size: 20px; padding-top: 40px">Aula 1:</p>
                        <hr style="color: black; border-top: solid; border-color: #2e93bb; height: 2px; width: 70%; margin-top: 0px; padding-bottom: 20px">
                        <p style="font-size: 24px; color: white; text-transform: uppercase; padding: 15px">Apresentação e Proposta do Lean Office para as escolas Senai</p>
                    </div>
                </div>
<!-- ----------------------------------------- TELA 2 --------------------------------------------------- -->
                <div id="pag2" class="col-md-12 well row" style="background-color: #FFFFFF; border: none"  onmouseenter="progresso(this.id)">
                    <div class="col-md-4">
                        <p style="color: #78c9df; text-transform: uppercase;font-weight: bold; margin-bottom: 50px">Apresentação</p>
                        <p>Olá!
                            <br>
                            <br>
                            Você já percebeu que existe uma necessidade contínua de melhoria da qualidade, flexibilidade e recursos presentes em nossas escolas?  Foi pensando nisso que a filosofia Lean se desenvolveu.
                            <br>
                            <br>
                            Diante da necessidade de seguir melhorando nossas escolas, o SENAI – DN, em parceria com o IEL NC, desenvolveu uma metodologia de Lean para aplicação nos processos de trabalho administrativos da Escolas Senai.
                            <br>
                            <br>
                            A partir de agora, você vai conhecer como funciona a metodologia de apoio à implementação do Lean Office nas Escolas Senai, compreendendo sua filosofia e os princípios que norteiam este projeto. Vamos lá?
                        </p>
                    </div>
                    <div class="col-md-8">
                        <img src="<?= Url::base();?>/image/Tela2/img-apresentacao.png" alt="" style="width: 100%; height: 490px">
                    </div>
                </div>
<!-- ---------------------------------------------- TELA 3 _________________________________________________________ -->

                <div id="pag3" class="col-md-12 well row" style="background-color: #FFFFFF; border: none"  onmouseenter="progresso(this.id)">

                    <p style="margin-bottom: 50px; margin-left: 50px">Nesta aula você vai aprender sobre os principais benefícios do Lean Office para as Escolas SENAI e quais resultados esperar no final da implantação do projeto. Mas antes, vamos entender melhor o contexto geral no qual o Lean Office foi desenvolvido.
                    </p>

                    <div class="col-md-6">
                        <img src="<?= Url::base();?>/image/Tela3/tela3-1.svg" alt="" style="width: 100%; height: 437px">
                    </div>
                    <div class="col-md-6">
                        <img src="<?= Url::base();?>/image/Tela3/tela3-2.svg" alt="" style="width: 100%; height: 437px">
                    </div>
                </div>
<!-- ------------------------------------------------ TELA 4 ------------------------------------------------------------- -->
                <div id="pag4" class="col-md-12 well row" style="padding-bottom: 120px;background-color: #FFFFFF; border: none"  onmouseenter="progresso(this.id)">
                    <p>Nesse contexto, os processos, vagarosos e improdutivos, geram os seguintes problemas para as organizações. <b>Clique em cada processo</b> para entender melhor seu funcionamento</p>

                    <img style="position: absolute; margin-left: 42%" src="<?= Url::base();?>/image/TelaGeral/ICONE-CLIC.svg" alt="">

                    <div class="col-md-3" id="frente1" >
                        <img id="i1" src="<?= Url::base();?>/image/Tela4/tela4-1.png" alt="" style="width: 100%; height: 241.5px; margin-top: 128px; cursor: pointer" onclick="mostraVerso(this.id)">
                    </div>
                    <div class="col-md-3 t4" id="verso1" style="display: none;">
                        <img id="iv1" src="<?= Url::base();?>/image/Tela4/tela4-1.svg" alt="" style="width: 100%; height: 437px; cursor: pointer" onclick="mostraFrente(this.id)">
                    </div>


                    <div class="col-md-3" id="frente2">
                        <img id="i2" src="<?= Url::base();?>/image/Tela4/tela4-2.png" alt="" style="width: 100%; height: 241.5px; margin-top: 128px; cursor: pointer" onclick="mostraVerso(this.id)">
                    </div>
                    <div class="col-md-3 t4" id="verso2" style="display: none;">
                        <img id="iv2" src="<?= Url::base();?>/image/Tela4/tela4-2.svg" alt="" style="width: 100%; height: 437px; cursor: pointer" onclick="mostraFrente(this.id)">
                    </div>


                    <div class="col-md-3" id="frente3">
                        <img id="i3" src="<?= Url::base();?>/image/Tela4/tela4-3.png" alt="" style="width: 100%; height: 241.5px; margin-top: 128px; cursor: pointer" onclick="mostraVerso(this.id)">
                    </div>
                    <div class="col-md-3 t4" id="verso3" style="display: none;">
                        <img id="iv3" src="<?= Url::base();?>/image/Tela4/tela4-3.svg" alt="" style="width: 100%; height: 437px; cursor: pointer" onclick="mostraFrente(this.id)">
                    </div>


                    <div class="col-md-3" id="frente4">
                        <img id="i4" src="<?= Url::base();?>/image/Tela4/tela4-4.png" alt="" style="width: 100%; height: 241.5px; margin-top: 128px; cursor: pointer" onclick="mostraVerso(this.id)">
                    </div>
                    <div class="col-md-3 t4" id="verso4" style="display: none;">
                        <img id="iv4" src="<?= Url::base();?>/image/Tela4/tela4-4.svg" alt="" style="width: 100%; height: 437px; cursor: pointer" onclick="mostraFrente(this.id)">
                    </div>

                </div>


<!-- ------------------------------------------------- TELA 5 ---------------------------------------------------------- -->

                <div id="pag5" class="col-md-12 well row" style="background-color: #FFFFFF; border: none"  onmouseenter="progresso(this.id)">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 50px">
                                <div class="col-md-2">
                                    <img src="<?= Url::base();?>/image/Tela5/1.png" alt="" style="width: 40px">
                                </div>
                                <div class="col-md-10">
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos... </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <img src="<?= Url::base();?>/image/Tela5/2.png" alt="" style="width: 40px">
                                </div>
                                <div class="col-md-10">
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI... </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding: 0px">
                        <img id="iv4" src="<?= Url::base();?>/image/Tela5/imagem-tela5.png" alt="" style="width: 100%; height: 343px; cursor: pointer" onclick="mostraFrente(this.id)">
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 50px">
                                <div class="col-md-11">
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos... </p>
                                </div>
                                <div class="col-md-1" style="padding-left: 0px">
                                    <img src="<?= Url::base();?>/image/Tela5/3.png" alt="" style="width: 40px">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-11">
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos... </p>
                                </div>
                                <div class="col-md-1" style="padding-left: 0px">
                                    <img src="<?= Url::base();?>/image/Tela5/4.png" alt="" style="width: 40px">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
<!-- -------------------------------------------------- TELA 6 --------------------------------------------------------- -->
                <div id="pag6" class="col-md-12 well row" style="background-color: #FFFFFF; border: none"  onmouseenter="progresso(this.id)">
                    <p>Nesse contexto, os processos, vagarosos e improdutivos, geram os seguintes problemas para as organizações. Clique em cada processo para entender melhor seu funcionamento</p>


                    <div class="col-md-3" id="tela11" style="margin-top: 100px">
                        <div id="t61" style="background-color: #4c83c5; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraVerso2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado1.png" alt="" style="margin-top: -67px; margin-left: 34%;">
                            <p style="color: white; font-size: 20px; text-align: center; padding-top: 60px">Otimização no uso dos recursos</p>
                        </div>
                    </div>
                    <div class="col-md-3" id="tv1" style="display: none; margin-top: 100px">
                        <div id="v61"  style="background-color: #4c83c5; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraFrente2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado2.png" alt="" style="margin-top: -99px; margin-left: 25%;">
                            <p style="text-align: center; color: white">Otimização no uso dos recursos.
                                Em ênfase, estão as instalações físicas e professores que representam as principais restrições educacionais. Contudo, recursos de equipes administrativas e outros equipamentos serão otimizados.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-3" id="tela22" style=" margin-top: 100px">
                        <div id="t62" style="background-color: #2a95bd; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraVerso2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado1.png" alt="" style="margin-top: -67px; margin-left: 34%">
                            <p style="color: white; font-size: 20px; text-align: center; padding-top: 60px">Redução dos índices de retrabalho</p>

                        </div>
                    </div>
                    <div class="col-md-3" id="tv2" style="display: none; margin-top: 100px">
                        <div id="v62" style="background-color: #2a95bd; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraFrente2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado2.png" alt="" style="margin-top: -99px; margin-left: 25%">
                            <p style="text-align: center; color: white">Redução dos índices de retrabalho.
                                Cada reprocesso administrativo, seja uma nova solicitação de aprovação ou uma revisão, é por essência um desperdício. Dedicar-se a reduzir retrabalhos faz parte da essência do Lean.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-3" id="tela33" style="margin-top: 100px">
                        <div id="t63" style="background-color: #79c9e0; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraVerso2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado1.png" alt="" style="margin-top: -67px; margin-left: 34%">
                            <p style="color: white; font-size: 20px; text-align: center; padding-top: 60px">Aumento da Satisfação de Clientes.</p>

                        </div>
                    </div>
                    <div class="col-md-3" id="tv3" style="display: none; margin-top: 100px">
                        <div id="v63" style="background-color: #79c9e0; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraFrente2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado2.png" alt="" style="margin-top: -99px; margin-left: 25%">
                            <p style="text-align: center; color: white">Aumento da Satisfação de Clientes.
                                Processos com menor quantidade de erros e mais ágeis promovem a satisfação dos clientes, sejam eles externos (empresas) ou internos (alunos e comunidade acadêmica). É a partir do cliente que identificamos o que é valor e é para ele que os processos são repensados.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-3" id="tela44" style="margin-top: 100px">
                        <div id="t64" style="background-color: #61c1b7; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraVerso2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado1.png" alt="" style="margin-top: -67px; margin-left: 34%">
                            <p style="color: white; font-size: 20px; text-align: center; padding-top: 60px">Redução de despesas</p>


                        </div>
                    </div>
                    <div class="col-md-3" id="tv4" style="display: none; margin-top: 100px">
                        <div id="v64" style="background-color: #61c1b7; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraFrente2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado2.png" alt="" style="margin-top: -99px; margin-left: 25%">
                            <p style="text-align: center; color: white">Redução de despesas.
                                Com processos mais estáveis e ágeis, menor retrabalho e maior velocidade, a redução de despesas é uma consequência natural. Esforços nesse sentido serão relevantes e fundamentais.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-3" id="tela55" style="margin-top: 100px">
                        <div id="t65" style="background-color: #61c1b7; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraVerso2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado1.png" alt="" style="margin-top: -67px; margin-left: 34%">
                            <p style="color: white; font-size: 20px; text-align: center; padding-top: 60px">Filosofia Lean</p>

                        </div>
                    </div>
                    <div class="col-md-3" id="tv5" style="display: none; margin-top: 100px">
                        <div id="v65" style="background-color: #61c1b7; width: 100%; height: 250px; border-radius: 20px; cursor: pointer" onclick="mostraFrente2(this.id)">
                            <img src="<?= Url::base();?>/image/Tela6/lampada-estado2.png" alt="" style="margin-top: -99px; margin-left: 25%">
                            <p style="text-align: center; color: white">Filosofia Lean.
                                Equipes que refletem e melhoram suas atividades no dia a dia são um dos principais benefícios do projeto. Ao mesmo tempo, impulsionar os trabalhos multidisciplinares promoverá a cultura de visão sistêmica.
                            </p>
                        </div>
                    </div>


                </div>

        </div>
    </div>
        <div id="prin" class="progress">
            <div id="bar-progress" class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            </div>
        </div>
        <div class="progress" style="height: 40px;background-color: #ececec; margin-bottom: 0px">
            <label id="descricao"></label>
        </div>
</div>


<script type="text/javascript">

    function progresso(id){
        var bar = document.getElementById("bar-progress");
        var des = document.getElementById("descricao");


        if(id === 'pag1'){
            bar.style.width = "0%";
            des.innerHTML = "Módulo 1 – Aula 1 - Tela 1";
        }
        if(id === 'pag2'){
            bar.style.width = "20%";
            des.innerHTML = "Módulo 1 – Aula 1 - Tela 2: APRESENTAÇÃO";
        }
        if(id === 'pag3'){
            bar.style.width = "40%";
            des.innerHTML = "Módulo 1 – Aula 1 - Tela 3: Proposta do Lean Office para Escolas Senai";
        }
        if(id === 'pag4'){
            bar.style.width = "60%";
            des.innerHTML = "Módulo 1 – Aula 1 - Tela 4: Proposta do Lean Office para Escolas Senai";
        }
        if(id === 'pag5'){
            bar.style.width = "80%";
            des.innerHTML = "Módulo 1 – Aula 1 - Tela 5: Proposta do Lean Office para Escolas Senai";
        }
        if(id === 'pag6'){
            bar.style.width = "100%";
            des.innerHTML = "Módulo 1 – Aula 1 - Tela 6: Proposta do Lean Office para Escolas Senai";
        }
    }



    function mostraVerso(id){
        var f1 = document.getElementById("frente1")
        var f2 = document.getElementById("frente2")
        var f3 = document.getElementById("frente3")
        var f4 = document.getElementById("frente4")

        var v1 = document.getElementById("verso1")
        var v2 = document.getElementById("verso2")
        var v3 = document.getElementById("verso3")
        var v4 = document.getElementById("verso4")


        if(id === 'i1'){
            f1.style.display = 'none';
            v1.style.display = 'block'
        }
        if(id === 'i2'){
            f2.style.display = 'none';
            v2.style.display = 'block'
        }
        if(id === 'i3'){
            f3.style.display = 'none';
            v3.style.display = 'block'
        }
        if(id === 'i4'){
            f4.style.display = 'none';
            v4.style.display = 'block'
        }
    }
    function mostraFrente(id){
        var f1 = document.getElementById("frente1")
        var f2 = document.getElementById("frente2")
        var f3 = document.getElementById("frente3")
        var f4 = document.getElementById("frente4")

        var v1 = document.getElementById("verso1")
        var v2 = document.getElementById("verso2")
        var v3 = document.getElementById("verso3")
        var v4 = document.getElementById("verso4")

        if(id === 'iv1'){
            v1.style.display = 'none'
            f1.style.display = 'block';
        }
        if(id === 'iv2'){
            v2.style.display = 'none'
            f2.style.display = 'block';
        }
        if(id === 'iv3'){
            v3.style.display = 'none'
            f3.style.display = 'block';
        }
        if(id === 'iv4'){
            v4.style.display = 'none'
            f4.style.display = 'block';
        }
    }



    function mostraVerso2(id){
        var f1 = document.getElementById("tela11")
        var f2 = document.getElementById("tela22")
        var f3 = document.getElementById("tela33")
        var f4 = document.getElementById("tela44")
        var f5 = document.getElementById("tela55")

        var v1 = document.getElementById("tv1")
        var v2 = document.getElementById("tv2")
        var v3 = document.getElementById("tv3")
        var v4 = document.getElementById("tv4")
        var v5 = document.getElementById("tv5")


        if(id === 't61'){
            f1.style.display = 'none';
            v1.style.display = 'block'
        }
        if(id === 't62'){
            f2.style.display = 'none';
            v2.style.display = 'block'
        }
        if(id === 't63'){
            f3.style.display = 'none';
            v3.style.display = 'block'
        }
        if(id === 't64'){
            f4.style.display = 'none';
            v4.style.display = 'block'
        }
        if(id === 't65'){
            f5.style.display = 'none';
            v5.style.display = 'block'
        }
    }
    function mostraFrente2(id){
        var f1 = document.getElementById("tela11")
        var f2 = document.getElementById("tela22")
        var f3 = document.getElementById("tela33")
        var f4 = document.getElementById("tela44")
        var f5 = document.getElementById("tela55")

        var v1 = document.getElementById("tv1")
        var v2 = document.getElementById("tv2")
        var v3 = document.getElementById("tv3")
        var v4 = document.getElementById("tv4")
        var v5 = document.getElementById("tv5")

        if(id === 'v61'){
            v1.style.display = 'none'
            f1.style.display = 'block';
        }
        if(id === 'v62'){
            v2.style.display = 'none'
            f2.style.display = 'block';
        }
        if(id === 'v63'){
            v3.style.display = 'none'
            f3.style.display = 'block';
        }
        if(id === 'v64'){
            v4.style.display = 'none'
            f4.style.display = 'block';
        }
        if(id === 'v65'){
            v5.style.display = 'none'
            f5.style.display = 'block';
        }
    }



    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });

</script>