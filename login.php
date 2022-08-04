<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="img/logo.jpg">
  <title>Halaman Login</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
  }
  ?> 
 
  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

    <body class="text-center">
 
    <form class="form-signin " action="cek_login.php" method="post">
    <center>
      <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="72">
    </center>
    <span><h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    </span>
      
      <input type="text" name="username" class="form-control" autofocus placeholder="Username" required="required">
 
      <input type="password" name="password" class="form-control" placeholder="Password" required="required">
 
      <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
     
 
      <br/>
      <br/>
    </form>
    
  </div>
 
 
</body>
</html>