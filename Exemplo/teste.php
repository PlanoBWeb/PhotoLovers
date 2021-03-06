
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Parallax Simples</title>
	<meta charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Elsie:400,900' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<style type="text/css">
		* {margin:0; padding: 0;}
		html, body {height:100%;}

		/** formata elementos que tem backgrounds parallax **/
		.bgParallax {
			font-family: 'Elsie', cursive;
			color:#FFF;
			margin: 0 auto;
			width: 100%;
			max-width: 1920px;
			position: relative;
			min-height: 100%;
			text-shadow:0 0 10px rgba(0,0,0,0.7);

			background-position: 50% 0;
			background-repeat: repeat;
			background-attachment: fixed;
		}

		/* Define backgrounds dos divs */
		#quemsomos {background-image: url(img/sobre-nos.jpg);}
		#missao {
			background-image: url(img/inove-o-seu-evento.jpg);
			-webkit-box-shadow:-20px 0 20px 5px rgba(0,0,0,0.7);
			-moz-box-shadow:-20px 0 20px 5px rgba(0,0,0,0.7);
			-ms-box-shadow:-20px 0 20px 5px rgba(0,0,0,0.7);
			-o-box-shadow:-20px 0 20px 5px rgba(0,0,0,0.7);
			box-shadow:-20px 0 20px 5px rgba(0,0,0,0.7);
		}

		/** Formata o article que vai o texto **/
		.bgParallax article {
		  width: 70%;
		  text-align: center;
		  margin:0 auto;
		  padding:20% 0 0;
		}

		/** formata texto **/
		article h1 {font-size:40px;}
		article p {line-height: 30px; font-size:20px; margin-top:15px;}
		article p a {color:#FFF; text-decoration:none; font-size:30px;}

	</style>
	<script type="text/javascript">

$(document).ready(function(){
$('div.bgParallax').each(function(){
	var $obj = $(this);

	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 

		var bgpos = '50% '+ yPos + 'px';

		$obj.css('background-position', bgpos );

	}); 
});	
});
	</script>
</head>
<body>
<div id="quemsomos" class="bgParallax" data-speed="10">
     <article>
     	<h1>That show's called a pilot.</h1>
     	<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
     	<p>Artigo sobre parallax do <a href="http://tableless.com.br/">Tableless</a>.</p>
     </article>
</div>
<div id="missao" class="bgParallax" data-speed="5">
     <article>
     	<h1>Water</h1>
     <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
     </article>
</div>
</body>
</html>