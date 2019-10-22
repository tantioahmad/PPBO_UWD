<?php
//membuat class mobil
class motor
//membuat properti
private $merk;
private $harga;

//membuat method konstruktor
function __construct ($merk,$harga,$warna,$tipe){
	$this->merk=$merk;
	$this->harga=$harga;
	$this->warna=$warna;
	$this->tipe=$tipe;
}
function BacaMerk(){
	return $this->merk;
}
function BacaHarga(){
	return $this->harga;
}
function BacaWarna(){
	return $this->warna;
}
function BacaTipe(){
	return $this->tipe;
}
function __destruct(){
	echo "Merk dan Harga telah dihapus";
}
}
$motor = new motor{"Mio J",14000000,"Hitam","Yamaha");

echo "Merk Motor = ".$motor->BacaMerk()."<br>";
echo "Harga Motor = ".$motor->BacaHarga()."<br>";
echo "Warna Motor = ".$motor->BacaWarna()."<br>";
echo "Tipe Motor = ".$motor->BacaTipe()."<br>";
?>