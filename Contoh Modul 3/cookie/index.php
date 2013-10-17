<?php
// cek cookie
if($_COOKIE['login']):
    echo '<a href="?logout">'.$_COOKIE['nama'].' mau keluar ?</a><hr />';
endif;

// ubah nama
if(isset($_GET['login'])):
    setcookie('login', true);
    setcookie('nama', $_POST['nama']);
    echo "<script>alert('cookie berhasil dibuat'); document.location.href='?';</script>";
elseif(isset($_GET['logout'])):
    setcookie('login', null, time() - 24 * 3600 * 1000);
    setcookie('nama', null, time() - 24 * 3600 * 1000);
    echo "<script>alert('cookie berhasil dihapus'); document.location.href='?';</script>";
endif;
?>

<form action="?login" method="post">
Buat login dengan nama <input type="text" name="nama" placeholder="Masukkan nama disini">
<input type="submit" name="submit" value="Ok">
</form>
