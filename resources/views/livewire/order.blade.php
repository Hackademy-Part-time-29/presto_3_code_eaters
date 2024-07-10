<div class="contenitoreOrdinamentoFiltri">
    <label for="order_by" class="form-label">{{__('ui.ordina')}}</label> 
    <select wire:model.change="orderBy" id="order_by" class="form-select">
        <option value="createASC">{{__('ui.piurecente')}}</option>
        <option value="createDESC">{{__('ui.menorecente')}}</option>
        <option value="priceDESC">{{__('ui.decrescente')}}</option>
        <option value="priceASC">{{__('ui.crescente')}}</option>
    </select>
</div>
