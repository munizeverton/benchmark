<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="{{_charset}}">
    	<title>Benchmark</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link type="text/css" href="/bench/web/css/bootstrap.min.css" rel="stylesheet">
	    <style type="text/css">
	      body {
	        padding-top: 20px;
	        padding-bottom: 40px;
	      }

	      /* Custom container */
	      .container-narrow {
	        margin: 0 auto;
	        max-width: 700px;
	      }
	      .container-narrow > hr {
	        margin: 30px 0;
	      }

	      /* Main resultados message and sign up button */
	      .jumbotron {
	        margin: 20px 0;
	        text-align: center;
	      }
	      .jumbotron h1 {
	        font-size: 72px;
	        line-height: 1;
	      }
	      .jumbotron .btn {
	        font-size: 21px;
	        padding: 14px 24px;
	      }

	      /* Supporting resultados content */
	      .results {
	        margin-top: 20px;
	      	margin-bottom: 40px;
	      	visibility: hidden;
	      	display: none;
	      }
	      .results p + h4 {
	        margin-top: 28px;
	      }
	      #resuts{
	      	height: 300px;
	      }

	      #carregador_pai{
			  width: 100%;
			  height:100%;
			  position: absolute;
			  text-align: center;
			  background-color:#414141;
			  filter:alpha(opacity=90);
			  opacity:0.9;
			  overflow: auto;
			  top: 0;
			  left: 0;
			  z-index:2;
			}

			#carregador_fundo{
			  font-size: 1px;
			  left: 8px;
			  width: 113px;
			  position: relative;
			  top: 50px;
			  height: 7px;
			  background-color: #ebebe4
			}
			#carregador_posicao{
			  padding-top:20%;
			}
			#carregador{
			  border-right: #6a6a6a 1px solid;
			  padding: 0px 10px 0px 16px;
			  border-top: #6a6a6a 1px solid;
			  display: block;
			  font-size: 11px;
			  z-index: 2;
			  margin: 0px auto;
			  border-left: #6a6a6a 1px solid;
			  width: 250px;
			  height:70px;
			  color: #000000;
			  border-bottom: #6a6a6a 1px solid;
			  font-family: Tahoma, Helvetica, sans;
			  background-color: #ffffff;
			  text-align: left;
			}

	    </style>
	    <!--<script async type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
	    <script type="text/javascript" src="/bench/web/js/jquery-1.7.2.min.js"></script>
	    <script async src="/bench/web/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function startTest(){
			$.ajax({
			    url : 'home/start_test',
			    beforeSend: function(){
			       $('#myModal').modal('show'); 
			    },    
			    success: function(retorno){
			      $('#results-body').html(retorno);
			      $('#myModal').modal('hide');
			      $('.results').css({display: 'block', visibility: 'visible', 'max-width': '700px'});
			    },
			    error: function(erro){
			      $('#charts').html(erro);
			      $('#carregador-pai').css({display: 'none', visibility: 'hidden'});
			    }       
			})
				
			}

			</script>
	</head>
	<body>
    <div class="container-narrow">

      <div class="masthead">
        <h3 class="muted">Benchmark</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>MongoDB X MySql</h1>
        <p class="lead">Esse script tem como objetivo realizar uma comparação de performance entre um banco de dado relacional (MySql) e um não-relacional (MongoDB).<br />O teste será realizado por meio de inserções simples. Ao final será exibido um gráfico de performance.</p>
        <button class="btn btn-large btn-success" onclick="startTest();">Iniciar Testes</a>
      </div>

      <hr>
	  <div id="results-body">

  	  </div>

      <hr>

    </div> <!-- /container -->
	
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-body">
	    <p align="center">Aguarde. Realizando testes...</p>
	    <p align="center"><img src="/bench/web/img/loading.gif" alt="Carregando" /></p>
	  </div>
	</div>

	</body>
	
</html>
