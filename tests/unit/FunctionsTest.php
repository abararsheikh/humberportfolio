<?php

class FunctionsTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;

    protected function _after() {
      // run it 30 times to have some randomness
      for ($i = 0; $i < 30; $i++)
      {
        $this->test_random_string();
      }
    }

  // test for random_string function in functions/strings.php
    public function test_random_string()
    {
        $this->specify('default password length should be 8', function()
        {
          expect( strlen(random_string()) )->equals(8);
        });

        $this->specify('password length is the same as value passed in', function()
        {
          expect( strlen(random_string(10)) )->equals(10);
        });

        $this->specify('type of returned password should be string', function()
        {
          expect( is_string(random_string()) )->true();
        });

        $this->specify('there should be no special characters in password', function()
        {
          $specialChars = '/[!@#$%^&*()]/';
          expect( preg_match($specialChars, random_string()) )->equals(0);
        });
    }
}