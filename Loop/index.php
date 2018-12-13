<?php
header('refresh: 1');
/**
 * Created by PhpStorm.
 * User: pavel.timerhanov
 * Date: 13.12.2018
 * Time: 16:21
 */

// for
/*
 * for($jm = alg; $jm < lopp; $jm++) {
 *      tegevused, mis sooritatkse nii kaua kui tsükli $jm väärtus on väiksem kui lõppväärtus

*/



echo '<h4>Tsüklid -for</h4>';
$varv = ' ';
for($arv = 1; $arv <=10; $arv++){
    if($arv % 2 == 0){
        $varv = 'green';
    }else {
        $varv = 'red';
    }
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}

echo '<hr>';

echo '<h4>Tsüklid -for</h4>';
echo '<table>';
for($rida = 1; $rida <=5; $rida++){
    echo '<tr>';
        for ($veerg = 1; $veerg <= 5; $veerg++) {
            $varv = '#';
            for($kord = 1; $kord <= 6; $kord++){
                $varv = $varv.dechex(rand(0,15));
            }
            echo '<td style="background: ' .$varv. '">';
            echo '&nbsp;';
            echo '&nbsp;';
            echo '&nbsp;';
            echo '&nbsp;';
            echo '</td>';
        }
        echo '</tr>';
}
echo '</table>';