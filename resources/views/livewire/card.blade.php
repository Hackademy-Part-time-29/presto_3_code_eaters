<div class="card-container">
    <div class="custom-card">
        @forelse ($articles as $article)
            {{-- @dd($article->category) --}}
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
