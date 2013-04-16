<?php

/* index.view.php */
class __TwigTemplate_e2d29e52006e4fe1776c270e6928a550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
    \t<meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\">
    \t<title>Benchmark</title>
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<link type=\"text/css\" href=\"/bench/web/css/bootstrap.min.css\" rel=\"stylesheet\">
\t    <style type=\"text/css\">
\t      body {
\t        padding-top: 20px;
\t        padding-bottom: 40px;
\t      }

\t      /* Custom container */
\t      .container-narrow {
\t        margin: 0 auto;
\t        max-width: 700px;
\t      }
\t      .container-narrow > hr {
\t        margin: 30px 0;
\t      }

\t      /* Main resultados message and sign up button */
\t      .jumbotron {
\t        margin: 20px 0;
\t        text-align: center;
\t      }
\t      .jumbotron h1 {
\t        font-size: 72px;
\t        line-height: 1;
\t      }
\t      .jumbotron .btn {
\t        font-size: 21px;
\t        padding: 14px 24px;
\t      }

\t      /* Supporting resultados content */
\t      .results {
\t        margin-top: 20px;
\t      \tmargin-bottom: 40px;
\t      \tvisibility: hidden;
\t      \tdisplay: none;
\t      }
\t      .results p + h4 {
\t        margin-top: 28px;
\t      }
\t      #resuts{
\t      \theight: 300px;
\t      }

\t      #carregador_pai{
\t\t\t  width: 100%;
\t\t\t  height:100%;
\t\t\t  position: absolute;
\t\t\t  text-align: center;
\t\t\t  background-color:#414141;
\t\t\t  filter:alpha(opacity=90);
\t\t\t  opacity:0.9;
\t\t\t  overflow: auto;
\t\t\t  top: 0;
\t\t\t  left: 0;
\t\t\t  z-index:2;
\t\t\t}

\t\t\t#carregador_fundo{
\t\t\t  font-size: 1px;
\t\t\t  left: 8px;
\t\t\t  width: 113px;
\t\t\t  position: relative;
\t\t\t  top: 50px;
\t\t\t  height: 7px;
\t\t\t  background-color: #ebebe4
\t\t\t}
\t\t\t#carregador_posicao{
\t\t\t  padding-top:20%;
\t\t\t}
\t\t\t#carregador{
\t\t\t  border-right: #6a6a6a 1px solid;
\t\t\t  padding: 0px 10px 0px 16px;
\t\t\t  border-top: #6a6a6a 1px solid;
\t\t\t  display: block;
\t\t\t  font-size: 11px;
\t\t\t  z-index: 2;
\t\t\t  margin: 0px auto;
\t\t\t  border-left: #6a6a6a 1px solid;
\t\t\t  width: 250px;
\t\t\t  height:70px;
\t\t\t  color: #000000;
\t\t\t  border-bottom: #6a6a6a 1px solid;
\t\t\t  font-family: Tahoma, Helvetica, sans;
\t\t\t  background-color: #ffffff;
\t\t\t  text-align: left;
\t\t\t}

\t    </style>
\t    <!--<script async type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>-->
\t    <script type=\"text/javascript\" src=\"/bench/web/js/jquery-1.7.2.min.js\"></script>
\t    <script async src=\"/bench/web/js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tfunction startTest(){
\t\t\t\$.ajax({
\t\t\t    url : 'home/start_test',
\t\t\t    beforeSend: function(){
\t\t\t       \$('#myModal').modal('show'); 
\t\t\t    },    
\t\t\t    success: function(retorno){
\t\t\t      \$('#results-body').html(retorno);
\t\t\t      \$('#myModal').modal('hide');
\t\t\t      \$('.results').css({display: 'block', visibility: 'visible', 'max-width': '700px'});
\t\t\t    },
\t\t\t    error: function(erro){
\t\t\t      \$('#charts').html(erro);
\t\t\t      \$('#carregador-pai').css({display: 'none', visibility: 'hidden'});
\t\t\t    }       
\t\t\t})
\t\t\t\t
\t\t\t}

\t\t\t</script>
\t</head>
\t<body>
    <div class=\"container-narrow\">

      <div class=\"masthead\">
        <h3 class=\"muted\">Benchmark</h3>
      </div>

      <hr>

      <div class=\"jumbotron\">
        <h1>MongoDB X MySql</h1>
        <p class=\"lead\">Esse script tem como objetivo realizar uma comparação de performance entre um banco de dado relacional (MySql) e um não-relacional (MongoDB).<br />O teste será realizado por meio de inserções simples. Ao final será exibido um gráfico de performance.</p>
        <button class=\"btn btn-large btn-success\" onclick=\"startTest();\">Iniciar Testes</a>
      </div>

      <hr>
\t  <div id=\"results-body\">

  \t  </div>

      <hr>

    </div> <!-- /container -->
\t
\t<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-body\">
\t    <p align=\"center\">Aguarde. Realizando testes...</p>
\t    <p align=\"center\"><img src=\"/bench/web/img/loading.gif\" alt=\"Carregando\" /></p>
\t  </div>
\t</div>

\t</body>
\t
</html>
";
    }

    public function getTemplateName()
    {
        return "index.view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
