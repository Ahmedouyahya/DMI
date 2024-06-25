@extends('layouts.user_type.guest')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/img/A4.jpeg" class="d-block w-100" alt="FST1" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h4 >UN</h4>
          <p >universite de nouakchott</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/img/A2.jpg" class="d-block w-100" alt="FST2" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h4>FST</h4>
          <p>fsculte de science et techenique</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/img/A3.jpeg" class="d-block w-100" alt="FST3" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h4>DMI</h4>
          <p>deppartement de mathematique et informatiue</p>
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
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto text-center">
              <h1 class="font-weight-bolder text-info text-gradient">Bienvenue sur le site de la Faculté des Sciences et Techniques</h1>
              <p class="lead mt-3">
                La Faculté des Sciences et Techniques de l'Université de Nouakchott est un centre d'excellence académique offrant une formation de qualité dans divers domaines technologiques et scientifiques.
              </p>
              <p>
                Notre département de Mathématiques et Informatique propose plusieurs spécialités pour orienter les étudiants vers des carrières prometteuses et innovantes.
              </p>
              <div class="row mt-5">
                <div class="col-lg-6 mb-4">
                  <div class="card border-0 shadow">
                    <div class="card-body">
                      <h3 class="card-title text-info text-gradient">Système d'Information (SI)</h3>
                      <p class="card-text">
                        Le SI se concentre sur la conception, le développement et la gestion des systèmes d'information informatisés au sein des organisations.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card border-0 shadow">
                    <div class="card-body">
                      <h3 class="card-title text-info text-gradient">Réseaux et Systèmes de Communication (RSC)</h3>
                      <p class="card-text">
                        RSC se focalise sur les réseaux de communication, les protocoles de transmission de données et les technologies associées.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card border-0 shadow">
                    <div class="card-body">
                      <h3 class="card-title text-info text-gradient">Ingénierie Mathématique et Calcul Scientifique (IMCS)</h3>
                      <p class="card-text">
                        IMCS utilise les mathématiques avancées pour modéliser et simuler des problèmes scientifiques et techniques complexes.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card border-0 shadow">
                    <div class="card-body">
                      <h3 class="card-title text-info text-gradient">Statistique et Science de Données (SSD)</h3>
                      <p class="card-text">
                        SSD explore les méthodes statistiques pour analyser et interpréter des données complexes et volumineuses.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="mt-4">
                Pour plus d'informations sur nos programmes et comment postuler, n'hésitez pas à nous contacter ou visitez notre campus.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
