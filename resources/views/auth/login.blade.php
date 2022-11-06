@extends("layout.app")
@section("title", "Entrar")

@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section("content")

    <section class="signin-container">
        <div class="signin-content">
            <h2> Login </h2>
            <p> Simplesmente a maior plataforma de vagas de empregos do Brasil! </p>

            @if ($errors->any())
                <div class="w-100 error-msg">
                    <ul class="w-100 my-3">
                        @foreach ($errors->all() as $error)
                            <li class="text-center"> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="#" method="POST" class="signin_form">
                @csrf()
                <div class="input-name input">
                    <input type="text" name="email" placeholder="Usuário ou email" value="{{ old('email') }}" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-psw input">
                    <input type="password" name="psw" placeholder="Senha" value="{{ old('psw') }}" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button type="submit">Entrar <i class="fa-solid fa-right-to-bracket"></i> </button>
            </form>
            <p>Esqueceu sua senha? <a href="#">Clique aqui</a></p>
            <p>Não possui uma conta? <a href="{{ route('app.register') }}">Cadastre-se aqui</a></p>
        </div>
    </section>

@endsection
