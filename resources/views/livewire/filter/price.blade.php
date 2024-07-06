<div class="contenitoreOrdinamentoFiltri">
    <div class="contenitoreFiltroPerPrezzo">
        <div class="contenitoreFiltroPerPrezzoDettaglio">
            <div><span>Prezzo</span></div>
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
</div>
