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
            <i class="bi bi-bag"></i>
            Articoli</a>
        </li>
      </ul>
   
      <div class="d-flex align-items-center">
        <form class="d-flex me-3" role="search" action="{{route('article.search')}}" method="GET">
          <div class="input-group">
              <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" id="basic-addon2">Search</button>
          </div>
        </form>
        @auth
            <form action="{{route('logout')}}" method="POST">
              @csrf
                <button data-mdb-ripple-init type="submit" class="btn btn-link px-3 me-2">
                  <i class="bi bi-door-open"></i> Logout
                </button>
            </form>            
            <a class="btn btn-primary me-1" href="{{route('create.article')}}"> Crea un nuovo annuncio</a>
            @if (Auth::user()->is_revisor)
              <li class="nav-item">
                <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25">
                  Zona revisore
                  <span class="position-absolute top-0 start-100 traslate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                </a>
              </li>
            @endif                
        @else
            <a href="{{route('login')}}" class="btn btn-primary me-3">
              <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
            <a href="{{route('register')}}" class="btn btn-primary me-3">
              <i class="bi bi-person-add"></i> Registrati
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