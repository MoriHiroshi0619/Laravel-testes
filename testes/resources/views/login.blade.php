@extends('Layout.main')

@section('title', 'Login')

@section('content')
    <div class="container mt-5">

        @if( session('msg') )
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif
        @if( session('error') )
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @error('email')
            <div class="alert alert-warning" role="alert">
                {{  $message  }}
            </div>
        @enderror


        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Faça Login para entrar</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
                    <div>
                        <p>Ainda não tem conta ? <br> crie uma</p>
                        <button class="btn btn-success">
                            <a href="{{ route('register') }}" >Criar usuário</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
