<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_set_name_lowercase(): void
    {
        $post = new Post();
        $post->name = "Maxi Jayme";
        $this->assertEquals('maxi jayme', $post->name);
    }

    public function test_slug_name(): void
    {
        $post = new Post();
        $post->name = "Maxi Jayme";
        self::assertEquals('maxi-jayme', $post->slug);
    }
}
