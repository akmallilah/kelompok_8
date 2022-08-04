<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="img /logo.jpg">
        <title>Halaman User</title> 

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

                            <a class="nav-link" href="tampil/member.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Member
                           </a>
                           <a class="nav-link" href="mapel.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Mapel
                           </a>
                           <a class="nav-link" href="kelas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kelas
                           </a>
                           <a class="nav-link" href="tampil/nilai.php">
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
                        <h1 class="mt-4">Data User</h1>
                        <div class="alert alert-primary" role="alert">
                            <marquee>Welcome to Language Boarding House</marquee>
                        </div>
                    <div>
                        <a href="registrasi.php" class="btn btn-primary mb-3">
                        <i class=""></i>Register
                        </a>
                    </div>

                    <table class="table table-striped table-bordered" style="text-align:center;">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Level</th>
                      <th colspan="2" scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php 
                    include "functions.php";
                    $data_user= mysqli_query($conn, "SELECT * FROM user  
                                                     ");
                    $no=1;
                    while ($du=mysqli_fetch_array($data_user)){
                     ?>
                        <tr> 
                            <td><?php echo $no; ?></td>
                            <td><?php echo $du['username']; ?></td>
                            <td><?php echo $du['password']; ?></td>
                            <td><?php echo $du['level']; ?></td>
                            <td><a href="../edit/edit_user.php?iduser=<?=$du["iduser"]; ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
                            <td><a href="../delete/delete_user.php?iduser=<?= $du["iduser"];?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin anda ingin menghapus data ini?');"><i class="fas fa-trash-alt" title="delete"></i></a></td>
                        </tr>
                    <?php  
                     $no++;
                      }
                     ?>                                 
                  </tbody>
                </table>

                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Referral Scheduling System
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data User</h1>
                        <div class="alert alert-primary" role="alert">
                            <marquee>Welcome to Referral Scheduling System For Patients</marquee>
                        </div>
                    </div>
                    <div>
                        <a href="registrasi.php" class="btn btn-primary mb-3">
                        Register
                        </a>
                    </div>
                <table class="table table-striped table-bordered" style="text-align:center;">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Level</th>
                      <th colspan="2" scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php 
                    include "../functions.php";
                    $datauser= mysqli_query($conn, "SELECT * FROM tbuser 
                                                     ");
                    $no=1;
                    while ($du=mysqli_fetch_array($datauser)){
                     ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $du['username']; ?></td>
                            <td><?php echo $du['password']; ?></td>
                            <td><?php echo $du['level']; ?></td>
                            <td><a href="edit_user.php?iduser=<?= $du["iduser"];?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit" title="edit"></i></a> | 
                                <a href="delete_user.php?iduser=<?= $du["iduser"];?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin anda ingin menghapus data User ini?');"><i class="fas fa-trash-alt" title="delete"></i></a>
                            </td>
                        </tr>
                    <?php  
                     $no++;
                      }
                     ?>                                 
                  </tbody>
                </table>

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