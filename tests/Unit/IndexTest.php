<?php

namespace Tests\Unit;

use Tests\TestCase;

class IndexTest extends TestCase
{
    public function testRenderIndexPage()
    {
        $testResponse = $this->get(route('web.index'));
        $testResponse->assertOk();
    }
}
