<?php

namespace Core\Providers;

use Illuminate\Support\Facades\Schema;
use Core\Services\BookService;
use Core\Repositories\BookRepository;
use Core\Services\BookServiceContract;
use Illuminate\Support\ServiceProvider;
use Core\Repositories\BookRepositoryContract;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BookRepositoryContract::class, BookRepository::class);
        $this->app->bind(BookServiceContract::class, BookService::class);
    }
}