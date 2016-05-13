<div class="bloco-titulo-principal bloco-titulo-principal-sobre">
    <img class="pull-left mold-lf-tp" src="img/moldura-sobre-nos-lf-tp.png" alt="galeria" title="galeria">
    <img class="pull-right mold-rgt-tp" src="img/moldura-sobre-nos-rgt-tp.png" alt="galeria" title="galeria">
    <h2 class="titulo-principal titulo-principal-sobre titulo-principal-galeria pull-left">galeria</h2>
    <img class="pull-right mold-rgt-bt" src="img/moldura-sobre-nos-rgt-bt.png" alt="galeria" title="galeria">
    <img class="pull-left mold-lf-bt" src="img/moldura-sobre-nos-lf-bt.png" alt="galeria" title="galeria">
</div>
<div class="bloco-destaques-banner pd-bt-30 wow bounceInUp" data-wow-duration="2s">
    <div id="owl-demo-home" class="services-destaque-home hidden-xs">
    	<?php //$dados['class']; ?>
    	<?php 
    		require_once 'galeria-dados.php';     	
    	?>
			<div class="item col-xs-12 col-sm-12 col-md-12 mg-bt-40-mob">
    		<?php
    			$totalResultados = count($dadosGaleria);
				for ($i=1; $i < count($dadosGaleria)+1; $i++) { 
			?>
    			<div class="col-xs-12 col-sm-4 col-md-4 <?php if ($i % 2 == 0){ echo "img-galeria-meio"; } ?>">
				<a href="<?php echo $dadosGaleria[$i]['link']; ?>" target="_blank">
					<div class="moldura-foto">
						<img src="img/galeria/<?php echo $dadosGaleria[$i]['imagem']; ?>" alt="<?php echo $dadosGaleria[$i]['titulo']; ?>" title="<?php echo $dadosGaleria[$i]['titulo']; ?>">
					</div>	
				</a>
				<div class="bloco-txt-galeria">
					<h3 class="txt-galeria"><a href="<?php echo $dadosGaleria[$i]['link']; ?>" target="_blank"><?php echo $dadosGaleria[$i]['titulo']; ?></a></h3>
				</div>
				</div>
			<?php  
				if ($i == $totalResultados) {
					echo "</div>";
				}elseif ($i % 3 == 0) {
					echo '</div><div class="item col-xs-12 col-sm-12 col-md-12 mg-bt-40-mob">';
				}
			?>
    	<?php
    		}
    	?>
    	</div>
    </div> 
    <div class="bloco-destaques-banner pd-bt-30">      
	    <div id="owl-demo-home-mob" class="services-destaque-home visible-xs-block">    
	    	<?php for ($i=1; $i < count($dadosGaleria)+1; $i++) {  ?>
				<div class="item col-xs-12 col-sm-12 col-md-12 mg-bt-40-mob">
					<a href="<?php echo $dadosGaleria[$i]['link']; ?>" target="_blank">
						<div class="moldura-foto">
							<img src="img/galeria/<?php echo $dadosGaleria[$i]['imagem']; ?>" alt="<?php echo $dadosGaleria[$i]['titulo']; ?>" title="<?php echo $dadosGaleria[$i]['titulo']; ?>">
						</div>	
					</a>
					<div class="bloco-txt-galeria">
						<h3 class="txt-galeria"><a href="<?php echo $dadosGaleria[$i]['link']; ?>" target="_blank"><?php echo $dadosGaleria[$i]['titulo']; ?></a></h3>
					</div>
				</div>	
			<?php } ?>
	    </div>              
	</div> 
	<div class="center-block" style="display: table; padding-top: 20px;">
		<img class="icones-rodape" src="img/icone-facebook.png" alt="facebook.com/photolovers" title="facebook.com/photolovers">
		<a class="link-icones-rodape" target="_blank" href="https://www.facebook.com/photolovers.fot/?fref=ts">Veja todos os eventos atualizados em nossa fan page</a>
	</div>             
</div>