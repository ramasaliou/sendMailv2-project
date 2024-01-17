@extends('app')


@section('content')

<div class="container-fluid mt-5 pb-5">
    <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8 text-ligth " >
            <h2 class="fw-bold"  style="color:#F9A826";>Ajouter Contact</h2>
            <div class="p-4 border-2 border border-secondary rounded-5">
            
            <form class="" action="{{route('addContact')}}" method="post" enctype="multipart/form-data">
                @csrf

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @endif

                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                    
                @endif
                @if (Session::has('error'))
                <div class="alert alert-success">
                    {{Session::get('errormail')}}
                </div>
                    
                @endif
                
                <div class="form-group">
                    <label for="firstName" style="color:#F9A826";>First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="first Name" >
                    @error('firstName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="lastName"style="color:#F9A826";>Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="last Name" >
                    @error('lastName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email"  style="color:#F9A826";>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" >
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email" style="color:#F9A826";>Phone</label>
                    <input type="phone" class="form-control" name="phone" placeholder="phone">
                    @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group d-flex flex-row bd-highlight mb-3">
                    <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"  name="membre" value="membre" >
                        <label class="form-check-label" for="Membre"  style="color:#F9A826";>
                         Membre
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"name="admine" value="admine">
                        <label class="form-check-label" for="Admine" style="color:#F9A826";>
                          Admin
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"  name="stagiaire" value="stagiaire" >
                        <label class="form-check-label" for="Stagiaire" checked  style="color:#F9A826"; >
                         Stagiaire
                        </label>
                      </div>
                      
                </div>
                <button type="submit" class="btn  m-3" style="background-color:#80B3FF;">Ajouter</button>
            </form>
        </div>
        </div>
       
    </div>
</div>

@endsection