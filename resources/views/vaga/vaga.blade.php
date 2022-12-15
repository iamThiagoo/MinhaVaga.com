@extends("layout.app")
@section("title", "Nome da Vaga")

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vaga.css') }}">
@endsection

@section('content')

    <main class="container vaga-container">
        <section>
            <div class="title-vaga">
                <h2>Vaga para Desenvolvedor Front-End React JS</h2>
                <div>
                    <p>Anunciada por <span>Empresa Genérica do Sul</span> há 1 hora atrás</p>
                    <p>Em Caxias do Sul, RS</p>
                </div>
            </div>

            <div class="details-vaga">
                <p><strong>Descrição completa da vaga</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit lacus id ex dignissim porttitor. Quisque libero odio, volutpat sed lobortis sit amet, ultrices et mi. Sed dictum, nisl quis vulputate rhoncus, tellus dui imperdiet nulla, nec volutpat magna ligula varius urna. Cras tortor lectus, condimentum eget nisl et, finibus pharetra lacus. Suspendisse magna risus, iaculis quis enim vitae, gravida rutrum lectus. Nullam luctus tincidunt commodo. Etiam consequat lorem eu dui viverra laoreet. Morbi cursus finibus dui. Nulla facilisi. Aenean facilisis rutrum nulla, in fermentum risus porttitor quis. Morbi vehicula maximus purus, ac interdum metus fermentum vel. Pellentesque in bibendum nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Integer id leo eu eros eleifend facilisis eu ac justo. Sed lacinia volutpat posuere. Nam quis nibh id felis pretium suscipit. Mauris a nibh quam. In lacinia non quam sit amet pharetra. Phasellus sit amet hendrerit nulla, eget commodo mi. Curabitur pellentesque justo et aliquam aliquet. Nam est turpis, consequat nec tellus vitae, dapibus ultricies lectus.</p>
                <p>Suspendisse eget dolor metus. Etiam in dui ut odio tempus rutrum. Quisque et tempor purus. Nam eleifend lectus interdum convallis sodales. Vestibulum malesuada, odio eu ullamcorper cursus, justo massa dapibus arcu, ac ullamcorper neque sapien vel orci. Sed in est suscipit, sollicitudin turpis eget, semper quam. Morbi tristique nunc sit amet rhoncus interdum.</p>
                <p>Fusce malesuada cursus massa a scelerisque. Cras finibus a lectus nec malesuada. Aenean suscipit, metus eu tincidunt maximus, nisi tortor molestie mauris, sit amet feugiat odio erat bibendum arcu. Fusce pulvinar rhoncus velit eu feugiat. Donec sed feugiat felis, id facilisis massa. Cras tincidunt sed ipsum et gravida. Vivamus in nibh in nibh sollicitudin bibendum. In nulla leo, venenatis ut varius at, laoreet sed lectus.</p>
                <p>Sed gravida lacus lacus, non ultricies ipsum consectetur ut. Nunc et sapien et sapien gravida congue vulputate in nunc. Duis vestibulum congue magna, volutpat posuere ex laoreet et. Vestibulum at nisl elit. Aliquam tempor, purus et dignissim sollicitudin, arcu nisl viverra turpis, non pulvinar urna sem nec eros. Integer sollicitudin sem et diam fermentum, at ullamcorper magna ultrices. Curabitur gravida, odio vitae posuere elementum, nulla leo bibendum odio, et suscipit nibh erat posuere justo. Phasellus ac rutrum tellus. Donec eu tellus interdum, rhoncus libero sit amet, ultricies lectus. Donec arcu nisl, ultrices id ullamcorper et, bibendum ac nibh. Nullam quis leo nunc. Quisque metus odio, tincidunt sit amet nisl vel, malesuada finibus elit. Curabitur et varius augue. In bibendum ligula eget felis rhoncus suscipit. Ut sit amet iaculis libero, eget blandit sapien. Fusce nec sapien pharetra, lobortis tortor non, luctus lorem.</p>
            </div>
        </section>
    </main>

@endsection

@section('script')
@endsection
