<?php

namespace Tests;

use Mockery;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use TestHelpers;
    use CreatesApplication;

    protected function setUp() : void
    {
        parent::setUp();

        Mockery::getConfiguration()->allowMockingNonExistentMethods(false);
    }
}
