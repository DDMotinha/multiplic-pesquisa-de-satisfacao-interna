<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplic Telecom - Pesquisa de Satisfação Interna</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./src/style/button.css">
	<link rel="shortcut icon" type="image/x-icon" href="src/assets/favicon.ico">
</head>
<body>
    <div class="site">
            <div class="card">
					<div class="topo">
						<div class="container linetopo">
							<div class="logo">
								<img src="./src/assets/logo.png">
							</div>
							<div class="tituloPesq">
								<h2>PESQUISA DE<br><span>SATISFAÇÃO INTERNA</span></h2>
							</div>
							<div class="imgTopo">
							</div>
							<div class="clear"></div>
						</div>
					</div><!-- Fecha topo -->
                    <form action="src/controller/resultSave.php" method="POST">
						<div class="container">
							<div class="tituloInfo">
								<h4>As respostas são confidenciais, para que saíbamos a real opinião de nossos colaboradores</h4>	
							</div>
							<div class="perguntas">
								<div class="oneQuest">
									<h4 for="quest1" class="quest">Como você avalia o clima organizacional?</h4>
								</div>
								<div class="Answer">
									<input type="radio" name="answ1" id="answ1" value="5">
									<label class="happy" for="answ1">😁</label>
									<input type="radio" name="answ1" id="answ2" value="4">
									<label class="happy" for="answ2">😊</label>
									<input type="radio" name="answ1" id="answ3" value="3">
									<label class="happy" for="answ3">😐</label>
									<input type="radio" name="answ1" id="answ4" value="2">
									<label class="happy" for="answ4">😪</label>
									<input type="radio" name="answ1" id="answ5" value="1">
									<label class="happy" for="answ5">😭</label>
								</div>
							</div>
							<div class="perguntas">
								<div>                            
									<h4 for="quest2" class="quest">Como você avalia o trabalho em equipe e a comunicação entre seus colegas de trabalho?</h4>
								</div>
								<div class="Answer">
									<input type="radio" name="answ2" id="answ6" value="5">
									<label class="happy" for="answ6">😁</label>
									<input type="radio" name="answ2" id="answ7" value="4">
									<label class="happy" for="answ7">😊</label>
									<input type="radio" name="answ2" id="answ8" value="3">
									<label class="happy" for="answ8">😐</label>
									<input type="radio" name="answ2" id="answ9" value="2">
									<label class="happy" for="answ9">😪</label>
									<input type="radio" name="answ2" id="answ10" value="1">
									<label class="happy" for="answ10">😭</label>
								</div>
							</div>
							<div class="perguntas">
								<div>
									<h4 for="quest3" class="quest">Qual o nível de satisfação em relação ao seu preparo/treinamento para realização de suas funções cotidianas?</h4>
								</div>
								<div class="Answer">
									<textarea class="apart" name="answ3" id="answ33" cols="30" rows="10" placeholder="Justifique"></textarea>
								</div>
							</div>
							<div class="perguntas">
								<div>
									<h4 for="quest4" class="quest">Qual o nível de satisfação em relação a sua autonomia para propor novas ideias e soluções para os seus superiores?</h4>
								</div>
								<div class="Answer">
									<input type="radio" name="answ4" id="answ16" value="5">
									<label class="happy" for="answ16">😁</label>
									<input type="radio" name="answ4" id="answ17" value="4">
									<label class="happy" for="answ17">😊</label>
									<input type="radio" name="answ4" id="answ18" value="3">
									<label class="happy" for="answ18">😐</label>
									<input type="radio" name="answ4" id="answ19" value="2">
									<label class="happy" for="answ19">😪</label>
									<input type="radio" name="answ4" id="answ20" value="1">
									<label class="happy" for="answ20">😭</label>
								</div>
							</div>
							<div class="perguntas">
								<div>
									<h4 for="quest5" class="quest">Como você avalia os recursos materiais disponibilizados pela empresa para execução do seu trabalho? </h4>
								</div>
								<div class="Answer">
									<textarea name="answ5" class="apart" id="answ34" cols="30" rows="10" placeholder="Justifique" ></textarea>
								</div>
							</div>
							<div class="perguntas">
								<div>                   
									<h4 class="quest">Como você avalia o seu relacionamento profissional com o(s) seu(s) supervisor(s)?</h4>
								</div> 
								<div class="Answer">
									<input type="radio" name="answ6" id="answ26" value="5">
									<label class="happy" for="answ26">😁</label>
									<input type="radio" name="answ6" id="answ27" value="4">
									<label class="happy" for="answ27">😊</label>
									<input type="radio" name="answ6" id="answ28" value="3">
									<label class="happy" for="answ28">😐</label>
									<input type="radio" name="answ6" id="answ29" value="2">
									<label class="happy" for="answ29">😪</label>
									<input type="radio" name="answ6" id="answ30" value="1">
									<label class="happy" for="answ30">😭</label>
								</div>
							</div>
							<div>                   
								<h4 class="quest respText">Na sua opinião o que falta para que todos os colegas de trabalho sejam engajados? </h4>
							</div> 
							<div>
							<br><br>
								<textarea name="answ7" class="apart" id="answ31" cols="30" rows="10"></textarea>    
							</div>
							<div>                   
								<h4 class="quest respText">Deixe uma opinião ou sugestão no(s) ponto(s) que a empresa e/ou o seu departamento pode melhorar</h4>
							</div> 
							<div>
							<br><br>
								<textarea name="answ8"  class="apart" id="answ32" cols="30" rows="10"></textarea>    
							</div>
							<div class="unique">
								<input name="submit" type="submit" class="button" value="Enviar"></input>
							</div>
						</div>
                    </form>                    
            </div>
    </div><!-- Fecha site -->
</body>
</html>