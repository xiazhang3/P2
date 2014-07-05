<!DOCTYPE html>
<html>
<head>
<title>P2 xkcd Password Generator</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="description" content="xkcd Password Generator">
<meta name="author" content="Xia Zhang">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"
    type="text/javascript"></script>

<?php require 'logic.php'; ?> 

</head>

<body>
	<div class='container'>
		<div class="jumbotron">
		<h1>xkcd Password Generator</h1>
		</div>

		<p class='password'>
			Your Password: <br>
			<?php echo $passwd; ?>
		</p>
		
		<form action = "index.php" method = "POST">
			<p>
			
				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
				<br>
					
				<input type='checkbox' name='add_number' id='add_number' > 
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' > 
				<label for='add_symbol'>Add a symbol</label>
			</p>
		
			<input type='submit' class='btn btn-default' value='Generate'>
					
		</form>

	</div>
</body>

</html>

