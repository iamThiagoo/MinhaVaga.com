@extends("layout.app")
@section("title", "Home")

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')

    <main class="container">
        <section class="profile-container">
            <h2 class="text-center">Seja muito bem-vindo(a) <span> Thiago </span>, vamos criar o seu perfil!</h2>
            <p class="text-center mt-2 mb-4"> Nos conte as suas experiências, seus certificados e suas conquistas mais importantes no âmbito de trabalho </p>
                <form class="mt-3 profile-form d-flex justify-content-center" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-3 col-4 my-3">
                        <div class="img-profile d-flex justify-content-center">
                            <img class="user-photo" src="{{ asset('/images/static/user.png') }}" width="150px">
                            <p class="camera-img-icon d-none text-white text-center">
                                <i class="fa-solid fa-camera-retro"></i><br>
                                Adicionar foto
                            </p>
                            <label for="user-photo-input" id="user-photo-label"></label>
                            <input type="file" class="d-none" id="user-photo-input" name="user-photo" accept="image/*" onchange="loadFile(event)">
                        </div>
                        <div class="d-flex flex-column mt-3">
                            <div class="input-group flex-column">
                                <label>Nome Completo</label>
                                <input class="my-2" type="text" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="input-group my-3">
                                <label>Adicione uma bio para o seu perfil...</label>
                                <textarea class="my-2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-3 d-flex align-items-start flex-column">
                        <div class="input-group flex-column">
                            <label>Cargo Atual</label>
                            <input class="my-2" type="text" name="cargo">
                        </div>
                        <div class="input-group flex-column">
                            <label></label>
                            <input class="my-2" type="text" name="name">
                        </div>
                        <div class="input-group flex-column">
                            <label>Nome Completo</label>
                            <input class="my-2" type="text" name="name">
                        </div>
                        <div class="input-group flex-column">
                            <label>Nome Completo</label>
                            <input class="my-2" type="text" name="name">
                        </div>
                        <div class="input-group flex-column">
                            <label>Nome Completo</label>
                            <input class="my-2" type="text" name="name" >
                        </div>
                        <button class="mt-4" type="submit">Salvar perfil <i class="fa-solid fa-right-to-bracket"></i> </button>
                    </div>
                </form>
            <p class="text-center mt-5">Se você possui alguma dúvida/feedback nos envie através do email <a href="#">contato@minhavaga.com.br</a>, <br> vamos adorar recebê-la.</p>
        </section>
    </main>

@endsection

@section('script')

    <script>
        $(document).ready(function(){
            $('.img-profile').hover( function () {
                $('.camera-img-icon').removeClass('d-none');
                $('.user-photo').css('filter', 'brightness(0.3)');
            });

            $('.img-profile').on('mouseleave', function () {
                $('.camera-img-icon').addClass('d-none');
                $('.user-photo').css('filter', '');
            });

            $('.user-photo, .camera-img-icon').click (function (event) {
                $('#user-photo-label').click();
            });
        });

        function loadFile(event) {
            let reader = new FileReader();

            reader.onload = function(){
                var output = document.querySelector('.user-photo');
                output.src = reader.result;
            };

            reader.readAsDataURL(event.target.files[0]);
        }

    </script>

@endsection