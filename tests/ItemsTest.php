<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class ItemsTest extends TestCase
{
    public function test_create_item(): void
    {
        $item = new \App\Entity\Items();
        $this->assertNotNull($item);
    }

    public function test_create_item_name(): void
    {
        $item = new \App\Entity\Items();
        $item->setName('test');
        $this->assertEquals('test', $item->getName());
    }
}
