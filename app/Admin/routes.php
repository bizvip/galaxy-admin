<?php

declare(strict_types=1);

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain'     => config('admin.route.domain'),
    'prefix'     => config('admin.route.prefix'),
    'middleware' => config('admin.route.middleware'),
], static function (Router $router) {
    $router->resource(name: 'dashboard', controller: \App\Admin\Controllers\HomeController::class);
    $router->resource(name: 'system/settings', controller: \App\Admin\Controllers\SettingController::class);
    $router->resource(name: 'videos/longer-success', controller: \App\Admin\Controllers\LongVideoController::class);
    $router->resource(name: 'videos/longer-transcode', controller: \App\Admin\Controllers\LongVideoController::class);
    $router->resource(name: 'videos/longer-uploads', controller: \App\Admin\Controllers\LongVideoUploadLogController::class);
    $router->resource(name: 'film/actors', controller: \App\Admin\Controllers\ActorController::class);
    $router->resource(name: 'film/categories', controller: \App\Admin\Controllers\CategoryController::class);
    $router->resource(name: 'film/plot', controller: \App\Admin\Controllers\PlotController::class);
});
