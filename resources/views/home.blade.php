<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<section class="forum2">
<div class="is-connected mb-5">
    {{Auth::user()->name }} <br><a class="a-forum" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
    {{ __('Déconnexion') }}
    </a>
</div> 
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    <h2>FORUM</h2>
    <h4>Bienvenue {{ Auth::user()->name }} , vous pouvez échanger avec nous</h4>
<div class="m-5">
<form action="{{route('Users.store')}}" method="POST">
    <input type="text" id="comment" name="comment" placeholder="Bonjour, j'ai besoin de vos conseils...">
    <input type="submit" name="Valider" class="button">
</form>
</div> 
<div class="comment mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, non! Rem quae illum aperiam itaque libero iure minima beatae tempore reprehenderit quisquam. Alias laboriosam eius debitis perferendis, consectetur earum cupiditate.</div>
</div>
</section>


@endsection
<!--------------------- Footer --------------------->
