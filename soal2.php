<html>
<head>
<title>login ke aplikasi percobaan</title>
</head>
<body>
    <form ACTION="" method="POST" name="input">
    Email : <input type="text" name="email"><br>
    pass : <input type="password" name="pass"><br>
    <input type="submit" name="input" value="Simpan">
    </form>
</body>
 </html>

 <?php
 if(isset($_POST['input'])) {
     $a = $_POST['email'];
     $b = $_POST['pass'];
     if($a == "admin@gmail.com" && $b=="12345678"){
         echo "login berhasil";
     } else{
         echo "login gagal";
     }
 }
 ?>