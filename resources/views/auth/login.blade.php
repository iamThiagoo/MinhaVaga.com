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

            <form action="{{ route('app.login') }}" method="POST" class="signin_form">
                @csrf
                <div class="inputs">
                    @error('email')
                        <p style="margin-top: -20px">{{ $message }}</p>
                    @enderror

                    @if(session('user_not_logged'))
                        <p style="margin-top: -20px">{{ session('user_not_logged') }}</p>
                    @endif
                    <div class="input-name input">
                        <input type="text" name="email" placeholder="Usuário ou email" value="{{ old('email') }}" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="inputs">
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                    <div class="input-psw input">
                        <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}" required>
                        <i class="fa-solid fa-eye-slash eye"></i>
                    </div>
                </div>
                <button type="submit">Entrar <i class="fa-solid fa-right-to-bracket"></i> </button>
            </form>
            <p>Esqueceu sua senha? <a href="#">Clique aqui</a></p>
            <p>Não possui uma conta? <a href="{{ route('app.register') }}">Cadastre-se aqui</a></p>
        </div>
    </section>

@endsection

@section('script')

    <script>

        $('.eye').on('click', function(event) {
            event.preventDefault();

            if($(this).hasClass('fa-eye-slash')){
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $('.input-psw input').prop('type', 'text');

            } else {
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $('.input-psw input').prop('type', 'password');
            }
        });

    </script>

@endsection
