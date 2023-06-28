<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\PostContract;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\View;

final class HomeController extends Controller
{
    public function __construct(
        private readonly PostContract $post
    ) {}

    public function __invoke(Request $request): ViewContract
    {
        return View::make(
            view: 'welcome',
            data: [
                'message' => 'Hello Pest 2!',
                'posts' => $this->post->getAll()
            ]
        );
    }
}
