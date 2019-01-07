<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	/*
	*	#Exam 1
	*	
	*	Create a function that swaps two variables without using a third or temporary variable
	*
	*	e.g. a=45, b=33
	*	result : a=33, b=45	
	*/

	/**
     * @param int Integer, int Integer
     * @return null
     */
	function swapVar($a,$b){
		//code here
		// ........

		echo 'A : '. $a . ' --- ' . 'B : ' . $b;
	}

	//test
	// echo 'Exam 1 <br/>';
	// $a = 45;
	// $b = 33;
	// swapVar($a,$b);
	// echo '<br/>*********************************************************************************<br/>';

/********************************************************************************************/

	/*
	*	#Exam 2
	*	
	*	Reverse a string without using Array or Php's string reverse (strrev)
	*
	*	e.g. str = 'hello'
	*	result : str = 'olleh'
	*/

	/**
     * @param string String
     * @return null
     */
	function revStr($str){
		$reversed = '';
		//code here
		// ........

		echo $reversed;
	}

	//test
	// echo 'Exam 2 <br/>';
	// $str = 'hello';
	// revStr($str);
	// echo '<br/>*********************************************************************************<br/>';


/********************************************************************************************/

	/*
	*	#Exam 3
	*	
	*	Reverse a number/integer without using Array
	*
	*	e.g. num = 12345
	*	result : num = 54321
	*/

	/**
     * @param int Integer
     * @return null
     */
	function revNum($num){
		$rev = '';
		//code here
		// ........

		echo $rev;
	}

	//test
	// echo 'Exam 3 <br/>';
	// $num = 123456;
	// revNum($num);
	// echo '<br/>*********************************************************************************<br/>';


/********************************************************************************************/

	/*
	*	#Exam 4
	*	
	*	Write a function that prints the numbers from 1 to 50.
	*	But for multiples of three print “Fizz” instead of the number and 
	*	for the multiples of five print “Buzz”. For numbers which are 
	*	multiples of both three and five print “FizzBuzz”
	*/

	function fizzBuzzGenerator(){
		//code here
	}

	//test
	// echo 'Exam 4 <br/>';
	//fizzBuzzGenerator();
	// echo '<br/>*********************************************************************************<br/>';
/********************************************************************************************/

	/*
	*	#Exam 5
	*	
	*	Implement all methods inside Faker class
	*	so that all methods inside the FakerTest class returns the desired output
	*/

	class FakerTest{
	    public function shouldCreateRandomText(){
	        $faker = new \Faker();
	        $result = $faker->letterify('???');
	        if( preg_match("/^[a-z][a-z][a-z]$/", $result) ){
	        	return $result;
	        }
	        return false;
	    }
	    public function shouldEmbedRandomLetterInText(){
	        $faker = new \Faker();
	        $result = $faker->letterify('Test?');
	        if( preg_match("/^Test[a-z]$/", $result) ){
	        	return $result;
	        }
	        return false;
	    }
	    public function shouldCreateRandomNumber(){
	        $faker = new \Faker();
	        $result = $faker->numerify('###');
	        if( preg_match("/^[0-9][0-9][0-9]$/", $result) ){
	        	return $result;
	        }
	        return false;
	    }
	    public function shouldEmbedRandomNumberInText(){
	        $faker = new \Faker();
	        $result = $faker->numerify('Test#');
	        if( preg_match("/^Test[0-9]$/", $result) ){
	        	return $result;
	        }
	        return false;
	    }
	    public function shouldEmbedRandomElementsInText(){
	        $faker = new \Faker();
	        $result = $faker->bothify('Test?#');
	        if( preg_match("/^Test[a-z][0-9]$/", $result) ){
	        	return $result;
	        }
	        return false;
	    }
	}

	class Faker{
		 /**
	     * @param  string $string
	     * @return string
	     */
		public function letterify($string){
			//code here
			return '';
		}
		/**
	     * @param  string $string
	     * @return string
	     */
	    public function numerify($string){
	    	//code here
	    	return '';
	    }
	    /**
	     * @param  string $string
	     * @return string
	     */
	    public function bothify($string){
	    	//code here
	        return '';
	    }
	}

	//test
	// $fakerTest = new FakerTest();
	// $shouldCreateRandomText = $fakerTest->shouldCreateRandomText();
	// $shouldEmbedRandomLetterInText = $fakerTest->shouldEmbedRandomLetterInText();
	// $shouldCreateRandomNumber = $fakerTest->shouldCreateRandomNumber();
	// $shouldEmbedRandomNumberInText = $fakerTest->shouldEmbedRandomNumberInText();
	// $shouldEmbedRandomElementsInText = $fakerTest->shouldEmbedRandomElementsInText();
	// uncomment and echo the above variables to test


/********************************************************************************************/

?>