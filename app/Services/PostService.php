<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\PostContract;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

final class PostService implements PostContract
{
    public function getAll(): Collection
    {
        return Post::query()->published()->get();
    }

    public function findById($id): Post
    {
        return Post::query()->published()->find($id);
    }
}
