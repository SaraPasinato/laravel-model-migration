<header class="d-flex justify-content-center py-3 bg-dark">
    <ul class="nav nav-pills ">
      <li class="nav-item"><a href="{{route('home')}}" class="nav-link {{request()->routeIs('home')? 'active': ' '}} " aria-current="page">Home</a></li>
      <li class="nav-item"><a href="{{route('travels.index')}}" class="nav-link  {{request()->routeIs('travels.index')? 'active': ' '}}">Travels</a></li>
      <li class="nav-item"><a href="#" class="nav-link disabled {{request()->routeIs('transport.index')? 'active': ' '}}">Transports</a></li>
      <li class="nav-item"><a href="#" class="nav-link disabled {{request()->routeIs('faq')? 'active': ' '}}">FAQs</a></li>
      <li class="nav-item"><a href="{{asset('contact')}}" class="nav-link {{request()->routeIs('contact')? 'active': ' '}}">Contact</a></li>
    </ul>
  </header>