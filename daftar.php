<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00b101;}
</style>
<form action="prosesdaftar.php" method="post">
  
</head>
<body  style="background-color: pink " style="color: blue">  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $alamatErr = $jumlahErr = $variasiErr = "";
 $nama = $namaErr = $email =  $alamat = $variasi = $jumlah = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["variasi"])) {
    $variasiErr = "Please Select One";
  } else {
    $variasi = test_input($_POST["variasi"]);
  }
  if (empty($_POST["jumlah"])) {
    $usiaErr = " Jumlah is required";
  } else {
    $jumlah = test_input($_POST["jumlah"]);
    if (!preg_match("/^[0-9 ]*$/",$jumlah)) {
      $jumlahErr = "Only Numbers allowed"; 
    }
  }
    
  if (empty($_POST["alamat"])) {
    $alamatErr = "Alamat is required";
  } 
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<i> <center> <h2> Form Pembelian </h2> </i></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="20%" align="center" cellspacing="1" cellpadding="5">

  <tr>
   <td>E-mail</td>
   <td>:<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>

  <tr>
   <td>Nama</td>
   <td>:<input type="nama" name="nama">
   <span class="error">* <?php echo $namaErr;?> </span>
  </tr>
  <tr>
   <td>Variasi</td>
   <td>:<form action="/action_page.php">
  <select name="variasi">
    <option value=""> - Pilih Variasi - </option>
     <option value="Whitening Series">Whitening Series</option>
     <option value="Acne Series">Acne Series</option>
     <option value="Bluberry Organic face Mask">Bluberry Organic face Mask</option>
  </select>
  <span class="error">* <?php echo $variasiErr;?></span></td>
  </tr>
  <tr>
   <td>Jumlah</td>
   <td>:<input type="text" name="jumlah" value="<?php echo $jumlah;?>">
  <span class="error">* <?php echo $jumlahErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:<input type="text" name="alamat" value="<?php echo $alamat;?>">
  <span class="error">* <?php echo $alamatErr;?></span></td>
  </tr>
  <tr><td><img src="capcay.php"/> </td><td>: <input type="text" placeholder="masukan kode captcha" name="kode"/><span class="error">*</span></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
</table>




</form>

<!-- <?php
 // echo "<h2>Your Input:</h2>";
 // echo "Nama : ";
 // echo $name;
 // echo "<br>";
 // echo "<br>";
 // echo "E-mail : ";
 // echo $email;
 // echo "<br>";
 // echo "variasi : ";
 // echo $variasi;
 // echo "<br>";
 // echo "<br>";
 // echo "jumlah : ";
 // echo $jumlah;
 // echo "<br>";
 // echo "alamat : ";
 // echo $alamat;
 // echo "<br>";
 // echo "Biografi : ";
 // echo $biografi;
 // echo "<br>";
 // echo $tgl = date("d/m/Y h:i:sa");
 // echo "<br>";
?>  -->



</body>
</html>