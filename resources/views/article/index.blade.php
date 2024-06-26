<x-layout>
<div class="container-fluid">
    <div class="row">
        <x-filtri/>
        <div class="col-9">
            <div class="opzioneArticoli">
                <div class="btn-group dropstart">
                    <span data-bs-toggle="dropdown">
                        <i class="bi bi-gear-wide-connected"></i>
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">prova</a></li>
                    </ul>
                </div>
            </div>
            <div class="row height-custom justify-content-center align-items-center">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-4">
                        <x-card :article="$article" />
                    </div>
                @empty
                    <div class="col-12">
                        <h3 class="text-center">
                            Non sono ancora stati creati articoli
                        </h3>
                    </div>
                @endforelse
            </div>
        </div>        
    </div>
    
</div>
<div class="d-flex justify-content-center">
    <div>
        {{$articles->links()}}
    </div>
</div>
</x-layout>