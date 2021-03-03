<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<div class="container">
    <section class="forum">
        <h2>FORUM</h2>
        <h4>Bienvenue sur le forum fée des Rêves<br> rejoignez-nous pour échanger et demander des conseils<br> nous serons nombreux à vous aider et à partager nos expériences</h4>
        <div class="m-5">
            <a href="{{ url('login') }}">Créer une discussion</a>
        </div>
        @foreach($coments as $coment)
        <div class="coment">
            <div class="row"">
                <div class="offset-lg-1 col-lg-3">{{$coment->sujet}}</div>
                <div hidden>{{$coment->id}}</div>
                <div class="col-lg-8">
                    <div class="col-5"><strong>{{ $coment->user->name }}</strong> {{$coment->created_at}}</div>
                    <div class="col-lg-5 col-sm-8">{{$coment->coment}}<br><br></div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>

@endsection
<!--------------------- Footer --------------------->
