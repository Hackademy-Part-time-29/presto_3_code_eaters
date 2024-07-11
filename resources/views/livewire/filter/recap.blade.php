<div class="contenitoreFiltriRecap {{ $visible ? '' : 'd-none' }}">
    <div class="d-flex justify-content-center p-3">
        <h5>{{__('ui.Filtri attivi')}}</h5>
    </div> 
    <div class="filtriAttivi">
        @if ($price != $maxPrice)
            <p>{{__('ui.Prezzo massimo di')}} : {{$formattedPrice}}</p>
        @endif
    </div>   
</div>
