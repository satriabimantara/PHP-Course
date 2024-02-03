<?php

namespace Satriabimantara\BelajarPhpMvc;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = '/products/12345/categories/abcde';
        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";
        $results = preg_match($pattern, $path, $variables);
        self::assertEquals(1, $results);
        var_dump($variables);

        // Hapus data path pada array results awal
        array_shift($variables);

        var_dump($variables);
    }
}
