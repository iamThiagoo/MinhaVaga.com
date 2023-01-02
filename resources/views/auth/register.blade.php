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

        <form action="{{ route('app.user.create') }}" method="POST" class="register_form">
            @csrf()

            <div>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
                <div class="input-name input">
                    <input type="text" name="name" placeholder="Nome completo" value="{{ old('name') }}" required>
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>

            <div>
                @error('birthday')
                    <p>{{ $message }}</p>
                @enderror
                <div class="input-name input">
                    <input type="date" name="birthday" class="birthday" placeholder="Data de Nascimento" value="{{ old('birthday') }}" required>
                </div>
            </div>

            <div>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                <div class="input-name input">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>

            <div>
                @error('cpf')
                    <p>{{ $message }}</p>
                @enderror
                <div class="input-name input">
                    <input type="text" name="cpf" class="cpf" placeholder="CPF" value="{{ old('cpf') }}" required>
                    <i class="fa-solid fa-id-card"></i>
                </div>
            </div>

            <div>
                @error('telefone')
                    <p>{{ $message }}</p>
                @enderror
                <div class="input-name input">
                    <input type="text" name="telefone" class="telefone" placeholder="Telefone" value="{{ old('telefone') }}" required>
                    <i class="fas fa-phone"></i>
                </div>
            </div>

            <div>
                @error('estado')
                    <p>{{ $message }}</p>
                @enderror
                <select name="estado" id="estado" value="{{ old("estado") }}" required>
                    <option value="">Selecione o seu estado</option>
                    @foreach (App\Models\Estado::all()->sortBy("nome") as $estado)
                        <option name="{{ $estado->nome }}" value="{{ $estado->id }}">{{ $estado->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                @error('cidade')
                    <p>{{ $message }}</p>
                @enderror
                <select name="cidade" value="{{ old("cidade") }}" id="cidade" disabled required>
                    <option value="">Selecione a sua cidade</option>
                </select>
            </div>

            <div>
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
                <div class="input-psw input">
                    <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}" required>
                    <i class="fa-solid fa-eye-slash eye"></i>
                </div>
            </div>

            <p class="link-termos-register">Ao criar conta, você concorda com os nossos <a href="#">Termos de Uso</a>
            e <a href="#">Política de Privacidade</a></p>
            <button type="submit">Continuar <i class="fa-solid fa-right-to-bracket"></i> </button>
        </form>
    </section>

@endsection

@section("script")

    <script>
        $('.cpf').mask('999.999.999-99');
        $('.telefone').mask('(99) 99999-9999');

        $(document).ready(function () {

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

            $('#estado').change(function (event) {
                let selectCity = $('#cidade');
                let estadoID = $('#estado').val();

                $(selectCity).prop("disabled", false);

                $.ajax({
                    type: 'GET',
                    url:  '{{ url("/cidades/' + estadoID + '") }}',
                    data: {
                        estado_id: estadoID
                    },
                    dataType: 'json',
                    success: function(data){
                        $(data).each(function(index, value) {
                            selectCity.append('<option name="' + value.nome + '" value="'+ value.id +'"">' + value.nome + '</option>')
                        });
                    }
                })
            })
        });

    </script>

@endsection
