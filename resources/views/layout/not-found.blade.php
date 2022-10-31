@extends("layout.app")
@section("title", "Página não encontrada")

@section("css")

    <style>
        section{
            min-height: calc(100vh - 90px);
            display: grid;
            align-items: center;
        }
        .notfound-content{
            text-align: center;
        }
        .notfound-content h2{
            font-size: 30px;
        }
    </style>

@endsection

@section("content")

    <section class="container">
        <div class="notfound-content">
            <h2>Página não encontrada!</h2>
            <p><a href="{{ route('app.home') }}" class="link">Clique aqui</a> para ser redirecionado para a home </p>
            <img src="{{ asset('/images/static/robo_dancing.gif') }}">
        </div>
    </section>

@endsection
