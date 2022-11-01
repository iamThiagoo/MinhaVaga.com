<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        {{-- Meta --}}
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            @yield("meta")

        {{-- Title --}}
            <title>@yield("title") - MinhaVaga.com</title>

        {{-- Favicon --}}
            <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon" />

        {{-- CSS --}}
            <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
            @yield('css')

        {{-- Libraries --}}
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        {{-- Header --}}
            <header class="container-fluid justify-content-between w-100 my-1 d-flex align-items-center">

                <h1 translate="no" data-aos="flip-up">
                    <a href="/">
                        <svg version="1.1" viewBox="0 0 240 240" width="55px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><g fill="none" fill-rule="evenodd" id="suitcase" stroke="none" stroke-width="1"><g id="bounding-box"><polygon id="shape" points="0 0 240 0 240 240 0 240"/></g><path d="M200,80 L200,130 L135,130 L135,124 C135,119.665086 131.552162,116.135457 127.249179,116.003807 L127,116 L113,116 C108.581722,116 105,119.581722 105,124 L105,124 L105,130 L40,130 L40,80 L200,80 Z" fill="#8760996b" id="Combined-Shape"/><rect height="120" id="Rectangle" rx="15" stroke="#a20069" stroke-width="10" width="170" x="35" y="75"/><line id="Line-2-Copy" stroke="#a20069" stroke-linecap="square" stroke-width="10" x1="137" x2="202" y1="135" y2="135"/><rect height="29" id="button" rx="8" stroke="#a20069" stroke-width="10" width="20" x="110" y="121"/><line id="Line-2" stroke="#a20069" stroke-linecap="square" stroke-width="10" x1="40" x2="105" y1="135" y2="135"/><rect height="20" id="Rectangle" rx="8" stroke="#a20069" stroke-width="10" width="70" x="85" y="55"/></g></svg>
                        <span style="margin-top: 8px"> MinhaVaga.com </span>
                    </a>
                </h1>

                <div class="m-0 p-0 header-menu-actions">
                    <div class="search-btn">
                        <button class="d-flex justify-content-center">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="user-btn">
                        <button class="d-flex justify-content-center">
                            <i class="fa-solid fa-user"></i>
                        </button>
                    </div>
                    <div class="menu-btn">
                        <button class="d-flex justify-content-center">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>

                <div class="search-container-desktop">
                    <form action="#" method="POST">
                        <input type="text" id="search-form" placeholder="Pesquisar cargo, competência ou empresa...">
                        <button class="d-flex align-items-center" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <nav class="menu d-flex align-items-center" id="menu">
                    <ul>
                        <li><a href="{{ route('app.home') }}"> Início </a></li>
                        <li><a href="{{ route('app.help') }}"> Ajuda </a></li>
                        <li><a href="{{ route('app.login') }}"> Entrar </a></li>
                        <li><a href="#"> Empresas / Anunciar vaga </a></li>
                    </ul>
                </nav>

                <nav class="menu d-flex align-items-center" id="menu-mobile">
                    <div class="main-btn">
                        <a href="{{ route('app.register') }}"> Cadastre-se gratuitamente </a>
                        <a href="{{ route('app.login') }}"> Entrar </a>
                    </div>
                    <div class="menu-section">
                        <p>MinhaVaga.com</p>
                        <a href="{{ route('app.help') }}">Ajuda</a>
                        <a href="#">Ver Vagas</a>
                        <a href="#">Anunciar vaga</a>
                    </div>
                </nav>

                <div class="overlay"></div>
            </header>

        {{-- Content --}}
            @yield('content')

        {{-- Footer --}}
            <footer>
                <div class="container">
                    <div class="py-3 mb-3 d-flex justify-content-between align-items-center">
                        <a href="/" class="d-flex align-items-center justify-content-center">
                            <svg version="1.1" viewBox="0 0 240 240" width="50px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><g fill="none" fill-rule="evenodd" id="suitcase" stroke="none" stroke-width="1"><g id="bounding-box"><polygon id="shape" points="0 0 240 0 240 240 0 240"/></g><path d="M200,80 L200,130 L135,130 L135,124 C135,119.665086 131.552162,116.135457 127.249179,116.003807 L127,116 L113,116 C108.581722,116 105,119.581722 105,124 L105,124 L105,130 L40,130 L40,80 L200,80 Z" fill="#8760996b" id="Combined-Shape"/><rect height="120" id="Rectangle" rx="15" stroke="#a20069" stroke-width="10" width="170" x="35" y="75"/><line id="Line-2-Copy" stroke="#a20069" stroke-linecap="square" stroke-width="10" x1="137" x2="202" y1="135" y2="135"/><rect height="29" id="button" rx="8" stroke="#a20069" stroke-width="10" width="20" x="110" y="121"/><line id="Line-2" stroke="#a20069" stroke-linecap="square" stroke-width="10" x1="40" x2="105" y1="135" y2="135"/><rect height="20" id="Rectangle" rx="8" stroke="#a20069" stroke-width="10" width="70" x="85" y="55"/></g></svg>
                            <span style="color: #ccc; margin-top: 8px !important"> MinhaVaga.com </span>
                        </a>

                        <ul class="footer-social-links d-flex justify-content-center align-items-center gap-3">
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <ul class="m-0 p-0 d-flex justify-content-around align-items-center terms">
                        <li>
                            <a href="#">Termos de Uso</a>
                        </li>
                        <li>
                            <a href="#">Privacidade e Poltíca</a>
                        </li>
                        <li>
                            <a href="#">Política de Cookies</a>
                        </li>
                        <li>
                            <a href="#">Portal</a>
                        </li>
                        <li>
                            <a href="#">Ajuda</a>
                        </li>
                        <li>
                            <a href="#">Quem somos</a>
                        </li>
                        <li>
                            <a href="#">Fale conosco</a>
                        </li>
                        <li>
                            <p href="#">&copy; 2022 - MinhaVaga | Todos os direitos reservados.</p>
                        </li>
                    </ul>
                </div>
            </footer>

        {{-- Scripts --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();

                $(".menu-btn").on('click', function(e) {
                    $('#menu-mobile').toggleClass('menu-mobile-active');

                    if($('#menu-mobile').hasClass('menu-mobile-active')){
                        $('#menu-mobile').attr('style', 'display: flex !important;');
                        $('#menu-mobile').removeClass('align-items-center');
                        $('.overlay').css('display', 'block');
                    }
                });

                $(".closeMenu").on('click', function(e) {
                    $('.menu').toggleClass('menu-mobile-active');

                    if(!$('.menu').hasClass('menu-mobile-active')){
                        $('#menu').attr('style', 'display: none !important;');
                        $('#menu').addClass('align-items-center');
                    }
                });

                $(".overlay").on('click', function(e) {
                    if($('.menu').hasClass('menu-mobile-active')){
                        $('#menu-mobile').removeClass('menu-mobile-active');
                        $('#menu-mobile').hide();
                        $(".overlay").hide();
                    }
                });

            </script>

            @yield ('script')

    </body>
</html>
