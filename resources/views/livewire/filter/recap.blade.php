<div class="contenitoreFiltriRecap {{ $visible ? '' : 'd-none' }}">
    <div class="d-flex justify-content-center p-3">
        <h5>Filtri attivi</h5>
    </div> 
    <div class="filtriAttivi">
        <p>{{$price != $maxPrice ? 'Prezzo massimo di : ' . $formattedPrice : '3'}}</p>
    </div>   
</div>
