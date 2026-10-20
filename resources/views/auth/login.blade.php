@extends('layouts')

@section('content')
<div class="container" style="max-width: 460px; padding-top: 120px; padding-bottom: 60px;">
    <h2 class="mb-4 text-center">Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   class="form-control" required autofocus autocomplete="username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input id="password" type="password" name="password"
                   class="form-control" required autocomplete="current-password">
        </div>

        <div class="form-check mb-3">
            <input id="remember" type="checkbox" name="remember" value="1" class="form-check-input">
            <label for="remember" class="form-check-label">Rester connecté</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
    </form>
</div>
@endsection
