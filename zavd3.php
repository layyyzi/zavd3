<?php
function world($world){
    $pattern = '/[0-9\p{P}\s]+/u';
    $dell= preg_replace($pattern, '', $world);

    $length = strlen($dell);
    $output = '';

    for ($i = 0; $i < $length; $i++) {
        if ($i % 2 == 0) {
            $output = strtoupper($dell[$i]);
            echo $output;
        } else {
            $output = strtolower($dell[$i]);
            echo $output;
        }
    }
}
world("wkmm --121 kmdwc 2ew 23233");


