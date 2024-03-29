<?php

namespace App\Providers;

use App\Http\Repositories\impl\BlogRepositoryImpl;
use App\Http\Repositories\Repository\BlogRepository;
use App\Http\Services\BlogService;
use App\Http\Services\Impl\BlogServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            BlogRepository::class,
            BlogRepositoryImpl::class);
        $this->app->singleton(BlogService::class,
            BlogServiceImpl::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
