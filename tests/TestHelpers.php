<?php

namespace Tests;

use Mockery;
use Mockery\MockInterface;

trait TestHelpers
{
    /**
     * @param string $class
     *
     * @return MockInterface
     */
    protected function mock($class)
    {
        $mock = Mockery::mock($class);
        $this->app->instance($class, $mock);

        return $mock;
    }
}
