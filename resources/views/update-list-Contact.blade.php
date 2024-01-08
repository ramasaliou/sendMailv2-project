@extends('app')


@section('content')

<div class="container-fluid mt-5 pb-5">
    <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8 text-ligth " >
            <h2 class="fw-bold">Modifier un contact </h2>
            <div class="p-4 border-2 border border-secondary rounded-5">
            
                <hr>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif 
                      
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>

            <form class="" action="{{route('/update/traitement')}}" method="Post" enctype="multipart/form-data">
                @csrf
 
                <input type="text" name="id" style="display: none;" value="{{$contacts->id}}">

                
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" value="{{$contacts->firstName}}" placeholder="first Name" >
                    @error('firstName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" value="{{$contacts->lastName}}" placeholder="last Name" >
                    @error('lastName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$contacts->email}}" placeholder="email" >
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="phone" class="form-control" name="phone" value="{{$contacts->phone}}" placeholder="phone">
                    @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group d-flex flex-row bd-highlight mb-3">
                    <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"  name="membre" value="membre" >
                        <label class="form-check-label" for="Membre">
                         Membre
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"name="admine" value="admine">
                        <label class="form-check-label" for="Admine">
                          Admin
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"  name="stagiaire" value="stagiaire" >
                        <label class="form-check-label" for="Stagiaire" checked >
                         Stagiaire
                        </label>
                      </div>
                      
                </div>
                <button type="submit" class="btn  m-3" style="background-color: rgb(248, 215, 218);">Ajouter</button>
            </form>
        </div>
        </div>
       
    </div>
</div>

@endsection