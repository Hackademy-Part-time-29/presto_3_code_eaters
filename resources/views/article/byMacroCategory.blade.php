<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-5">
                    {{__('ui.articlemacrocategory')}}
                    <span class="fst-italic.fw-bold">
                        {{$macroCategory->name}}
                    </span>
                </h1>
            </div>
        </div>
        <div class="row">
            <x-filtri/>
            <div class="col-12 col-md-8 mw-100 p-0">
                <div class="d-flex flex-wrap">
                    @if(count($articles) > 0)
                        <livewire:card/>
                    @else
                        <div class="col-12 text-center">
                            <h3>{{__('ui.noarticlecategory')}}</h3>
                            @auth
                                <a href="{{ route('create.article') }}" class="btn btn-dark my-5">{{__('ui.creaarticolobtn')}}</a>
                            @endauth
                        </div>
                    @endif
                </div>           
            </div>
        </div>
    </div>
</x-layout>