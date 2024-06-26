<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if(Route::is('article.index'))
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><span>Articoli</span></li>
        @elseif (Route::is('byMacroCategory'))
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('article.index')}}">Articoli</a></li>
            @foreach ($categories as $category)
                @if ($category->macroCategory->id == request()->segment(2))
                    <li class="breadcrumb-item"><span>{{ $category->macroCategory->name }}</span></li>
                    @break
                @endif
            @endforeach            
        @elseif (Route::is('byCategory'))
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('article.index')}}">Articoli</a></li>
            @foreach ($categories as $category)
                @if ($category->id == request()->segment(2))
                    <li class="breadcrumb-item"><a href="/MacroCategory/{{$category->macroCategory->id}}">{{ $category->macroCategory->name }}</a></li>
                    <li class="breadcrumb-item"><span>{{ $category->name }}</span></li>
                    @break
                @endif
            @endforeach            
        @else

        @endif
    </ol>    
</nav>