<x-h-t-m-l>
    <body class="bg-light">
        <x-navbar/>
        @if(!Route::is('login') && !Route::is('register'))
            <header id="top" class="mb-5">
                <h1>Claim.it</h1>
                <p> {{__('ui.headerp')}}</p>
            </header>
        @endif
        @if(!Route::is('welcome'))
            <x-breadcrumb/>
        @endif        
        @session('success')
            <div class="alert alert-success text-center" rule="alert">
                {{session('success')}}
            </div>
        @endsession
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{ $slot }}
            </div>
        </div>  
        <x-footer/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
</x-h-t-m-l>



