<?php

require_once'hitungan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(70,5);
echo "================================"."<br>";
echo "Perhitungan bilangan 70 dengan 5"."<br>";
echo "================================"."<br>";
echo "penjumlahan = ".$penjumlahan->get_penjumlahan()."<br>";
echo "pengurangan =  ".$penjumlahan->get_pengurangan()."<br>";
echo "perkalian =  ".$penjumlahan->get_perkalian()."<br>";
echo "pembagian =  ".$penjumlahan->get_pembagian()."<br>";

  ?>