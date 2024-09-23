<?php
namespace Akamya\Stats\Functions;

class StandardDeviation
{
    public static function calculate(array $numbers): float
    {
        // Si le tableau est vide, on retourne 0 pour éviter les erreurs
        if (count($numbers) === 0) {
            return 0;
        }

        // Calculer la moyenne
        $mean = array_sum($numbers) / count($numbers);

        // Calculer la somme des carrés des écarts à la moyenne
        $sumOfSquares = 0;
        foreach ($numbers as $number) {
            $sumOfSquares += pow($number - $mean, 2);
        }

        // Diviser la somme des carrés par le nombre d'éléments
        $variance = $sumOfSquares / count($numbers);

        // Retourner la racine carrée de la variance (écart-type)
        return sqrt($variance);
    }
}

?>