<div class="articleCard" id="container">	
    <div class="product-details">
      <a href="{{route('article.show',compact('article'))}}"><h1>{{Str::limit($article->title, 30, '...')}}</h1></a>
      <span class="price">{{$article->price}}€</span>
      <div>
        <a href="{{route('byCategory', ['category' => $article->category])}}" class="information">{{Str::limit($article->category->name, 20, '...')}}</a>
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

