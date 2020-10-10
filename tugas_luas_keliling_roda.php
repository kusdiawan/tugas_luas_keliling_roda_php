<?php
$diameter = 14;
$jari2 = ($diameter/2);
const phi = 22/7;

function pow_luas($jari2, $pangkat){
	return pow($jari2, $pangkat);
}

echo "<br> <h4>Tugas menghitung Luas dan keliling roda sepeda</h4>";
echo "<br> Jadi luas roda sepeda adalah : ", number_format(phi * pow_luas($jari2, 2) , 2);
echo "<br> Jadi keliling roda sepeda adalah : ", number_format(phi * $diameter , 2);
?>