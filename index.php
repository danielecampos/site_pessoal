<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="desenvolvimento de sites e blogs" content="">
    <meta name="Daniele Campos" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Daniele Campos | Desenvolvimentos e manutenção de sites e blogs </title>	

    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
     <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
	$(".scroll").click(function(event){
		event.preventDefault();
		$("html,body").animate({scrollTop:$(this.hash).offset().top}, 500);
		$('.navbar-default a').removeClass('selected');
		$(this).addClass('selected');
    	});
});

	</script>
</head>
<body>
    <!-- HEADER -->

	<div class="page" id="p1 home">
    	<div id="bloco-1">
			<nav class="navbar  navbar-fixed-top" role="navigation">
			    <div class="container">
			      <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			          <span class="sr-only">Toggle navigation</span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </button>
			      </div>
			      
			      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			        <ul class="nav navbar-nav">
			        <li><a href="#home" class="scroll">HOME</a></li>
			        <li><a href="#portfolio" class="scroll">PORTFOLIO</a></li>
			        <li><a href="#contato" class="scroll">CONTATO</a></li>
			        <li><a href="">BLOG</a></li>
			      </ul>
			      </div>
			    </div>
			</nav>
			<div id="home" class="col-md-12">
				<center>
					<h1>Daniele Campos<br></h1><br>
					<p class="h1-span"> { frontend developer }</p> <br>
					<p class="h1-texto">desenvolvimento e manutenção de sites e blogs</p>
				</center>
			</div>
		</div>
	</div>  <!-- FIM - HEADER -->
    
    <!-- PORTFOLIO -->

    <div id="portfolio">
    	<div class="container">
    		<div class="col-md-12">
	    	<h1>MEU PORTFÓLIO</h1>
	    	<p class="p-desc">desenvolvimento e manutenção de sites e blogs</p>
	    	<br><br><br>
	    	</div>
	    	<div class="projetos col-md-6">
	    		<img src="img/portfolio/dd.jpg" style="border: 1px solid #b5b5b5;">
	    		<h2 class="title-port">LCA - UFRJ</h2>
	    		<p class="col-md-12 p-desc" style="text-align: left;"><b>plataforma:</b> wordpress</p>
	    		<p class="col-md-12 p-desc" style="text-align: left;"><b>visite o site:</b> <a href="" style="color: #241F48;">lca.poli.ufrj.br</a></p>
	    	</div>

	    	<div class="projetos col-md-6">
	    		<img src="img/portfolio/dd.jpg" style="border: 1px solid #b5b5b5;">
	    		<h2 class="title-port">Neide Bolos</h2>
	    		<p class="col-md-12 p-desc" style="text-align: left;"><b>plataforma:</b> wordpress</p>
	    		<p class="col-md-12 p-desc" style="text-align: left;"><b>visite o site:</b> <a href="" style="color: #241F48;">neidebolos.esy.es</a></p>	    		
	    	</div>
    	</div>  
    </div> <!-- FIM - PORTFOLIO -->

    <!-- CONTATO -->

    <div id="contato" style="height: 750px; background: #f8f9fa; border: 1px solid #e8e8e8;">
    	<div class="container container-cust">
    		<div class="col-md-6">
    			<h1>VAMOS CONVERSAR?</h1>
    			<p> Entre em contato através do formulário ao lado ou se preferir envie um email para danielecampos16@gmail.com</p>

    			<br><br>
    			<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    			<a href=""><i class="fa fa-codepen" aria-hidden="true"></i></a>
    			<a href=""><i class="fa fa-behance-square" aria-hidden="true"></i></a>
    			<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
    			<br><br>

    		</div>
    		<div class="form-contato col-md-5">
	    		<p class="p-desc">Preencha o formulário abaixo e clique em enviar mensagem.</p>
    			<form>      
				  	<input name="name" type="text" class="feedback-input" placeholder="nome" />   
				  	<input name="email" type="text" class="feedback-input" placeholder="email"/>
				  	<textarea name="text" class="feedback-input" placeholder="mensagem"></textarea>
				  	<input class="botao" type="submit" value="ENVIAR MENSAGEM"/>
				</form>
			</div>
			    	<div class="col-md-12 footer"> 
    		<div class="container" style="color: #828282;">Daniele Campos &copy Todos os direitos reservados</div>
    	</div>
    	</div>
   	</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>