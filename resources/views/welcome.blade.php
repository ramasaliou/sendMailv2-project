@extends('app')


@section('content')


    
   <div class="container mt-5 ">
    <div class="row">
        
        <div class="float-right w-25  col-md-3 alert-danger" >
            <img class="img-fluid" src="image/imaEmail.png" alt="">

        </div>

        <div class=" float-none w-25 col-md-6">
            <h2 class="fw-bold text-center">Envoi d'email individuel</h2>
            <div class="p-4 border-5 border border-secondary rounded-5 bg-danger  ">
            <form action="{{route('sendMail')}}" method="post" enctype="multipart/form-data">
                @csrf
    
                @if (Session::has('error'))
                    <div class="alert">
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
                {{-- <div class="form-group d-flex flex-row bd-highlight mb-3">
                    <div class="form-check m-3">
                        <input class="form-check-input" type="radio"  name="typemail" value="grouper" >
                        <label class="form-check-label" for="email">
                         Grouper
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="radio"name="typemail" value="individuel">
                        <label class="form-check-label" for="email">
                            Individuel
                        </label>
                      </div>
                    
                      
                </div> --}}
                 
                <div class="form-group">
                    <label for="name" style="color: white">Name</label>
                   
                    <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name')}}">
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                 <label for="text" style="color: white">Email</label>
                    @livewire('email-search')
                    {{-- <label for="text">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Entrer your email" value="{{old('email')}}">
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror --}}
                </div>
                <div class="form-group">
                    <label for="subject" style="color: white">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="subject" value="{{old('subject')}}">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="message" style="color: white">Message</label>
                    {{-- <textarea type="text" cols="4" rows="4" class="form-control" name="message" placeholder="Entrer your message" value="{{old('message')}}"></textarea> --}}
                    <textarea name="message" id="myeditorinstance" placeholder="message"></textarea>
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="subject" style="color: white">Add file</label>
                    <input type="file" class="form-control" name="piecejoint" placeholder="piecejoint" value="{{old('piecejoint')}}">
                </div>
    
    
                <button type="button" class="btn btn-dark">Send</button>
    
            </form>
        </div>
      
      
      
        {{-- <div class="col-md-2">
           
        </div> --}}
       
        <script>
                        tinymce.init({
            selector: 'textarea#myeditorinstance',
            plugins: 'code',
            menu: {
                happy: {title: 'Happy', items: 'code'}
            },
            menubar: 'none'
            });
            
          </script>
            
       
        </div>
      
       
        <div class=" float-left w-25 col-md-3 alert-danger">
            <img class="img-fluid" src="image/imaEmail.png" alt="">

        </div>
        
    
    </div>

    <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}
</div>
   
   </div>


    
@endsection