<div>
    <div class="card-container">
        @forelse ($articles as $article)
            <x-card :article="$article" />
        @empty
            <div class="col-12">
                <h3 class="text-center">
                    Non sono ancora stati creati articoli
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
