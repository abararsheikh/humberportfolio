<?php


class FunctionsTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;

    protected function _after() {
      // run it 30 times to have some randomness
      for ($i = 0; $i < 30; $i++)
      {
        $this->testRandom_string();
      }
    }

  // test for random_string function in functions/strings.php
    public function testRandom_string()
    {
        $this->specify('default password length should be 8', function()
        {
          $this->assertEquals(8, strlen(random_string()));
        });

        $this->specify('password length should be 10', function()
        {
          $this->assertEquals(10, strlen(random_string(10)));
        });

        $this->specify('type of returned password should be string', function()
        {
          $this->assertTrue(is_string(random_string()));
        });

        $this->specify('there should be no special characters in password', function()
        {
          $specialChars = '/[!@#$%^&*()]/';
          $this->assertFalse(preg_match($specialChars, random_string()) == 1);
        });

//        // this should fail the test.
//        $this->specify('type of password should not be number', function()
//       {
//          $this->assertTrue(is_numeric(random_string()));
//        });
    }
}