<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Inscription --------------------->
<div class="container">
<section class="inscription">
    <h2> Inscription </h2>
    <div class="row">
    <div class="offset-lg-2 col-lg-4 col-sm-12 form">
        <form method="POST" action="{{ route('register') }}" class="form-group p-2 mb-5 rounded">
        @csrf

            <div class="form-group mt-5">        
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Pseudo">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror            
            </div>
            <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
            </div>
        
        
            <input type="checkbox" name="condition" required class="mb-2 h5" > Je reconnais avoir pris connaissance des conditions d’utilisation<a href="#"> condition </a> et y adhère totalement.<br>
            <button name="confirm" class="button mt-2">Valider</button>  
           
            </form>
        </div>
        <div class="col-lg-4 img__signin sm-none mt-5 mb-5">
        </div>
        </div>
</section>
</div>

    @endsection