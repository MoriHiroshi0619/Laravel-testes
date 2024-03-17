@extends('Layout.main')

@section('title', 'Novo Usuario')

@section('content')



    <div class="container mt-5">

        @if( session('error') )
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Crie uma conta</h2>
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <div class="form-group m-1 ">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group m-1 ">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="form-group m-1 ">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="form-group mt-2 ">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
