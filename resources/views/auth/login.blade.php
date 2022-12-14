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

            <form action="{{ route('app.login') }}" method="POST" class="signin_form">
                @csrf
                <div class="input-name input">
                    <input type="text" name="email" placeholder="Usuário ou email" value="{{ old('email') }}" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-psw input">
                    <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}" required>
                    <i class="fa-solid fa-eye-slash eye"></i>
                </div>
                <!-- <div class="checkbox mt-3 mb-2 d-flex align-items-center gap-2">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember-me">
                        Lembrar de mim
                    </label>
                </div> -->
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
