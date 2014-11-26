<?php

	class Triples {

		public $line = NULL;

		public function __construct($line) {

			if (isset($line['integers'])) {

				$this->line = $line['integers'];

			}

		}

		protected function getArray() {

			return explode(" ", $this->line); // Split a string of integers by spaces to array.

		}


		protected function exponentialExpression() {

			$numbers = $this->getArray();

			array_walk(

				$numbers, 

				function (&$int, $key) {

				    $int = pow($int, 2); // Exponential expression each integers of array

				}

			);

			return $numbers;

		}


		public function countTriples() {

			$numbers = $this->exponentialExpression();

			$i=0;

			foreach ($numbers as $c) { // Get the "c" from [ a2 + b2 = c2 ]

	    		foreach ($numbers as $b) { // Get the "b" from [ a2 + b2 = c2 ]

	    			if ($b < $c) {

			    		foreach ($numbers as $a) { // Get the "a" from [ a2 + b2 = c2 ]

			    			if ($a < $b && $a + $b == $c) { // Detect triples

			    				$i++;
			    				
			    			}

			    		}

	    			}

	    		}

	    	}

	    	return $i;

		}

		public function encodeJSON() {

			$jsonoutput = array('result' => $this->countTriples());

			return json_encode($jsonoutput);

		}
	}


	$triples = new Triples($_GET);

	echo $triples->encodeJSON();

?>