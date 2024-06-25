<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void{

        Paginator::useBootstrap();

        if (Schema::hasTable('categories')){
            View::share('categories', Category::with('macroCategory')->orderBy('name')->get());
        }

        Blade::directive('formatPrice', function ($price) {
            return "<?php echo number_format($price, 0, '', '.') . ',00'; ?>";
        });
    }
}
