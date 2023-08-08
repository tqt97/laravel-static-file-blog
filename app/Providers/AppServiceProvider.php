<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;

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
    public function boot(): void
    {
        Collection::macro('paginate', function (int $perPage = 10, $page = null, array $options = []) {
            $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

            $paginator = new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $this->count(),
                $perPage,
                $page,
                $options
            );

            $paginator->setPath(request()->url());

            return $paginator;
        });

        Str::macro('readingMinutes', function ($subject, $wordsPerMinutes = 200) {
            $count = str(strip_tags($subject))->wordCount();
            $min = intval(ceil(Str::wordCount(strip_tags($subject)) / $wordsPerMinutes));

            $text = $min > 1 ? 'minutes' : 'minute';

            return $count .' characters with '. $min . ' ' . $text;
        });
    }
}
