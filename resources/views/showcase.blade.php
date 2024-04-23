
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>prova</h1>
        @foreach ($comics as $comic )
            <div class="col-2">
        <img :src="{{ $comic['thumb'] }}" alt="" />
        <p>{{ $comic['title'] }}</p>
      </div>
        @endforeach
      
    </div>
  </div>

@endsection