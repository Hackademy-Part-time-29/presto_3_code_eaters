<x-layout>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 mb-3 w-25">
        @if ($article->images->count() > 0)
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($article->images as $key => $image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ $image->getUrl(300,300) }}" alt="Immagine {{$key+1}} dell'articolo {{$article->title}}" class="d-block w-100 rounded shadow">
                        </div>
                    @endforeach                    
                </div>
                @if ($article->images->count() > 1)
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        @else
            <div class="w-100">
                <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente" class="d-block w-100 rounded shadow">
            </div>
        @endif
    </div>

    <div class="col-12 col-md-6 mb-3 d-flex flex-column justify-content-center">
        <div class="text-center">
            <h2 class="display-5">
                <span class="fw-bold">{{ __('ui.title') }}:</span> {{ $article->title }}
            </h2>
            <h4 class="fw-bold">{{ __('ui.price') }}: {{ $article->price }} €</h4>
            <h5>{{ __('ui.description') }}:</h5>
            <p>{{ $article->description }}</p>
            <h5>{{ __('ui.category') }}:</h5>
            <p>{{ $article->category->name }}</p>
        </div>
    </div>
</div>

</x-layout>