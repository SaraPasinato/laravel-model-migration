@extends('layouts.main')

@section('title', 'MyTravel | Travels')

@section('main-content')
  <section id="travels">
      <div class="container-sm  mt-5">
          <h1> Travels Packages </h1>
          <div class="card-group my-5 gx-5">
             @forelse ($travels as $travel)
                  
             
            <div class="card">
{{--               <img src="https://picsum.photos/id/1018/400/200" class="card-img-top" alt="...">--}}     
         <div class="card-body">
                <h5 class="card-title">{{$travel['destination']}}</h5>
                <p class="card-text">{{$travel['description']}}</p>
                <p class="card-text">Giorni soggiorno: {{$travel['duration']}}</p>
                <p class="card-text">Prezzo: {{$travel['price']}} €</p>
                <p class="card-text"><small class="text-muted">Data inizio offerta: {{$travel['created_at']}}</small></p>
              </div>
            </div>
         {{--    <div class="card">
              <img src="https://picsum.photos/id/1040/400/200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Switzerland</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src="https://picsum.photos/id/122/400/200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Washinton D.C.</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div> --}}
            @empty
              <h1>non ci sono nuovi viaggi</h1>    
            @endforelse
          </div>
          
      </div>
  </section>
@endsection
