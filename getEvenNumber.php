<?php
$input_number = $argv[1];

if($input_number % 2 == 0) {
    echo $input_number.'は偶数である。'.PHP_EOL;
} else{
    echo $input_number.'は奇数である。'.PHP_EOL;
}
?>