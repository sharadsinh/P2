

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>P2 - Sharadsinh Vadher</title>
		<link rel="stylesheet" href="./bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="./bootstrap.min(1).css" >
		<link rel="stylesheet" href="./mycss.css" >
		<?php require('logic.php'); ?>

    </head>

    <body>
        <div class="container">
        <h1>xkcd Password Generator</h1>

		<p class="password">
			<?php echo $trimmedPassword; ?>		</p>

		<form>
			<p class="options">

				<label for="number_of_words"># of Words</label>
				<input maxlength="1" type="text" name="number_of_words" id="number_of_words">  (Max 9)
				<br>

				<input type="checkbox" name="add_number" id="add_number">
				<label for="add_number">Add a number</label>
				<br>
				<input type="checkbox" name="add_symbol" id="add_symbol">
				<label for="add_symbol">Add a symbol</label>
			</p>

			<input type="submit" class="btn btn-default" value="Generate the password">

		</form>

		<p class="details">
			<a href="http://xkcd.com/936/">
				<img class="comic" src="./password_strength.png" alt="xkcd style passwords">
			</a>
			<br>
		</p>

        </div>
    </body>
</html>
