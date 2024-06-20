<x-layout>
        <!-- Hero Section -->
        <header class="bg-primary text-white text-center py-5">
            <div class="container">
                <h1 class="display-4">Benvenuti</h1>
                <p class="lead">benvenuti benvenuti</p>
            </div>
        </header>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono trovati articoli
                    </h3>
                </div>
            @endforelse
            
        </div>
        <!-- About Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="mb-4">Chi Siamo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit.</p>
            </div>
        </section>
    
        <!-- Services Section -->
        <section class="bg-light py-5">
            <div class="container">
                <h2 class="mb-4">I Nostri Servizi</h2>
                <div class="row">
                    <div class="col-md-4">
                        <h3>Servizio 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Servizio 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Servizio 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                    </div>
                </div>
            </div>
        </section>
</x-layout>