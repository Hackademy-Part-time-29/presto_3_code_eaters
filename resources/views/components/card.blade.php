<div class="containerCard">	
  <div class="product-details">
    <a href="{{route('article.show',compact('article'))}}"><h1>{{Str::limit($article->title, 25, '...')}}</h1></a>
    <p>{{Str::limit($article->description,50,'...')}}</p>
    <span class="price">{{__('ui.price:')}} @formatPrice($article->price) €</span>
    @if (Route::currentRouteName() != 'byCategory')
      <div>
        <a href="{{route('byCategory', ['category' => $article->category])}}" class="information">{{Str::limit($article->category->name, 20, '...')}}</a>
      </div>
    @else 
      <div class="pb-4">
      </div>
    @endif     
    <div class="buttonBuy">
      <div class="buttonBuy-wrapper">
        <span class="iconBuy">
          <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
          </svg>
        </span>
        <div class="textBuy">Acquista</div>
      </div>
    </div>
    
  </div>
  
  <div class="product-image">
    <img src="https://picsum.photos/id/{{$article->id}}/200/250" alt="Immagine dell'articolo {{$article->title}}" class="custom-card-img  w-100 imgCard">
    <div class="info">
      <h2> Description</h2>
      {{-- <h3 class="ps-2" style="font-size: 0.8rem">{{($article->description)}}</h3> --}}
      <ul>
        <li><strong>Height : </strong>5 Ft </li>
        <li><strong>Shade : </strong>Olive green</li>
        <li><strong>Decoration: </strong>balls and bells</li>
        <li><strong>Material: </strong>Eco-Friendly</li>
      </ul>
    </div>
  </div>
</div>

