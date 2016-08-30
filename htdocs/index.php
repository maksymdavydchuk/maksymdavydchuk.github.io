<?php
$string='12-12-2012';
$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacemant = 'year $3, month $2, day $1';
$result = preg_replace($pattern, $replacemant, $string);
echo $result;