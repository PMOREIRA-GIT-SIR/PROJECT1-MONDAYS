<?php
class CKeyGen {
	
	const NN = 5; 		// number of numbers
	const NS = 2;		// number of stars
	
	const MINN = 1;		// min number
	const MAXN = 50;		// max number
	
	const MINS = 1;		// min star
	const MAXX = 11;		// max star
	
	
	public $numbers;
	public $stars;
	
	// constructor
	public function __construct() {	
		echo "<p> number of numbers : ".CKeyGen::NN."</p>";
		$extractor = new CKeyExtractor(CKeyGen::NN, CKeyGen::MINN, CKeyGen::MAXN);
	}
	
}

class CKeyExtractor {
	
	public $key;
	public $_nel;
	public $_min;
	public $_max;
	
	public function __construct($nel,$min,$max) {
		$this->_nel = $nel;
		$this->_min = $min;
		$this->_max = $max;
		$this->extractor();
	}
	
	function extractor() {
		$bagofnumbers = array();
		$range = $this->_max - $this->_min + 1;
		for ($i=0; $i<$range; $i++) {
			$bagofnumbers[$i] = $i + $this->_min;
		}
		for ($k=0; $k<$this->_nel; $k++) {
			$idx = rand(0,count($bagofnumbers)-1);
			 $key[] = $bagofnumbers[$idx];
			 array_splice($bagofnumbers,$idx,1);
		}
		var_dump($key);

	}
	
}

$keygenerator = new CKeyGen();

?>