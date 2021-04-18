@extends('layouts.app')
@section('title', 'Cars')

@section('content')
  <h1>Cars</h1>
  <ul>

    @foreach($cars as $car)
      <li>{{$car->title}}</li>
    @endforeach
  </ul>
@endsection
