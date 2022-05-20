<?php
require 'baglanti.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Team Page</title>
    <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>
<body class=" background">
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Spor Kulüpleri</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"
                  >Anasayfa</a
                >
              </li>
        
              <li class="nav-item">
                <a class="nav-link active" href="about.php">Hakkımızda</a>
              </li>
         
            </ul>
          </div>
        </div>
      </nav>
      <p class="display-3" style="margin:20px;">Basketbol Spor Kulübü</p>

<div  style="margin:20px">


<div style="text-align:center;">
<div class="ui input focus">
<div class="row ">
<form action="islem.php" method="post">
<input class="form-control"  type="text" name="comment" placeholder="Yorum Yap" >
  </div> <div style="margin-right:20px;"></div>
 
      <button class="btn btn-success" type="submit"  name="paylas">
    Paylaş
  </button>
  <div style="margin-right:20px;"></div>
  </form>
  <form action=""><button class="btn btn-danger">temizle</button></form></div>


</div>
<br>


<h1>
  <?php echo $_SESSION["name"];?>
</h1>

</div>
<?php
// veritabanına bağlan
$vt = new mysqli('localhost', 'root', '');
// hata varsa uyar ve çalışmayı durdur
if($vt->connect_errno) {
    echo 'Mysqli bağlantı hatası: ' . $vt->connect_errno;
    exit;
}

// deneme isimli veritabanını seç
$vt->select_db('sporkulubu');
// üyeler tablosundan kullanıcı adını seç
$sorgu = $vt->query('select * from comments');
// sonuçları ekrana yazdır
while($sonuc = $sorgu->fetch_assoc()) {?><?php
if(!$sonuc){ ?>
<h1><?php echo "Henüz yorum yapılmadı";?></h1>
<?php
}else{?>
 <div class="comment" style="margin:20px;">
<div class="ui comments">
  <div class="comment">
    <a class="avatar">
      <img src="https://i.pravatar.cc/2000">
    </a>
    <div class="content">
      <a class="author">Stevie Feliciano</a>
      <div class="metadata">
        <div class="date" ><?php echo $sonuc["Tarih"]; ?></div>
        <div class="rating">
          <i class="star icon"></i>
         
        </div>
      </div>
      <div class="text" >
      <?php echo $sonuc['comment']."<br>";
}?>
      </div>
    </div>
  </div>
</div>
</div>

  
<?php
}?>

<?php
   session_start();
   ?><h1><?php echo $_SESSION["name"];?></h1><?php

?>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>