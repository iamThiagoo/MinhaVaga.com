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
            <p class="error-msg">Opss... O seu email ou senha estão incorretos!</p>
            <form action="#" method="POST" class="signin_form">
                @csrf()
                <div class="input-name input">
                    <input type="text" name="psw-signin" placeholder="Usuário ou email">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-psw input">
                    <input type="password" name="psw-signin" placeholder="Senha">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button type="submit">Entrar <i class="fa-solid fa-right-to-bracket"></i> </button>
            </form>
            <p>Esqueceu sua senha? <a href="#">Clique aqui</a></p>
            <p>Não possui uma conta? <a href="{{ route('app.register') }}">Cadastre-se aqui</a></p>
        </div>
    </section>

@endsection
