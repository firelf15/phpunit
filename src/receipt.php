<?php
namespace TDD;
class Receipt {
    public function total(array $things = []) {
        return array_sum($things);
    }
}