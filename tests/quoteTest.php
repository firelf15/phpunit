<?php
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Quote;
class QuoteTest extends TestCase {
    public function testTruncate() {
        $Quote = new Quote();
        $this->assertContains(
            'To boldly go',
            $Quote->truncate(["To boldly go", "where no one has gone before."]),
            'When slicing, the phrase should be "where no one has gone before."'
        );
    }
}