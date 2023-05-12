<?php


    $server = 'localhost';
    $name = 'root';
    $password = '';
    $db = 'php-fungsi';

    $koneksi = mysqli_connect($server, $name, $password, $db);

    // Fungsi sederhana tanpa paramater
    function title()
    {
        echo '<h2> Data Petani Kopi </h2>';
    };


    // Fungsi dengan menggunakan parameter
    function welcome($nama)
    {
        echo '<p> Selamat datang '. $nama.' </p>';
    }

    function tambah($a, $b)
    {
        $c = $a + $b;
        echo  '<p> '. $a .' + ' .$b. ' = '. $c . '</p>';

        $kurang = $a - $b;
        echo  '<p> '. $a .' - ' .$b. ' = '. $kurang . '</p>';

        $kali = $a * $b;
        echo  '<p> '. $a .' x ' .$b. ' = '. $kali . '</p>';

        $bagi = $a / $b;
        echo  '<p> '. $a .' : ' .$b. ' = '. $bagi . '</p>';
    }

    //  TUgas 10 Menit , - ,*, /



    // Tampilakan data dari tabel 
    $sql = 'SELECT * FROM petani';
    $petani = mysqli_query($koneksi, $sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FUNGSI</title>
</head>
<body>
    <h1>PHP FUNGSI</h1>
    <?php echo title(); ?>
    <?php echo welcome('Acho'); ?>

    <a href="">Tambah Data</a>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php $i=0; while($row = mysqli_fetch_assoc($petani)): ?>
            <tr>
                <td><?= ++$i?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['email']?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            <?php endwhile;?>
        </tr>
    </table>
</body>
</html>