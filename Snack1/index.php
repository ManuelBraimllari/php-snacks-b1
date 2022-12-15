<?php
        $arr_partite = [
            [
                'casa'	=> [
                    'nome'		=> 'Olimpia Milano',
                    'punteggio'	=> 55
                ],
                'ospite'	=> [
                    'nome'		=> 'Cantù',
                    'punteggio'	=> 60
                ],
            ],
            [
                'casa'	=> [
                    'nome'		=> 'Bari',
                    'punteggio'	=> 80
                ],
                'ospite'	=> [
                    'nome'		=> 'Napoli',
                    'punteggio'	=> 90
                ],
            ],
            [
                'casa'	=> [
                    'nome'		=> 'Torino',
                    'punteggio'	=> 99
                ],
                'ospite'	=> [
                    'nome'		=> 'Roma',
                    'punteggio'	=> 105
                ],
            ],
            [
                'casa'	=> [
                    'nome'		=> 'Pisa',
                    'punteggio'	=> 70
                ],
                'ospite'	=> [
                    'nome'		=> 'Firenze',
                    'punteggio'	=> 71
                ],
            ],
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Partite di basket</h1>

	<h2>Usando l'echo</h2>
	<ul><?php
		$arr_partite_len = count($arr_partite);
		for ($i = 0; $i < $arr_partite_len; $i++) {
			$match = $arr_partite[$i];
			echo "<li>{$match['casa']['nome']} - {$match['ospite']['nome']} | {$match['casa']['punteggio']}-{$match['ospite']['punteggio']}</li>";
		} ?>
	</ul>

	<h2>Uscendo e rientrando nel php</h2>
	<ul><?php
		for ($i = 0; $i < $arr_partite_len; $i++) {
			$casa = $arr_partite[$i]['casa'];
			$ospite = $arr_partite[$i]['ospite']; ?>
			<li><?= "{$casa['nome']} - {$ospite['nome']} | {$casa['punteggio']}-{$ospite['punteggio']}" ?></li><?php
		} ?>
	</ul>
</body>
</html>