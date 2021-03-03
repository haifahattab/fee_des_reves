<!---------------------- header ------------------->
@extends('layouts.headerFooter')
@section('content')
    
<!---------------------- Admin --------------------->
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

        @if(session('status_delete'))
            <h4 class="text-success">{{ session('status_delete') }}</h4>
        @endif
@foreach($users as $user)
@auth
<div class="coment table table-hover table_forum">
<div class="row"">
    <div class="offset-lg-1 col-lg-3">{{$user->id}}</div>
    <div class="col-lg-2">{{$user->name}}</div>
    <div class="col-lg-4">{{$user->email}}</div>
    <div class="col-lg-2">
        <form action="{{route('users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('Étes-vous sûr de vouloir supprimer cet utilisateur ?');">
            @csrf
            @method('delete')
            <button type='submit' name="button" class="btn">
                <img src="https://img.icons8.com/nolan/27/delete-forever.png"/>
            </button>
        </form>
    </div>
</div>
</div>
@endauth
@endforeach
</section>
</div>

@endsection
<!--------------------- Footer --------------------->
