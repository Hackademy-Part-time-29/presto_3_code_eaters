<div class="contenitoreOrdinamentoFiltri">
    <div class="contenitoreFiltroPerPrezzo">
        <div class="contenitoreFiltroPerPrezzoDettaglio">
            <div class="mb-2"><span>Prezzo</span></div>
            <canvas class="graficoFiltroPerPrezzo" id="myChart" width="900" height="300"></canvas>
            <input type="range" class="form-range" id="customRange1" value="{{$price}}" min="0" max="{{ $maxPrice }}" wire:model.change="price">
            <div class="text-end">
                <span>max : {{$maxPrice}}</span>
            </div>
        </div>
        <select class="form-select mt-1">
            <option>EUR • €</option>
            <option>USD • US$</option>
        </select>    
    </div>   
    <script>
        const data = {!! json_encode(['price' => $price, 'articles' => $articles, 'maxPrice' => $maxPrice]) !!};
    </script>
</div>
