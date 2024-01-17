@extends('app')


@section('content')


    
   <div class="container mt-5 ">
    <div class="d-flex justify-content-center">
        
        <div class="">
            <img class="img-fluid" src="image/img2.png" style="width: 100%" alt="">

        </div>

        <div class="jj" style="color:#F9A826">
            <h2 class="fw-bold text-center">Envoi d'email individuel</h2>
            <div class="p-4 border-5 border border-secondary rounded-5 " style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
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
                    <label for="name" style="color: #F9A826"
                    >Name</label>
                   
                    <input type="text" class="form-control p-2" name="name" placeholder="name" value="{{old('name')}}" style="border-radius: 10px;">
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group" >
                 <label for="text" style="color: #F9A826">Email</label>
                    @livewire('email-search')
                    {{-- <label for="text">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Entrer your email" value="{{old('email')}}">
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror --}}
                </div>
                <div class="form-group">
                    <label for="subject" style="color:#F9A826" >Subject</label>
                    <input type="text" class="form-control" style="border-radius: 10px;" name="subject" placeholder="subject" value="{{old('subject')}}">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group" >
                    <label for="message" style="color: #F9A826">Message</label>
                    {{-- <textarea type="text" cols="4" rows="4" class="form-control" name="message" placeholder="Entrer your message" value="{{old('message')}}"></textarea> --}}
                    <textarea name="message" id="myeditorinstance"  placeholder="message"></textarea>
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="subject" style="color: #F9A826 ">Add file</label>
                    <input type="file" class="form-control" name="piecejoint" placeholder="piecejoint" value="{{old('piecejoint')}}">
                </div>
    
    
                <button type="submit" class="btn" style="background-color:#80B3FF" ; >Send</button>
    
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
      
  
    
    </div>

    
   </div>


    
@endsection