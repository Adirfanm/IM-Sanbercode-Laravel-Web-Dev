@extends('layouts.master')

@section('judul')
    Bio for {{ $cast->name }}
@endsection

@section('content')
    <h2>Bio of {{ $cast->name }}</h2>
    <p>Age: {{ $cast->age }}</p>
    <p>Bio: {{ $cast->bio }}</p>
    <a href="/cast" class="btn btn-primary">Back to Cast Members</a>
@endsection