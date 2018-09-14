<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM action="" method="post" name="input">
Nama Anda : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_post['Input'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>