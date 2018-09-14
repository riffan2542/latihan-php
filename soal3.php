<html>
<head><title>biodata siswa</title></head>
<body>
    <FORM  ACTION="prosessoal3.php" METHOD="POST">
    <table>
    <tr>
    <td>nama</td>
    <td>:</td>
    <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
    <td>NIS</td>
    <td>:</td>
    <td><input type="number" name="nis"required><br></td>
    </tr>
    <tr>
    <td>alamat anda</td>
    <td>:</td>
    <td><textarea name="alamat" cols="20" rows="3"></textarea><br></td>
    </tr>
    <tr>
    <td>jenis kelamin</td>
    <td>:</td>
    <td><input type ="radio" name="jk" value="Laki-Laki" checked>Laki-Laki
    <input type ="radio" name="jk" value="Perempuan">Perempuan</td>
    </tr>
    <tr>
    <td>agama</td>
    <td>:</td>
    <td><select name="agama">
    <option value="Islam">Islam</option>
    <option value="Budha">Budha</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option></select></td>
    </tr>
    <tr>
    <td>Sekolah</td>
    <td>:</td>
    <td><input type="text" name="sekolah"><br></td>
    </tr>
    <tr>
    <td>email</td>
    <td>:</td>
    <td><input type="text" name="email"><br></td>
    </tr>
    <tr>
    <td>pengajar</td>
    <td>:</td>
    <td><input type="text" name="pengajar"><br></td>
    </tr>
    <tr>
    <td>mata pelajaran</td>
    <td>:</td>
    <td><input type="checkbox" name="pel" value="PAI" checked >PAI<br>
    <input type="checkbox" name="pel2" value="Al-qur'an">AL-qur'an<br>
    <input type="checkbox" name="pel3" value="OLAHRAGA">OLAHRAGA<br>
    <input type="checkbox" name="pel4" value="IPA">IPA<br>
    <input type="checkbox" name="pel5" value="B.sunda">B.sunda<br></td>
    </tr>
    <tr>
    <td>Masukan nilai ijasah SD</td>
    <td>:</td>
    <td><input type="number" name="ijasah"></td>
    </tr>
    <tr>
    <td><input type="submit" name="kelola" value="proses">
    <input type="reset" name="reset" value="Reset"></td>
    </tr>
    </table>
    </FORM>
</body>
</html>