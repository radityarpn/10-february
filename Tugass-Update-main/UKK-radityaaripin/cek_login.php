<?php
session_start();
require "koneksi.php";

$username=$_POST['USERNAME'];
$password=$_POST['PASSWORD'];

$query=mysql_query("SELECT * FROM masyarakat WHERE USERNAME='$username' AND PASSWORD='$password' ");
$cek=mysql_num_rows($sql);

    if ($cek>0)
    {
        $data=mysql_fetch_array($sql);
        session_start();
        $_SESSION['nama']=$user;
        $_SESSION['nik']=$data;['nik'];
        header('location:pengaduan.php');
    }
    else
    {
        ?>
    <script type="text/javascript">
        alert ('Gagal, Silahkan Login Ulang');
        window.location="login.php";
    </script>
        <?php
    }
?>