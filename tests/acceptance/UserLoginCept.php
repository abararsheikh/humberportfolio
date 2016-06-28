<?php
$I = new AcceptanceTester($scenario);
$I->am('student');
$I->amOnPage('/');
$I->see('Welcome to Portfolio Tool');
$I->wantTo('Login');
$I->seeLink('Login');
$I->click('Login');
$I->see('Please Login');
//$I->submitForm('form', [
//    'email' => 'adam.potter@gmail.com',
//    'password' => '12345'
//]);
$I->fillField('email', 'adam.potter@gmail.com');
$I->fillField('password', '12345');
$I->click('submit');
$I->see('Adam Potter');
$I->seeLink('Logout');