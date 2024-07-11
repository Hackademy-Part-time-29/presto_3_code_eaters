<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if(Route::is('article.index'))
            <li class="breadcrumb-item"><a href="/">{{__('ui.home')}}</a></li>
            <li class="breadcrumb-item"><span>{{__('ui.article')}}</span></li>
        @elseif (Route::is('byMacroCategory'))
            <li class="breadcrumb-item"><a href="/">{{__('ui.home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('article.index')}}">{{__('ui.article')}}</a></li>
            @foreach ($categories as $category)
                @if ($category->macroCategory->id == request()->segment(2))
                    <li class="breadcrumb-item"><span>{{ __("ui." .  $category->macroCategory->name) }}</span></li>
                    @break
                @endif
            @endforeach            
        @elseif (Route::is('byCategory'))
            <li class="breadcrumb-item"><a href="/">{{__('ui.home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('article.index')}}">{{__('ui.article')}}</a></li>
            @foreach ($categories as $category)
                @if ($category->id == request()->segment(2))
                    <li class="breadcrumb-item"><a href="/MacroCategory/{{$category->macroCategory->id}}">{{ __("ui." .  $category->macroCategory->name) }}</a></li>
                    <li class="breadcrumb-item"><span>{{ __("ui." . $category->name) }}</span></li>
                    @break
                @endif
            @endforeach            
        @elseif (Route::is('create.article'))
            <li class="breadcrumb-item"><a href="/">{{__('ui.home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('article.index')}}">{{__('ui.article')}}</a></li>
            <li class="breadcrumb-item"><span>{{__('ui.creaarticolo')}}</span></li>
        @elseif (Route::is('login'))
            <li class="breadcrumb-item mt-5 pt-4"><a href="/">{{__('ui.home')}}</a></li>
            <li class="breadcrumb-item mt-5 pt-4"><span>{{__('ui.login')}}</span></li>
        @elseif (Route::is('register'))
            <li class="breadcrumb-item mt-5 pt-4"><a href="/">{{__('ui.home')}}</a></li>
            <li class="breadcrumb-item mt-5 pt-4"><span>{{__('ui.register')}}</span></li>
        @endif
    </ol> 
    <script type="text/javascript">
        window.translations = {
            home: "{{ __('ui.home') }}",
            login: "{{ __('ui.login') }}",
            register: "{{ __('ui.register') }}"
        };
    </script>   
</nav>