<?php
require 'baglanti.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="pageReg background">
     
<div class="container ">
    <div class="row col-md-6 col-md-offset-3">
       <div class="panel panel-primary">
           <div class="panel-heading text-center">
               <span class="display-2">Kayıt Ol</span>
            </div>
         <div class="panel-body">
            <form action="islem.php" method="post">
                <div class="form-group">
                    <label for="firstName">Ad</label>
                    <input type="text" class="form-control" name="username" placeholder="Ad">
                </div>
                <div class="form-group">
                   <label for="lastName">Soyad</label>
                   <input type="text" class="form-control" name="surname" placeholder="Soyad">
               </div>
               <div class="form-group">
                   <label for="mailAddress">E-Posta</label>
                   <input type="text" class="form-control" name="mail" placeholder="E-Posta">
               </div>
               <div class="form-group">
                   <label for="paswd">Parola</label>
                   <input type="password" class="form-control" name="passwd" placeholder="Parola">
               </div>
               <input type="submit" name="Kayit" value="Kayıt ol" class="btn btn-primary">
            </form>
           </div>
         <div class="panel-footer text-right">
             <small>Hesabın var mı? <a href="login.php">Giriş yap</a></small>
           </div>
       </div>
    </div>
   </div>
</div>

</body>
</html>
