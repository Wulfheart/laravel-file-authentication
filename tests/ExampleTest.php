<?php

namespace Wulfheart\LaravelFileAuthentication\Tests;

use Orchestra\Testbench\TestCase;
use Wulfheart\LaravelFileAuthentication\LaravelFileAuthenticationServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelFileAuthenticationServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
