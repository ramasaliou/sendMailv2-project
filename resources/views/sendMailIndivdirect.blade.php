@extends('app')

@section('content')

<div class="container-fluid mt-5">
    <div class="row justify-content-center">

        <div class="col-md-8 text-light pb-5 text-center">
            <h2 class="fw-bold mb-4 text-dark">Envoi d'email individuel</h2>
            <div class="p-4 border-2 border border-secondary rounded" style="background-color: rgba(0, 0, 0, 0.7); color: white;">
                <form action="{{route('sendMail')}}" method="post" enctype="multipart/form-data">
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
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$contact->firstName.' '. $contact->lastName}}">
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{$contact->email}}">
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{old('subject')}}">
                        @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="myeditorinstance" placeholder="Message"></textarea>
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="piecejoint">Add file</label>
                        <input type="file" class="form-control" name="piecejoint" placeholder="Piecejoint" value="{{old('piecejoint')}}">
                    </div>

                    <button type="submit" class="btn btn-info m-3">Send</button>
                </form>
            </div>
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
