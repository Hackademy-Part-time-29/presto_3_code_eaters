<x-h-t-m-l>
    <body>
        <x-navbar></x-navbar>
        @session('success')
            <div class="alert alert-success" rule="alert">
                {{session('success')}}
            </div>
        @endsession
        <div class="container">
            {{ $slot }}
        </div>
    <x-footer></x-footer>
    </body>
</x-h-t-m-l>



