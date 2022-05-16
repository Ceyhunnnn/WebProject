<!DOCTYPE html>
<html lang="en">
<head>

<?php
require 'islem.php';
include("baglanti.php");
?>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spor Kulüpleri</title>

  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>

<body style="background-color: #eeeeee">
<?php require_once('components/navbar.php'); ?>



  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/football.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="assets/images/basketball.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="assets/images/body.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="assets/images/fight.jpg" class="d-block w-100" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h1 class="display-2 takim">Kulüpler</h1>
  <p class="takimYazi">
    Aşağıdaki kartlardan istediğin spor alanına göre seçim yapabilirsin.<br>
    Daha detaylı bir inceleme sonucunda seçmiş olduğun spor kulübüne üye olabilirsin.
  </p>

  <div class="container-fluid">
    <div class="row d-flex justify-content-around">
      <div class="col-4">
        <img src="assets\home\spork1.jpg" width="auto" class="rounded mx-auto d-block img-fluid"
          alt="..." />
      </div>
      <div class="col-4">
        <img src="assets\home\spork3.jpg" width="auto" class="rounded mx-auto d-block img-fluid" alt="..." />
      </div>
      <div class="col-4">
        <img src="assets\home\spork2.jpg" width="auto" class="rounded mx-auto d-block img-fluid"
          alt="..." />
      </div>
    </div>
  </div>
  <br />
<!-- 


  <div class="container-fluid  pb-2 ">
    <h1 class="display-2 takim ">Haberler</h1>
    <div class="row justify-content-evenly">
      <div class="card" style="width: 18rem;">
        <img src="assets/images/news.jpg" class=" paddingImg card-img-top img-fluid " alt="...">
        <div class="card-body">
          <h5 class="card-title">Haber Başlığı</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Devamını Oku..</a>
        </div>
      </div>


    </div>
  </div> -->





  <div class="container-fluid name">
    <div class="row footer">
      <div class="col-6 col-md">
        Adres:
        <p>
          Akademi, Alaaddin Keykubat Yerleşkesi,<br />
          Yeni İstanbul Cd. <br />No:369, Selçuklu/Konya
        </p>
      </div>

      <div class="col-6 col-md">
        Yapımcı:
        <p class="">
          Ceyhun GÜL Bilgisayar Mühendisi


          <br />
          (Selçuk Üniversitesi Teknoloji Fakültesi)
        </p>
      </div>
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

