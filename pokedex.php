<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">

	</head>
	<body>
	
		<?php
			$pokemons = array('charmander'=>['imagen'=>'<img src="charmander.png">','tipo'=>'<img src="Tipo_fuego.gif">','ataque'=>'flamas'],
									  'bulbasaur'=>['imagen'=>'<img src="bulbasaur.png">','tipo'=>'<img src="Tipo_planta.gif">','ataque'=>'hojas navaja'],
									  'squirtle'=>['imagen'=>'<img src="squirtle.png">','tipo'=>'<img src="Tipo_agua.gif">','ataque'=>'agua']);
									  
			if(!isset($_GET['whoisthatpokemon']) || empty($_GET['whoisthatpokemon'])){
				foreach($pokemons as $key => $pokemon){
					echo '<h4 style=color: steelblue>'.$key.'</h4>'
					.$pokemon['imagen']
					.'<br>tipo: '.$pokemon['tipo']
					.'<br>ataque: '.$pokemon['ataque'].'<hr>';
				}
			}else{
				$buscar = $_GET['whoisthatpokemon'];
				$flag = false;
				
				foreach($pokemons as $key => $pokemon){
					if($key == $buscar) $flag = true;
				}
				if($flag == true){
					echo $pokemons[$buscar] ['imagen'].'<br>';
					echo '<h2>'.'Nombre: '.$buscar.'</h2>';
					echo '<h2>Tipo: '.$pokemons[$buscar] ['tipo'].'</h2>';
					echo '<h2>Ataque: '.$pokemons[$buscar] ['ataque'].'</h2><br>';
				}else echo 'El pokemon solicitado no existe en la pokedex actual';
			}
		?>
		
	</body>

</html>