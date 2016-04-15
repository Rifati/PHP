<?php
class Telefoonlijst {
		
	private $lijst;
	
	public function __construct() {
		$this->lijst = array(
			new Telefoon ( "Samsung", "Galaxy S7", 599, "../telefoonplaatjes/SamsungGalaxyS7.png" ),
			new Telefoon ( "Samsung", "Galaxy S7 edge", 699, "../telefoonplaatjes/SamsungGalaxy-S7Edge.jpg" ),
			new Telefoon ( "Apple", " iPhone 5s ", 495, "../telefoonplaatjes/iphone5.png" ),
			new Telefoon ( "Apple", " iPhone 6s", 800, "../telefoonplaatjes/iphone6.jpg" ),
			new Telefoon ( "Apple", " iPhone SE", 700, "../telefoonplaatjes/IphoneSE.png" ),
			new Telefoon ( "Apple", " iPhone 5 Black Diamond", 10000000, "../telefoonplaatjes/blackdiamond.jpg" ),
			new Telefoon ( "Oneplus", " OnePlus One", 400, "../telefoonplaatjes/OnePlusOne.jpeg" ),
			new Telefoon ( "Oneplus", "Oneplus 2", 450, "../telefoonplaatjes/oneplustwo.jpg" ),
			new Telefoon ( "HUAWEI", " P9 Plus", 600, "../telefoonplaatjes/huaweip9.jpg" ),
			new Telefoon ( "HUAWEI", " Nexus 6P", 550, "../telefoonplaatjes/Nexus6P.jpg" ),
			new Telefoon ( "HTC", " One m9", 459, "../telefoonplaatjes/m9.jpg" )
		);
	}
	
	public function getLijst() {
		return $this->lijst;
	}
	
}
?>