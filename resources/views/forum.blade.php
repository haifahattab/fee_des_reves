<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<div class="container">
    <section class="forum">
        <div class="forum">
            <h2>FORUM</h2>
            <h4>Bienvenue sur le forum fée des Rêves<br> rejoignez-nous pour échanger et demander des conseils<br> nous serons nombreux à vous aider et à partager nos expériences</h4>
            <div class="m-5">
                <a href="{{ url('login') }}">Créer une discussion</a>
            </div>
            @foreach($coments as $coment)
                <div class="coment offset-lg-2 col-8 offset-lg-2">
                <div class="row">
                    <p>{{$coment->coment}}</p>
                    <p>{{$coment->created_at}}</p>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
<!--------------------- Footer --------------------->
