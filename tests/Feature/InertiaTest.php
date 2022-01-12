<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Inertia\Testing\Assert;

class InertiaTest extends TestCase
{
    public function test_users_index_component()
    {
        $this->get('/users')
            ->assertInertia(function (Assert $page) {
                $page->component('Users/Index')
                    ->has('users')
                    ->has('title')
                    ->where('title', 'Users')
                    ->has('users.data')
                    ->has('users.links')
                ;
            });
    }
}
