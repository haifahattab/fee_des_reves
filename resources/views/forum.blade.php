<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<div class="container">
    <section class="forum">
        <div>
            <h2>FORUM</h2>
            <h4>Bienvenue sur le forum fée des Rêves<br> rejoignez-nous pour échanger et demander des conseils<br> nous serons nombreux à vous aider et à partager nos expériences</h4>
            <div class="m-5">
                <a href="{{ url('login') }}">Créer une discussion</a>
            </div>
            @foreach($coments as $coment)
            <div class="coment offset-lg-1 col-10">
                <table id="dataTable" class="table table-hover table_forum">
                    <tr>
                        <th>{{$coment->sujet}}</th>
                        <td hidden>{{$coment->id}}</td>
                        <td>{{$coment->coment}}</td>
                        <td>{{$coment->created_at}}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </section>
</div>

@endsection
<!--------------------- Footer --------------------->
