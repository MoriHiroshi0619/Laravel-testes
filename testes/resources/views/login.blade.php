@extends('Layout.main')

@section('title', 'Login')

@section('content')
    <div class="container mt-5">

        @if( session('msg') )
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Faça Login para entrar</h2>
                <form>
                    @csrf
                    <div class="form-group m-1 ">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group m-1 ">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group m-1 ">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group mt-2 ">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
