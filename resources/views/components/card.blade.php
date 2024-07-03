{{-- <div class="custom-card"> --}}
    {{-- <img src="https://picsum.photos/id/{{$article->id}}/200/200" alt="Immagine dell'articolo {{$article->title}}" class="custom-card-img"> --}}
    {{-- <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" alt="Immagine dell'articolo {{$article->title}}" class="card-img-top"> --}}
    {{-- <div class="custom-card-body"> --}}
        {{-- <h4 class="custom-card-title">{{Str::limit($article->title, 30, '...')}}</h4> --}}
        {{-- <h6 class="custom-card-subtitle">Prezzo: @formatPrice($article->price) €</h6> --}}
        {{-- <div class="custom-card-actions"> --}}
            {{-- <a href="{{route('article.show',compact('article'))}}" class="custom-card-btn custom-card-btn-primary">Dettaglio</a> --}}
            {{-- <a href="{{route('byCategory', ['category' => $article->category])}}" class="custom-card-btn custom-card-btn-outline-info">{{Str::limit($article->category->name, 50, '...')}}</a> --}}
        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}
<div class="card mb-3 " style="max-width: 400px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://picsum.photos/id/{{$article->id}}/200/250" alt="Immagine dell'articolo {{$article->title}}" class="custom-card-img  w-100">
      </div>
      <div class="col-md-8">
        <div class="card-body h-100 d-flex justyfy-content-center flex-column align-items-around">
          <h5 class="card-title">{{Str::limit($article->title, 30, '...')}}</h5>
          <div>
            <a href="{{route('article.show',compact('article'))}}" class="btnCategory">Dettaglio</a>
            <a href="{{route('byCategory', ['category' => $article->category])}}" class="">{{Str::limit($article->category->name, 50, '...')}}</a>
          </div>
            <div class="position-absolute bottom-0 end-0 me-4 mb-2">
                <ul class="btnShop">
                    <li style="--i:#56CCF2;--j:#2F80ED;">
                        <span class="icon"> <i class="bi bi-cart-plus"></i></span>
                        <span class="title">aggiungi al carello</span>
                    </li>
                </ul>
            </div>
        </div>

      </div>
    </div>
  </div>