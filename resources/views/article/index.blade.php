<x-layout>
<div class="container-fluid">
    <div class="row height-custom justify-content-center align-items-center text-center">
        <div class="col-3 contenitorePercorso">
            Percorso delle sottocartelle
        </div>
        <div class="col-9">
            <h1>
                Tutti gli articoli
            </h1>
            <img src="/storage/scelte veloci.png" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-3 contenitoreFiltri">
            <p>colonna per i filtri di ricerca</p> 
            <div class="contenitoreOrdinamento">
                <p>Ordinamento select</p>
            </div>     
            <div class="contenitoreFiltroPerPrezzo">
                <p>Diagramma prezzi con chart.js</p>
                <p>range sottostante</p>
                <p>select valuta</p>
            </div>    
        </div>
        <div class="col-9">
            <div class="row height-custom justify-content-center align-items-center py-5">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-4">
                        <x-card :article="$article" />
                    </div>
                @empty
                    <div class="col-12">
                        <h3 class="text-center">
                            Non sono ancora stati creati articoli
                        </h3>
                    </div>
                @endforelse
            </div>
        </div>        
    </div>
    
</div>
<div class="d-flex justify-content-center">
    <div>
        {{$articles->links()}}
    </div>
</div>
</x-layout>