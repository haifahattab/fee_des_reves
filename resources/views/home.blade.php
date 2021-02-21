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
    <input type="text" name="coment" placeholder="Bonjour, j'ai besoin de vos conseils...">
    <input type="file" name="image" value="Ajouter une image">
    <select name="sujet">
        <option value="">S'il vous choisir votre sujet</option>
        <option value="Restauration & Gateaux">Restauration & Gateaux</option>
        <option value="Décoration">Décoration</option>
        <option value="Arrangements de cérémonie">Arrangements de cérémonie</option>
        <option value="Photographie et Vidéographie">Photographie et Vidéographie</option>
        <option value="Autres">Autres</option>
    </select>
    <input type="text" hidden name="user_id" value="{{Auth::user()->id}}"><!-------user_id------>
    <input type="submit" name="envoyer" value="Ajouter" class="button">

</form>
</div> 
@foreach($coments as $coment)
@auth

<div class="coment offset-lg-2 col-4 offset-lg-2">
<table>
    <tr>
        <th>{{$coment->sujet}}</th>
        <td>{{$coment->coment}}</td>
        @if($coment->user_id == Auth::user()->id)
        <td>
            <a type='submit' name="button" data-coment="{{$coment->coment}}" data-sujet="{{$coment->sujet}}" data-image="{{$coment->image}}" data-toggle="modal" data-target="#updatemodal">
                <img src="https://img.icons8.com/nolan/27/ball-point-pen.png"/>
            </a>
        </td>
        <td>
            <a type='submit' name="button" class="deletecoment" data-toggle="modal" data-target="#deletemodal">
                <img src="https://img.icons8.com/nolan/27/delete-forever.png"/>
            </a>
        </td>
        @endif
        <td>{{$coment->created_at}}</td>
    </tr>
</table>
</div>
@endauth
@endforeach

<!-----------------------Update Modal Coment------------------------------>
<div class="modal fade mt-5" id="updatemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="coments" method="post" id="editform" class="form-group formdialo rounded">
                @csrf 
                {{method_field('PATCH')}}   
                    <div class="modal-body">
                        <h3>Modification de votre message</h3>
                        <input type="text" id="coment" name="coment" >
                        <select name="sujet" id="sujet">
                            <option value="">S'il vous choisir votre sujet</option>
                            <option value="Restauration & Gateaux">Restauration & Gateaux</option>
                            <option value="Décoration">Décoration</option>
                            <option value="Arrangements de cérémonie">Arrangements de cérémonie</option>
                            <option value="Photographie et Vidéographie">Photographie et Vidéographie</option>
                            <option value="Autres">Autres</option>
                        </select>
                        <input type="file" name="image" id="image">
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
<div class="modal fade mt-5" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
            <form action="{{route('coments.destroy', $coment->id)}}" method="post" id="deleteform">
            @csrf
            {{method_field('delete')}}
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


<!------------------------------ script -------------------------------->
<script>
     $(document).ready(function(){
        $('#updatecoment').on('show.bs.modal',function(e){
            var button = $(e.relatedTarget)
            var coment = button.data('coment')
            var sujet = button.data('sujet')
            var image = button.data('image')
            $('#coment').val($(this).data('coment'));
        });

        $('#deletemodal').on('click',function(e){
            $('#deletmodal').modal('show');

            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            console.log(data);
            //$('#delete_id').val(data[0]);
            $('#deleteform').atrr('action','coments'+data[0]);
            $('#deletemodal').modal('show');
        
        });

    });
</script>

</section>
</div>

@endsection
<!--------------------- Footer --------------------->
