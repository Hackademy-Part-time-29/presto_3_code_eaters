<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{session('errorMessage')}}
        </div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success text-center shadow rounded w-50">
            {{session('message')}}
        </div>
    @endif    
    <div class="height-custom justify-content-center align-items-center py-5 d-flex">
        <div class="containerCarousel">
            @forelse ($articles as $article)
                <div class="cardCarousel">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{__('ui.noarticle')}}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    {{-- <section class="py-5">
        <div class="container">
            <h2 class="mb-4">{{__('ui.chisiamo')}}</h2>
            <p>{{__('ui.info')}}</p>
        </div>
    </section> --}}
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4">{{__('ui.servizi')}}</h2>
            <div class="row ">
                <div class="col-md-4">
                    <h3>{{__('ui.servizio1')}}</h3>
                    <p>{{__('ui.servizio1description')}}
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>{{__('ui.servizio2')}}</h3>
                    <p>{{__('ui.servizio2description')}}</p>
                </div>
                <div class="col-md-4">
                    <h3>{{__('ui.servizio3')}}</h3>
                    <p>{{__('ui.servizio3description')}}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>