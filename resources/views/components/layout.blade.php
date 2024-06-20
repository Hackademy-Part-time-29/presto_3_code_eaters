<x-h-t-m-l>
    <body>
        <x-navbar></x-navbar>
        @session('success')
            <div class="alert alert-success" rule="alert">
                {{session('success')}}
            </div>
        @endsession

        @auth
        
    
        <a class="btn btn-primary m-3 d-flex justify-content-center align-items-center" href="{{route('create.article')}}"> Crea un nuovo annuncio</a>

        @endauth
        <div class="container">
            {{ $slot }}
        </div>
    <x-footer></x-footer>
    </body>
</x-h-t-m-l>



