<?php
session_start();

// cek session
if($_SESSION['login']):
    echo '<a href="?logout">'.$_SESSION['nama'].' mau keluar ?</a><hr />';
endif;

// ubah nama
if(isset($_GET['login'])):
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $_POST['nama'];
    echo "<script>alert('session berhasil dibuat'); document.location.href='?';</script>";
elseif(isset($_GET['logout'])):
    session_destroy();
    echo "<script>alert('session berhasil dihapus'); document.location.href='?';</script>";
endif;
?>

<form action="?login" method="post">
Buat login dengan nama <input type="text" name="nama" placeholder="Masukkan nama disini">
<input type="submit" name="submit" value="Ok">
</form>
