<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<section class="forum">
<div class="forum">
    <h2>FORUM</h2>
    <h4>Bienvenue sur le forum fée des Rêves<br> rejoignez-nous pour échanger et demander des conseils<br> nous serons nombreux à vous aider et à partager nos expériences</h4>
<div class="m-5">
    @auth
    <a href="{{ url('/home') }}">Tableau de bord</a>
    @endauth
@guest
<a href="{{ url('login') }}">Créer une discussion</a>
@endguest
</div>
<div class="comment">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, non! Rem quae illum aperiam itaque libero iure minima beatae tempore reprehenderit quisquam. Alias laboriosam eius debitis perferendis, consectetur earum cupiditate.</div>
</div>
</section>


@endsection
<!--------------------- Footer --------------------->
