@extends('layouts.main')

@section('title', 'MyTravel | Home')
    
@section('main-content')
    <section id="home" >
        <div class="container-sm  d-flex  w-75 h-100  p-5  flex-column justify-content-center align-items-center text-light">
            <h1 class="text-uppercase ">Plan. Book. Relax.</h1>
            <p class="lead">With our peace of mind flexible cancellation pleacies</p>
            <p class="lead">
                <a href="{{route('travels.index')}}" class="btn btn-lg btn-dark fw-bold  bg-dark">Learn more</a>
              </p>
        </div>
    </section>
@endsection