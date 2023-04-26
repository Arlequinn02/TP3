<?php
use PHPUnit\Framework\TestCase;

require_once '..\src\Validateur.php';

final class ValidateurTest extends TestCase
{
    public function testcheck()
    {
        $v = new \app\Validateur();
        $this->assertTrue($v->check('roadbike'));
        $this->assertFalse($v->check('a'));
    }
}