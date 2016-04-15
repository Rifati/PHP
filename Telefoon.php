<?php
class Telefoon {

	private $merk;
	private $type;
	private $prijs;
	private $fotoURL;

	public function __construct($merk, $type, $prijs, $fotoURL) {
		$this->merk = $merk;
		$this->type = $type;
		$this->prijs = $prijs;
		$this->fotoURL = $fotoURL;
	}

	public function getMerk() {
		return $this->merk;
	}

	public function getType() {
		return $this->type;
	}

	public function getPrijs() {
		return $this->prijs;
	}

	public function getFotoURL() {
		return $this->fotoURL;
	}

	public function setMerk($merk) {
		$this->merk = $merk;
	}
	public function setType($type) {
		$this->type = $type;
	}
	public function setPrijs($prijs) {
		$this->prijs = $prijs;
	}
	public function setFotoURL($fotoURL) {
		$this->fotoURL = $fotoURL;
	}

}
?>