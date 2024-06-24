<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img src="/storage/logo60px.png" alt="logo">
    </a>

    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ms-3 me-3">
          <a class="nav-link fs-5" href="{{route('welcome')}}">
            <i class="bi bi-house"></i>
            Homepage
          </a>
        </li>
        <li class="nav-item ms-3 me-3">
          <a class="nav-link fs-5" href="{{route('article.index')}}">
            <i class="bi bi-bag"></i>
            Articoli</a>
        </li>
        <li class="nav-item dropdown ms-3 me-3">
          <a href="#" role="button" data-bs-toggle="dropdown" class="nav-link dropdown-toggle fs-5" aria-expanded="false">
            <i class="bi bi-tags">
              Categorie
            </i>            
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
                <li>
                  <a href="{{route('byCategory',['category'=>$category])}}" class="dropdown-item text-capitalize">
                    {{$category->name}}
                  </a>
                </li>
                @if (!$loop->last)
                    <hr class="dropdown-divider">
                @endif
            @endforeach
          </ul>
        </li>
      </ul>
      <!-- Left links -->
   
      <div class="d-flex align-items-center">
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
                  <span class="position-absolute top-0 start-100 traslate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisoredCount()}}</span>
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
        <a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href="https://github.com/Hackademy-Part-time-29/presto_3_code_eaters"
          role="button"
          ><i class="bi bi-github"></i></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->