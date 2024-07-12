<div class="row min-vh-75 position-relative">
    <div class="col-12 col-md-3">
        <div class="contenitoreOrdinamentoFiltri">
            <label for="order_by" class="form-label">{{__('ui.ordina')}}</label> 
            <select wire:model.change="orderBy" id="order_by" class="form-select">
                <option value="createASC">{{__('ui.menorecente')}}</option>
                <option value="createDESC">{{__('ui.piurecente')}}</option>
                <option value="priceDESC">{{__('ui.decrescente')}}</option>
                <option value="priceASC">{{__('ui.crescente')}}</option>
            </select>
        </div>
        <div class="contenitoreOrdinamentoFiltri">
            <div class="contenitoreFiltroPerPrezzo">
                <div class="contenitoreFiltroPerPrezzoDettaglio" wire:ignore>
                    <div class="mb-2"><span>{{__('ui.Prezzo')}}</span></div>
                    <canvas class="graficoFiltroPerPrezzo" id="myChart" width="400" height="100"></canvas>
                    <input type="range" class="form-range" id="customRange1" value="{{$price}}" min="0" max="{{ $maxPrice }}" wire:model.change="price">
                    <div class="text-end">
                        <span>max : {{$formattedPriceMax}}</span>
                    </div>
                </div>
                {{-- <select class="form-select mt-1">
                    <option>EUR • €</option>
                    <option>USD • US$</option>
                </select>     --}}
            </div>   
        </div>
    </div>
    <div class="col-12 col-md-9">
        <div class="card-container">
            <div class="d-flex flex-wrap">
                @forelse ($articles as $article)
                    <x-card :article="$article" />
                @empty
                    <div class="col-12">
                        <h3 class="text-center">
                            {{__('ui.noadd')}}
                        </h3>
                    </div>
                @endforelse
            </div>        
            <div class="d-flex justify-content-center">
                <div>
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="recapFiltri">
        <livewire:filter.recap/>
    </div>
    <script>
        const data = {!! json_encode(['price' => $price, 'articles' => $articles, 'maxPrice' => $maxPrice]) !!};
    </script>
</div>

