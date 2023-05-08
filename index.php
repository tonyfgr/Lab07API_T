<?php include 'template/header.php' ?>
 
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/gim.jpg" class="d-block img-fluid  " alt="adquirir" >
      <div class="carousel-caption d-none d-md-block">
            <h5>Escoge la mejor membresía</h5>
            <p>FitHub te ofrece los mejores precios para ti.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/dirimg.jpg" class="d-block img-fluid  " alt="dirigirse">
      <div class="carousel-caption d-none d-md-block">
            <h5>Ejercitate cuando quieras</h5>
            <p>Con FitHub puedes ir a ejercitarte cuando desees.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/entreimg.jpg" class="d-block img-fluid  " alt="entrenar">
      <div class="carousel-caption d-none d-md-block">
            <h5>Elige donde quieres entrenar</h5>
            <p>Con FitHub puedes ir a cualquier gimnasio cerca de ti.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include 'template/footer.php' ?>