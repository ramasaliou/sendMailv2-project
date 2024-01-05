@extends('app')


@section('content')

<div class="container-fluid mt-5 pb-5">
    <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8 text-ligth " >
            <h2 class="fw-bold">Page Admin</h2>
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
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="first Name" >
                    @error('firstName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="last Name" >
                    @error('lastName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" >
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="phone" class="form-control" name="phone" placeholder="phone">
                    @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <form>
                <form>
                <label for="image">Choisissez une image :</label>
                <input type="file" id="image" name="image" accept="image/*">
                <br>
                <input type="submit" value="Envoyer">
                </form>


                      
                </div>
                <button type="submit" class="btn  m-3" style="background-color: rgb(248, 215, 218);">Ajouter</button>
            </form>
        </div>
        </div>
       
    </div>
</div>

@endsection