@extends('layout/main');

@section('content')

<main>
  <div class="container">
    @foreach ($vacanze as $vacanza)
      <div class="card">
        <h1>{{$vacanza['id']}}</h1>
        <h2>{{$vacanza['type']}}</h2>
        <h3>{{$vacanza['price']}}</h3>
        <h3>{{$vacanza['destination']}}</h3>
        <p>{{$vacanza['durata']}}</p>
        <p>{{$vacanza['trasporto']}}</p>
      </div>
    @endforeach
    
  </div>
</main>

@endsection