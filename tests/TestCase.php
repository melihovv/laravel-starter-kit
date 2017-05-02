<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Mockery;

abstract class TestCase extends BaseTestCase
{
    use TestHelpers;
    use CreatesApplication;
    use DisablesExceptionHandling;

    protected function setUp()
    {
        parent::setUp();

        if (method_exists($this, 'disableExceptionHandling')) {
            $this->disableExceptionHandling();
        }

        Mockery::getConfiguration()->allowMockingNonExistentMethods(false);
    }
}
