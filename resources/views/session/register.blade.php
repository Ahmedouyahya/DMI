@extends('layouts.user_type.guest')

@section('content')

  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bienvenue !</h1>
            <p class="text-lead text-white">Utilisez ces formulaires impressionnants pour vous connecter ou créer un nouveau compte.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">

            <div class="card-header text-center pt-4">
                <img src="../assets/img/logo.png" alt="" style="box-shadow: 10px;border-radius:25%;width:150px;">
              <h5>Inscription</h5>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">


            </div>

            <div class="card-body">
              <form role="form text-left" method="POST" action="/register">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nom" name="name" id="name" aria-label="Nom" aria-describedby="name" value="{{ old('name') }}">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Mot de passe" name="password" id="password" aria-label="Mot de passe" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" name="agreement" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    J'accepte les <a href="javascript:;" class="text-dark font-weight-bolder">Termes et Conditions</a>
                  </label>
                  @error('agreement')
                    <p class="text-danger text-xs mt-2">Veuillez d'abord accepter les Termes et Conditions, puis essayez de vous inscrire à nouveau.</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">S'inscrire</button>
                </div>
                <p class="text-sm mt-3 mb-0">Vous avez déjà un compte ? <a href="login" class="text-dark font-weight-bolder">Se connecter</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
