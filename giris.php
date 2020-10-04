<?php
    include('include/baglan.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="css/giris.css" rel="stylesheet">
</head>
<body>

    <div class="login" style="margin-top: 40px;border-radius: 100px; -moz-border-radius: 50px / 50px; -webkit-border-radius: 50px / 50px;">
    <h2 class="active"> GIRIS YAP </h2>

    <h2 class="nonactive"><a href="index.php" style="top:0px;"> ANASAYFA </a></h2>
    <form method="POST" action="" name="giris">
    
        

        <input type="text" class="text" name="kgadi" required>
        <span>Kullanıcı Adı</span>

        <br>
        
        <br>

        <input type="password" class="text" name="kgsifre" required>
        <span>Şifre</span>
        <br>
        
        <button class="signin" type="submit" name="gonder">
        GIRIS YAP
        </button>


        <hr>

        
    </form>

    </div>
</body>
</html>
<?php
if(isset($_POST['gonder']))
{
	$kadi = $_POST["kgadi"];
    $sifre = $_POST["kgsifre"];

    $kontrol = $db->query("SELECT * FROM users WHERE kadi = '$kadi' && sifre = '$sifre' ",PDO::FETCH_ASSOC);
    if (empty($kadi) || empty($sifre)) {
        echo "Giriş yapmak için kullanıcı adı ve şifrenizi girmelisiniz!";
    }
    elseif($kontrol->rowCount()){
    header("REFRESH: 0.5; url=http://localhost/php/login-register/panel.php");
    }
    else {
        echo "<div class='hatabox'>Kullanıcı adını veya şifreyi hatalı girdiniz, lütfen tekrar deneyin.</div>";
    }
    
}
?>