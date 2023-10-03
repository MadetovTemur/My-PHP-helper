<?

class Devoloper {

	public $ism;
	public $tel;
	public $oyligi;

	function chiqar($ism, $tel, $oyligi) {
		$this->nomi = $ism;
		$this->tel = $tel;
		return $ism. $tel;
	}

}
$temur = new Devoloper;
echo $temur->chiqar("Temur", '88-059-17-35', '1123445');

class Fruit {
  public $name;
  public $color;

  private function __construct($name) {
    $this->name = $name;
  }
  private function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}
// // $apple = new Fruit("Apple");


// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }
// // $apple = new Fruit("Apple");
// // echo $apple->get_name();





# 01;
class Ishchi {
	public $nomi;
	public $firma_raqami;
	public $razryadi;
	public $staj;

	function creaters($ism, $firma_raqami, $razryadi, $staj) {
		$this->ism = $ism;
		$this->firma_raqami = $firma_raqami;
		$this->razryadi = $razryadi;
		$this->staj = $staj;

		if ($staj > 3) {
			return "ISMI: $ism, FIRMA_RAQAMI: $firma_raqami, RAZRYIADI: $razryadi, STAJ: $staj";
		} else {
			return "Malumotlar togri";
		}

	}

}
// $chikar = new Ishchi;
// echo $chikar->creaters("Temur", 213621783128, "A", 4)


# 02
class Jurnal {
	public $nomi;
	public $davriylik;
	public $korinishi;
	public $nashriyot;

	function creaters($nomi, $davriylik, $korinishi, $nashriyot) {
		$this->nomi = $nomi;
		$this->davriylik = $davriylik;
		$this->razryadi = $razryadi;
		$this->nashriyot = $nashriyot;
		
		if (strtolower($nomi) === 'darakchi') {
			return "ISMI: $nomi, davriylik: $davriylik, RAZRYIADI: $razryadi, nashriyot: $nashriyot";
		} else {
			return "Ena urinip koring";
		}
	}
}
// $chikar = new Jurnal;
// echo $chikar->creaters("Darakchi", '12.1.2025', "Z", 4);


# 07 
// class Korabl{
// 	public $nomi;
// 	public $suvsiljishi;
// public $turi;
// 	public $yoshi;

// 	function creaters($nomi, $suvsiljishi, $turi, $yoshi) {
// 		$this->nomi = $nomi;
// 		$this->suvsiljishi = $suvsiljishi;
// 		$this->turi = $turi;
// 		$this->nashriyot = $nashriyot;
// 		if ($yoshi > 5) {
// 			return "ISMI: $nomi, Suv-siljishi: $suvsiljishi, Turi: $turi, Yoshi: $yoshi";
// 		} else {
// 			return "Ena urinip koring";
// 		}
// 	}
// }
// $Korabl = new Korabl;
// echo $Korabl->creaters("ART_321", "10 m/s", "Esmines", 6);


class Shaxar {
	public $nomi;
	public $respublikasi;
	public $tumani;
	public $harp;

	function __construct() {
		$this->nomi = $nomi;
		$this->respublikasi = $respublikasi;
		$this->tumani = $tumani;
		$this->harp = $harp;

		return strpos($nomi, "k") ;

		
	}
}
// $Shaxar = new Shaxar("Krakolpokistin", "toshkent", "Esmines");

class Tasvir {
	public $nomi;
	public $tasvirchi;
	public $yili;
	public $galereya;

	function __construct($name, $tasvirchi, $yili, $galereya) {
    $this->name = $name;
    $this->tasvirchi = $tasvirchi;
    $this->yili = $yili;
    $this->galereya = $galereya;
  }

  protected function __destruct() {
    echo "NOMI: $this->name TASVIRCHI: $this->tasvirchi YILI: $this->yili GALIREYIY: $this->galereya";
  }
}
$apple = new Fruit("Asoschi", "Jems Alen", 1927, "Okisfort");
