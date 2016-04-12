 <?php
	
 require_once 'Exercise.php';

/**
 * A suite of tests for the Exercise class
 * 
 * @author Chintan Karia
 */
  

 class ExcerciseTest extends PHPUnit_Framework_TestCase

 {

     private $objExercise;
    

     /**
     * Initialises the Exercise object to be tested
     */
     public function setUp (){

         $this->objExercise = new Exercise();

     }    

     public function tearDown() {

         $this->objExercise = null;

     }    

     /**
     * Tests the convertPhoneNumber function to ensure the phoneNumber is in correct format.

      *@dataProvider provide_phone_numbers

      */

     public function testconvertPhoneNumber($phoneNumber, $expected) {

         $result = $this->objExercise->convertPhoneNumber($phoneNumber);
         $this->assertEquals($expected, $result);
     }

    

     public function provide_phone_numbers ()  {

         return array (

             array('1234567890', '(123) 456-7890'),
             array('123456789011', 'Please enter a valid 10 digit phone number.'),

         );
     }    

     /**
    * Tests the mergeQueryStrings function to ensure we get the merged array.

      *@dataProvider provide_url

      */   

     public function testmergeQueryStrings($str1, $str2, $expectedString) {

         $result = $this->objExercise->mergeQueryStrings($str1, $str2);

         $this->assertEquals($expectedString, $result);

     }

    

     public function provide_url () {

         return array(

             array(

                 'google.com?first_name=Chintan&last_name=Karia',
                 'yahoo.com?skill=PHP&page=Client',

                 array(

                     'first_name'    => 'Chintan',
                     'last_name'     => 'Karia',
                     'skill'         => 'PHP',
                     'page'          => 'Client',                    

                 ),

             )

         );
     }

 }