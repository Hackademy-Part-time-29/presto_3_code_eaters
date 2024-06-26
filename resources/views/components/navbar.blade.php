<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/storage/logo60px.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ms-3 me-3 custom-dropdown">
          <span class="nav-link fs-5">
            <i class="bi bi-tags">Categorie</i>            
          </span>
          <div class="custom-dropdown-content">
            <div class="triangle"></div>
            <div class="menu">
              <div class="menu-column">
                @foreach ($categories->unique('macroCategory_id') as $category)
                  <div class="menu-item" data-category-id="{{ $category->macroCategory->id }}">
                    <a href="{{route('byMacroCategory',['macroCategory' => $category->macroCategory])}}" class="dropdown-item">
                      <p class="nomeMacroCategoria">{{$category->macroCategory->name}}</p>                    
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
            Articoli</a>
        </li>
      </ul>
  
      <div class="d-flex align-items-center">
        <form class="d-flex me-3" role="search" action="{{route('article.search')}}" method="GET">
          <div class="input-group">
              <input class="form-control me-2 filtroGenerale" type="search" name="query" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" id="basic-addon2">Search</button>
          </div>
        </form>
        @auth
            <form action="{{route('logout')}}" method="POST">
              @csrf
                <button data-mdb-ripple-init type="submit" class="buttonLog elemento1">
                  <i class="bi bi-door-open"></i> Logout
                </button>

            </form>            
            <a class="btn btn-primary me-1" href="{{route('create.article')}}"> Crea un nuovo annuncio</a>
            @if (Auth::user()->is_revisor)
              <li class="nav-item">
                <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25 elemento2">
                  Zona revisore

                  <span class="position-absolute top-0 start-100 traslate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                </a>
              </li>
            @endif                
        @else
        
            <a href="{{ route('login') }}" class="cssbuttons-io-button elemento1">
    Login
    <div class="icon">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
    </div>
</a>
<a href="{{route('register')}}" class="cssbuttons-io-button">
    Registrati
    <div class="icon">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
    </div>
</a>

        @endauth
      </div>
    </div>
  </div>
</nav>

<script>
  let baseUrl = "{{ url('/') }}";
  let categoriesData = @json($categories);
</script>