
<div class="custom-card">
    <img src="https://picsum.photos/id/{{$article->id}}/200/200" alt="Immagine dell'articolo {{$article->title}}" class="custom-card-img">
    <div class="custom-card-body">
        <h4 class="custom-card-title">{{Str::limit($article->title, 30, '...')}}</h4>
        <h6 class="custom-card-subtitle">Prezzo: @formatPrice($article->price) €</h6>
        <div class="custom-card-actions">
            <a href="{{route('article.show',compact('article'))}}" class="custom-card-btn custom-card-btn-primary">Dettaglio</a>
            <a href="{{route('byCategory', ['category' => $article->category])}}" class="custom-card-btn custom-card-btn-outline-info">{{Str::limit($article->category->name, 50, '...')}}</a>
        </div>
    </div>
</div>