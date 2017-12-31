<?php

namespace CleaniqueCoders\TWBSFour\Tests;

use Illuminate\Support\ServiceProvider;

class PublishTest extends TestCase
{
    /** @test */
    public function has_publish_tag()
    {
        $list = preg_filter('/^/', '', ServiceProvider::publishableGroups());
        $this->assertTrue(in_array('twbs-four', $list));
    }
}
