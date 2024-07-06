<div class="contenitoreOrdinamentoFiltri">
    <div class="contenitoreFiltroPerPrezzo">
        <div class="contenitoreFiltroPerPrezzoDettaglio">
            <div><span>Prezzo</span></div>
            <canvas class="graficoFiltroPerPrezzo" id="myChart" width="900" height="500"></canvas>
            <input type="range" class="form-range" id="customRange1" value="{{$price}}" min="0" max="{{ $maxPrice }}" wire:model.change="price">
            <div class="text-end">
                <span>max : {{$price}}</span>
            </div>
        </div>
        <select class="form-select mt-1">
            <option>EUR • €</option>
            <option>USD • US$</option>
        </select>    
    </div>   
    <script>
        const data = @json(['price' => $price, 'articles' => $articles]);
    </script>
</div>
