<?php
session_start();


   require_once("koneksi.php");
   
$email = $_POST['email'];
$nama = $_POST['nama'];
   $jumlah = $_POST['jumlah'];
   $variasi = $_POST['variasi'];
   $alamat = $_POST['alamat'];
   
   // $pass_md5=md5($pass);
   $sql = "SELECT * FROM login WHERE email = '$email'";
   $query = $db->query($sql);
   


      if (
       $data = "INSERT INTO login VALUES (NULL, '$email', '$nama', '$variasi', '$jumlah', '$alamat')");
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pesanan anda telah kami terima, silahkan tunggu konfirmasi via Email. Klik <a href='home.php'>Disini</a> untuk kembali ke Home</div>" ;
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     
   
?>

<!-- <?php
//periksa code captcha yang dimasukkan
// session_start();
// if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
// { 
// //bila captcha yang dimasukkan salah
// echo"Kode salah... <a href='index.php'>Kembali</a>";
// }
// else{
// //bila captcha yang dimasukkan benar  
// //tulis script eksekusi lainnya di sini//
// echo"Kode BENAR";
// $nama   = $_POST['nama'] ;
// $alamat   = $_POST['alamat'] ;
// $email    = $_POST['email'] ;
// echo"<br/>nama : $nama
//      <br/>alamat: $alamat
//    <br/>email : $email";
//akhir script

?> -->