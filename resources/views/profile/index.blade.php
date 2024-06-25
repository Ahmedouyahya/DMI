<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Utilisateur</title>
</head>
<body>
    <h1>Votre Profil</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('profile') }}" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label for="email">Email :</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <label for="phone">Téléphone :</label>
        <input type="text" name="phone" value="{{ $user->phone }}">

        <label for="location">Emplacement :</label>
        <input type="text" name="location" value="{{ $user->location }}">

        <label for="about_me">À propos de moi :</label>
        <textarea name="about_me">{{ $user->about_me }}</textarea>

        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
