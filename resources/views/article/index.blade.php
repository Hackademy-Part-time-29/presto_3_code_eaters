<x-layout>
<div class="container-fluid">
    <div class="row">
        <x-filtri/>
        <div class="col-sm-12 col-md-9 ">
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