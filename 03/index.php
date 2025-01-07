<?php

$randomArray = createRandomArray();
print_r($randomArray);

echo "Pętla for start: \n";
for ($i = 0; $i < count($randomArray); $i++)
{
    echo $randomArray[$i] . "\n";
}
echo "Pętla for end \n";

echo "foreach start: \n";
foreach ($randomArray as $el)
{
    echo $el . "\n";
}
echo "foreach end: \n";

echo "ostatni element: " . $randomArray[count($randomArray) - 1];


// nie modyfikuj kodu poniżej!

// funkcję można definiować poniżej wywołania
// ponieważ w PHP funkcje są deklarowane podczas analizy kodu
// tj. przed jego uruchomieniem
// hoisting znany z JS nie występuje

function createRandomArray() {
    $arr = [];
    $len = getRandomInteger(1, 10);
    for($i=0; $i<$len; $i++) {
        $arr[] = getRandomInteger(1, 100);
    }

    return $arr;
}

function getRandomInteger($min, $max) {
    return rand($min, $max);
}