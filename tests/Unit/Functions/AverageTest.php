<?php

use Akamya\Stats\Functions\Average;

test("peux calculer la moyenne d'une liste", function () {
    $liste = [0,2,4,6,8,10];
    $result = Average::calculate($liste);

    expect(($result))->toBe(5.0);
});

test("N'accepte pas de lettre", function () {
    $liste = [0,2,4,6,8,"a"];
    $result = Average::calculate($liste);

    expect(($result))->toBe(5.0);
});

?>