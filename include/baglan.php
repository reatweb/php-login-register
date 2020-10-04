<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=panel;", 'root','');
 //   echo "Veritabanı bağlantısı başarılı bir şekilde sağlandı.";
}
catch (PDOException $e) {
    echo $e->getMessage();
}



?>