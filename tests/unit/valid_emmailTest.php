<?php


class valid_emmailTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function test_valid_email()
    {
        $this->specify('it return nothing when email is valid', function()
        {
            expect( valid_email('123@abc.com') )->equals('');
        });

        $this->specify('it says Email is required when pass in empty value', function()
        {
            expect( valid_email('') )->equals('Email is required');
        });

        $this->specify('it says Invalid email format when email is not valid', function()
        {
            expect( valid_email('123') )->equals('Invalid email format');
        });
    }
}