<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump'])
    ->not->toBeUsed();

test('No direct eloquent usage in controllers')
    ->expect('App\Models')
    ->not->toBeUsedIn('App\Http\Controllers');
