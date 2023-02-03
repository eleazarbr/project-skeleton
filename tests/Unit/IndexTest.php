<?php

namespace Tests\Unit;

use Tests\TestCase;

class IndexTest extends TestCase
{
    public function testRenderIndexPage()
    {
        $response = $this->get(route('web.index'));
        $response->assertOk();
    }
}
