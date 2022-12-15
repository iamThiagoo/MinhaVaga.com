@extends("layout.app")
@section("title", "Home")

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

    <section class="banner">
        <div class="banner-content container center">
            <div class="banner-text">
                <h2>Simplesmente a melhor para os candidatos</h2>
                <p>Vagas de trabalho para todo o Brasil 😉</p>
                <div class="search-inputs">
                    <h3>Qual vaga você está procurando? </h3>
                    <p>Ex: Desenvolvedor, Jovem Aprendiz, Analista...</p>
                    <form method="GET">
                        <input type="text" name="search-banner" id="search-banner" placeholder="Insira a vaga que procura..." required>
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Buscar vagas</button>
                    </form>
                </div>
            </div>
            <img src="{{ asset('/images/static/woman_with_phone.png') }}">
        </div>
    </section>

    <section class="last-ads container">
        <div class="content">
            <h2 >Últimas vagas anunciadas</h2>
            <p class="last-ads-p">Vagas onde e quando quiser!</p>
            <div class="my-3 gap-3 row d-flex card-container">

                @for($i = 0; $i < 8; $i++)
                    {{-- Card start --}}
                        <div class="card col-12">
                            <a href="#">
                                <div class="card-content">
                                    <div class="card-head">
                                        <h3> Desenvolvedor Full-Stack React Native </h3>
                                        <p> Empresa Genérica para esse projeto </p>
                                        <p> Caxias do Sul, RS </p>
                                    </div>

                                    <div class="card-body p-0 mb-2">
                                        <p> Desenvolver aplicações e automações em Node.js; Integrações com API's REST; Realizar a manutenção e melhoria constante;Colher feedback e trabalhar em melhorias para usuários; Escrever documentações e guias claros, precisos e funcionais; </p>
                                    </div>

                                    <div class="card-footer m-0 background-none">
                                        <p class="p-0 m-0"> Ativo há 2 dias </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    {{-- Card end --}}
                @endfor

            </div>
        </div>
    </section>

    <section class="about container">
        <div class="content row w-100">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 img-container">
                <img src="/images/static/vetor_home.svg">
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12 items-list">
                <ul>
                    <li class="mb-5">
                        <h2 class="mb-2">- Plataforma de emprego gratuita</h2>
                        <p>Funciona assim: as empresas contratam nossa plataforma para conduzir processos seletivos. Quem paga pelo serviço são elas, então você não precisa se preocupar.</p>
                    </li>
                    <li class="mb-5">
                        <h2 class="mb-2">- Vagas de emprego para todos os perfis</h2>
                        <p>Estamos em todo o Brasil, com oportunidades para diversas áreas. Além disso, não importa se é seu primeiro emprego ou se você já tem uma carreira sólida. Divulgamos vagas de trabalho para todos os níveis.</p>
                    </li>
                    <li class="mb-5">
                        <h2 class="mb-2">- Conteúdos para sua jornada profissional</h2>
                        <p>Não basta se candidatar às vagas, é preciso se preparar para toda a jornada: do currículo à entrevista de emprego. Por isso, conte com conteúdos para todos os momentos.</p>
                    </li>
                    <li class="mb-5">
                        <h2 class="mb-2">- Grandes empresas estão no MinhaVagas.com</h2>
                        <p>Mais de 2.000 empresas divulgam oportunidades de trabalho em nosso site de empregos.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="partners content my-5">
            <h3 class="text-center">Conheça os parceiros da MinhaVaga</h3>
            <p class="text-center">Mais de 2.000 empresas divulgam oportunidades de trabalho em nosso site de empregos. Veja alguns de nossos parceiros...</p>
            <div>
                <ul class="owl-carousel">
                    @for($i = 0; $i < 8; $i++)
                        <li class="item">
                            <img style="max-width: 250px" src="https://img.freepik.com/vetores-gratis/icone-do-logotipo-da-letra-b-moderno_487879-702.jpg?w=826&t=st=1666059723~exp=1666060323~hmac=f9488813c27c3c19db1c4c361b045ff1bd73e58189f41037bef2f3364fdea454">
                        </li>
                    @endfor
                </ul>
            </div>

            <div>
                <p class="text-center">Tenha suas vagas divulgadas automaticamente nos melhores indexadores de vagas online</p>
                <div class="row d-flex my-4 start-btn">
                    <div class="col-6 d-flex justify-content-end">
                        <a href="#" class="app-link-btn" id="begin-btn">Comece agora</a>
                    </div>
                    <div class="col-6 d-flex justify-content-start">
                        <a href="#" class="app-link-btn">Fale com a nossa equipe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $('.search-container-desktop').hide();

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:true
                }
            }
        })

    </script>
@endsection
