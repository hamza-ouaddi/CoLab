@extends('layout')
    
@section('content')

{{-- Search bar --}}
@include('partials._searchBar')

    <h2>{{$listing['title']}} </h2>
    <p>{{$listing['description']}} </p>
@endsection
    
