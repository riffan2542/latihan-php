<?php
if(isset($_POST['kelola'])){
    $nama = $_POST['nama'];
    echo "Nama anda :";
    echo "<b><font color='blue'>$nama</font></b><br>";

    $NIS = $_POST['nis'];
    echo "NIS anda :";
    echo "<b><font color='blue'>$NIS</font></b><br>";

    $alamat = nl2br($_POST['alamat']);
    echo "alamat anda Anda adalah :";
    echo "<b><font color='blue'>$alamat</font></b><br>";

    $jk = $_POST['jk'];
    echo "jenis kelamin anda adalah :
    <b><font color='blue'>$jk</font></b><br>";

    $agama = $_POST['agama'];
    echo "agama anda adalah :
    <b><font color='blue'>$agama</font></b><br>";

    $sekolah = $_POST['sekolah'];
    echo "sekolah anda di :";
    echo "<b><font color='blue'>$sekolah</font></b><br>";

    $email = $_POST['email'];
    echo "Email :";
    echo "<b><font color='blue'>$email</font></b><br>";

    $pengajar = $_POST['pengajar'];
    echo "pengajar :";
    echo "<b><font color='blue'>$pengajar</font></b><br>";

    echo "Mata Pelajaran Yang disukai : <br>";
    if(isset($_POST['pel'])){
        echo "+ " . $_POST['pel'] . "<br>";
    }
    if(isset($_POST['pel2'])){
        echo "+ " . $_POST['pel2'] . "<br>";
    }
    if(isset($_POST['pel3'])){
        echo "+ " . $_POST['pel3'] . "<br>";
    }
    if(isset($_POST['pel4'])){
        echo "+ " . $_POST['pel4'] . "<br>";
    }
    if(isset($_POST['pel5'])){
        echo "+ " . $_POST['pel5'] . "<br>";
    }

    $ijasah = $_POST['ijasah'];
    echo "Nilai Ijasah SD :";
    echo "<b><font color='blue'>$ijasah</font></b><br>";
    if ($ijasah >=23){
        echo " Selamat Anda Diterima";
    }else {
        echo " Anda Ditolak"; 
    }
}
?>