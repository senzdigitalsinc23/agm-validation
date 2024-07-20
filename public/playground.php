<?php
use Core\Database;
use Illuminate\Support\Collection;

require_once __DIR__ . '/../vendor/autoload.php';

$numbers = new Collection([
    1,2,3,4,5,6,7,8,9
]);

$filtered = $numbers->filter(function ($num) {
    return $num >= 4;
});
