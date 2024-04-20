@extends('layouts.master')
@section('judul')
    Create New Data
@endsection

@section('content')
  <h2>New Data Form</h2>
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- Form untuk menambahkan cast baru --}}
    <form action="/cast" method="POST">
        @csrf {{-- CSRF token untuk keamanan form --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" required maxlength="255" class="form-control">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" id="age" name="age" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio:</label>
            <textarea id="bio" name="bio" required class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection