<?php
function xrange($start, $limit, $step = 1) {
    for ($i = $start; $i <= $limit; $i += $step) {
        yield $i;
    }
}
 
echo 'Single digit odd numbers: ';
 
/*
 * Note that an array is never created or returned,
 * which saves memory.
 */
$a = xrange(1, 10000000, 2);
// var_dump($a);die();
foreach ($a as $number) {
    echo "$number ";
}
 
echo "\n";
?>