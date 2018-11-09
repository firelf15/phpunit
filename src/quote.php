<?php
namespace TDD;
class Quote {
    public function truncate(array $words = []) {
        return array_slice($words,1);
    }
}