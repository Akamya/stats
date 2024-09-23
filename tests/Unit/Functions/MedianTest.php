<?php

use Akamya\Stats\Functions\Median;

test("peut calculer la médiane d'une liste", function () {
    $liste = [0, 2, 4, 6, 8, 10];
    $result = Median::calculate($liste);

    expect($result)->toBe(5.0);
});
test("N'accepte pas de lettre", function () {
    $liste = [0, 2, 4, 6, 8, "a"];
    $result = Median::calculate($liste);

    expect($result)->toBe(5.0);
});
?>