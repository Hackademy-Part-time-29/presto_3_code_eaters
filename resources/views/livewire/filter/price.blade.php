<div class="contenitoreOrdinamentoFiltri">
    <div class="contenitoreFiltroPerPrezzo mt-2 p-3">
        <div><span>Prezzo</span></div>
        <input type="range" class="form-range" id="customRange1" min="0" max={{$price->price}} wire:model="price">
        <div class="text-end">
            <span>max : {{$price->price}}</span>
        </div>
    </div>
    <select class="form-select mt-1">
        <option>EUR • €</option>
        <option>USD • US$</option>
    </select>    
</div>
