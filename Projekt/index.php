<?php 
	require_once './php/code.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Morze Alifbo</title>
</head>

<body>
	<section>
		<div class="contener">
			<form action="" method="get">
				<label for="Text">Translete create</label>
				<textarea require name="text" id="text" cols="40" rows="13"></textarea>
				<button type="reset">Reset</button>
				<button type="submit">Translete</button>
			</form>
			<h1>
				<?php   
					if (isset($_GET['text'])) {
						$text = strtolower($_GET['text']);
						if ($text[0] >= "a" or $text[1] >= "a" and $text[0] <= "z" or $text[1] <= "z" ) {
							echo morze_alifbo($text);
						} else {
							echo alifbo_morze($text);
						}
					}
				?>
			</h1>
		</div>
	</section>
</body>
</html>
