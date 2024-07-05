<x-layout>
<div class="container-fluid ">
    <div class="row position-relative">
        <x-filtri/>
        <div class="col-12 col-md-8 mw-100">
            <div class="opzioneArticoli">
                <div class="btn-group dropstart">
                    <span data-bs-toggle="dropdown">
                        {{-- <i class="bi bi-gear-wide-connected"></i> --}}
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">prova</a></li>
                    </ul>
                </div>
            </div>
            <livewire:card/>
        </div>        
    </div>
</div>
</x-layout>