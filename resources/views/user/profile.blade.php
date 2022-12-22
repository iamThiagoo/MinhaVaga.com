@extends("layout.app")
@section("title", "Home")

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')

    <main class="container mb-7">
        <section class="profile-container">
            <h2 class="text-center">Seja muito bem-vindo(a) <span> {{ $firstname }},</span> vamos criar o seu perfil!</h2>
            <p class="create-profile-text text-center mt-2 mb-4"> Nos conte as suas experiências, seus certificados e suas conquistas mais importantes no âmbito de trabalho </p>
                <form class="mt-3 profile-form d-flex justify-content-center" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5 col-sm-4 col-12 my-3">
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
                            <div class="input-group input-group-textarea my-3" id="textarea-group">
                                <label>Adicione uma bio para o seu perfil...</label>
                                <textarea class="my-2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-start flex-column about-user">
                        <div class="btn-add-group d-flex w-100 justify-content-between" data-bs-toggle="modal" data-bs-target="#experienceModal">
                            <p>Adicionar Experiência</p>
                            <p>+</p>
                        </div>
                        <div class="btn-add-group d-flex w-100 justify-content-between">
                            <p>Adicionar Formação Acadêmica</p>
                            <p>+</p>
                        </div>
                        <div class="btn-add-group d-flex w-100 justify-content-between">
                            <p>Adicionar Licenças ou Certificados</p>
                            <p>+</p>
                        </div>
                        <div class="btn-add-group d-flex w-100 justify-content-between">
                            <p>Adicionar Competências</p>
                            <p>+</p>
                        </div>
                        <div class="btn-add-group d-flex w-100 justify-content-between">
                            <p>Adicionar Idiomas</p>
                            <p>+</p>
                        </div>
                        <button class="mt-4" type="submit">Salvar perfil <i class="fa-solid fa-right-to-bracket"></i> </button>
                    </div>
                </form>
            <p class="text-center mt-5 support-text">Se você possui alguma dúvida/feedback nos envie através do email <a href="#">contato@minhavaga.com.br</a>, <br> vamos adorar recebê-la.</p>
        </section>
    </main>

    <div class="modal fade" id="experienceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar Experiência</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form >
                        <div class="input-group flex-column mb-4">
                            <label for="">Nome do cargo</label>
                            <input type="text">
                        </div>
                        <div class="input-group flex-column mb-4">
                            <label for="">Nome da empresa</label>
                            <input type="text">
                        </div>
                        <div class="input-group flex-column mb-4">
                            <label for="">Tipo da vaga</label>
                            <input type="text">
                        </div>
                        <div class="mb-4">
                            <div class="d-flex gap-3 date-experience">
                                <div class="input-group flex-column date-input">
                                    <label for="">Data Inicial</label>
                                    <input type="date">
                                </div>
                                <div class="input-group flex-column">
                                    <label for="">Data de Término</label>
                                    <input type="date">
                                </div>
                            </div>
                            <div class="mt-3" style="padding-left: 5px">
                                <input id="current-work" type="checkbox" name="">
                                <label for="current-work">Trabalho nesse cargo atualmente </label>
                            </div>
                        </div>
                        <div class="input-group input-group-textarea flex-column mt-3 mb-2">
                            <label for="">Função/Descrição do cargo</label>
                            <textarea></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn w-100 p-2 btn-primary rounded-pill mb-2">Salvar experiência</button>
                </div>
            </div>
        </div>
    </div>

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

            $('.user-photo, .camera-img-icon').click(function (event) {
                $('#user-photo-label').click();
            });

            if($(window).width() <= 768) {
                $('.camera-img-icon').removeClass('d-none');
                $('.user-photo').css('filter', 'brightness(0.3)');
            }
        });

        function loadFile(event) {
            let reader = new FileReader();

            reader.onload = function(){
                var output = document.querySelector('.user-photo');
                output.src = reader.result;
            };

            reader.readAsDataURL(event.target.files[0]);

            if($(window).width() <= 768) {
                $('.camera-img-icon').addClass('d-none');
                $('.user-photo').css('filter', '');
            }
        }

    </script>

@endsection
