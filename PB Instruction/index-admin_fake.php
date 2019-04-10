<!DOCTYPE html>
<html lang="en">

    <!-- php code start -->
    <?php 

    require_once("config.php"); 
    // mengecek absensi
    // $sql_absensi = "SELECT * FROM  absen";
    // $query_absensi = mysqli_query($db, $sql_absensi);
    // $data_absensi = mysqli_fetch_row($query_absensi);
    

    // get data instruktur
    $sql_absensi = "SELECT hadir FROM absen WHERE instruktur.id_instruktur=absen.no_instruktur";
    $query_absensi = mysqli_query($db, $sql_absensi);
//    /baru
    $sql = "SELECT * FROM instruktur ";
    $query = mysqli_query($db, $sql);
    // $data = ;
    // die; 
    
    $sql_enrollment = "SELECT * FROM enrollment";
    $query_enrollment = mysqli_query($db, $sql_enrollment);

   



    ?>
    <!-- php code end -->
    <head>
        <title>Sistem Informasi</title>
        <link rel="shortcut icon" href="assets/img/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <style type="text/css">
        .navbar-red {
            background-color: #b01116;
            color: #fff;
        }
        .navbar-red .navbar-brand {
            color: #fff;
        }
        .navbar-red .navbar-nav > li > a {
            color: #fff;
        }
        .navbar-red .navbar-nav > li > a:hover,
        .navbar-red .navbar-nav > li > a:focus {
            background-color: #ee1c25;
            color: #fff;
        }
        .box {
            margin-top: 80px;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff	;
            border-radius: 5px;
        }
        body {
            background-color: #D8D8D8;
        }
        </style>
    </head>
    <body>
        <!-- start header -->
        <nav class="navbar navbar-red navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Logo</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Instruktur</a></li>
                <li><a href="index-admin.php">Admin</a></li>
            
                </ul>
                <ul class="nav navbar-nav navbar-right text-center">
                <li class="dropdown pull-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Akun
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">profile</a></li>
                    <li><a href="#">log out</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </nav>
        <!-- end header -->

        <!-- coba -->
        <!-- Button to Open the Modal -->


        <!-- coba -->

        <div class="container">
            <div class="box">
                <h2>Data Instruktur</h2>
                <p>Tabel Data Instruktur </p>            
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">TAMBAH MAHASISWA</button>
                <br><br>
                <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam Mengajar</th>
                        <th>Hari Mengajar</th>
                        <th>Absesnsi Mengajar</th>
                        <th>Pendapatan Mengajar</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; 
                while ($data = mysqli_fetch_array($query)) {?> 
                    <tr>
                <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
                    <form action="">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_instruktur'] ?></td>
                    <td><?php echo $data['mata_pelajaran'] ?></td>
                    <td><?php echo $data['jam_mengajar'] ?></td>
                    <td><?php echo $data['hari_mengajar'] ?></td>
                    <td><?php echo $data['jumlah_absen'] ?></td>
                    <td><?php echo $data['pendapatan'] ?></td>

                        <!--BUTTON EDIT MAHASISWA-->
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $data['id_instruktur'] ?>"><i class="fas fa-user-edit"></i></button></td>
                        <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
                        <td><a type="button" class="btn btn-danger"  href="delete-admin.php?id=<?php echo $data['id_instruktur'];?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>

         <!-- Modal Tambah Mahasiswa -->
        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h2>TAMBAH DATA MAHASISWA</h2></center>
                    </div>
                    <div class="modal-body">
                        <!-- isi form ini -->
                        <form method="POST" action="create-admin.php">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Instruktur</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Instruktur" name="nama_instruktur" required >
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Pilih Enrollment</label>
                                <select class="form-control" id="formGroupExampleInput2" name="enrollment" required>
                                    <?php while ($data_enrollment = mysqli_fetch_array($query_enrollment)) {?>
                                        <option value="<?php echo $data_enrollment['id_enrollment']; ?>" ><?php echo $data_enrollment['mata_pelajar'].' - '.$data_enrollment['hari_mengajar'].' - '.$data_enrollment['jam_mengajar'];  ?></option>
                                    <?php } ?>
                                </select>            
                            </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <input  type="submit" class="btn btn-primary" name="simpan" id="hapus" value="Submit" placeholder="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Mahasiswa -->
        <?php 
        $sql1 = "SELECT * FROM instruktur";
        $query1 = mysqli_query($db, $sql1);
        while ($data = mysqli_fetch_array($query1) ) { 
        ?>
            <div class="modal fade" id="edit<?php echo $data['id_instruktur']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center><h2>EDIT DATA MAHASISWA </h2></center>
                        </div>

                        <div class="modal-body">
                        <!-- isi form ini -->
                            <form method="post" action="edit-admin.php?id=<?php echo $data['id_instruktur'];?>">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Instruktur</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Instruktur" name="nama_instruktur"  value="<?php echo $data['nama_instruktur'] ?>" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php  } ?>
        
       

       


    </body>
        <script type="text/javascript">
        $(document).ready( function () {
            $('#table').DataTable();
        } );
        </script>
</html>
