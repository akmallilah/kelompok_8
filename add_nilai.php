<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="img /logo.jpg">
        <title>Halaman Dashboard</title> 

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
           <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
             <a class="navbar-brand ps-3" href="dashboard.php">LBH</a>
              <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Sign out</a>
                </li>
             </ul>
          </nav>

        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">First Page</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                           </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>

                            <a class="nav-link" href="../tampil/member.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Member
                           </a>
                           <a class="nav-link" href="../mapel.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Mapel
                           </a>
                           <a class="nav-link" href="../kelas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kelas
                           </a>
                           <a class="nav-link" href="../nilai.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Nilai
                           </a>
                            

                            <a class="nav-link" href="user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-users"></i></i></div>
                            Users</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        LBH System
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Nilai</h1>
                        <div class="alert alert-primary" role="alert">
                            <marquee>Welcome to Dashboard</marquee>
                        </div>
                         <!-- DataTales Example -->
                    <?php require 'functions.php';
                    ?>
                    <div class="card shadow col-mb-2">
                        <div class="card-body">
                        <form method="post" action="">
                            <table >
                                <div>
                                    <tr>
                                        <td><label for="nama">Nama</label></td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" id="nama" autofocus autocomplete="off" required></td>
                                    </tr> 
                                </div> 

                                <div>
                                    <tr>
                                        <td><label for="idkelas">Kelas</label></td>
                                        <td>:</td>
                                        <td>
                                            <select name="kelas">
                                                <option value="">--Choose--</option>
                                                <?php 
                                                $kelas=mysqli_query($conn, "SELECT * FROM kelas");
                                                while ($a=mysqli_fetch_array($kelas)) {
                                                    echo "<option value= '$a[idkelas]'>$a[kelas]</option>";
                                                 }
                                                ?>
                                            </select>
                                        </td>
                                    </tr> 
                                </div>
                                        <div>
                                    <tr>
                                        <td><label for="idmapel">Mapel</label></td>
                                        <td>:</td>
                                        <td>
                                            <select name="mapel">
                                                <option value="">--Choose--</option>
                                                <?php 
                                                $mapel=mysqli_query($conn, "SELECT * FROM mapel");
                                                while ($b=mysqli_fetch_array($kelas)) {
                                                    echo "<option value= '$b[idmapel]'>$b[mapel]</option>";
                                                 }
                                                ?>
                                            </select>
                                        </td>
                                    </tr> 
                                </div>
                    
                                <div>
                                    <tr>
                                        <td><button class="btn btn-danger mt-3" type="">Cancel</button></td>
                                        <td></td>
                                        <td><button class="btn btn-primary mt-3" type="submit" name="submit" value="submit">Save</button></td>
                                </div>
                            </table>
                        </form>
                        <?php 
                        if(@$_POST['submit']){
                            $query = mysqli_query($conn, "INSERT INTO nilai (nama,
                                                                             idkelas,
                                                                             idmapel,
                                                                             nilai)
                                                                        VALUES(
                                                                              '$_POST[nama]',
                                                                              '$_POST[kelas]',
                                                                              '$_POST[mapel]',
                                                                              '$_POST[nilai]     
                                                                              )");
                        if($query){
                            echo '<script>alert("Anda sudah berhasil menambahkan data!");
                            document.location="tampil/nilai.php"</script>';
                        }else{
                            echo '<div class="alert alert-warning"> Anda gagal melakukan proses tambah data!</div>';
                        }
                        }
                        ?>
                    </div>
                    
            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
