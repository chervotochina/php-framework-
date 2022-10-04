<?php

function debug($data, $die = false) {
    echo '<pre>'.print_r($data).'</pre>';
    if ($die) {
        die;
    }
}