<?php
	session_start();
    if(isset($_SESSION["login"])){
        header("Location: makanan.php");
        exit;
    }
	require 'koneksi.php';
	if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

		$data = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
		if(mysqli_num_rows($data) == 1){
            $row = mysqli_fetch_assoc($data);
			
            if($password == $row["password"]){
                $_SESSION["login"] = $row["email"];
                header("location: makanan.php");
                exit;
            }
        }
    }

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
	<div class="header"> 
		<h1>Selamat Datang </h1>
		<P>Silakan isi identitas Anda</p>
	</div>
	<div class="login">
		<form method="post" action="">
			<table>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="password" name="password"></td>
				</tr>
			</table>
			<button type="submit" name="login">Login</button>
		</form>
	</div>
	
</tr>
</body>
</html>
<ul>