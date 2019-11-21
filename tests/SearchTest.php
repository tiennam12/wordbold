<?php

namespace Nam\Boldword;

use PHPUnit\Framework\TestCase;

final class SearchTest extends TestCase
{
    public function testSearch() {
        $this->assertEquals(
            '<strong>day</strong> la <strong>doan</strong> van',
            Search::searchWord('day la doan van','day doan')
        );
    }
}
