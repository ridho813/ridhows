<?php
	session_start();
	if(!isset($_SESSION["login"])){
		echo "<script>
		alert('Silahkan Login terlebih dahulu!');
		document.location.href = 'data.php';
		</script>";
        exit;
    }

	if(isset($_POST["submit"])){
		$makanan = $_POST["makanan"];
		$_SESSION["makanan"] = $makanan;
		header("Location: minuman.php");
		exit;
        }

?>

<!DOCTYPE html> 
	<head>
		<link href="style.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<div id="header"> 
		<h1> Homepage </h1>
		</div>
	</head>
	<body>
	<div id="kolom2">
	<button type="button" class="btn btn-default btn-sm">
        <tr><span class="glyphicon glyphicon-log-out"></span><a href="logout.php">Log Out</a>
        </tr></button>
		<br>
	</div>
	<div id="kolom2">
		<form method="post" action="">
			<td>Login Anda : <?= $_SESSION["login"]; ?></td>
			<p>JENIS MAKANAN : </p>
			<input type="radio" id="soto" name="makanan" value="soto madura" >
			<label for="soto">Soto Madura</label><br>
			<input type="radio" id="rawon" name="makanan" value="rawon setan" >
			<label for="soto">Rawon Setan</label><br>
			<button type="submit" name="submit">Submit</button>
		</form>
		
	</div>
	</body>