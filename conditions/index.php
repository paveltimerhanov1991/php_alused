<?php
// tingimuslaused
// if (tingimus);
// tegevused mis toimuvad kui tingimus kehtib
// else (
// muidu tegevused mis toimuvad kui tingimus ei kehti



echo '<h4>Tingimuslaused</h4>';


$arv = rand(0,100);

if($arv > 0 and $arv < 25) {
    // roheline
    echo '<p style="color: green;">'.$arv. '<br>';
} else if ($arv > 25 and $arv < 50){
    // punane
    echo '<p style="color: red;">'.$arv. '<br>';
}else if ($arv > 50 and $arv < 75){
    // sinine
    echo '<p style="color: blue;">'.$arv. '<br>';
}else if ($arv > 75 and $arv < 100){
    // lilla
    echo '<p style="color: purple;">'.$arv. '<br>';
}
