<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-4">Dettaglio dell'articolo: {{$article->title}}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/400" alt="" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/400" alt="" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/400" alt="" class="d-block w-100 rounded shadow">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-3 height-custom text-center">
            <h2 class="display-5">
                <span class="fw-bold">
                    Titolo: 
                </span>
                {{$article->title}}
            </h2>
            <div class="d-flex flex-column justify-content-center h-75">
                <h4 class="fw-bold">
                    Prezzo {{$article->price}} €
                </h4>
                <h5>
                    Descrizione:
                </h5>
                <p>{{$article->description}}</p>
            </div>
        </div>
    </div>
</x-layout>