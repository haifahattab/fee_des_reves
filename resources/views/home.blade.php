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
        <input type="file" name="image" class="form-control mb-3" value="Ajouter une image">

        <input type="text" hidden name="user_id" value="{{Auth::user()->id}}"><!-------user_id------>
        <input type="submit" name="envoyer" value="Ajouter" class="button">

    </form>
</div> 
@foreach($coments as $coment)
@auth
<div class="coment offset-lg-1 col-lg-10">
<table id="dataTable" class="table table-hover table_forum">
    <tr>
        <th>{{$coment->sujet}}</th>
        <td hidden>{{$coment->id}}</td>
        <td>{{$coment->coment}}<br><br>
            <a type="submit" name="button" class="text">Répondre</a>
        </td>
        @if($coment->user_id == Auth::user()->id)
        <td>
            <a type='submit' name="button" data-coment_id="{{$coment->id}}" data-coment="{{$coment->coment}}" data-toggle="modal" data-target="#editComent">
                <img src="https://img.icons8.com/nolan/27/ball-point-pen.png"/>
            </a>
        </td>
        <td>
            <a type='submit' name="button" data-toggle="modal" data-coment_id="{{$coment->id}}"  data-target="#deleteComent">
                <img src="https://img.icons8.com/nolan/27/delete-forever.png"/>
            </a>
        </td>
        @endif
        <td>{{$coment->created_at}}</td>
    </tr>
</table>
</div>


<!-----------------------Edit Modal Coment------------------------------>
<div class="modal fade modal-top" id="editComent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editForm" class="form-group formdialo rounded">
                @csrf 
                {{method_field('PATCH')}}   
                    <div class="modal-body">
                        <h3>Modification de votre message</h3>
                        <input type="hidden" id="coment_id" >
                        <input type="text" class="form-control" id="coment" name="coment" class="mb-3" >
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
                        <input type="file" class="form-control" name="image" id="image">
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
<!-----------------------Delete Modal Coment------------------------------->
<div class="modal fade modal-top" id="deleteComent.{{$coment->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
            <form action="{{route('coment.destroy',$coment->id)}}" method="post" id="deleteform">
            @csrf
            @method('DELETE')
            <input type="hidden" name="_method" value="delete" id="delete_id" >
                        <h4>Etes vous sur de vouloir supprimer ? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" name="deletcoment" class="btn btn-danger">Valider</a>
                    </div>
                </form>
            </div>
        </div>
</div>

@endauth
@endforeach
<!------------------------------ script -------------------------------->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script>
     $(document).ready(function(){
        $('#editComent').on('click',function(e){
            var button = $(event.relatedTarget)
            var coment_id = button.data('coment_id')
            var coment = button.data('coment')
            var modal = $(this)
            modal.find('.modal-body #id').val(coment_id);
            modal.find('.modal-body #coment').val(coment);

            $('#editComent').modal('show');

        });

        $('#deleteComent').on('click',function(){           
            $('#deletComent.{{$coment->id}}').modal('show');
            
        });

    });
</script>

</section>
</div>

@endsection
<!--------------------- Footer --------------------->
