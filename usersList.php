<!-- <!-- <!-- <?php
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
while($sonuc = $sorgu->fetch_assoc()) {?>
<h1>    <?php echo $sonuc['name']."<br>";
?>
<h3><?php echo $sonuc["surname"]; ?></h3>
</h1><?php
}?>
<?php
// satır sayısını ekrana yazdır
//echo 'Sorgudan dönen satır sayısı: '.$sorgu->num_rows;

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>
<body>
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
        <div class="date"><?php echo $sonuc["Tarih"]; ?></div>
        <div class="rating">
          <i class="star icon"></i>
         
        </div>
      </div>
      <div class="text">
      <?php echo $sonuc['comment']."<br>";
}?>
      </div>
    </div>
  </div>
</div>
</div>
    
    
    
  
<?php
}?>

</body>
</html> 













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    

<?php

if(isset($_POST['giris'])){
    $mail=$_POST['mail'];
    $passwd=$_POST['passwd'];
    if(!$mail){
        echo "Gecerli bir mail adresi giriniz.";
    }elseif(!$passwd){
        echo "sifrenizi girin";
    }else{
        $kullanici_sor=$db->prepare('SELECT * FROM users WHERE mail=? || passwd=?');
        $kullanici_sor->execute([
             $mail,
             $passwd
        ]);
         $say=$kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['mail']=$mail;
            echo "basarili giris";
            session_start();
            $_SESSION["oturum"]=true;
            $_SESSION["username"]=$username;
            $_SESSION["surname"]=$surname;
            ?>
            <div class="container-fluid">
            <div class="row d-flex justify-content-around">
              <div class="col-4">
                <a href="team.php"><img src="assets\home\spork1.jpg" width="auto" class="rounded mx-auto d-block img-fluid"
                  alt="..." /></a>
              </div>
              <div class="col-4">
                <a href=""><img src="assets\home\spork3.jpg" width="auto" class="rounded mx-auto d-block img-fluid" alt="..." /></a>
              </div>
              <div class="col-4">
               <a href=""> <img src="assets\home\spork2.jpg" width="auto" class="rounded mx-auto d-block img-fluid"
                  alt="..." /></a>
              </div>
            </div>
          </div>
           <?php
        }else{
            echo "bir hata olustu kontrol ediniz.";
        }
    }
}?>

?>

  

</body>
</html>




<?php

$vt = new mysqli('localhost', 'root', '');
if($vt->connect_errno) {
    echo 'Mysqli bağlantı hatası: ' . $vt->connect_errno;
    exit;
}
$vt->select_db('sporkulubu');
$sorgu = $vt->query('select * from users');
$sonuc = $sorgu->fetch_assoc()
if()

if()

?> -->