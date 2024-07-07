<x-h-t-m-l>
    <body>
        <x-navbar/>
        <header>
            <h1>Claim.it</h1>
            <p> {{__('ui.headerp')}}</p>
        </header>
        @if(Route::is('welcome'))
            
        @else
            <x-breadcrumb/>
        @endif        
        @session('success')
            <div class="alert alert-success text-center" rule="alert">
                {{session('success')}}
            </div>
        @endsession
        <div class="container mt-5 mw-100">
            <div class="row justify-content-center">
                {{ $slot }}
            </div>
        </div>  
        <x-footer/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
</x-h-t-m-l>



