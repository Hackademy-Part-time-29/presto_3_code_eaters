<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-5">
                    {{__('ui.articlecategory')}}
                    <span class="fst-italic.fw-bold">
                        {{$category->name}}
                    </span>
                </h1>
            </div>
        </div>
        <div class="row">
            <x-filtri/>
            <div class="col-12 col-md-8 mw-100 p-0">
                <div class="d-flex flex-wrap">
                    @forelse ($articles as $article)
                        <x-card :article="$article" />
                    @empty
                        <div class="col-12 text-center">
                            <h3>{{__('ui.noarticlecategory')}}</h3>
                            @auth
                                <a href="{{route('create.article')}}" class="btn btn-dark my-5">{{__('ui.creaarticolobtn')}}</a>
                            @endauth
                        </div>
                    @endforelse
                </div>           
            </div>
        </div>
    </div>
</x-layout>