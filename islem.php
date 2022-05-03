<?php
ob_start();
session_start();
require 'baglanti.php';

if(isset($_POST['Kayit'])){
    $username=$_POST["username"];
    $surname=$_POST["surname"];
    $mail=$_POST["mail"];
    $passwd=$_POST["passwd"];
    
    if(!$username ){
        echo "Lutfen adinizi girin";
    }
    elseif(!$surname){
        echo "Lutfen soyadinizi girin";
    }elseif(!$mail){
        echo "Lutfen mail adresini girin.";
    }elseif(!$passwd){
        echo "Lutfen Parola girin";
    }
    else{
        //veritabani kayit islemi
        $sorgu=$db->prepare('INSERT INTO users SET  name=?, surname=?, mail=?, passwd=?');
        $ekle=$sorgu->execute([
            $username,
            $surname,
            $mail,
            $passwd
        ]);
        if($ekle){
            echo "Kayit basarili";
            header('Refresh:2; index.php');
        }else{
            echo "Bir hata olustu tekrar deneyiniz.";
        }

    }
}
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
            header('Refresh:2; index.php');
        }else{
            echo "bir hata olustu kontrol ediniz.";
        }
    }
}

?>
