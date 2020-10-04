<?php
    include('include/baglan.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="css/kayit.css" rel="stylesheet">
</head>
<body>
    <div class="login" style="margin-top: 40px;border-radius: 100px; -moz-border-radius: 50px / 50px; -webkit-border-radius: 50px / 50px;">
    <h2 class="active"> Kayıt Ol </h2>

    <h2 class="nonactive"><a href="index.php" style="top:0px;"> Anasayfa </a></h2>
    <form method="POST" name="giris" action="">
    
        

        <input type="text" class="text" name="kadi" required>
        <span>Kullanıcı Adı</span>

        <br>
        
        <br>

        <input type="email" class="text" name="email" required>
        <span>Email</span>

        <br>

        <br>

        <input type="password" class="text" name="sifre" required>
        <span>Şifre</span>

        <br>
        
        <button class="signin" type="submit" name="gonder">
        Kayıt Ol
        </button>


        <hr>
        
    </form>

    </div>
</body>
</html>
<?php
if (isset($_POST['gonder'])) { //
    $kadi = $_POST['kadi'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    // Kontrol Değişkenleri
    $EmailSay = $db->prepare("SELECT * FROM users WHERE email = ?");
    $EmailSay->execute(array($email));
    $KadiSay = $db->prepare("SELECT * FROM users WHERE kadi = ?");
    $KadiSay->execute(array($kadi));
    $ekontrol = $EmailSay->fetch(PDO::FETCH_ASSOC);
    $kkontrol = $KadiSay->fetch(PDO::FETCH_ASSOC);
    //

    if (empty($kadi) || empty($email) || empty($sifre)) { // kullanıcı adı, email, şifre boş mu kontrolü
        echo "Kayıt olabilmek için formu tamamen doldurmalısınız!";
    }
    elseif ($kkontrol > 0) { // kulanıcı adı kontrolü
        echo "<div class='kkontrol'>Belirttiğiniz kullanıcı adı başkası tarafından kullanılmakta!</div>";
    }
    elseif ($ekontrol > 0) { // email kontrolü
        echo "<div class='ekontrol'>Belirttiğiniz email adresi başkası tarafından kullanılmakta!</div>";
    }
    else { // başarılı kayıt
        $db->exec("INSERT INTO users (kadi, email, sifre) VALUES ('$kadi', '$email', '$sifre')");
        unset($_POST['gonder']);
        header('Location: index.php');
    }
}

?>