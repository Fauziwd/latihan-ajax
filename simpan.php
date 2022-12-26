

<?php 

    include('connect.php');
    
    $nama       = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $unit         = $_POST['unit'];
    $jeniskelamin         = $_POST['jenis-kelamin'];
    $alamat         = $_POST['alamat'];
    $nomorhp         = $_POST['nomor-hp'];
        
    $insert = mysqli_query($connect, "INSERT INTO ppsb SET 
    nama='$nama', 
    ttl='$ttl  ', 
    unit='$unit',
    `jenis-kelamin`='$jeniskelamin',
    alamat='$alamat',
    `nomor-hp`='$nomorhp'
    ");
    
?>
    