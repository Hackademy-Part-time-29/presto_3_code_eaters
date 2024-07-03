<x-layout>
    {{-- <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-4">Dettaglio dell'articolo: {{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around align-items-center mt-5 mb-5">
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
            loop="true">
            <swiper-slide><img src="https://picsum.photos/300/200" alt=""></swiper-slide>
            <swiper-slide><img src="https://picsum.photos/300/200" alt=""></swiper-slide>
            <swiper-slide><img src="https://picsum.photos/300/200" alt=""></swiper-slide>
            <swiper-slide><img src="https://picsum.photos/300/200" alt=""></swiper-slide>
            <swiper-slide><img src="https://picsum.photos/300/200" alt=""></swiper-slide>
            <swiper-slide><img src="https://picsum.photos/300/200" alt=""></swiper-slide>
        </swiper-container>
        <div class="col-12 col-md-6 mb-3 height-custom text-center">
            <h2 class="display-5">
                <span class="fw-bold">
                    Titolo: 
                </span>
                {{$article->title}}
            </h2>
            <div class="d-flex flex-column justify-content-center h-50 ">
                <h4 class="fw-bold">
                    Prezzo {{$article->price}} €
                </h4>
                <h5>
                    Descrizione:
                </h5>
                <p>{{$article->description}}</p>
            </div>
        </div>
    </div> --}}
    <div class="col-12 col-md-6 mb-3">
        @if ($article->images->count() > 0)
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($article->images as $key => $image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ $image->getUrl(300,300)}}" alt="Immagine {{$key+1}} dell'articolo {{$article->title}}" class="d-block w-100 rounded shadow">
                        </div>
                    @endforeach                    
                </div>
                @if ($article->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="span carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        @else
            <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
        @endif
            
    </div>
</x-layout>