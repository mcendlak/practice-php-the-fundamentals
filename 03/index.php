<?php

$randomArray = createRandomArray();
print_r($randomArray);



// nie modyfikuj kodu poniżej!

// funkcję może deklarować poniżej wywołania
// ponieważ w JS występuje mechanizm tzw. hoisting-u

function createRandomArray() {
    $arr = [];
    $len = getRandomInteger(1, 10)
    for($i=0; $i<$len; $i++) {
        arr[] = getRandomInteger(1, 100);
    }

    return arr;
}

function getRandomInteger(min, max) {
    return round(Math.random() * (max-min) + min);
}