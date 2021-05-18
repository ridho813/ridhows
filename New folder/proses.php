<?php
session_start();  
$email = $_POST["email"];
$password = $_POST["password"]; 
  
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;  
?> 
<HTML> 
<BODY>
<link href="style.css" rel="stylesheet" type="text/css">
<div id=" kepala">
	<h1> HOMEPAGE </h1>
<div id=" kolom2">
<?php
echo " Hallo " . $_SESSION["nama"] . "<BR>";
echo " Umur Anda saat ini adalah " . $_SESSION["umur"] . "tahun <BR>";
echo " Alamat email Anda adalah " . $_SESSION["email"] . "<BR>"; 
?>
 
<BR> 
<A HREF="http://localhost/next.php"> Klik di sini </A> untuk 
menuju ke halaman berikut. 
</BODY> 
</HTML>