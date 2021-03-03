<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<div class="container">
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
<h3>Forum de discussions</h3>
<h4>Bienvenue {{ Auth::user()->name }} , vous pouvez échanger avec nous, demander des questions sur votre préparation de mariage(déco, restauration,...)</h4>
<div class="m-5">
    <form enctype="multipart/form-data" action="{{route('coments.store')}}" method="POST">
    @csrf
        <input type="text" name="coment" class="form-control mb-3" placeholder="Bonjour, j'ai besoin de vos conseils...">
        <select name="sujet" class="form-control mb-3">
            <option value="">S'il vous choisir votre sujet</option>
            <option value="Restauration & Gateaux">Restauration & Gateaux</option>
            <option value="Décoration">Décoration</option>
            <option value="Arrangements de cérémonie">Arrangements de cérémonie</option>
            <option value="Photographie et Vidéographie">Photographie et Vidéographie</option>
            <option value="Autres">Autres</option>
        </select>
        <input type="file" hidden name="image" class="form-control mb-3 forum_img" value="Ajouter une image">

        <input type="text" hidden name="user_id" value="{{Auth::user()->id}}"><!-------user_id------>
        <input type="submit" name="envoyer" value="Ajouter" class="button">

    </form>
</div> 
        @if(session('status_delete'))
            <h4 class="text-success">{{ session('status_delete') }}</h4>
        @endif
        @if(session('status_update'))
            <h4 class="text-success">{{ session('status_update') }}</h4>
        @endif
@foreach($coments as $coment)
@auth
<!-----------------------Edit Modal Coment------------------------------>
<div class="modal fade modal-top" id="editComent_{{ $coment->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('coments.update', $coment->id)}}" method="POST" id="editForm" class="form-group formdialo rounded">
                @csrf 
                {{method_field('PATCH')}}   
                    <div class="modal-body">
                        <h3>Modification de votre message</h3>
                        <input type="hidden" id="{{ $coment->id }}">
                        <input type="text" class="form-control" id="modal__coment" value="{{ $coment->coment }}" name="coment" class="mb-3" >
                        <br>
                        <select name="sujet" class="mb-3 form-control">
                            <option value="">S'il vous choisir votre sujet</option>
                            <option value="Restauration & Gateaux">Restauration & Gateaux</option>
                            <option value="Décoration">Décoration</option>
                            <option value="Arrangements de cérémonie">Arrangements de cérémonie</option>
                            <option value="Photographie et Vidéographie">Photographie et Vidéographie</option>
                            <option value="Autres">Autres</option>
                        </select>
                        <br>
                        <input type="file" class="form-control forum_img" name="image" id="image">
                        <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" name="insertcoment" class="btn btn-primary">Valider</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
<div class="coment table table-hover table_forum">
<div class="row"">
    <div class="offset-lg-1 col-lg-3">{{$coment->sujet}}</div>
    <div hidden>{{$coment->id}}</div>
    <div class="col-lg-8">
        <div class="row">
            <div class="col-5"><strong>{{ $coment->user->name }}</strong> {{$coment->created_at}}</div>
            <div class="col-1">
            @if($coment->user_id == Auth::user()->id)
                <button type='submit' name="button" class="btn edit_btn" data-coment="{{ json_encode($coments) }}" data-toggle="modal" data-target="#editComent_{{ $coment->id }}">
                    <img src="https://img.icons8.com/nolan/27/ball-point-pen.png"/>
                </button>
            @endif
            </div>
            <div class="col-1">
            @if($coment->user_id == Auth::user()->id)
                <form action="{{route('coments.destroy', $coment->id)}}" method="POST" onsubmit="return confirm('Étes-vous sûr de vouloir supprimer votre commentaire ?');">
                    @csrf
                    @method('delete')
                    <button type='submit' name="button" class="btn">
                        <img src="https://img.icons8.com/nolan/27/delete-forever.png"/>
                    </button>
                </form>
                @endif
            </div>
        </div>
        <div class="col-lg-5 col-sm-8">{{$coment->coment}}<br><br>
            <form method="POST">
                <input type="text" name="reply" id="input_reply_{{ $coment->id }}" class="form-control reply_input">
                <a type="submit" name="button" id="reply_{{ $coment->id }}" onClick="show_input()" class="text__reply text-muted">Répondre</a>
            </form>
        </div>
        </div>
</div>
</div>
@endauth
@endforeach
</section>
</div>

@endsection
<!--------------------- Footer --------------------->
