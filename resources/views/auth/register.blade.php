@extends("layout.app")
@section("title", "Cadastro")

@section("css")
    <link rel="stylesheet" href="css/register.css">
@endsection

@section("content")

    <section class="register-content container">
        <div>
            <h2 class="text-center my-4">Cadastro</h2>
            <p class="text-center">Crie o seu perfil gratuitamente e se una a maior plataforma de empregos do Brasil</p>
        </div>

        @if ($errors->any())
            <div class="w-100 error-msg">
                <ul class="w-100 my-2">
                    @foreach ($errors->all() as $error)
                        <li class="text-center"> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.create') }}" method="POST" class="register_form">
            @csrf()

            <div class="input-name input">
                <input type="text" name="name" placeholder="Nome completo" {{ old('name') }} required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-name input">
                <input type="text" name="birthday" class="birthday" placeholder="Data de Nascimento" {{ old('birthday') }} required>
                <i class="fas fa-birthday-cake"></i>
            </div>
            <div class="input-name input">
                <input type="email" name="email" placeholder="Email" {{ old('email') }} required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-name input">
                <input type="text" name="cpf" class="cpf" placeholder="CPF" {{ old('cpf') }} required>
                <i class="fa-solid fa-id-card"></i>
            </div>
            <div class="input-name input">
                <input type="text" name="telefone" class="telefone" placeholder="Telefone" {{ old('telefone') }} required>
                <i class="fas fa-phone"></i>
            </div>
            <div class="input-psw input">
                <input type="password" name="password" placeholder="Senha" {{ old('password') }} required>
                <i class="fa-solid fa-lock"></i>
            </div>

            <p>Ao criar conta, você concorda com os nossos <a href="#">Termos de Uso</a>
            e <a href="#">Política de Privacidade</a></p>
            <button type="submit">Criar conta <i class="fa-solid fa-right-to-bracket"></i> </button>
        </form>
    </section>

@endsection

@section("script")

    <script>
        $('.cpf').mask('999.999.999-99');
        $('.telefone').mask('(99) 99999-9999');
        $('.birthday').mask('99/99/9999');
    </script>

@endsection
