<?php  
session_start();
$_SESSION = [];
session_unset();
session_destroy();
echo "<script>
    alert('Terimakasih Telah Mengunjungi Website Kami!');
    document.location.href = 'data.php';
</script>";
exit;
?>