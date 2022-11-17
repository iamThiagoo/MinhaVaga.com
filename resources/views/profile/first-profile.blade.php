@extends("layout.app")
@section("title", "Home")

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')

    <main class="container">
        <section class="my-4">
            <h2 class="text-center">Monte o seu perfil</h2>
            <form class="profile-form d-flex justify-content-center align-items-center flex-column">
                <div class="my-3">
                    <img class="user-photo" src="{{ asset('/images/static/user.png') }}" width="150px">
                    <div style="position: relative; z-index: 1000; top: -80px">
                        <p class="text-center">Teste</p>
                    </div>
                </div>
                <div>
                    <textarea placeholder="Adicione uma bio para o seu perfil...."></textarea>
                </div>
                <button type="submit">Criar conta <i class="fa-solid fa-right-to-bracket"></i> </button>
            </form>
        </section>
    </main>

@endsection

@section('script')

    <script>
        $('.user-photo').hover( function() {



        });

    </script>

@endsection