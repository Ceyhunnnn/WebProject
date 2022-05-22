
<?php
require 'baglanti.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="pageReg background">
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <span class="display-2">Oturum Aç</span>
                </div>
            <div class="panel-body">
                <form action="islem.php" method="post">
            
                <div class="form-group">
                    <label for="mailAddress">Kullanıcı Adı</label>
                    <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="mail">
                </div>
                <div class="form-group">
                    <label for="paswd">Parola</label>
                    <input type="password" class="form-control"  placeholder="Parola" name="passwd">
                </div>
                <input type="submit" name="giris"  value="Oturum aç" class="btn btn-success">
                </form>
            </div>
            <div class="panel-footer text-right">
                <small><a href="register.php">Yeni hesap oluştur</a></small>
            </div>
        </div>
        </div>
    </div>
</div>

</body>
</html>
