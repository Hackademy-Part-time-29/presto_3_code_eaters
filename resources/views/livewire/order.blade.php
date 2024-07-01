<div class="contenitoreOrdinamentoFiltri">
    <label for="order_by" class="form-label">ORDINA PER</label> 
    <select wire:model.change="orderBy" id="order_by" class="form-select">
        <option value="createDESC">Recenti</option>
        <option value="priceDESC">Prezzo descrescente</option>
        <option value="priceASC">Prezzo crescente</option>
    </select>
</div>
