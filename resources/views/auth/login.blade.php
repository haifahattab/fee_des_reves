<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')

<!-------------------- Connexion ------------------>
<div class="container">
<section class="connexion">
<h2>Se connecter</h2>
<div class="row">
<div class="offset-lg-2 col-lg-4 col-sm-12 form pt-4">
<form method="POST" action="{{ route('login') }}" class="Form-group p-3 mb-5 rounded">
@csrf
 
        <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Adresse email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">            
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                </div>
            </div>
        </div>
        <button name="submit" class="mb-2 mr-0 button">Valider</button><br>
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié?') }}
        </a>
        @endif        
        <a class="btn btn-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
        
    </form>
</div>
<div class="col-lg-4 img__connexion mb-5"></div>
</div>
</section>
</div>
@endsection