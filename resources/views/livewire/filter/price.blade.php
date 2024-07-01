<div class="contenitoreOrdinamentoFiltri">
    <div class="contenitoreFiltroPerPrezzo mt-2 p-3">
        <div>
            <span>Prezzo</span>
        </div>
        <input type="range" class="form-range" id="customRange1" value={{$price->price}}>
        <div class="text-end">
            <span>max : {{$price->price}}</span>
        </div>
    </div>
    <select class="form-select mt-1">
        <option>EUR • €</option>
        <option>USD • US$</option>
    </select>    
    {{-- @foreach ($articles as $article)
        <p>{{$article->price}}</p>
    @endforeach --}}    
</div>
