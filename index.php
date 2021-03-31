<?php
require_once ("application/Mahasiswa.php");
require_once ("application/MahasiswaBaru.php");
require_once ("application/Dosen.php");
require_once ("application/Pegawai.php");

//Class user
$user1 = new User ("ini username user1","passwordu1");
$user2 = new User ("ini username user2","passwordu2");

//Class Mahasiswa
$gusti = new Mahasiswa("Gusti Izza Maulana","H1101191073","2000-08-15","Laki-laki");
$fahrul = new Mahasiswa("Fachrul Ramadhanu","H1101191057","2001-01-12","Laki-laki");
$mada = new Mahasiswa("Ramadhan","H1101191035","2001-03-22-","Laki-laki");

//Class MahasiswaBaru
$maba1 = new MahasiswaBaru ("Guzma","H1101201073","2000-04-15","Laki-laki",15508090);
$maba2 = new MahasiswaBaru ("Famar","H1101201057","2001-01-12","Laki-laki",15505620);

//Class Pegawai
$pegawai1 = new Pegawai ("1515151515","nama pegawai 1", "089912312321", "1.500.000");
$pegawai2 = new Pegawai ("0987651231","nama pegawai 2", "082343312292", "1.700.000");

//Class Dosen
$dosen1 = new Dosen ("1915151515","nama dosen 1", "081212312321", "1.500.000","15212309875","Ketua Jurusan");
$dosen2 = new Dosen ("1287651231","nama dosen 2", "087343312292", "1.700.000","182653021812","Sekretaris");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testing</title>
</head>
<body>
<h3>Angkatan</h3>
    <?php
        $gusti->tampilkanNama($gusti);
        echo "<br>";
    ?>
    <?php
        $gusti->tampilkanAngkatan();   
    ?>
    <?php
        $pegawai1->tampilkanGaji();
    ?>
</body>
</html>