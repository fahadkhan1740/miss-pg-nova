<?php

namespace App\Providers;

use App\Nova\AboutUs;
use App\Nova\HomeBanner;
use App\Nova\KidsClub;
use App\Nova\Membership;
use App\Nova\NewsEvents;
use App\Nova\Service;
use App\Nova\User;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new CollapsibleResourceManager([
                'navigation' => [
                    TopLevelResource::make([
                        'label' => 'Home',
                        'resources' => [
                            AboutUs::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'label' => 'Services',
                        'resources' => [
                            Service::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'label' => 'Memberships',
                        'resources' => [
                            Membership::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'label' => 'Kids Club',
                        'resources' => [
                            KidsClub::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'label' => 'News & Events',
                        'resources' => [
                            NewsEvents::class,
                        ]
                    ]),
                ]
            ])
        ];
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Nova::sortResourcesBy(function ($resource) {
            return $resource::$priority ?? 99999;
        });
    }
}
