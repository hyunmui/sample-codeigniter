<?php

use PHPUnit\Framework\TestCase;

final class PostServiceTest extends TestCase
{

    public function __construct()
    {
        parent::__construct();
    }


    public function test_constructor_whenTest_thenSuccess(): void
    {
        $this->assertInstanceOf(PostService::class, new PostService());
    }

    public function test_getPosts_whenBasicParam_thenSuccess(): void
    {
        $this->assertEmpty(array());
    }
}
