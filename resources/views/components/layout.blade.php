<x-h-t-m-l>
    <body>
        <x-navbar/>
        @if(Route::is('welcome'))
            
        @else
            <x-breadcrumb/>
        @endif        
        @session('success')
            <div class="alert alert-success" rule="alert">
                {{session('success')}}
            </div>
        @endsession

        @auth
        
 <a class="btn btn-primary m-3 {{-- d-flex justify-content-center align-items-center --}}" href="{{route('create.article')}}"> Crea un nuovo annuncio "Da spostare"</a> 

        @endauth
        <div class="container">
            {{ $slot }}
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
    <x-new-footer/>
</x-h-t-m-l>



