@extends('layouts.main')

@section('title', 'MyTravel | Travels')

@section('main-content')
  <section id="travels">
      <div class="container-sm  mt-5">
          <h1> Travels Packages </h1>
          <div class="card-group my-5 gx-5">
             @forelse ($travels as $travel) 
               <div class="card">
                 <img src="{{$travel['url_path']}}" class="card-img-top" alt="...">  
                <div class="card-body">
                        <h5 class="card-title">{{$travel['destination']}}</h5>
                        <p class="card-text">{{$travel['description']}}</p>
                        <p class="card-text">Giorni soggiorno: {{$travel['duration']}}</p>
                        <p class="card-text">Prezzo: {{$travel['price']}} €</p>
                        <p class="card-text"><small class="text-muted">Data inizio offerta: {{$travel['created_at']}}</small></p>
                    </div>
                    </div>
            @empty
                  <h1>non ci sono nuovi viaggi</h1>    
            @endforelse
          </div>
          
      </div>
  </section>
@endsection
