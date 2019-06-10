@extends('layouts.app')

@section('content')




              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/pm1.jpg" class="d-block w-100" alt="Faça um Boletin de Ocorrência Online">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Boletin de Ocorrência Online</h5>
                      <p>Registre um, é fácil!</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/pm33.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Proerd - PMMG</h5>
                  <p>Livrando nossas crianças do mundo das drogas.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="img/pm2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Polícia Militar de MG</h5>
              <p>Nossa Profissão, sua segurança!</p>
          </div>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>



@endsection
