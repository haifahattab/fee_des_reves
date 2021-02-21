<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Forum --------------------->
<div class="container-fluid">
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
    <h4>Bienvenue {{ Auth::user()->name }} , vous pouvez échanger avec nous, demander des questions sur votre préparation de mariage(déco, restauration,...)</h4>
<div class="m-5">
<form enctype="multipart/form-data" action="{{route('coments.store')}}" method="POST">
@csrf
    <input type="text" id="coment" name="coment" placeholder="Bonjour, j'ai besoin de vos conseils...">
    <input type="file" name="image" value="Ajouter une image">
    <input type="submit" name="envoyer" value="Ajouter" class="button">
    <input type="text" hidden name="user_id" value="{{Auth::user()->id}}"><!-------user_id------>

</form>
</div> 
@foreach($coments as $coment)
@auth
@if($coment->user_id == Auth::user()->id)
<div class="coment offset-lg-2 col-4 offset-lg-2">
<div class="row">

    <p>{{$coment->coment}}</p>
    <button type='submit' name="button" id="updatecoment">
        <img src="https://img.icons8.com/nolan/27/ball-point-pen.png"/>
    </button>
    
    <button type='submit' name="button" id="deletecoment">
        <img src="https://img.icons8.com/nolan/27/delete-forever.png"/>
    </button>
</div>
<p>{{$coment->created_at}}</p>

</div>
@endif
@endauth
@endforeach

<!-----------------------Update Modal Coment------------------------------>
<div class="modal fade mt-5" id="updatemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{url('coments', $coment)}}" method="post" class="form-group formdialo rounded">
                @csrf 
                {{method_field('PATCH')}}   
                <div class="modal-body">
                    <h3>Modifier votre message</h3>
                    <input type="text" id="coment" name="coment" value="{{$coment->coment}}">
                    <input type="file" name="image" value="{{$coment->image}}">
                    <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" name="insertcoment" class="btn btn-primary">Valider</a>
                    </div>
                </form>
            </div>
        </div>

</div>
<!-----------------------Delete Modal Coment------------------------------->
<div class="modal fade mt-5" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="{{url('coments.destroy',$coment->id)}}" method="post">
            @csrf
            {{method_field('delete')}}
                    <div class="modal-body">
                        <h4>Etes vous sur de vouloir supprimer ? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" name="deletcoment" class="btn btn-primary">Valider</a>
                    </div>
                </form>
            </div>
        </div>
</div>
<script>
     $(document).ready(function(){
        $('#updatecoment').on('click',function(){
            $('#updatemodal').modal('show');

        });
    
        $('#deletecoment').on('click',function(){
        $('#deletemodal').modal('show');

        });
    });
</script>

</section>
</div>

@endsection
<!--------------------- Footer --------------------->
