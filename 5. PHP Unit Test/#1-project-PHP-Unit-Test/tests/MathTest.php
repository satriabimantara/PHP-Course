<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testSumManual()
    {
        self::assertEquals(0, Math::sum([]));
        self::assertEquals(2, Math::sum([1, 1]));
        self::assertEquals(20, Math::sum([4, 4, 4, 4, 4]));
        self::assertEquals(2, Math::sum([0, 2]));
    }
    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $array, int $expected_value)
    {
        self::assertEquals($expected_value, Math::sum($array));
    }
    public static function mathSumData()
    {
        return [
            [[], 0],
            [[1, 1], 2],
            [[2, 2], 4],
            [[2, 2, 10], 14],
            [[2, 1, -1], 2]
        ];
    }
    /**
     *@testWith [[], 0]
     *          [[1, 1], 2]
     *          [[1, 112], 113]
     *          [[1, 10], 11]
     */

    public function testWith(array $array, int $expected)
    {
        self::assertEquals($expected, Math::sum($array));
    }
}
