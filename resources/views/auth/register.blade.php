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
        <form action="{{ route('user.create') }}" method="POST" class="register_form">
            @csrf()

            <div class="input-name input">
                <input type="text" name="name" placeholder="Nome completo">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-name input">
                <input type="email" name="email" placeholder="Email">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-name input">
                <input type="text" name="cpf" class="cpf" placeholder="CPF">
                <i class="fa-solid fa-id-card"></i>
            </div>
            <div class="input-psw input">
                <input type="password" name="psw-signin" placeholder="Senha">
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
    </script>

@endsection
