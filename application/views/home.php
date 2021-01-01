
<html>
	<head>
		<title>Chá de Casa Nova</title>
		<link rel="icon" href="https://png.pngtree.com/png-vector/20190817/ourlarge/pngtree-simple-beautiful-pink-flower-vector-logo-and-icon-png-image_1693736.jpg" type="image/jpg">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
		<!--Modal -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Modal -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		<script>
            $(document).ready(function() {
                $(document).on("click","#btn-participar",function() {
                    setTimeout(function(){
                        loading();
                        conteudoPresentes();
                    }, 1000);

                    function loading() {
                        document.getElementById("load").style.display = 'none';
                    }

                    function conteudoPresentes(){
                        document.getElementById("conteudo-sorteio").style.display = 'block';
                        document.getElementById("btn-modal-sorteado").style.display = 'block';

                    }
                });
                $(document).on("click",".btn-participar-two",function() {
               		 $(".modal-presentes").reload();
                });
            });
		</script>
	</head>
	<body>
		<div class="navbar">
		</div>
		<div class="header">
			<div class="titulo">
				<img src="https://i.pinimg.com/originals/e7/4e/39/e74e3979d3fbf72a8ed9db05d01a656f.png" width="100px">
				<p>Chá de Casa Nova</p>
			</div>
			<div class="fotos">
				<div class="row-fotos">
					<div class="item-fotos">
						<img src="https://s2.glbimg.com/Q-_S--RPAAixZL5I8SV34jnQSgQ=/620x455/e.glbimg.com/og/ed/f/original/2018/09/27/como-limpar-panelas-le-creuset.png" width="150px" height="150px">
					</div>
					<div class="item-fotos">
						<img src="https://s2.glbimg.com/Q-_S--RPAAixZL5I8SV34jnQSgQ=/620x455/e.glbimg.com/og/ed/f/original/2018/09/27/como-limpar-panelas-le-creuset.png" width="150px" height="150px">
					</div>
					<div class="item-fotos">
						<img src="https://s2.glbimg.com/Q-_S--RPAAixZL5I8SV34jnQSgQ=/620x455/e.glbimg.com/og/ed/f/original/2018/09/27/como-limpar-panelas-le-creuset.png" width="150px" height="150px">
					</div>
				</div>
			</div>
		</div>
		<div class="conteudo-convite">
			<p>
				Venha comemorar e celebrar comigo está conquista, será dia xx de xx as 00h00. <br> No condominio UP Lago dos Patos, no
				endereço:  Av. Francisco Conde, 723  <br> Vila Galvao, Guarulhos - SP, 07074-030, no salão de festas.
			</p>
		</div>
		<div class="passos">
			<div class="conteudo">
			<div class="item-passos">
				<img src="images/numero-um.png">
				<p class="texto-passos">
					Clique em participar
				</p>
			</div>
			<div class="item-passos">
				<img src="images/numero-um.png">
				<p class="texto-passos">
					Será sorteado um presente para você
				</p>
			</div>
			<div class="item-passos">
				<img src="images/numero-um.png" height="32px">
				<p class="texto-passos">
					Você poderá selecionar para você o presente apresentado <br>
					Ou refazer o sorteio
				</p>
			</div>
			</div>
		</div>
<!--		<div class="principais-fotos">-->
<!--			<img src="images/foto-um.jpg">-->
<!--			<img src="images/foto-dois.jpg">-->
<!--			<img src="images/foto-tres.jpg">-->
<!--			<img src="images/foto-quatro.jpg">-->
<!--			<img src="images/foto-cinco.jpg">-->
<!--			<img src="images/foto-seis.jpg">-->
<!--		</div>-->
		<div class="participar">
			<a href="#ex1" rel="modal:open"><button class="btn-participar" id="btn-participar" type="submit">Participar</button></a>
		</div>
		<!-- Modal HTML embedded directly into document -->
		<div id="ex1" class="modal modal-presentes">
			<div class="load" id="load">
				<img src="images/load.gif">
				<p>Sorteando seu presente (: </p>
			</div>
			<div class="conteudo-sorteado" id="conteudo-sorteio">
			Presente sorteado:
			<?php
				$objectRetorno = $data[0];
				$arrayRetorno = get_object_vars($objectRetorno);
				$imagem = $arrayRetorno['imagem'];
				echo $arrayRetorno['nome'];
				echo "<br>";
				echo 'Descrição:'. "<br>" . $arrayRetorno['descricao'];
				echo "<img class='img-sorteado' src='$imagem' width='120px'>";
			
			?>
			</div>
			<div class="btn-modal-sorteado" id="btn-modal-sorteado">
				<a href="#ex2" rel="modal:open"><button type="submit" class="btn-participar">Escolher este presente</button></a>
				<a href="#ex1" rel="modal:open"><button class="btn-participar" id="btn-participar" type="submit">Refazer o sorteio</button></a>
			</div>
		</div>
		<div id="ex2" class="modal modal-confirmacao">
			<img class="bule-modal" src="images/bule.png">
			<p class="text-destaque">Muito Obrigada...</p>
			<p>por participar deste momento tão especial para mim ...</p>
			<p>Estamos quase lá ... Digite seus dados para confirmar a presença!</p>
			<div class="campos-modal">
				<?php
				echo form_open_multipart('Home/getConfirm');
				?>
				<form>
					<label>Nome:</label>
					<br>
					<input type="hidden" name="id_produto" value="<?php echo $arrayRetorno['id'] ?>">
					<input class="input-modal" type="text" name="nome">
					<br>
					<label>E-mail:</label>
					<br>
					<input class="input-modal" type="email" name="email">
					<button type="sumit" class="btn-participar btn-confirmar">
						Confirmar
					</button>
				</form>
				<?php
				echo form_close();
				?>
			</div>
		</div>
		<div id="ex3" class="modal modal-success">

		</div>
	</body>
</html>
