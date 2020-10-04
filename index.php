<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    
<b:if cond="data:blog.pageType != &quot;error_page&quot;">
    ... Daerah ini berisi bagian-bagian utama dalam sebuah blog seperti main-wrapper, sidebar-wrapper, hingga footer-wrapper. Daerah ini akan diabaikan karena kita berada di dalam kondisi pengingkaran. ...
  </b:if>
  <b:if cond="data:blog.pageType == &quot;error_page&quot;">
    <div id="container-error">
      <div class="minion">
        <div class="hands">
          <div class="left"></div>
          <div class="right"></div>
          <div class="fingers-l"></div>
          <div class="fingers-r"></div>
          <div class="glove-l"></div>
          <div class="glove-r"></div>
        </div>
        <div class="glasses">
          <div class="glassesline1"></div>
          <div class="glassesline2"></div>
          <div class="glass1">
            <div class="eye1"></div>
          </div>
          <div class="glass2">
            <div class="eye2"></div>
          </div>
        </div>
        <div class="mouth">
          <ul class="teeth">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="belt-left"></div>
        <div class="belt-right"></div>
        <div class="pants"></div>
        <div class="legs">
          <div class="left"></div>
          <div class="right"></div>
          <div class="shoe-l"></div>
          <div class="shoe-r"></div>
        </div>
      </div>
        <div id="giris" text-align: center;>
            <a href="kayit.php">Kayıt Ol</a></div>
        </div>
        <div id="kayit" style="margin-top:35px;">
            <a href="giris.php">Giriş Yap</a></div>
        </div>
  </b:if>


</body>
</html>