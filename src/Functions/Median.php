<?php
namespace Akamya\Stats\Functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        // On trie les nombres dans l'ordre croissant
        sort($numbers);

        $count = count($numbers);
        $middle = floor(($count - 1) / 2);

        // Si le nombre d'éléments est impair, on retourne le nombre du milieu
        if ($count % 2 !== 0) {
            return $numbers[$middle];
        }

        // Si le nombre d'éléments est pair, on retourne la moyenne des deux éléments du milieu
        return ($numbers[$middle] + $numbers[$middle + 1]) / 2;
    }
}

?>