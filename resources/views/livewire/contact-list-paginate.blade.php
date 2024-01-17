<div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2">
            
    </div>
    <div class="col-md-2 card m-1  border border-primary "style="backgrounde-color: rgb(112, 144, 120);" >
            
      <div class="card-body" >
        <h5 class="card-title"><i class="fa-duotone fa-envelopes"></i> Admin </h5>
        <p class="card-text"><h1><strong>{{$admine}}</strong></h1></p>
        
      </div>
      <a class="navbar-brand border border-danger text-center p-2 m-2" style="background-color:#F9A826;" href='{{route('listContactadminview')}}'>liste des Admins</a>
     </div>
     <div class=" col-md-2 card m-1 border border-secondary"style="backgrounde-color: rgb(120, 176, 160);" >
           
      <div class="card-body">
        <h5 class="card-title">Stagiaires</h5>
        <p class="card-text" ><h1><strong>{{$stagiaire}}</strong></h1></p>

      </div>
      <a class="navbar-brand border border-danger text-center p-2 m-2" style="background-color:#F9A826;" href='{{route('listContactstagiaireview')}}'>Liste des Stagiaire</a>
    </div>

    <div class="col-md-2 card m-1 border border-info" style="backgrounde-color: rgb(112, 144, 120);">
         
      <div class="card-body ">
        <h5 class="card-title">Membres</h5>
        <p class="card-text" ><h1><strong>{{$membre}}</strong></h1></p>
      
      </div>
      <a class="navbar-brand border border-danger text-center p-2 m-2" style="background-color:#F9A826;"  href="{{route('listContactview')}}" >Liste des Membres</a>
    </div>

    <div class="col-md-2 card m-1 border border-info"style="backgrounde-color: rgb(120, 176, 160);" >
      <div class="card-body ">
        <h5 class="card-title">Total</h5>
        <p class="card-text" ><h1><strong>{{$total}}</strong></h1></p>
      
      </div>
      <a class="navbar-brand border border-danger  text-center p-2 m-2" style="background-color:#F9A826;" href="{{route('listContactview')}}">Tous les contacts</a>
    </div> 


    <div class="col-md-2">
            
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2">
            
    </div>

    <div class="col-md-8">
      <div class="col-md-4 form-group">
        <label class="m-2" for="firstName">Search</label>
        <input type="text" class="form-control" name="firstName" placeholder="Entrer your name" wire:model.debounce.350='search' >
        <div>
          @if ($checkedContact)
              <button class="btn btn-primary p-2 m-2" wire:click='message()'>Nombre de contact selectionner({{ count($checkedContact)}})</button>
          @endif
         
          
        </div>
    </div>
      <table class="table table-striped table-light  ">
          <thead class="thead thead-info">
            <tr>
              <th scope="col">#</th>
                  <th scope="col">first Name</th>
                  <th scope="col">last Name</th>
                  <th scope="col">email</th>
                  <th scope="col">Phone</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          @if ($contact)
              
         
        @foreach($contact as $cont)
          <tbody>
            <tr>
              <td>  
                <input  type="checkbox"  name="membre" value="{{$cont->id}}" wire:model="checkedContact" >
                <a href = 'sendmail/{{ $cont->id }}'>
                <img class="rounded mx-auto d-block" style="width: 30px;height:30px;" src="{{asset('/image/mail.png')}}" alt="">
               </a>
              </td> 
              {{-- <td>{{$cont->id}}</td> --}}
              <td>{{$cont->firstName}}</td>
                  <td>{{$cont->lastName}}</td>
                  <td>{{$cont->email}}</td>
                  <td>{{$cont->phone}}</td>
              <td>
                <div class=" d-flexjustify-content-center ">
<<<<<<< HEAD
                  <button class="btn" wire:click="deleteContact({{$cont->id}})" style="background-color:#F9A826;">Delete</button>
                   <a class="btn btn-success ml-2" href='/update-contact/{{$cont->id }}' class="btn btn-info"  style="background-color:#80B3FF;">Update</a>
                  {{-- <button class="btn btn-success ml-2">Edit</button> --}}
=======
                  <a href="/delete-contact/{{ $cont->id }}" class="btn btn-danger">Delete</a>
                   <a class="btn btn-success ml-2" href='/update-contact/{{$cont->id }}' class="btn btn-info">Update</a>
>>>>>>> 275787c8541d1fca789d954318c27f449a5f76a5
                </div>
              </td> 
              
            </tr>
          </tbody>
          @endforeach
        </table>
        <div class="d-flex pb-0 pt-2 border m-3 justify-content-center">
        @if(count($contact))
          {{ $contact->links('livewire-pagination') }}
        @endif
        </div>
        @else
              <h1>no data</h1>
        @endif
      </div>
       </div>
    </div>

    <div class="col-md-2">
            
    </div>
  </div>

</div>

</div>
