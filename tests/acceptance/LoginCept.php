<?php 
$I = new AcceptanceTester($scenario);
$I->am('student');
$I->wantTo('Login');
$I->amOnPage('/');
$I->fillField('email', 'adam.potter@gmail.com');
$I->fillField('password', '12345');
$I->click('Login');
$I->see('Welcome : Adam');

