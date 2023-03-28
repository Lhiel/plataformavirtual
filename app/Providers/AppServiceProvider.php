<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Lesson;
use App\Observers\LessonObserver;

use App\Models\Section;
use App\Observers\SectionObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Lesson::observe(LessonObserver::class);
        
        Section::observe(SectionObserver::class);

        Blade::directive('routeIs', function ($expression) {
            return "<?php  if(Request::url() == route($expression )):    ?>";
        });

    }
}
