<?php
class NumbersTest extends PHPUnit\Framework\TestCase
{
  /**
   * @test Addition
   */
  public function additionWorksCorrectly()
  {
    /**
     * Given I have two numbers
     * If I pass that word to my multiplier
     * I get back the correct result
     */
     $first_number = 5;
     $second_number = 6;
     $expectedResult = 11;

     $numbers = new Numbers();
     $result = $numbers->addition($first_number, $second_number);

     $this->assertEquals(
        $expectedResult,
        $result,
        "Numbers multiplication did not work correctly."
     );
  }
  /**
   * @test Subtraction
   */
  public function subtractionWorksCorrectly()
  {
    /**
     * Given I have two numbers
     * If I pass that word to my multiplier
     * I get back the correct result
     */
     $first_number = 60;
     $second_number = 10;
     $expectedResult = 50;

     $numbers = new Numbers();
     $result = $numbers->subtraction($first_number, $second_number);

     $this->assertEquals(
        $expectedResult,
        $result,
        "Numbers multiplication did not work correctly."
     );
  }
  /**
   * @test Multiplication
   */
  public function multiplicationWorksCorrectly()
  {
    /**
     * Given I have two numbers
     * If I pass that word to my multiplier
     * I get back the correct result
     */
     $first_number = 5;
     $second_number = 6;
     $expectedResult = 30;

     $numbers = new Numbers();
     $result = $numbers->multiplication($first_number, $second_number);

     $this->assertEquals(
        $expectedResult,
        $result,
        "Numbers multiplication did not work correctly."
     );
  }
  /**
   * @test Division
   */
  public function divisionWorksCorrectly()
  {
    /**
     * Given I have two numbers
     * If I pass that word to my multiplier
     * I get back the correct result
     */
     $first_number = 60;
     $second_number = 10;
     $expectedResult = 6;

     $numbers = new Numbers();
     $result = $numbers->division($first_number, $second_number);

     $this->assertEquals(
        $expectedResult,
        $result,
        "Numbers multiplication did not work correctly."
     );
  }
}
