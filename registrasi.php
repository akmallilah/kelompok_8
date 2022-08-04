<?php    
require 'functions.php';

if( isset($_POST["register"]) ) {

   if( registrasi($_POST) > 0 ) {
      echo "<script>
               alert('user baru berhasil ditambahkan!');
            </script>";
   } else {
      echo mysqli_error($conn);
   }

}


?>
<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="../img/icon.png">
   <title>Halaman Registrasi</title>
   <link rel="stylesheet" type="text/css" href="css/register.css">
   <style>
      label {
         display: block;
      }
   </style>
</head>
<body id="registrasi">


<h1>Halaman Registrasi</h1>

<form action="" method="post">
   
   <ul>
      <li>
         <label for="username">Username :</label>
         <input type="text" name="username" id="username" autocomplete="off">
      </li>
      <li>
         <label for="password">Password :</label>
         <input type="password" name="password" id="password">
      </li>
      <li>
         <label for="password2">Konfirmasi Password :</label>
         <input type="password" name="password2" id="password2">
      </li>
      <li>
         <label for="level">Level :</label>
         <input type="text" name="level" id="level" autocomplete="off">
      </li>
   </ul>
      <br>
      <button type="submit" name="register">Register!</button>
   
</form>

</body>
</html>