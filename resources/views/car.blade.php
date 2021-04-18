@extends('layouts.app')
@section('title', $car->title)

@section('content')
<h1>{{$car->title}}</h1>
<h3>{{$car->producer}}</h3>
<h3>{{$car->number_of_doors}}</h3>
<h3>{{$car->number_of_seats}}</h3>
@endsection