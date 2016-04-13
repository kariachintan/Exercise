 <?php
	
 require_once 'PhoneNumber.php';

/**
 * A suite of tests for the PhoneNumber class
 * 
 * @author Chintan Karia
 */
  

 class PhoneNumberTest extends PHPUnit_Framework_TestCase

 {

     private $objPhoneNumber;
    

     /**
     * Initialises the PhoneNumber object to be tested
     */
     public function setUp (){

         $this->objPhoneNumber = new PhoneNumber();

     }    

     public function tearDown() {

         $this->objPhoneNumber = null;

     }    

     /**
     * Tests the convertPhoneNumber function to ensure the phoneNumber is in correct format.

      *@dataProvider provide_phone_numbers

      */

     public function testconvertPhoneNumber($phoneNumber, $expected) {

         $result = $this->objPhoneNumber->convertPhoneNumber($phoneNumber);
         $this->assertEquals($expected, $result);
     }

    

     public function provide_phone_numbers ()  {

         return array (

             array('1234567890', '(123) 456-7890'),
             array('123456789011', 'Please enter a valid 10 digit phone number.'),
             array('421--323--1234', ' (421) 323-1234'),
             array('423242', 'Please enter a valid 10 digit phone number.'),
             array('', 'Please enter a valid 10 digit phone number.'),

         );
     }    
 }