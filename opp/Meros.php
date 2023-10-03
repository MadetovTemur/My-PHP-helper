
<?php

class Oqutuvchi {
	public $ism;
	public $yosh;
	public $mosh;

	public function __construct($ism, $yosh, $mosh) {
		$this->ism = $ism;
		$this->yosh = $yosh;
		$this->mosh = $mosh;
	}

	public function __destruct() {
		if ($this->yosh > 20 and $this->mosh < 1000000) {
			echo "ism $this->ism, yosh $this->yosh, mosh $this->mosh";
		} else {
			echo "YOK";
		}
	}
}
// $oqu = new Oqutuvchi("Umidaxon", 25, 3000000);



# 11 
class Telefon {
	public $abonent_ism;
	public $raqam;
	public $manzil;
	public $turi;

	function __construct($abonent_ism, $raqam, $manzil, $turi) {
		$this->abonent_ism = $abonent_ism;
		$this->raqam = $raqam;
		$this->manzil = $manzil;
		$this->turi = $turi;
	}
	public function get_numbers() {
		for ($i=0; $i < strlen($this->raqam); $i++) { 
			if ($this->raqam[$i] == '9' and $this->raqam[$i + 1] == '3') {
				return true;
			}
		}
	}

	function __destruct() {
		$l = $this->get_numbers();
		if (strtr($this->get_numbers())== 'TRUE') {
			echo $this->abonent_ism;
		} else {
			echo  NULL;
		}
	}
}

$telefon = new Telefon("Temur", '938992481735', "Uzbekistan", "UzMobile");
echo $telefon->get_numbers();























































?>
