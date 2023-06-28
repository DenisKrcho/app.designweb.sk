<?php

declare(strict_types=1);

namespace App\DataObjects;

use Spatie\LaravelData\Data;

final class PostObject extends Data
{
    public function __construct(
        public string $title,
        public string $content,
        public bool $published,
    ) {}
}
