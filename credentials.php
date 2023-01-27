<?php

include_once 'Renewal.php';

function hello(){
    echo 'Hello';
}

function siema(){
    hello();
    echo 'siema';
}

function renewal(){
    return new Renewal();
}