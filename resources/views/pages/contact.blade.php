@extends('layouts.user_type.guest')

@section('content')

<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center">
                        <h1 class="fw-bolder">Contactez-nous</h1>
                        <p class="lead text-muted">Pour toute question ou information supplémentaire sur nos
                            spécialités, n'hésitez pas à nous contacter.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-envelope me-2"></i> info@example.com</li>
                            <li><i class="fas fa-phone me-2"></i> +1234567890</li>
                            <li><i class="fas fa-map-marker-alt me-2"></i> 123 Rue Principale, Ville, Pays</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
