@extends('app')

@section('content')


<div class="container mt-5">
    <div class="row">

    <div class="float-right w-25  col-md-3 alert-danger" >


            <img class="img-fluid" src="image/mail-groupe.png" alt="">

     </div>


     
     <div class=" float-none w-25 col-md-6">
                        <div class=" float-none ">
                            <h2 class="fw-bold mb-4 text-dark text-center">Envoi d'email Groupé</h2>
                            <div class="p-4 border-5 border border-secondary rounded-5 bg-danger " style="background-img; color: white;"> <!-- Couleur noire avec une opacité de 0.7 -->
                                <form action="{{ route('sendMailgroupe') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @if (Session::has('error2'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                    @endif

                                    @if (Session::has('success2'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="form-group d-flex flex-row bd-highlight mb-3">
                                            <div class="form-check m-3">
                                                <input class="form-check-input" type="checkbox" name="membre" value="membre">
                                                <label class="form-check-label" for="Membre">Membre</label>
                                            </div>
                                            <div class="form-check m-3">
                                                <input class="form-check-input" type="checkbox" name="admine" value="admine">
                                                <label class="form-check-label" for="Admine">Admin</label>
                                            </div>
                                            <div class="form-check m-3">
                                                <input class="form-check-input" type="checkbox" name="stagiaire" value="stagiaire" checked>
                                                <label class="form-check-label" for="Stagiaire">Stagiaire</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                                        @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="myeditorinstance" cols="4" rows="4" class="form-control" name="message" placeholder="Message">{{ old('message') }}</textarea>
                                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="file" class="form-control" name="piecejoint" placeholder="Piecejoint" value="{{ old('piecejoint') }}">
                                    </div>

                                    <button type="button" class="btn btn-dark">Send</button>
                                </form>
                            </div>
                        </div>
                        <script>
                tinymce.init({
                    selector: 'textarea#myeditorinstance',
                    plugins: 'code',
                    menu: {
                        happy: { title: 'Happy', items: 'code' }
                    },
                    menubar: 'none'
                });
            </script>
        </div>



    <div class=" float-left w-25 col-md-3 alert-danger">
            <img class="img-fluid" src="image/mail-groupe.png" alt="">

        </div>
 </div>


@endsection
