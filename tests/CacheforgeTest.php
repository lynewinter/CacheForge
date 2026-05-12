<?php
/**
 * Tests for CacheForge
 */

use PHPUnit\Framework\TestCase;
use Cacheforge\Cacheforge;

class CacheforgeTest extends TestCase {
    private Cacheforge $instance;

    protected function setUp(): void {
        $this->instance = new Cacheforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cacheforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
