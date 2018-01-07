<?php
require __DIR__ . '/../Ranges.php';
use PHPUnit\Framework\TestCase;

class RangesTests extends TestCase {
    public function test0() {
        $this->assertEquals([[1, 2]], Ranges::addUsed([[1, 1]], 2));
    }

    public function test1() {
        $this->assertEquals([[1, 3]], Ranges::addUsed([[2, 3]], 1));
    }
    
    public function test2() {
        $this->assertEquals([[1, 1], [3, 4]], Ranges::addUsed([[3, 4]], 1));
    }
    
    public function test3() {
        $this->assertEquals([[1, 2], [4, 4]], Ranges::addUsed([[1, 2]], 4));
    }
    
    public function test4() {
        $this->assertEquals([[1, 4]], Ranges::addUsed([[1, 2], [3, 4]], 4));
    }
    
    public function test5() {
        $this->assertEquals([[1, 5]], Ranges::addUsed([[1, 2], [4, 5]], 3));
    }

    public function test6() {
        $this->assertEquals([[1, 3]], Ranges::addUsed([[1, 2]], 3));
    }

    public function test7() {
        $this->assertEquals([[1, 2], [4, 4], [6, 7]], Ranges::addUsed([[1, 2], [6, 7]], 4));
    }

    public function test8() {
        $this->assertEquals([[1, 1]], Ranges::addUsed([], 1));
    }

    public function test9() {
        $this->assertEquals([[1, 3]], Ranges::addUsed([[1, 3]], 2));
    }

    public function test10() {
        $this->assertEquals([[1, 1]], Ranges::addUsed([[1, 1]], 1));
    }
}