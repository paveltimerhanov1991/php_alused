<?php
$kasutajad = array(); // tühi massiiv
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad,  'lucy');
$lisaKasutajad = array('mark', 'georg'); // andmetega massiiv
echo '<pre>';
print_r($kasutajad);
print_r($lisaKasutajad);
echo '</pre>';
//var_dump($kasutajad);

for($i = 0; $i < 3; $i++){
    echo $kasutajad[$i]. '<br>';
}

$kasutajadKokku = count($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i]. '<br>';
}

array_shift($kasutajad);
for ($i = 0;$i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}

$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
for ($i = 0; $i < count($uuedKasutajad); $i++) {
    echo $uuedKasutajad[$i].'<br>';
}