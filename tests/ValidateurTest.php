<?php
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

require_once 'src/Validateur.php';

final class ValidateurTest extends TestCase
{
    public function testcheck()
    {
        $this->assertTrue(false);
        $this->assertFalse(true);
    }
}