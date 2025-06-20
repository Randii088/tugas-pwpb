<?php
//yang tidak mengembalikan nilai
function melihat(){
    echo 'Ini adalah sebuah function';
}
melihat();
echo'<br>';

// yang mengembalikan nilai
function pengurangan($a,$b){
     $hasil = $a - $b;
     return $hasil;
}
echo (pengurangan(10,5));


 ?>