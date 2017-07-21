<?php

namespace Tests;

use Mockery;
use Mockery\MockInterface;

trait TestHelpers
{
    /**
     * Mock class and replace it in container.
     *
     * @param string $class
     *
     * @return MockInterface
     */
    protected function mockInstance($class)
    {
        return tap(Mockery::mock($class), function ($mock) use ($class) {
            $this->app->instance($class, $mock);
        });
    }
}
