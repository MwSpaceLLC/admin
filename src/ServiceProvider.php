<?php

namespace MwSpace\Admin;

/**
 * @copyright 2021 | MwSpace llc, srl
 * @package mwspace/admin
 * @author Aleksandr Ivanovitch
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * This class was developed to connect PHP frameworks with the packlink pro
 * shipping system. This library is unofficial and uses the connection protocols
 * of the cms. No copyright infringement.
 * Released, developed and maintain by MwSpace llc, srl.
 *
 */

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use MwSpace\Admin\Middleware\Auth;
use MwSpace\Admin\Middleware\Guest;
use MwSpace\Admin\Exceptions\Handler;
use Illuminate\Support\ServiceProvider as MineServiceProvider;

class ServiceProvider extends MineServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws Handler
     */
    public function boot()
    {
        $this->checkRequirements();

        $this->registerHelpers();

        $this->registerMiddleware();

        $this->registerRoutes();

        $this->registerCommands();

        $this->registerMigrations();

        $this->registerPublishing();

        $this->registerLanguages();

        $this->registerViews();

        $this->registerComponents();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->configRuntime();

        $this->registerConfig();

        $this->registerStorageDriver();
    }

    /**
     * Check configuration system
     * @throws Handler
     */
    private function checkRequirements()
    {
        if (!$this->app->runningInConsole()) {

            // Test database connection
            try {
                DB::connection()->getPdo();
            } catch (\Exception $e) {
                throw new Handler("[sb connection] not configured, please set database");
            }

            // Test database tables
            try {
                DB::connection()->table('_admins')->exists();
            } catch (\Exception $e) {
                throw new Handler("[mwspace/admins tables] not configured, please run migrate");
            }

        }
    }

    /**
     * Register the helpers routes.
     *
     */
    private function registerHelpers()
    {
        //
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    private function registerMiddleware()
    {
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('admin.auth', Auth::class);
        $router->aliasMiddleware('admin.guest', Guest::class);
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/backend.php');
    }

    /**
     * Register the Artisan Commands
     */
    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                //
            ]);
        }
    }

    /**
     * Register the package's migrations.
     *
     * @return void
     */
    private function registerMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/migrations');
        }
    }

    /**
     * Register the view's package.
     *
     * @return void
     */
    private function registerViews()
    {
        $this->loadViewsFrom(
            __DIR__ . '/resources/views', 'admin'
        );
    }

    /**
     * Register the component's package.
     *
     * @return void
     */
    private function registerComponents()
    {
        $this->loadViewComponentsAs('admin', [
            //
        ]);
    }

    /**
     * Register the package's migrations.
     *
     * @return void
     */
    private function registerLanguages()
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'admin');
    }

    /**
     * set at runtime for package (Important)
     * es. package php run with queue jobs
     */
    private function configRuntime()
    {
        //
    }

    /**
     * registerConfig function (Important)
     */
    private function registerConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/app.php', 'admin'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/config/guard.php', 'auth.guards'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/config/provider.php', 'auth.providers'
        );
    }

    /**
     * Register the package storage driver.
     *
     * @return void
     */
    private function registerStorageDriver()
    {
        //
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    private function registerPublishing()
    {
        //
    }

}
