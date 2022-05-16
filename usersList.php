<?php
// veritabanına bağlan
$vt = new mysqli('localhost', 'root', '123456789');
// hata varsa uyar ve çalışmayı durdur
if($vt->connect_errno) {
    echo 'Mysqli bağlantı hatası: ' . $vt->connect_errno;
    exit;
}
// deneme isimli veritabanını seç
$vt->select_db('sporkulubu');
// üyeler tablosundan kullanıcı adını seç
$sorgu = $vt->query('select * from users');
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

?>