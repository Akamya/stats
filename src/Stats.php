<?php
namespace Akamya\Stats\laragon\www\stats\src;

use Akamya\Stats\Functions\Average;

class Stats {
    public function average($liste): float 
    {
        return Average::calculate($liste);
    }
}



?>