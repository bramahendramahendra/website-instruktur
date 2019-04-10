<?php 


    require_once("config.php");
    if(isset($_POST['simpan'])){

        // echo $_POST["enrollment"];die;
        $enrollment = $_POST["enrollment"];
        $sql = "SELECT * FROM enrollment WHERE id_enrollment = $enrollment ";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($query);
        // echo $data['jam_mengajar']; die;
        $nomor_instruktur = $_POST["no_instruktur"];
        $nama_instruktur = $_POST["nama_instruktur"];
        $mata_pelajaran = $data["mata_pelajar"];
        $jam_mengajar = $data["jam_mengajar"];
        $hari_mengajar = $data["hari_mengajar"];

        // echo $nama_instruktur; die;
        $sql = "INSERT INTO instruktur(nomor_instruktur, nama_instruktur, mata_pelajaran, jam_mengajar, hari_mengajar, absensi_mengajar, pendapatan) VALUES ('$nomor_instruktur','$nama_instruktur','$mata_pelajaran','$jam_mengajar','$hari_mengajar','0','0')";
        $query = mysqli_query($db, $sql);
        
        if($query){
            header('location:index-admin.php');
        }else{
            echo ('gagal');die;
            header('location:index-admin.php');
        }
    }
?>