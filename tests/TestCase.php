<?php

namespace CleaniqueCoders\TWBSFour\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            CleaniqueCoders\TWBSFour\TWBSFourServiceProvider::class,
        ];
    }
}
