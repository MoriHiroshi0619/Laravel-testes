@extends('Layout.main')

@section('title', 'home')

@section('content')
    <div class="container mt-5">
        @if( session('msg') )
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif

        <h1>Home</h1>

        <button class="btn btn-outline-danger">
            <a href="{{ route('logout')  }}">Log out</a>
        </button>
    </div>
@endsection
