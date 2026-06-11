<?php
/**
 * Tests for BlockZone
 */

use PHPUnit\Framework\TestCase;
use Blockzone\Blockzone;

class BlockzoneTest extends TestCase {
    private Blockzone $instance;

    protected function setUp(): void {
        $this->instance = new Blockzone(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockzone::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
