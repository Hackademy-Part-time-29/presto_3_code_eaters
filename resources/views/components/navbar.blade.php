<div class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand custom-navbar-brand" href="/">
      <img src="{{ asset('/storage/img/logo60px.png') }}" alt="logo">
    </a>
    <div class="btn-conteiner scrollToTopBtn" >
      <a class="btn-content" href="#">
        <span class="btn-title"></span>
        <span class="icon-arrow">
          <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF">
              <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF">
              <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF">
            </g>
          </svg>
        </span> 
      </a>
    </div>
    @auth
      @if (!Route::is('create.article'))
        <div>
          <a class="BtnLayoutAdd iconaAggiungiArticoloNavbar hiddenProva" href="{{route('create.article')}}">
            <span class="svgContainer">
              <svg class="logoPlus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
              </svg>
              <span class="BG"></span>
            </span>
          </a>
        </div>
      @endif            
    @endauth
    <button class="navbar-toggler custom-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse custom-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ms-3 me-3 custom-dropdown">
          <span class="nav-link fs-5">
            <i class="bi bi-tags">{{__('ui.categories')}}</i>            
          </span>
          <div class="custom-dropdown-content responsive-dropdown">
            <div class="triangle"></div>
            <div class="menu">
              <div class="menu-column">
                @foreach ($categories->unique('macroCategory_id') as $category)
                  <div class="menu-item" data-category-id="{{ $category->macroCategory->id }}">
                    <a href="{{route('byMacroCategory',['macroCategory' => $category->macroCategory])}}" class="dropdown-item">
                      <p class="nomeMacroCategoria">{{__("ui." . $category->macroCategory->name)}}</p>                    
                    </a>                    
                  </div>
                @endforeach            
              </div>
              <div class="vertical-divider"></div>
              <div class="menu-column column-dettagli">
                <div class="menu-item-2"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item ms-3 me-3">
          <a class="nav-link fs-5" href="{{route('article.index')}}">
            <i class="bi bi-bag animate-bold"></i>
            {{__('ui.article')}}
          </a>
        </li>
        <div class="nav-item dropdown mr-3 lang-container">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            <img src="{{ asset('/storage/img/lang.png') }}" height="32px" width="32px" alt="">
          </a>
          <ul class="dropdown-menu">
            <div class="lang-container">
              <li><x-_locale lang="it"/></li>
              <li><x-_locale lang="en"/></li>
              <li><x-_locale lang="ro"/></li>
            </div>
          </ul>
        </div>
      </ul>
      <form class="d-flex me-3 custom-search" role="search" action="{{route('article.search')}}" method="GET">
        <div class="search">
          <input class="form-control me-2 filtroGenerale" type="text" name="query" placeholder="{{__('ui.search')}}" aria-label="Search">
          <button type="submit" id="basic-addon2">
            &#128270;
          </button>
        </div>
      </form>
      @auth
        <form action="{{route('logout')}}" method="POST" class="">
          @csrf
          <button data-mdb-ripple-init type="submit" class="buttonLog elemento1">
            <i class="bi bi-door-open"></i> {{__('ui.logout')}}
          </button>
        </form> 
        @if (!Route::is('create.article'))
          <a class="cssbuttons-io-button elemento1" href="{{route('create.article')}}"> {{__('ui.create')}}
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
              </svg>
            </div>
          </a>
        @endif
        @if (Auth::user()->is_revisor)
          <div class="nav-item custom-revisor">
            <a href="{{route('revisor.index')}}" class="notification elemento2 custom-revisor">
              <span>{{__('ui.revisor')}}</span>
              <span class="badge">{{\App\Models\Article::toBeRevisedCount()}}</span>
            </a>
          </div>
        @endif               
      @else
        <a href="{{ route('login') }}" class="cssbuttons-io-button elemento1 custom-login">{{__('ui.login')}}
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
            </svg>
          </div>
        </a>
        <a href="{{route('register')}}" class="cssbuttons-io-button custom-register">{{__('ui.register')}}
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zm136 16a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm211.3-43.3c-6.2-6.2-16.4-6.2-22.6 0L416 385.4l-28.7-28.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l40 40c6.2 6.2 16.4 6.2 22.6 0l72-72c6.2-6.2 6.2-16.4 0-22.6z"/>
            </svg>
          </div>
        </a>
      @endauth
    </div> 
  </div>
</div>
<script>
  let locale = "{{ App::currentLocale() }}"
  let baseUrl = "{{ url('/') }}";
  let categoriesData = @json($categories);
  document.getElementById("scrollToTopBtn").addEventListener("click", function() {
      window.scrollTo({
          top: 0,
          behavior: "smooth"
      });
  });  
</script>
{{-- <script>
    $(document).ready(function() {
        // Funzione per gestire lo scroll della finestra
        $(window).scroll(function() {
            // Controlla la posizione dello scroll rispetto al top della pagina
            if ($(this).scrollTop() > 0) {
                // Se lo scroll è inferiore a 0, mostra il pulsante
                $('#topButton').fadeIn();
            } else {
                // Altrimenti, nascondi il pulsante
                $('#topButton').fadeOut();
            }
        });

        // Gestione del click sul pulsante per tornare in cima alla pagina
        $('#topButton').click(function() {
            $('html, body').animate({scrollTop: 0}, 500);
            return false;
        });
    });
</script> --}}
