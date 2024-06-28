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
            @if (Route::is('create.article'))
                
            @else
                <div class="left">
                    <a class="BtnLayoutAdd"  href="{{route('create.article')}}">
                        <span class="svgContainer">
                        <svg class="logoPlus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                        <span class="BG"></span>
                    </a>
                </div>
            @endif            
        @endauth
        <div class="container">
            {{ $slot }}
        </div>    
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
    <x-new-footer/>
</x-h-t-m-l>



