<?php

declare(strict_types=1);

use function Pest\Laravel\get;
use App\Http\Controllers\HomeController;
use Symfony\Component\HttpFoundation\Response;

it('responds correctly on the homepage', function (): void {
    get(
        uri: action(HomeController::class)
    )->assertStatus(
        status: Response::HTTP_OK
    );
});

it('ensure the correct view is loaded', function (): void {
    get(
        uri: action(HomeController::class)
    )->assertStatus(
        status: Response::HTTP_OK
    )->assertViewIs(
        value: 'welcome'
    );
});

it('ensure the view is passed the correct variables', function (): void {
    get(
        uri: action(HomeController::class)
    )->assertStatus(
        status: Response::HTTP_OK
    )->assertViewHas(
        key: ['message']
    );
});
