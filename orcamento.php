<div class="bloco-titulo-principal bloco-titulo-principal-sobre">
    <img class="pull-left mold-lf-tp borda-peq" src="img/moldura-lf-tp.png" alt="orçamento" title="orçamento">
    <img class="pull-right mold-rgt-tp borda-peq" src="img/moldura-rgt-tp.png" alt="orçamento" title="orçamento">
    <h2 class="titulo-principal titulo-principal-sobre titulo-principal-produtos pull-left">orçamento</h2>
    <img class="pull-right mold-rgt-bt borda-peq" src="img/moldura-rgt-bt.png" alt="orçamento" title="orçamento">
    <img class="pull-left mold-lf-bt borda-peq" src="img/moldura-lf-bt.png" alt="orçamento" title="orçamento">
</div>
<div class="row mg-none wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
	<p class="txt-orcamento">FAÇA UM ORÇAMENTO E DEIXE O SEU EVENTO MAIS DIVERTIDO!</p>
</div>
<div id="bloco-form-orcamento">
	<form class="form-default wow fadeInLeft" id="form-orcamento"  action="envia.php" name="contato" method="post" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
		<div id="bloco-form-orcamento2"></div>
		<!-- <div class="testeaparece" style="display: none"></div> -->
		<div class="row mg-none">
			<input class="field-default nome" type="text" name="nome" placeholder="NOME">
		</div>
		<div class="row mg-none">
			<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
				<input class="field-default field-default-half" type="text" name="email" placeholder="E-MAIL">
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
				<input class="field-default field-default-half right-so-dek" type="text" name="telefone" placeholder="TELEFONE">
			</div>		
		</div>
		<div class="row mg-none">
			<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
				<input class="field-default field-default-half" type="date" name="data" placeholder="DATA">
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
				<input class="field-default field-default-half right-so-dek" type="number" name="publico" placeholder="PÚBLICO ESTIMADO">
			</div>		
		</div>
		<div class="row mg-none">
			<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
		        <select class="field-default field-default-half field-default-select form-home form-control" name="onde" id="onde">
		            <option value="">ONDE NOS ENCONTROU?</option>
		            <option value="Google">Google</option>
		            <option value="Indicação">Indicação</option>
		            <option value="E-mail MKT">E-mail MKT</option>
		            <option value="Outros">Outros</option>
		        </select>
		    </div>
		    <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
		        <select class="field-default field-default-half right-so-dek field-default-select form-home form-control" name="tipo" id="tipo">
		            <option value="">TIPO DO EVENTO</option>
		            <option value="Aniversário">Aniversário</option>
		            <option value="Casamento">Casamento</option>
		            <option value="Corporativo">Corporativo</option>
		            <option value="Formatura">Formatura</option>
		            <option value="Outros">Outros</option>
		        </select>
		    </div>
		</div>
		<div class="row mg-none">
			<textarea class="field-default" name="msg" placeholder="MENSAGEM"></textarea>
		</div>
		<div class="row mg-none">
			<input class="pull-left" type="submit" onclick="return enviardados();">
		</div>
	</form>
</div>