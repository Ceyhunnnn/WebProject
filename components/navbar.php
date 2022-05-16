<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Spor Kulüpleri</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
          </li>
         
          <li>
            <a class="nav-link active" href="about.php">Hakkımızda</a>
          </li>
      </div>
      <li>



     
      <?php

      if(isset($_SESSION["oturum"])){?>

            <button type="button" onClick="location.href='cikis.php'" class="btn btn-light">Çıkış Yap</button>
      <?php
      }
      else{?>
      <button type="button" onClick="location.href='register.php'" class="btn btn-light">Kayıt Ol</button>
      <button type="button" onClick="location.href='login.php'" class="btn btn-dark">Oturum Aç</button>
      <?php
      }?>

        
      </li>
    </div>  </nav>