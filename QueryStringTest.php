 <?php
	
 require_once 'QueryString.php';

/**
 * A suite of tests for the Exercise class
 * 
 * @author Chintan Karia
 */
  

 class QueryStringTest extends PHPUnit_Framework_TestCase

 {

     private $objQueryString;
    

     /**
     * Initialises the Exercise object to be tested
     */
     public function setUp (){

         $this->objQueryString = new Exercise();

     }    

     public function tearDown() {

         $this->objQueryString = null;

     }    

     
     /**
    * Tests the mergeQueryStrings function to ensure we get the merged array.

      *@dataProvider provide_url

      */   

     public function testmergeQueryStrings($str1, $str2, $expectedString) {

         $result = $this->objQueryString->mergeQueryStrings($str1, $str2);

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